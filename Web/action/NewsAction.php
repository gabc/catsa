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
	require_once("action/DAO/NewsDAO.php");

	class NewsAction extends CommonAction {
		public $news;
		public $nbPages;
		public $nbResultPerPage = 2;
		public $nbPagesShow = 5;
		public $pageDebut, $pageMax;

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			$this->nbNews = NewsDAO::getCountNews();

        	$this->nbPages = ceil($this->nbNews/$this->nbResultPerPage);

			$currentPage = $_GET["page"];

			$rep = CommonAction::getPages($this->nbPagesShow,
										  $this->nbPages,
										  $currentPage);

			$this->pageDebut = $rep[0];
			$this->pageMax = $rep[1];

			$this->news = NewsDAO::getNbNews(($_GET["page"]-1)*$this->nbResultPerPage,
															$this->nbResultPerPage);
		}

		public function getAllNews(){
			return $this->news;
		}
	}
