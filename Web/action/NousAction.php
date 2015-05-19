<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/TexteDAO.php");
	
	class NousAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
		}

		public function getNousTexte(){
			return TexteDAO::getTexte("contact");
		}
	}
