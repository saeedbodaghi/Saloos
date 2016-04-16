<?php
namespace lib;

/** Create simple and clean connection to db **/
class db
{
	/**
	 * this library doing useful db actions
	 * v2.0
	 */

	// save link to database
	public static $link;
	public static $path_project = database. 'install/';
	public static $path_addons  = addons. 'includes/cls/database/install/';

	// declare connection variables
	public static $db_name      = null;
	public static $db_user      = null;
	public static $db_pass      = null;
	public static $db_host      = 'localhost';
	public static $db_charset   = 'utf8';
	public static $db_lang      = 'fa_IR';


	/**
	 * class constructor
	 * @param boolean $_autoCreate [description]
	 */
	public function __construct($_db_name = null)
	{
		self::$db_name = $_db_name? $_db_name: self::$db_name ? self::$db_name : db_name;

	}

	/**
	 * connect to related database
	 * if not exist create it
	 * @return [type] [description]
	 */
	public static function connect($_db_name = null, $_autoCreate = false)
	{
		if($_db_name === true)
		{
			// connect to default db
			self::$db_name = db_name;
		}
		elseif($_db_name === '[tools]')
		{
			// connect to core db
			self::$db_name = core_name.'_tools';
		}
		elseif($_db_name)
		{
			// connect to db passed from user
			// else connect to last db saved
			self::$db_name = $_db_name;
		}


		// fill variable if empty variable
		self::$db_name = self::$db_name ? self::$db_name : db_name;
		self::$db_user = self::$db_user ? self::$db_user : db_user;
		self::$db_pass = self::$db_pass ? self::$db_pass : db_pass;

		// if mysqli class does not exist or have some problem show related error
		if(!class_exists('mysqli'))
		{
			echo( "<p>"."we can't find database service!"." "
							."please contact administrator!")."</p>";
			exit();
		}

		$link = @mysqli_connect(self::$db_host, self::$db_user, self::$db_pass, self::$db_name);

		// if we have error on connection to this database
		if(!$link)
		{
			switch (@mysqli_connect_errno())
			{
				case 1045:
					echo "<p>"."We can't connect to database service!"." "
								  ."Please contact administrator!"."</p>";
					exit();
					break;

				case 1049:
					// if allow to create then start create database
					if($_autoCreate)
					{
						// connect to mysql database for creating new one
						$link = @mysqli_connect(self::$db_host, self::$db_user, self::$db_pass, 'mysql');
						@mysqli_set_charset($link, "utf8");
						// if can connect to mysql database
						if($link)
						{
							$qry = "CREATE DATABASE if not exists ". self::$db_name;
							// try to create database
							if(!@mysqli_query($link, $qry))
							{
								// if cant create db
								return false;
							}
							// else if can create new database then reset link to dbname
							$link = @mysqli_connect(self::$db_host, self::$db_user, self::$db_pass, self::$db_name);
						}
						else
						{
							return false;
						}
					}
					elseif($_autoCreate === false)
					{
						return false;
					}
					// else only show related message
					else
					{
						echo( "<p>".T_("We can't connect to correct database!")." "
									  .T_("Please contact administrator!")."</p>" );
						\lib\main::$controller->_processor(array('force_stop' => true));
					}
					break;

				default:
					// another errors occure
					// on development create connection error handling system
					break;
			}
		}

		// link is created and exist,
		// check if link is exist set it as global variable
		if($link)
		{
			self::$link = $link;
			return true;
		}
		// if link is not created return false
		return false;
	}


	/**
	 * fetch all row from database
	 * @param  [type] $_result    [description]
	 * @param  [type] $resulttype [description]
	 * @return [type]             [description]
	 */
	public static function fetch_all($_result, $resulttype = MYSQLI_ASSOC)
	{
		$result = [];
		// if mysqli fetch all is exist use it
		if(function_exists('mysqli_fetch_all'))
		{
			$result = @mysqli_fetch_all($_result, $resulttype);
		}
		else
		{
			for (; $tmp = $_result->fetch_array($resulttype);)
			{
				$result[] = $tmp;
			}
		}
		// return result
		return $result;
	}

	/**
	 * execute sql file directly to add some database
	 * @param  [type]  $_path  [description]
	 * @param  boolean $_tools [description]
	 * @return [type]          [description]
	 */
	public static function execFile($_path, $_addons = false)
	{
		// if want to read from addons update location
		if($_addons)
		{
			$_path = self::$path_addons. $_path. '.sql';
		}

		// if this path exist, read file and run
		if(file_exists($_path))
		{
			// read file and save in variable
			$qry_list = file_get_contents($_path);
			// seperate with semicolon
			$qry_list = explode(';', $qry_list);
			$has_error = null;
			foreach ($qry_list as $key => $qry)
			{
				$qry = trim($qry);
				if($qry && !@mysqli_query(self::$link, $qry))
				{
					$has_error = true;
				}
			}
			// if command execute successfully
			if(!$has_error)
			{
				return true;
			}
		}
		// file not exist or error on creating table, return false
		return false;
	}


