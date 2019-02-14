<?php
	class Db
	{
		private static $instance = NULL;

		private function __construct() {}

		public static function getInstance()
		{
			if (!isset(self::$instance))
			{
				self::$instance = new PDO('mysql:host=localhost:3306;dbname=portfolio', 'root', 'root', $pdo_options);
			}
			return self::$instance;
		}
	}
?>