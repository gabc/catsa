<?php
	require_once("action/MenuTableauxAction.php");

	$action = new MenuTableauxAction();
	$action->execute();

	require_once("partial/header.php")
?>

	<div>
		<?php foreach (CommonAction::getCategories() as $t) { 
				$crea = $action->getUneImage($t["NOM"]);
				if(!empty($crea)) {?>
					<a href="tableaux.php?categories=<?= $t["NOM"] ?>">
						<img src="<?= $crea[0]["IMAGE"]?>">
						<div><?= $t["NOM"] ?></div>
					</a>
		<?php 	}
			} ?>
		
	</div>
<?php require_once("partial/footer.php");
