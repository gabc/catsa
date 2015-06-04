<?php
/* -----------------------------------------------------
 *					                       				*
 *    Projet synthèse : H2015	           				*
 *    Fait Par : François Genest et Gabriel Beauchamp	*
 *					                       				*
 *----------------------------------------------------- */
?>
<?php
	require_once("action/TableauxItemAction.php");

	$action = new TableauxItemAction();
	$action->execute();
?>
	<div class="fancyboxGroup">
	<?php foreach($action->getTableauxByCategorie($_GET["categorie"]) as $ts){ ?>
		<a class="fancybox" rel="gallery1" href="/Web/<?= $ts["THUMBNAIL"]?>" title="<?= $ts["DESCRIPTION"]?>">
        	<img src="/Web/<?= $ts["IMAGE"]?>" alt="<?= $ts["NOM"]?>">
        </a>
	<?php } ?>
	</div>