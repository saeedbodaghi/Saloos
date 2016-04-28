<?php
namespace lib\utility\telegram;

/** telegram **/
class tg
{
	/**
	 * this library get and send telegram messages
	 * v6.1
	 */
	public static $api_key     = null;
	public static $cmd         = null;
	public static $cmdFolder   = null;
	public static $saveLog     = true;
	public static $answer      = null;
	public static $hook        = null;
	public static $fill        = null;
	public static $defaultText = 'Undefined';
	public static $priority    =
	[
		'callback',
		'menu',
		'user',
		'simple',
		'conversation',
	];



	/**
	 * handle tg requests
	 * @return [type] [description]
	 */
	public static function run($_allowSample = false)
	{
		// run hook and save it on $hook value
		self::hook();

		// generate response from defined commands
		$ans    = self::generateResponse();
		$result = [];
		if(!$ans && $_allowSample)
		{
			$ans = self::generateResponse(true);
		}
		// if we have some answer send each answer seperated
		if(isset($ans[0]))
		{
			foreach ($ans as $key => $eachAns)
			{
				$result[] = self::sendResponse($eachAns);
			}
		}
		// else run single answer
		else
		{
			$result[] = self::sendResponse($ans);
		}
		// return result of sending
		return $result;
	}


	/**
	 * hook telegram messages
	 * @param  boolean $_save [description]
	 * @return [type]         [description]
	 */
	public static function hook()
	{
		// if telegram is off then do not run
		if(!\lib\utility\option::get('telegram', 'status'))
			return 'telegram is off!';
		self::$hook = json_decode(file_get_contents('php://input'), true);
		// save log if allow
		self::saveLog(self::$hook);
		// detect cmd and save it in static value
		self::cmd(self::$hook['text']);
	}


	/**
	 * save log of process into file
	 * @param  [type] $_data [description]
	 * @return [type]        [description]
	 */
	private static function saveLog($_data)
	{
		if(self::$saveLog)
		{
			file_put_contents('tg.json', json_encode($_data). "\r\n", FILE_APPEND);
		}
	}


	/**
	 * seperate input text to command
	 * @param  [type] $_input [description]
	 * @return [type]         [description]
	 */
	public static function cmd($_input = null)
	{
		// define variable
		$cmd =
		[
			'text'     => null,
			'command'  => null,
			'optional' => null,
			'argument' => null,
		];
		// if debug mode is enable give text from get parameter
		if(!$_input && \lib\utility\option::get('telegram', 'meta', 'debug'))
		{
			$_input = \lib\utility::get('text');
		}
		// save input value as text
		$cmd['text'] = $_input;
		// seperate text by space
		$text = explode(' ', $_input);
		// if we have parameter 1 save it as command
		if(isset($text[0]))
		{
			$cmd['command'] = $text[0];
			// if we have parameter 2 save it as optional
			if(isset($text[1]))
			{
				$cmd['optional'] = $text[1];
				// if we have parameter 3 save it as argument
				if(isset($text[2]))
				{
					$cmd['argument'] = $text[2];
				}
			}
		}
		// save cmd as global cmd value
		self::$cmd = $cmd;
		// return analysed text given from user
		return $cmd;
	}


	/**
	 * default action to handle message texts
	 * @param  [type] [description]
	 * @return [type]       [description]
	 */
	private static function generateResponse($forceSample = null)
	{
		$answer  = null;
		// read from saloos command template
		$cmdFolder = __NAMESPACE__ .'\commands\\';

		// use user defined command
		if(!$forceSample && self::$cmdFolder)
		{
			$cmdFolder = self::$cmdFolder;
		}
		foreach (self::$priority as $class)
		{
			$funcName = $cmdFolder. $class.'::exec';
			// generate func name
			if(is_callable($funcName))
			{
				// get response
				$answer = call_user_func($funcName, self::$cmd);
				// if has response break loop
				if($answer)
				{
					break;
				}
			}
		}
		// if we dont have answer text then use default text
		if(!$answer && \lib\utility\option::get('telegram', 'meta', 'debug'))
		{
			// then if not exist set default text
			$answer = ['text' => self::$defaultText];
		}
		return $answer;
	}


