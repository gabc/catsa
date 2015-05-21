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

			$diff = floor($this->nbPagesShow/2);

			$this->pageDebut = $currentPage - $diff;
			$this->pageMax = $currentPage + $diff;

			if($this->pageDebut < 2){
				$this->pageDebut = 1;

				$this->pageMax = $this->nbPagesShow;
			}
			if($this->pageMax > $this->nbPages){
				$this->pageDebut -= ($this->pageMax-$this->nbPages);
				if($this->pageDebut < 2){
					$this->pageDebut = 1;
				}				
				$this->pageMax = $this->nbPages;
			}

			$this->creations = CreationDAO::getNbCreations(($_GET["page"]-1)*$this->nbResultPerPage,
															$this->nbResultPerPage);
		}
	}
