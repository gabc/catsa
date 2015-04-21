<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/TexteDAO.php");

	class AjaxAction extends CommonAction {
        public $result;
        
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {
            $this->result = TexteDAO::getTexte($_POST["action"]);
		}
	}
