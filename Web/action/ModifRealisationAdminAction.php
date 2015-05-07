<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/CreationDAO.php");
	require_once("action/DAO/TypeDAO.php");
	require_once("action/DAO/CategorieDAO.php");

	class ModifRealisationAdminAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {

			//Modal
			if(isset($_POST["nomCategorie"]))
				CategorieDAO::insertCategorie($_POST["nomCategorie"]);

		
			if(isset($_FILES['imageReal']))
			{
				$this->upload($_FILES['imageReal']);
			}

			$imageSlideshow = null;
			if(isset($_FILES['imageSlideshow']))
			{
				$this->upload($_FILES['imageSlideshow']);
				$imageSlideshow = $_FILES['imageSlideshow']['name'];
			}

			if(!empty($_POST["nomReal"])){
				$slideshow = 0;
				if(isset($_POST["slideshow"]))
					$slideshow = 1;

			$categorie = null;
			if(!empty($_POST["selectCategorie"]))
				$categorie = $_POST["selectCategorie"];

				CreationDAO::insertCreation($_FILES['imageReal']['name'],
											$imageSlideshow,
											$_POST["selectType"],
											$categorie,
											$_POST["nomReal"],
											$slideshow,
											$_POST["desc"]);
			}
		}

		public function getAllTypes(){
			return TypeDAO::getAllTypes();
		}

		public function getAllCategories(){
			return CategorieDAO::getAllCategories();
		}

		private function upload($file){
			$target_path = "photos/";

			$target_path = $target_path . basename( $file['name']); 
			if(move_uploaded_file($file['tmp_name'], $target_path)) {
	    		//echo "The file " .  basename( $file['name']) . " has been uploaded";
			} else{
	    		//echo "There was an error uploading the file, please try again!";
			}
		}
	}
