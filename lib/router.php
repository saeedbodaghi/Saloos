<?php
namespace lib;
/**
 * saloos router controller and configuration
 */
class router
{
	use router\config;

	public function __construct($_clean_url = null)
	{
		self::$repository = repository;
		$path = preg_replace("/^\.\//","/",'/');
		$clean_url = $_clean_url !== null ? $_clean_url : $_SERVER['REQUEST_URI'];
		if(preg_match("#0x#", $clean_url))
		{
			// error
		}
		$clean_url = preg_replace("#0x#Ui", "", $clean_url);
		$clean_url = preg_replace("#^https?://{$_SERVER['HTTP_HOST']}\/#", '', $clean_url);
		$clean_url = preg_replace("#^$path#", '', $clean_url);
		$clean_url = urldecode($clean_url);

		preg_match("/^([^?]*)(\?.*)?$/", $clean_url, $url);

		self::$real_url_string = self::$url_string = $url[1];

		self::$real_url_array  = self::$url_array = preg_split("[\/]", preg_replace("/^\/|\/$/", '', $url[1]), -1 , PREG_SPLIT_NO_EMPTY);

		// HTTP_HOST is not secure and attacker can change it
		$domain           = $_SERVER['HTTP_HOST'];
		self::$domain     = preg_split("[\.]", $domain);
		self::$sub_domain = self::$domain;
		array_pop(self::$sub_domain);
		array_pop(self::$sub_domain);

		if ( (isset(self::$real_url_array[0]) && self::$real_url_array[0] == 'home') || (isset(self::$real_url_array[1]) && self::$real_url_array[1] == 'home') )
		{
			\lib\error::page("home");
		}

		/**
		 * user want control panel or CMS
		 */
		if(defined('CMS') && constant('CMS'))
		{
			$myCP = constant('CMS') === true? 'cp': constant('CMS');
			router::set_storage('CMS', $myCP );
		}
		else
		{
			router::set_storage('CMS', 'cp');
		}

		/**
		 * before router
		 */
		if(self::$auto_repository)
		{
			// first get subdomain and if not exist get first url part as mysub
			$mysub = router::get_sub_domain();
			if(!$mysub)
			{
				$mysub = router::get_url(0);
				router::$sub_is_fake = true;
				// router::$sub_is_fake = $mysub? true: false;
      			// router::set_storage('language', router::get_storage('defaultLanguage') );
			}

			if($mysub)
			{
				// automatically set repository if folder of it exist
				$myaddons    = array();
				$mysub_real  = $mysub;
				$myloc       = null;
				$mysub_valid = null;

				// check for account with specefic name
				if(\lib\router::get_storage('CMS'))
				{
					$myaddons[\lib\router::get_storage('CMS')] = 'cp';
					$myaddons['account'] = 'account';
				}
				// check this sub is exist in our data or not
				if(array_key_exists($mysub, $myaddons))
				{
					$mysub       = $myaddons[$mysub];
					$mysub_valid = true;
				}

				// set repository name
				$myrep    = 'content_'.$mysub;

				// check content_aaa folder is exist in project or saloos addons folder
				if(is_dir(root.$myrep))
					$myloc = false;
				// if exist on addons folder
				elseif($mysub_valid && is_dir(addons.$myrep))
					$myloc = addons;

				// if folder exist
				if(!is_null($myloc))
				{
					// if url is fake, show it like subdomain and remove from url
					if(router::$sub_is_fake)
					{
						router::remove_url($mysub_real);
						router::set_sub_domain($mysub_real);
					}
					// set repository to this folder
					$myparam = array($myrep);
					if($myloc)
						array_push($myparam, $myloc);

					// call function and pass param value to it
					router::set_repository(...$myparam);
				}
			}
		}

		if(self::$auto_api)
		{
			// automatically allow api, if you wan't to desable it, only set a value
			$route = new router\route("/^api([^\/]*)/", function($reg)
			{
				router::remove_url($reg->url);
				router::set_storage('api', true);
			});
		}

		if(class_exists('\cls\route'))
		{
			$router = new \cls\route;
			$router->main = $this;
			if(method_exists($router, "_before")){
				$router->_before();
			}
		}

		// like dev or com or ir or ...
		if(!defined('Tld'))
			define('Tld', router::get_root_domain('tld'));

		$this->check_router();
		/**
		 * after router
		 */
		if(class_exists('\cls\route')){
			if(method_exists($router, "_after")){
				$router->_after();
			}
		}

		// Define Project Constants *******************************************************************
		// declate some constant variable for better use in all part of app

		// like .dev or .com
		if(!defined('MainTld'))
		{
			// if enabling multi domain and set default tld define main tld
			if(\lib\utility\option::get('config', 'meta', 'multiDomain') &&
				$defaultTld = \lib\utility\option::get('config', 'meta', 'defaultTld'))
			{
				define('MainTld', '.'. $defaultTld);
			}
			// else detect it
			else
			{
				define('MainTld', (Tld === 'dev'? '.dev': '.com'));
			}
		}

		// like ermile
		if(!defined('Domain'))
			define('Domain', router::get_root_domain('domain'));

		// like account
		if(!defined('SubDomain'))
			define('SubDomain', router::get_sub_domain());

		// like  127.0.0.1
		if(!defined('ClientIP'))
			define('ClientIP', router::get_clientIP() );

		// like ermile.com
		if(!defined('Service'))
			define('Service', Domain.'.'.Tld);

		// like test
		if(!defined('Module'))
			define('Module', router::get_url(0));

		// like https://ermile.com
		router::set_storage('url_site', Protocol.'://' . Domain.'.'.Tld.'/');

		// set MyAccount for use in all part of services
		if(!defined('AccountService'))
		{
			// if user want main account and set main account name
			if( \lib\utility\option::get('config', 'meta', 'useMainAccount') &&
				\lib\utility\option::get('config', 'meta', 'mainAccount') === constant('MainService')
			)
			{
				define('AccountService', constant('MainService'));
			}
			else
			{
				define('AccountService', Domain);
			}
		}

		// check for account with specefic name
		if(!defined('MyAccount') && \lib\router::get_storage('CMS'))
		{
			// set MyAccount for use in all part of services
			define('MyAccount', 'account');
		}

		router::$base = Protocol.'://';
		if(router::$sub_is_fake)
		{
			router::$base .= Service.(SubDomain? '/'.SubDomain: null);
		}
		else
		{
			router::$base .= SubDomain.'.'.Service;
		}

		if(count(explode('.', SubDomain)) > 1)
		{
			die("<p>Saloos only support one subdomain!</p>" );
		}
		elseif(SubDomain === 'www')
		{
			   header('Location: '.router::get_storage('url_site'), true, 301);
		}
	}

