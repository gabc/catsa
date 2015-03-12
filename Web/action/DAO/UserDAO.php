<?php 
	class UserDAO {

		public static function authenticate($username, $pwd) {
			// connexion à la BD, fichier texte, serveur externe, ...
			$visibility = CommonAction::$VISIBILITY_PUBLIC;

			if ($username == "a" && $pwd == "a") {
				$visibility = CommonAction::$VISIBILITY_MEMBER;
			}

			return $visibility;
		}

	}