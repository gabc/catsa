<?php
	require_once("action/NewsAction.php");

	$action = new NewsAction();
	$action->execute();

	require_once("partial/header.php")
?>

<?php foreach ($action->getNews() as $i) { ?>
		<div>
		<h2><?= $i["titre"] . $i["date"] ?></h2>
		<p><?= $i["texte"] ?></p>
		</div>
<?php } ?>

<?php require_once("partial/footer.php");