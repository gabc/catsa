<?php
	require_once("action/LoginAction.php");

	$action = new LoginAction();
	$action->execute();

	require_once("partial/header.php")
?>
	<p> Fooo </p>
<?php require_once("partial/footer.php");
