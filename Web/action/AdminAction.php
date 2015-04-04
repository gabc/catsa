<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/TexteDAO.php");

	class AdminAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {
			$_SESSION["menuActive"] = "admin.php";
			if (isset($_POST["editor1"])) {
				TexteDAO::nouveauMessage($_POST["editor1"]);
			}
		}
	}
