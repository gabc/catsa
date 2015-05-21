<?php 
	require_once("lib/password.php");

	class UserDAO {

		public static function authenticate($username, $pwd) {
			$connection = Connection::getConnection();

			$statement = $connection->prepare("SELECT * FROM CS_USER WHERE USERNAME = ?");
			$statement->bindParam(1, $username);

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			$user = null;

			if ($row = $statement->fetch()) {
				if (password_verify($pwd, $row["MOTDEPASSE"])) {
					$user = $row;
					unset($user["MOTDEPASSE"]);
				}
			}
			return $user;
		}

		public static function updatePassword($username, $pwd) {
			$connection = Connection::getConnection();

			$pwd = password_hash($pwd, PASSWORD_DEFAULT);
			$statement = $connection->prepare("UPDATE CS_USER SET MOTDEPASSE = ? WHERE USERNAME = ?");
			$statement->bindParam(1, $pwd);
			$statement->bindParam(2, $username);
			return $statement->execute();
		}

		public static function getPassword($usr) {
			$connection = Connection::getConnection();

			$statement = $connection->prepare("SELECT * FROM CS_USER WHERE USERNAME = ?");
			$statement->bindParam(1, $usr);

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			$pwd = null;

			if ($row = $statement->fetch()) {
				$pwd = $row["MOTDEPASSE"];
			}
			return $pwd;
		}
	}
