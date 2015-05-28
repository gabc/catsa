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
	require_once("action/DAO/TexteDAO.php");
	require_once("action/DAO/CreationDAO.php");
	require_once("action/DAO/NewsDAO.php");

	class AjaxAction extends CommonAction {
        public $result;
        
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {
			foreach ($_POST as $key => $value)
 					echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>" . $value;
			if ($_POST["action"] === "getRealisation"){
				$this->result = CreationDAO::getCreation($_POST["image"],$_POST["type"],
										 $_POST["categorie"],$_POST["nom"],
										 $_POST["slideshow"],$_POST["desc"]);

			}elseif($_POST["action"] === "updateRealisation"){
				$this->result = CreationDAO::updateCreation($_POST["idCreation"], $_POST["image"],
										 $_POST["imageSlideshow"], $_POST["type"],
										 $_POST["categorie"],$_POST["nom"],
										 $_POST["slideshow"],$_POST["desc"]);
			}elseif($_POST["action"] === "updateNews"){
				$news = NewsDAO::getNews($_POST["idAncienNom"], $_POST["idAncienTexte"])[0];
				$this->result = NewsDAO::updateNews($news["ID"],$news["IDTITRE"],$news["IDTEXTE"],
													$_POST["nouveauNom"], $_POST["nouveauTexte"]);
			}elseif($_POST["action"] === "removeRealisation"){
				$this->result = CreationDAO::removeCreation($_POST["idCreation"]);
			}elseif($_POST["action"] === "removeNews"){
				$news = NewsDAO::getNews($_POST["idNom"], $_POST["idTexte"])[0];
				
				$this->result = NewsDAO::removeNews($news["ID"]);
			}elseif ($_POST["action"] === "changeTexte") {
				TexteDAO::nouveauMessage($_POST["text"], $_POST["current"]);
			} else {
				$_SESSION["currentTab"] = $_POST["action"];
	            $this->result = TexteDAO::getTexte($_POST["action"]);
       		}
		}
	}
