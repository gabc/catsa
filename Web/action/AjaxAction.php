<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/TexteDAO.php");
	require_once("action/DAO/CreationDAO.php");

	class AjaxAction extends CommonAction {
        public $result;
        
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {
			if ($_POST["action"] === "getRealisation"){
				CreationDAO::getCreation($_POST["nom"]);
			}elseif ($_POST["action"] === "changeTexte") {
				TexteDAO::nouveauMessage($_POST["text"], $_POST["current"]);
			} else {
				$_SESSION["currentTab"] = $_POST["action"];
	            $this->result = TexteDAO::getTexte($_POST["action"]);
       		}
		}
	}
