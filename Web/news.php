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
				<h2 class="newsdate"><?= $i["CREATED"] ?></h2>
				<div class="clear"></div>
			</div>
			
			<div class="newstexte">
				<?= $i["TEXTE"] ?>
			</div>
			<div class="clear"></div>
		</div>
	<?php } ?>
<?php require_once("partial/footer.php");