	/**
	 * generate response and sending message
	 * @return [type] result of sending
	 */
	public static function sendResponse($_prop)
	{
		// if method is not set user sendmessage method
		if(!isset($_prop['method']))
		{
			if(isset($_prop['text']))
			{
				$_prop['method'] = 'sendMessage';
			}
			else
			{
				return 'method is not set!';
			}
		}

		switch ($_prop['method'])
		{
			// create send message format
			case 'sendMessage':
				// require chat id
				$_prop['chat_id']    = self::response('chat');
				// add reply message id
				if(self::response('message_id'))
				{
					$_prop['reply_to_message_id'] = self::response('message_id');
				}
				break;


			case 'editMessageText':
				$_prop['chat_id']    = self::response('chat');
				$_prop['message_id'] = self::response('message_id');
				// if callback is set then call one callback
				break;

			default:
				break;
		}
		if($_prop['chat_id'] === null)
		{
			$_prop['chat_id'] = \lib\utility::get('id');
		}


		// if on answer we have callback analyse it and send answer
		if(isset($_prop['callback']) && isset($_prop['callback']['text']))
		{
			// generate callback query
			$data =
			[
				'callback_query_id' => self::response('callback_query_id'),
				'text'              => $_prop['callback']['text'],
			];
			if(isset($_prop['callback']['show_alert']))
			{
				$data['show_alert'] = $_prop['callback']['show_alert'];
			}
			// call callback answer
			self::answerCallbackQuery($data);
			// unset callback
			unset($_prop['callback']);
		}


		// replace values of text and markup
		$_prop = self::replaceFill($_prop);
		// decode markup if exist
		if(isset($_prop['reply_markup']))
		{
			$_prop['reply_markup'] = json_encode($_prop['reply_markup']);
			// self::$answer['force_reply'] = true;
		}
		// markdown is enable by default
		if(isset(self::$answer['text']) && !isset(self::$answer['parse_mode']))
		{
			$_prop['parse_mode'] = 'markdown';
		}
		// call bot send message func
		$funcName = 'self::'. $_prop['method'];
		$result   = call_user_func($funcName, $_prop);
		// return result of sending
		return $result;
	}


	/**
	 * replace fill values if exist
	 * @param  [type] $_data [description]
	 * @return [type]        [description]
	 */
	private static function replaceFill($_data)
	{
		if(!self::$fill)
		{
			return $_data;
		}

		// replace all texts
		if(isset($_data['text']))
		{
			foreach (self::$fill as $search => $replace)
			{
				$search	= '_'.$search.'_';
				$_data['text'] = str_replace($search, $replace, $_data['text']);
			}
		}

		if(isset($_data['reply_markup']['keyboard']))
		{
			foreach ($_data['reply_markup']['keyboard'] as $itemRowKey => $itemRow)
			{
				foreach ($itemRow as $key => $itemValue)
				{
					foreach (self::$fill as $search => $replace)
					{
						$search	= '_'.$search.'_';
						$newValue = str_replace($search, $replace, $itemValue);
						$_data['reply_markup']['keyboard'][$itemRowKey][$key] = $newValue;
					}
				}
			}
		}
		return $_data;
	}


