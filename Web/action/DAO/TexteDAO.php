<?php
/* -----------------------------------------------------
 *					                       				*
 *    Projet synthèse : H2015	           				*
 *    Fait Par : François Genest et Gabriel Beauchamp	*
 *					                       				*
 *----------------------------------------------------- */
?>
<?php
	class TexteDAO {

		public static function getMessage() {
			return array("Ceci est un texte.", "Ceci en est un autre.");
		}

		public static function nouveauMessage($message, $current) {
			$connection = Connection::getConnection();
			
			$statement = $connection->prepare("UPDATE CS_TEXTE SET CONTENU = ? WHERE EMPLACEMENT = ?");
			$statement->bindParam(1, $message);
			$statement->bindParam(2, $current);
			$statement->execute();
		}

		public static function insertTexte($contenu, $emplacement) {
			$connection = Connection::getConnection();
			
			$statement = $connection->prepare("INSERT INTO CS_TEXTE(emplacement,contenu) VALUES(?,?)");
			$statement->bindParam(1, $emplacement);
			$statement->bindParam(2, $contenu);
			$statement->execute();

			return TexteDAO::getTexteComplet($contenu, $emplacement)["ID"];
		}

		public static function getTexteComplet($contenu, $emplacement){
			$connection = Connection::getConnection();
			
			$statement = $connection->prepare("SELECT * FROM CS_TEXTE WHERE EMPLACEMENT = ? AND CONTENU = ?");
			$statement->bindParam(1, $emplacement);
			$statement->bindParam(2, $contenu);

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			$texte = null;

			if ($row = $statement->fetch()) {
				$texte = $row;
			}

			return $texte;
		}

		public static function getTexte($emplacement){
			$connection = Connection::getConnection();
			
			$statement = $connection->prepare("SELECT * FROM CS_TEXTE WHERE EMPLACEMENT = ?");
			$statement->bindParam(1, $emplacement);

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			$texte = null;

			if ($row = $statement->fetch()) {
				$texte = $row;
			}

			return $texte["CONTENU"];
		}

		public static function getTexteById($id){
			$connection = Connection::getConnection();
			
			$statement = $connection->prepare("SELECT * FROM CS_TEXTE WHERE ID = ?");
			$statement->bindParam(1, $id);

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			$texte = null;

			if ($row = $statement->fetch()) {
				$texte = $row;
			}

			return $texte;
		}
	}
