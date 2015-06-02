<?php
/* -----------------------------------------------------
 *					                       				*
 *    Projet synthèse : H2015	           				*
 *    Fait Par : François Genest et Gabriel Beauchamp	*
 *					                       				*
 *----------------------------------------------------- */
?>
<?php
	require_once("action/NousAction.php");

	$action = new NousAction();
	$action->execute();

	require_once("partial/header.php")
?>
	<div class="clear contenu">
		<p><?=$action->getNousTexte() ?></p>
	</div>
<?php require_once("partial/footer.php");