	/**
	 * handle response and return needed key if exist
	 * @param  [type] $_needle [description]
	 * @return [type]          [description]
	 */
	public static function response($_needle = null, $_arg = 'id')
	{
		$data = null;

		switch ($_needle)
		{
			case 'update_id':
				if(isset(self::$hook['update_id']))
				{
					$data = self::$hook['update_id'];
				}
				break;

			case 'message_id':
				if(isset(self::$hook['message']['message_id']))
				{
					$data = self::$hook['message']['message_id'];
				}
				elseif(isset(self::$hook['callback_query']['message']['message_id']))
				{
					$data = self::$hook['callback_query']['message']['message_id'];
				}
				break;

			case 'callback_query_id':
				if(isset(self::$hook['callback_query']['id']))
				{
					$data = self::$hook['callback_query']['id'];
				}
				break;

			case 'from':
				if(isset(self::$hook['message']['from']))
				{
					$data = self::$hook['message']['from'];
				}
				elseif(isset(self::$hook['callback_query']['from']))
				{
					$data = self::$hook['callback_query']['from'];
				}
				if($_arg)
				{
					$data = $data[$_arg];
				}
				break;

			case 'chat':
				if(isset(self::$hook['message']['chat']))
				{
					$data = self::$hook['message']['chat'];
				}
				elseif(isset(self::$hook['callback_query']['message']['chat']))
				{
					$data = self::$hook['callback_query']['message']['chat'];
				}
				if($_arg)
				{
					$data = $data[$_arg];
				}
				break;

			case 'text':
				if(isset(self::$hook['message']['text']))
				{
					$data = self::$hook['message']['text'];
				}
				elseif(isset(self::$hook['callback_query']['data']))
				{
					$data = 'cb_'.self::$hook['callback_query']['data'];
				}
				break;

			default:
				break;
		}

		return $data;
	}


	/**
	 * setWebhook for telegram
	 * @param string $_url  [description]
	 * @param [type] $_file [description]
	 */
	public static function setWebhook($_url = '', $_file = null)
	{
		if(empty($_url))
		{
			$_url = \lib\utility\option::get('telegram', 'meta', 'hook');
		}
		$answer = ['url' => $_url];
		// if (!is_null($_file))
		// {
		// 	$data['certificate'] = \CURLFile($_file);
		// }
		return self::executeCurl('setWebhook', $answer, 'description') .': '. $_url;
	}


	/**
	 * execute telegram method
	 * @param  [type] $_name [description]
	 * @param  [type] $_args [description]
	 * @return [type]        [description]
	 */
	static function __callStatic($_name, $_args)
	{
		if(isset($_args[0]))
		{
			$_args = $_args[0];
		}
		return self::executeCurl($_name, $_args);
	}


	/**
	 * Execute cURL call
	 * @return mixed Result of the cURL call
	 */
	public static function executeCurl($_method = null, array $_data = null, $_output = null)
	{
		// if telegram is off then do not run
		if(!\lib\utility\option::get('telegram', 'status'))
		{
			return 'telegram is off!';
		}
		// if method or data is not set return
		if(!$_method || !$_data)
		{
			return 'method or data is not set!';
		}

		// if api key is not set get it from options
		if(!self::$api_key)
		{
			self::$api_key = \lib\utility\option::get('telegram', 'meta', 'key');
		}
		// if key is not correct return
		if(strlen(self::$api_key) < 20)
		{
			return 'api key is not correct!';
		}

		// initialize curl
		$ch = curl_init();
		if ($ch === false)
		{
			return 'Curl failed to initialize';
		}

		$curlConfig =
		[
			CURLOPT_URL            => "https://api.telegram.org/bot".self::$api_key."/$_method",
			CURLOPT_POST           => true,
			CURLOPT_RETURNTRANSFER => true,
			// CURLOPT_HEADER         => true, // get header
			CURLOPT_SAFE_UPLOAD    => true,
			CURLOPT_SSL_VERIFYPEER => false,
		];
		curl_setopt_array($ch, $curlConfig);

		if (!empty($_data))
		{
			curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query($_data));
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
		}
		if(Tld === 'dev')
		{
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		}

		$result = curl_exec($ch);
		if ($result === false)
		{
			return curl_error($ch). ':'. curl_errno($ch);
		}
		if (empty($result) | is_null($result))
		{
			return 'Empty server response';
		}
		curl_close($ch);
		//Logging curl requests
		if(substr($result, 0,1) === "{")
		{
			$result = json_decode($result, true);
			if($_output && isset($result[$_output]))
			{
				$result = $result[$_output];
			}
		}
		self::saveLog($result);
		// return result
		return $result;
	}
}
?>