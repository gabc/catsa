<?php
/* -----------------------------------------------------
 *					                       				*
 *    Projet synthèse : H2015	           				*
 *    Fait Par : François Genest et Gabriel Beauchamp	*
 *					                       				*
 *----------------------------------------------------- */
?>
<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/UserDAO.php");
	
	class LoginAction extends CommonAction {
		public $wrongLogin;

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			$this->wrongLogin = false;
			
			if (isset($_POST["username"])) {
				$result = UserDAO::authenticate($_POST["username"], $_POST["pwd"]);

				if ($result > CommonAction::$VISIBILITY_PUBLIC) {
					$_SESSION["name"] = $_POST["username"];
					$_SESSION["visibility"] = $result;

					header("location:admin.php");
					exit;
				}
				else {
					$this->wrongLogin = true;
				}
			}
		}
	}
