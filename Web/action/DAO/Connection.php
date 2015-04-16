<?php 
	class Connection {
		private static $connection = null;

		public static function getConnection() {
			if (Connection::$connection == null) {
				// Connection::$connection = new PDO("mysql:dbname=" . DB_ALIAS, 
				// 						  DB_USER,
				// 						  DB_PASS);
				Connection::$connection = new PDO("oci:dbname=" . DB_ALIAS, 
												  DB_USER,
												  DB_PASS);
				Connection::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				Connection::$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			}

			return Connection::$connection;
		}

		public static function closeConnection() {
			Connection::$connection = null;
		}

		public static function ajouteMessage($msg) {
			;
		}
	}
