<?php
	require_once("action/AdminAction.php");

	$action = new AdminAction();
	$action->execute();

	require_once("partial/header.php")
?>
	<p> Fooo </p>
<?php require_once("partial/footer.php");
