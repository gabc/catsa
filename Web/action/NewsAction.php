<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/NewsDAO.php");

	class NewsAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
		}

		public function getAllNews(){
			return NewsDAO::getAllNews();
		}
	}