	/**
	 * execute files in one folder
	 * @param  [type]  $_path   [description]
	 * @param  [type]  $_group  [description]
	 * @param  boolean $_addons [description]
	 * @return [type]           [description]
	 */
	public static function execFolder($_path = null, $_group = null, $_addons = false)
	{
		$result = [];
		// if want to read from addons update location
		if($_addons)
		{
			$_path    = self::$path_addons. $_path;
			$myDbName = self::find_dbName($_path);
			$_path    = $_path.'/';
			self::connect($myDbName, true);
		}

		// if want custom group of files, select this group
		if($_group)
		{
			$_path = $_path. $_group. "*.sql";
		}
		else
		{
			$_path = $_path. "*.sql";
		}
		// for each item with this situation create
		foreach(glob($_path) as $key => $filename)
		{
			$result[$filename] = self::execFile($filename);
		}

		return $result;
	}


	/**
	 * check db exist or not
	 * @return [type] no of tables in database
	 */
	public static function exist($_create = false)
	{
		$result  = false;
		$connect = self::connect(true, $_create);
		if($connect)
		{
			$result = mysqli_query(self::$link, 'SHOW TABLES');
			$result = $result->num_rows;
		}
		// return result
		return $result;
	}


	/**
	 * read current project and addons folder to find database folder
	 * then start installing files into databases
	 *** database name must not use - in name!
	 * @param  boolean $_onlyUpgrade run upgrade process if true
	 * @param  boolean $_addonsFirst first run addons query
	 * @return [type]                array contain a result of installation
	 */
	public static function install($_onlyUpgrade = false, $_addonsFirst = true)
	{
		// increase php code execution time
		ini_set('max_execution_time', 300); //300 seconds = 5 minutes

		$result = [];
		$myList = [];
		// find addresses
		$path_project = self::$path_project;
		$path_addons  = self::$path_addons;
		// if want to only upgrade read upgrade folder
		if($_onlyUpgrade)
		{
			$path_project = substr(self::$path_project, 0, -8). 'upgrade/';
			$path_addons  = substr(self::$path_addons,  0, -8). 'upgrade/';
		}
		// read folders
		$project = glob($path_project.'*', GLOB_ONLYDIR);
		$addons  = glob($path_addons.'*',  GLOB_ONLYDIR);
		// merge two location list in one array
		$dbList  = array_merge($project, $addons);
		// create a array to install each table only one times, remove duplicate
		foreach ($dbList as $key => $myDbLoc)
		{
			$myDbName = self::find_dbName($myDbLoc);
			if(!in_array($myDbName, $myList))
			{
				$myList[$myDbName] = $myDbLoc;
			}
		}
		// flip array to change location to key
		$myList = array_flip($myList);
		// reverse because first install addons databases
		if($_addonsFirst)
		{
			$myList = array_reverse($myList);
		}

		// run query for each folder
		foreach ($myList as $myDbLoc => $myDbName)
		{
			$myDbCon = $myDbName;
			if(substr($myDbName, -1) === '+')
			{
				$myDbCon = substr($myDbName, 0, -1);
			}
			// if only want to upgrade run connection in specefic condition
			if($_onlyUpgrade)
			{
				$result[$myDbName]['connect'] = db::connect($myDbCon, false);
				$result[$myDbName]['exec']    = self::execFolder($myDbLoc.'/', 'v.');
			}
			// run normal installation
			else
			{
				$result[$myDbName]['connect'] = db::connect($myDbCon, true);
				$result[$myDbName]['exec']    = self::execFolder($myDbLoc.'/');
			}
		}
		// on normal installation call upgrade process to complete installation
		if(!$_onlyUpgrade)
		{
			$result['upgrade'] = self::install(true);
		}

		// decrease php code execution time to default value
		// reset to default
		$max_time = ini_get("max_execution_time");
		ini_set('max_execution_time', $max_time); //300 seconds = 5 minutes
		// return final result
		return $result;
	}

	/**
	 * find db name by giving folder location
	 * @param  [type] $_loc [description]
	 * @return [type]       [description]
	 */
	public static function find_dbName($_loc)
	{
		$myDbName = preg_replace("[\\\\]", "/", $_loc);
		$myDbName = substr( $myDbName, (strrpos($myDbName, "/" )+ 1));
		// change db_name and core_name to defined value
		$myDbName = str_replace('(db_name)', db_name, $myDbName);
		$myDbName = str_replace('(core_name)', core_name, $myDbName);
		// return result
		return $myDbName;
	}



	/**
	 * this function create a backup from db with exec command
	 * the backup file with bz2 compressing method is created in projectdir/backup/db/
	 * for using this function call it with one of below types
	 * db::backup();
	 * db::backup('Daily');
	 * db::backup('Weekly');
	 * @param  [type] $_period the name of subfolder or type of backup
	 * @return [type]          status of running commad
	 */
	public static function backup_dump($_period = null)
	{
		$_period    = $_period? $_period.'/':null;
		$db_host    = self::$db_host;
		$db_charset = self::$db_charset;
		$dest_file  = self::$db_name.'.'. date('d-m-Y_H-i-s'). '.sql';
		$dest_dir   = database."backup/$_period";
		// create folder if not exist
		if(!is_dir($dest_dir))
			mkdir($dest_dir, 0755, true);

		$cmd  = "mysqldump --single-transaction --add-drop-table";
		$cmd .= " --host='$db_host' --set-charset='$db_charset'";
		$cmd .= " --user='".self::$db_user."'";
		$cmd .= " --password='".self::$db_pass."' '". self::$db_name."'";
		$cmd .= " | bzip2 -c > $dest_dir.$dest_file";

		$return_var = NULL;
		$output     = NULL;
		$result     = exec($cmd, $output, $return_var);
		if($return_var === 0)
			return true;

		return false;
	}

