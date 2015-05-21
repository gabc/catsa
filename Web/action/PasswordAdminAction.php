<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/UserDAO.php");
	require_once("lib/password.php");

	class PasswordAdminAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {
			$pass = UserDAO::getPassword($_SESSION["name"]);

			if(isset($_POST["oldpwd"]) && isset($_POST["newpass"]) && isset($_POST["newpassverif"])) {
				if(password_verify($_POST["oldpwd"], $pass)) {
					if($_POST["newpass"] === $_POST["newpassverif"])
						UserDAO::updatePassword($_SESSION["name"], $_POST["newpassverif"]);
				} else {
					echo "non";
				}
			}
		}
	}
