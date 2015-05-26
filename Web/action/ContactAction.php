<?php
/* -----------------------------------------------------
 *					                       				*
 *    Projet synthèse : H2015	           				*
 *    Fait Par : François Genest et Gabriel Beauchamp	*
 *					                       				*
 *----------------------------------------------------- */
?>
<?php
	require_once("action/CommonAction.php");

	class ContactAction extends CommonAction {
		public $success;
		public $capchat;

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			if(isset($_REQUEST['capchat']) && $_REQUEST['capchat'] === '13') {
				if(isset($_REQUEST['email'])) {
					$admin_email = "address@e3b.org";
	  				$email = $_REQUEST['email'];
					$sujet = $_REQUEST['sujet'];
					$comment = $_REQUEST['texte'];
					$headers = 	'From: '. $email . "\r\n" .
	     					   	'Reply-To: ' . $admin_email . "\r\n" .
	    						'X-Mailer: PHP/' . phpversion();
	  				$this->success = mail($admin_email, $sujet, $comment, $headers);
				} 
			} else if(isset($_REQUEST['capchat']))
				$this->capchat = false;
		}
	}