	public function check_router()
	{
		// Check connection protocol and return related value
		if( (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443 )
		{
			$this->set_protocol("https");
		}
		elseif(!empty($_SERVER['HTTP_X_FORWARDED_PROTO']))
		{
			$this->set_protocol($_SERVER['HTTP_X_FORWARDED_PROTO']);
		}
		else
		{
			$this->set_protocol('http');
		}

		if(!defined('Protocol'))
		{
			define('Protocol', $this->get_Protocol());
		}
		// check current protocol
		self::check_protocol();


		$this->check_property_router();
		$this->check_method_router();
		$this->check_class_router();
	}


	/**
	 * check current protocol and if needed redirect to another!
	 * @return [type] [description]
	 */
	private static function check_protocol()
	{
		// create new url for protocol checker
		$newUrl      = "";
		$currentPath = $_SERVER['REQUEST_URI'];
		$mainSite    = \lib\utility\option::get('config', 'meta', 'redirectURL');

		// if redirect to main site is enable and all thing is okay
		// then redirect to the target url
		if(
			\lib\utility\option::get('config', 'meta', 'multiDomain') &&
			\lib\utility\option::get('config', 'meta', 'redirectToMain') &&
			$mainSite &&
			Tld !== 'dev' &&
			parse_url($mainSite, PHP_URL_HOST) != \lib\router::get_root_domain()
		)
		{
			// as soon as posible we create language detector library
			switch (Tld)
			{
				case 'ir':
					$newUrl = $mainSite. "/fa";
					break;

				default:
					break;
			}
		}
		elseif($currentPath !== '/' && rtrim($currentPath, '/') !== $currentPath)
		{
			$newUrl = $mainSite. rtrim($currentPath, '/');
		}
		else
		{
			// if want to force using https then redirect to https of current url
			if(\lib\utility\option::get('config', 'meta', 'https'))
			{
				if(Protocol === 'http')
				{
					$newUrl = 'https://';
				}
			}
			// else force usign http protocol
			elseif(Protocol === 'https')
			{
				$newUrl = 'http://';
			}
			if($newUrl)
			{
				$newUrl .= router::get_root_domain(). '/'. router::get_url();
			}
		}
// var_dump($newUrl);exit();

		// if newUrl is exist and we must to redirect
		// then complete url and redirect to this address
		if($newUrl && !\lib\utility::get('force'))
		{
			// redirect to best protocol because we want it!
			$redirector = new \lib\redirector($newUrl);
			$redirector->redirect();
		}
	}


	public static function check_property_router()
	{
		if(count(self::$url_array) < 2)
		{
			return;
		}
		self::$url_array_property = $urls = array_slice(self::$url_array, 2);
	}


	public static function check_method_router()
	{
		if(count(self::$url_array) >= 2 && !empty(self::$url_array[1]))
		{
			if(preg_match("[=]", self::$url_array[1]))
			{
				self::$method = 'home';
				self::add_url_property(self::$url_array[1]);
			}
			else
			{
				self::$method = self::$url_array[1];
			}
		}
		else
		{
			self::$method = 'home';
		}
	}

	public static function check_class_router()
	{
		if(count(self::$url_array) >= 1)
		{
			if(preg_match("[=]", self::$url_array[0]))
			{
				self::$class = 'home';
				if(self::$method != 'home')
				{
					self::add_url_property(self::$method);
					self::$method = 'home';
				}
				self::add_url_property(self::$url_array[0]);
			}
			else
			{
				self::$class = self::$url_array[0];

			}
		}
		else
		{
			self::$class = 'home';
		}
	}
}
?>