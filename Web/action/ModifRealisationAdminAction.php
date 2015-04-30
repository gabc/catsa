<?php
	require_once("action/CommonAction.php");

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
		}

		private function upload($file){
			echo "UPLOAD !!!";
			$target_path = "photos/";

			$target_path = $target_path . basename( $file['name']); 
			if(move_uploaded_file($file['tmp_name'], $target_path)) {
	    		echo "The file " .  basename( $file['name']) . " has been uploaded";
			} else{
	    		echo "There was an error uploading the file, please try again!";
			}
			echo "lOL";
		}
	}
