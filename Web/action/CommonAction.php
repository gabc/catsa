<?php 
	session_start();	
	require_once("action/constant.php");
	require_once("action/DAO/Connection.php");
	
	abstract class CommonAction {
		public static $VISIBILITY_PUBLIC = 0;
		public static $VISIBILITY_MEMBER = 1;
		public static $VISIBILITY_MOD = 2;
		public static $VISIBILITY_ADMIN = 3;

		private $pageVisibility;

		public function __construct($pageVisibility) {
			$this->pageVisibility = $pageVisibility;
		}

		public function execute() {
			if (!empty($_GET["logout"])) {
				session_unset();
				session_destroy();
				session_start();
			}
			
			if (empty($_SESSION["visibility"])) {
				$_SESSION["visibility"] = CommonAction::$VISIBILITY_PUBLIC;
			}

			if ($_SESSION["visibility"] < $this->pageVisibility) {
				header("location:login.php");
				exit;
			}

			$this->executeAction(); // template method pattern
		}

		protected abstract function  executeAction();

		public function isLoggedIn() {
			return $_SESSION["visibility"] > CommonAction::$VISIBILITY_PUBLIC;
		}

		public function getName() {
			$name = "Invité";

			if ($this->isLoggedIn()) {
				$name = $_SESSION["name"];
			}

			return $name;
		}

		public static function getFacebookLikes(){
			$url = "https://www.facebook.com/pages/Murale-Catsa/142348105922701";
			
			$data = json_decode(file_get_contents("http://api.facebook.com/method/fql.query?query=select%20like_count%20from%20link_stat%20where%20url='$url'&format=json"));
			return $data[0]->like_count;
		}
	}