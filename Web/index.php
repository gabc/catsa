<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$action->execute();

	require_once("partial/header.php")
?>
	<p><?= $action->getTexte("acceuil") ?></p>
<?php require_once("partial/footer.php");
