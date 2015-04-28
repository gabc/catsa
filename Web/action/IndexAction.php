<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/TexteDAO.php");

	class IndexAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
            $_SESSION["menuActive"] = "index.php";
		}

		public function getMess() {
			return TexteDAO::getMessage();
		}

		public function getTexte($emplacement) {
			return TexteDAO::getTexte($emplacement);
		}
	}
