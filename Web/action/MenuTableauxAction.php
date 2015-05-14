<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/CreationDAO.php");

	class MenuTableauxAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
		}

		public function getUneImage($type){
			return CreationDAO::getTableauxByType($type);
		}
	}