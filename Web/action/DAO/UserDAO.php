<?php 
	require_once("lib/password.php");

	class UserDAO {

		public static function authenticate($username, $pwd) {
			$visibility = CommonAction::$VISIBILITY_PUBLIC;

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
	}
