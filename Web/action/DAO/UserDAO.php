<?php 
	class UserDAO {

		public static function authenticate($username, $pwd) {
			// connexion à la BD, fichier texte, serveur externe, ...
			$visibility = CommonAction::$VISIBILITY_PUBLIC;

			// if ($username == "a" && $pwd == "a") {
			// 	$visibility = CommonAction::$VISIBILITY_MEMBER;
			// }

			// return $visibility;
			$connection = Connection::getConnection();
			
			$pwd = sha1($pwd);
			$statement = $connection->prepare("SELECT * FROM CS_USER WHERE USERNAME = ? AND motDePasse = ?");
			$statement->bindParam(1, $username);
			$statement->bindParam(2, $pwd);

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			// connexion à la BD, fichier texte, serveur externe, ...
			$user = null;

			if ($row = $statement->fetch()) {
				$user = $row;
				unset($user["PASSWORD"]);
			}

			return $user;
		}

	}
