<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/CreationDAO.php");

	class RealisationAdminAction extends CommonAction {
		public $creations;
		public $nbPages;
		public $nbResultPerPage = 1;
		public $nbPagesShow = 5;
		public $pageDebut, $pageMax;

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {
			$_SESSION["menuActive"] = "RealisationAdmin.php";
			$this->creations = $this->getCreations();
        	$this->nbPages = ceil(count($this->creations)/$this->nbResultPerPage);

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
		}

		public function getCreations() {
			return CreationDAO::getAllCreations();
		}
	}
