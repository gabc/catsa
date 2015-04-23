<?php
	require_once("action/AdminAction.php");

	$action = new AdminAction();
	$action->execute();

	require_once("partial/header_admin.php")
?>

<?php require_once("partial/footer_admin.php");
