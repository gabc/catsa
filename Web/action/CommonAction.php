<?php 
	session_start();	
	require_once("action/constant.php");
	require_once("action/DAO/Connection.php");
	require_once("action/DAO/CategorieDAO.php");
	require_once("action/DAO/CreationDAO.php");
	require_once("action/DAO/TypeDAO.php");

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

		public static function isLoggedIn() {
			return $_SESSION["visibility"] > CommonAction::$VISIBILITY_PUBLIC;
		}

		public static function getPage() {
			return basename($_SERVER['PHP_SELF']);
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
			$file_data = @(file_get_contents("http://api.facebook.com/method/fql.query?query=select%20like_count%20from%20link_stat%20where%20url='$url'&format=json"));
			$data = json_decode($file_data);
			return @($data[0]->like_count);
		}

		public static function getTypes() {
			// Retourne les types qui sont dans la BD. Sauf 'Tableau' qui n'est pas necessaire.
				$types = TypeDAO::getAllTypes();
				$temp = 0;
				
				for($i = 1; $i < sizeof($types); $i++) {
					if($types[$i]['NOM'] === 'Tableau')
						$temp = $i;
				}
				unset($types[$temp]);
				
				return $types;
		}

		public static function getCategories() {
				return CategorieDAO::getAllCategories();
		}

		public static function getSlideShows() {
			return CreationDAO::getSlideShows();
		}

		public static function getPages($nbPagesShow,$nbPages,$currentPage){
			$diff = floor($nbPagesShow/2);

			$pageDebut = $currentPage - $diff;
			$pageMax = $currentPage + $diff;

			if($pageDebut < 2){
				$pageDebut = 1;

				$pageMax = $nbPagesShow;
			}
			if($pageMax > $nbPages){
				$pageDebut -= ($pageMax-$nbPages);
				if($pageDebut < 2){
					$pageDebut = 1;
				}				
				$pageMax = $nbPages;
			}
			return array($pageDebut, $pageMax);
		}
	}