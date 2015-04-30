<?php
	class CreationDAO {

		public static function getCreations() {
			return array(
						array("nom" => "Shose"
							 ,"description" => "patente"
							 ,"slideshow" => 0
							 ,"image" => "img\manege.t.jpg"),
						array("nom" => "Second"
							 ,"description" => "Secondement"
							 ,"slideshow" => 1
							 ,"image" => "img\manege.t.jpg"));
		}

		public static function insertCreation($path, $type, $nom, $slideshow, $desc){

		}
	}
