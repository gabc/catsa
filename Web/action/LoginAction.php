<?php
	require_once("action/CommonAction.php");

	class LoginAction extends CommonAction {
		public $wrongLogin;

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			;
		}
	}
