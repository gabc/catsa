<?php
	require_once("action/CommonAction.php");

	class ContactAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			if(isset($_REQUEST['email'])) {
				$admin_email = "address@e3b.org";
  				$email = $_REQUEST['email'];
				$sujet = $_REQUEST['sujet'];
				$comment = $_REQUEST['texte'];
				$headers = 	'From: '. $email . "\r\n" .
     					   	'Reply-To: ' . $admin_email . "\r\n" .
    						'X-Mailer: PHP/' . phpversion();
  				$reponse = mail($admin_email, $sujet, $comment, $headers);
			}
		}
	}
