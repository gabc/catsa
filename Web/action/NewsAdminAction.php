<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/NewsDAO.php");
	
	class NewsAdminAction extends CommonAction {
		public $success;
		
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {
			if (isset($_POST["editor1"])) {
				$this->success = NewsDAO::insertNews("Titre", $_POST["editor1"]);
			}
		}
	}
