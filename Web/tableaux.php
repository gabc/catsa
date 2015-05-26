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
	<div class="fancyboxGroup">
	<?php foreach($action->getTableauxByCategorie($_GET["categories"]) as $ts){ ?>
		<a class="fancybox" rel="gallery1" href="<?= $ts["THUMBNAIL"]?>" title="<?= $ts["DESCRIPTION"]?>">
        	<img src="<?= $ts["IMAGE"]?>" alt="<?= $ts["NOM"]?>">
        </a>
	<?php } ?>
	</div>
<?php require_once("partial/footer.php");
