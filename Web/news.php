	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!-- Pour la pagination -->
<?php
	require_once("action/NewsAction.php");

	$action = new NewsAction();
	$action->execute();

	require_once("partial/header.php")
?>

	<?php foreach ($action->getAllNews() as $i) { ?>
		<div class="news">
			<div class="newshead">
				<h2 class="newstitle"><?= $i["TITRE"]?></h2>
				<h3 class="newsdate">Date: <?= $i["CREATED"] ?></h3>
				<div class="clear"></div>
			</div>
			
			<div class="newstexte">
				<?= $i["TEXTE"] ?>
			</div>
			<div class="clear"></div>
		</div>
	<div class="center">
	<?php } 
		require_once("pagination.php");
	?>
	</div>
<?php require_once("partial/footer.php");