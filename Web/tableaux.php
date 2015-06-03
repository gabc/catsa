<?php
/* -----------------------------------------------------
 *					                       				*
 *    Projet synthèse : H2015	           				*
 *    Fait Par : François Genest et Gabriel Beauchamp	*
 *					                       				*
 *----------------------------------------------------- */
?>
<?php
	require_once("action/TableauxAction.php");

	$action = new TableauxAction();
	$action->execute();

	require_once("partial/header.php");
?>
<?php 
	if(!empty($_GET["categorie"])){
		require_once("tableauxItem.php");
	}else{
		require_once("tableauxIndex.php");
	}
 ?>
<?php require_once("partial/footer.php");
