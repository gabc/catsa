<?php
	require_once("action/NousAction.php");

	$action = new NousAction();
	$action->execute();

	require_once("partial/header.php")
?>

	<div>
	<p><?= $action->getNousTexte() ?></p>
	</div>
<?php require_once("partial/footer.php");