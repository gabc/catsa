<?php
	require_once("action/TableauxAction.php");

	$action = new TableauxAction();
	$action->execute();

	require_once("partial/header.php")
?>

	<?php foreach($action->getTableauxByCategorie($_GET["categories"]) as $ts){ ?>
		<img src="<?= $ts["IMAGE"]?>">
	<?php } ?>
<?php require_once("partial/footer.php");