	/**
	 * this function delete older backup file from db backup folder
	 * you can pass type of clean (folder) and days to keep
	 * call function with below syntax
	 * db::clean();
	 * db::clean('Daily');
	 * db::clean('Weekly', 3);
	 * @param  [type] $_period the name of subfolder or type of backup
	 * @param  [type] $_arg    value of the days for keep files
	 * @return [type]          the result of cleaning seperate by type in array
	 */
	public static function clean($_period = null, $_arg = null)
	{
		$days_to_keep = $_arg[0]? $_arg[0]: 3;
		if($_period === false)
		{
			$days_to_keep = 100;
		}
		$_period      = $_period? $_period.'/':null;
		$dest_dir     = database."backup/$_period";
		$result       =
		[
			'folders'   => 0,
			'files'     => 0,
			'deleted'   => 0,
			'duplicate' => 0,
			'skipped'   => 0,
		];

		if(!is_dir($dest_dir))
			return false;

		$handle              = opendir($dest_dir);
		$keep_threshold_time = strtotime("-$days_to_keep days");
		$files_list          = [];
		while (false !== ($file = readdir($handle)))
		{
			if($file === '.' || $file === '..')
			 continue;

			$dest_file_path = "$dest_dir/$file";
			if(!is_dir($dest_file_path))
			{
				$result['files'] += 1;
				$file_time       = filemtime($dest_file_path);
				$file_code = substr($file, strrpos($file, '_')+1, -4);
				if(isset($files_list[$file_code]))
				{
					$result['duplicate'] += 1;
					unlink($dest_file_path);
				}
				else
				{
					$files_list[$file_code] = $file;
				}
				if($file_time < $keep_threshold_time)
				{
					$result['deleted'] += 1;
					unlink($dest_file_path);
				}
				else
				{
					$result['skipped'] += 1;
				}
			}
			else
			{
				$result['folders'] += 1;
			}
		}
		$result['list'] = $files_list;
		return $result;
	}


	public static function backup($_period = null, $tables = '*')
	{
		self::connect(true, false);
		mysqli_select_db(self::$link, self::$db_name);

		//get all of the tables
		if($tables == '*')
		{
			$tables   = [];
			$result   = mysqli_query(self::$link, 'SHOW TABLES');
			$tables[] = self::fetch_all($result);
		}
		else
		{
			$tables = is_array($tables) ? $tables : explode(',',$tables);
		}
		$return = null;

		//cycle through
		foreach($tables as $table)
		{
			$result     = mysqli_query(self::$link, 'SELECT * FROM '.$table);
			$num_fields = mysqli_num_fields($result);
			$return     .= 'DROP TABLE '.$table.';';
			$row2       = mysqli_fetch_row(mysqli_query(self::$link, 'SHOW CREATE TABLE '.$table));
			$return     .= "\n\n".$row2[1].";\n\n";

			for ($i = 0; $i < $num_fields; $i++)
			{
				while($row = mysqli_fetch_row($result))
				{
					$return.= 'INSERT INTO '.$table.' VALUES(';
					for($j=0; $j < $num_fields; $j++)
					{
						$row[$j] = addslashes($row[$j]);
						$row[$j] = str_replace("\n","\\n",$row[$j]);

						if (isset($row[$j]))
						{
							$return.= '"'.$row[$j].'"' ;
						}
						else
						{
							$return.= '""';
						}
						if ($j < ($num_fields-1))
						{
							$return.= ',';
						}
					}
					$return.= ");\n";
				}
			}
			$return.="\n\n\n";
		}
		// if user pass true in period we call clean func
		if($_period === true)
		{
			$clean_result = self::clean(false);
			print_r($clean_result);
			echo "<hr />";
			$_period = null;
		}
		//save file
		$_period    = $_period? $_period.'/':null;
		$dest_dir   = database."backup/$_period";
		$dest_file  = self::$db_name.'_b'. date('Ymd_His').'_'. md5($return) . '.sql';
		// create folder if not exist
		if(!is_dir($dest_dir))
			mkdir($dest_dir, 0755, true);

		// $dest_file = 'db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql';
		$handle = fopen($dest_dir. $dest_file, 'w+');
		if(fwrite($handle, $return) === FALSE)
		{
			echo "Cannot write to file ($filename)";
			return false;
		}
		// write successful close file and return true
		fclose($handle);
		echo "Successfully create database backup<br />";
		echo "Location:  $dest_dir<br />";
		echo "File name: $dest_file<hr />";
		return true;
	}
}
?>