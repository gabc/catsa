<?php
/* -----------------------------------------------------
 *					                       				*
 *    Projet synthèse : H2015	           				*
 *    Fait Par : François Genest et Gabriel Beauchamp	*
 *					                       				*
 *----------------------------------------------------- */
?>
<?php
	require_once("action/TableauxAction.php");

	$action = new TableauxAction();
	$action->execute();

	require_once("partial/header.php")
?>
	<div class="margintop">
		<?php foreach (CommonAction::getCategories() as $t) { 
				$crea = $action->getUneImage($t["NOM"]);
				if(!empty($crea)) {?>
					<a href="/Web/tableaux/<?= $t["NOM"] ?>">
						<img src="/Web/<?= $crea[0]["IMAGE"]?>" alt="<?= $crea[0]["NOM"] ?>">
						<div><?= $t["NOM"] ?></div>
					</a>
		<?php 	}
			} ?>
		
	</div>
<?php require_once("partial/footer.php");