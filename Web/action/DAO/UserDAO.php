<?php 
	class UserDAO {
		require_once("lib/password.php");
		public static function authenticate($username, $pwd) {
			// connexion à la BD, fichier texte, serveur externe, ...
			$visibility = CommonAction::$VISIBILITY_PUBLIC;

			// if ($username == "a" && $pwd == "a") {
			// 	$visibility = CommonAction::$VISIBILITY_MEMBER;
			// }

			// return $visibility;
			$connection = Connection::getConnection();
			
			$pwd = password_hash($pwd, PASSWORD_DEFAULT);
			$statement = $connection->prepare("SELECT * FROM CS_USER WHERE USERNAME = ?");
			$statement->bindParam(1, $username);

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			// connexion à la BD, fichier texte, serveur externe, ...
			$user = null;

			if ($row = $statement->fetch()) {
				if (password_verify($pwd, $row["PASSWORD"])) {
					$user = $row;
					unset($user["PASSWORD"]);
				}
			}

			return $user;
		}

	}
