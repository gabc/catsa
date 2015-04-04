<?php
	require_once("action/CommonAction.php");

	class CatsaMuralesAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {
			$_SESSION["menuActive"] = "catsamurales.php";
		}
	}
