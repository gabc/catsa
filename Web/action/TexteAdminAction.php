<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/TexteDAO.php");
	
	class TexteAdminAction extends CommonAction {
		public $success;
		
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {
			if (isset($_POST["editor1"])) {
				TexteDAO::nouveauMessage($_POST["editor1"]);
			}
		}
	}
