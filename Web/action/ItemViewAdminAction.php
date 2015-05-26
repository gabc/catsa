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
	require_once("action/DAO/CreationDAO.php");
	require_once("action/DAO/NewsDAO.php");

	class ItemViewAdminAction extends CommonAction {
		public $items;
		public $nbPages;
		public $nbResultPerPage = 2;
		public $nbPagesShow = 5;
		public $pageDebut, $pageMax;
		public $itemType;
		public $linkAjout;

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {
			$this->itemType = $_GET["item"];
			if($this->itemType == "real"){
				$this->nbItem = CreationDAO::getCountCreation();
				$this->linkAjout = "modifRealisationAdmin.php";
			}
			else{ //news
				$this->nbItem = NewsDAO::getCountNews();
				$this->linkAjout = "newsAdmin.php";
			}

        	$this->nbPages = ceil($this->nbItem/$this->nbResultPerPage);

			$currentPage = $_GET["page"];

			$rep = CommonAction::getPages($this->nbPagesShow,
										  $this->nbPages,
										  $currentPage);

			$this->pageDebut = $rep[0];
			$this->pageMax = $rep[1];

			if($this->itemType == "real")
				$this->items = CreationDAO::getNbCreations(($_GET["page"]-1)*$this->nbResultPerPage,
															$this->nbResultPerPage);
			else //news
				$this->items = NewsDAO::getNbNews(($_GET["page"]-1)*$this->nbResultPerPage,
															$this->nbResultPerPage);
		}
	}
