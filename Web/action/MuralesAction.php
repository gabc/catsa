<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/CreationDAO.php");

	class MuralesAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
		}

		public function getDeuxMurales(){
			$res = array();
			
			$i = 0;

			$temp = CreationDAO::getMuralesCommerce();
			if(!empty($temp)){
				$res[] = $temp[0];
				$res[$i]["LINK"] = "Commerce";
				$i++;
			}

			$temp = CreationDAO::getMuralesChambre();
			if(!empty($temp)){
				$res[] = $temp[0];
				$res[$i]["LINK"] = "Chambre";
				$i++;
			}
			return $res;
		}
	}
