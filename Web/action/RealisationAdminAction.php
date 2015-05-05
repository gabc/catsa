<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/CreationDAO.php");

	class RealisationAdminAction extends CommonAction {
		public $nbPages;
		public $creations;
		public $nbResultPerPage = 1;

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {
			$_SESSION["menuActive"] = "RealisationAdmin.php";
			$this->creations = $this->getCreations();
        	$this->nbPages = count($this->creations)/$this->nbResultPerPage;
		}

		public function getCreations() {
			return CreationDAO::getAllCreations();
		}
	}
