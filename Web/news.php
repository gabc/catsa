<?php
	require_once("action/NewsAction.php");

	$action = new NewsAction();
	$action->execute();

	require_once("partial/header.php")
?>

<?php foreach ($action->getAllNews() as $i) { ?>
		<div>
			<h2><?= $i["TITRE"] . $i["CREATED"] ?></h2>
			<p><?= $i["TEXTE"] ?></p>
		<?php 
		}
		?>
		</div>

<?php require_once("partial/footer.php");