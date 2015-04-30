<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/CreationDAO.php");
	require_once("action/DAO/TypeDAO.php");

	class ModifRealisationAdminAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {
			$_SESSION["menuActive"] = "ModifRealisationAdmin.php";
		
			if(isset($_FILES['imageReal']))
			{
				$this->upload($_FILES['imageReal']);
			}

			if(!empty($_POST["nomReal"])){
				$slideshow = 0;
				if(isset($_POST["slideshow"]))
					$slideshow = 1;

				CreationDAO::insertCreation($_FILES['imageReal']['name'],
											$_POST["selectType"],null,
											$_POST["nomReal"],
											$slideshow,
											$_POST["desc"]);
			}
		}

		public function getAllTypes(){
			return TypeDAO::getAllTypes();
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
