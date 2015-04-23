<?php
	class NewsDAO {

		public static function getNews(){
			return array(array("id" => 2,
							   "date" => "today",
							   "titre" => "Le shit",
							   "texte" => "Mon blog malade"),
						 array("date" => "hier"
						 	  ,"titre" => "L'autre"
						 	  , "texte" => "FOOBLALALALAL"
						 	  ,"id" => 1));
		}
	}
