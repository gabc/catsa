<?php
	require_once("action/CommonAction.php");

	class AdminAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {
			if (isset($_POST["editor1"])) {
				echo $_POST["editor1"];
			}
		}
	}
