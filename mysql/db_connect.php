<?php 
class DB
	{
		private $sql=null;
		private static $instance=null;
		function __construct()	
		{
			$dbuser='root';
			$dbpass='';
			$dbname='contentbody';
			$dbhost='localhost';
			$this->sql=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
		}
		public static
		function instance()
		{
			if (!self::$instance instanceof DB) {
				self::$instance=new DB;
			}
			return self::$instance->sql;
		}
		public static 
		function Query($q)
		{
			return self::instance()->query($q); 
		}
	}
?>