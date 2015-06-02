<?php
/* -----------------------------------------------------
 *					                       				*
 *    Projet synthèse : H2015	           				*
 *    Fait Par : François Genest et Gabriel Beauchamp	*
 *					                       				*
 *----------------------------------------------------- */
?>
<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$action->execute();

	require_once("partial/header.php")
?>
<?= var_dump($_GET); ?>
	<div class="clear contenu">
		<p><?= $action->getTexte("acceuil") ?></p>
	</div>
<?php require_once("partial/footer.php");
