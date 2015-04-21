<?php
	require_once("action/CommonAction.php");

	class AjaxAction extends CommonAction {
        public $result;
        
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {
            if ($_POST["action"] === "acceuil"){
                $this->result = "Acceuil";
            } else if ($_POST["action"] == "contact"){
                $this->result = "Contact";
            } else if ($_POST["action"] == "presentation"){
                $this->result = "Presentation";
            }
		}
	}
