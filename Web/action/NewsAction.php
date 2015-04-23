<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/NewsDAO.php");

	class NewsAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			$_SESSION["menuActive"] = "news.php";
		}

		public function getNews(){
			return NewsDAO::getNews();
		}
	}
