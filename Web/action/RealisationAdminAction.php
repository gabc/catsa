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

	class RealisationAdminAction extends CommonAction {
		public $creations;
		public $nbPages;
		public $nbResultPerPage = 2;
		public $nbPagesShow = 5;
		public $pageDebut, $pageMax;

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {
			$this->nbCreation = CreationDAO::getCountCreation();

        	$this->nbPages = ceil($this->nbCreation/$this->nbResultPerPage);

			$currentPage = $_GET["page"];

			$rep = CommonAction::getPages($this->nbPagesShow,
										  $this->nbPages,
										  $currentPage);

			$this->pageDebut = $rep[0];
			$this->pageMax = $rep[1];

			$this->creations = CreationDAO::getNbCreations(($_GET["page"]-1)*$this->nbResultPerPage,
															$this->nbResultPerPage);
		}
	}
