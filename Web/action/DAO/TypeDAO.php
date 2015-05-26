<?php
/* -----------------------------------------------------
 *					                       				*
 *    Projet synthèse : H2015	           				*
 *    Fait Par : François Genest et Gabriel Beauchamp	*
 *					                       				*
 *----------------------------------------------------- */
?>
<?php
	class TypeDAO {

		public static function getType($nom){
			$connection = Connection::getConnection();
			
			$statement = $connection->prepare("SELECT * FROM CS_TYPE WHERE NOM = ?");
			$statement->bindParam(1, $nom);

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			$type = null;

			if ($row = $statement->fetch()) {
				$type = $row;
			}

			return $type;
		}

		public static function getTypeById($id){
			$connection = Connection::getConnection();
			
			$statement = $connection->prepare("SELECT * FROM CS_TYPE WHERE ID = ?");
			$statement->bindParam(1, $id);

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			$type = null;

			if ($row = $statement->fetch()) {
				$type = $row;
			}

			return $type["NOM"];
		}

		public static function getAllTypes(){
			$connection = Connection::getConnection();

			$statement = $connection->prepare("SELECT * FROM CS_TYPE");

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			$types = [];

			while ($row = $statement->fetch()) {
				$types[] = $row;
			}

			return $types;
		}
	}
