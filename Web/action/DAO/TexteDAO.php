<?php
	class TexteDAO {

		public static function getMessage() {
			return array("Ceci est un texte.", "Ceci en est un autre.");
		}

		public static function nouveauMessage($message) {
			$connection = Connection::getConnection();
			
			$statement = $connection->prepare("UPDATE CS_TEXTE SET CONTENU = ? WHERE IDEMPLACEMENT = (
												SELECT ID FROM CS_EMPLACEMENT WHERE place = ?)");
			$statement->bindParam(1, $message);
			$statement->bindParam(2, $_SESSION["currentTab"]);
			$statement->execute();
		}

		public static function getTexte($emplacement){
			$connection = Connection::getConnection();
			
			$statement = $connection->prepare("SELECT * FROM CS_TEXTE WHERE IDEMPLACEMENT = (
												SELECT ID FROM CS_EMPLACEMENT WHERE place = ?)");
			$statement->bindParam(1, $emplacement);

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			$texte = null;

			if ($row = $statement->fetch()) {
				$texte = $row;
			}

			return $texte["CONTENU"];
		}
	}
