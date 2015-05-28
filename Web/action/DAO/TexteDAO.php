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
			// echo "avant" . $contenu;
			// echo strrpos( $contenu , ">");
			//echo substr($contenu, 0, -1);
			// echo $contenu[0];
			// if($contenu[0] === "<"){
			// 	$contenu =substr($contenu, 0, -1);
			// 	echo "replace" . $contenu . "fin";
			// }
			$contenu = $contenu .'%';
			//$contenu = $contenu . "%";
			 // echo "apres" . substr($contenu, -1);
			$statement = $connection->prepare("SELECT * FROM CS_TEXTE WHERE EMPLACEMENT = :emplacement AND CONTENU LIKE :contenu");
			$statement->bindParam(':emplacement', $emplacement);
			$statement->bindParam(':contenu', $contenu);

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

		public static function updateTexte($idTexte, $contenu){
			$connection = Connection::getConnection();

			$statement = $connection->prepare("UPDATE CS_TEXTE SET contenu = ? WHERE ID = ? ");
				
			$statement->bindParam(1, $contenu);
			$statement->bindParam(2, $idTexte);

			return $statement->execute();
		}
	}
