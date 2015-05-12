<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/TexteDAO.php");
	
	class NewsAdminAction extends CommonAction {
		public $success;
		
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {
			if (isset($_POST["editor1"])) {
				$this->success = TexteDAO::insertNews($_POST["editor1"]);
			}
		}
	}
