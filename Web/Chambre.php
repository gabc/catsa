<?php
/* -----------------------------------------------------
 *					                       				*
 *    Projet synthèse : H2015	           				*
 *    Fait Par : François Genest et Gabriel Beauchamp	*
 *					                       				*
 *----------------------------------------------------- */
?>
<?php
	require_once("action/ChambreAction.php");

	$actionChambre = new ChambreAction();
	$actionChambre->execute();
?>
	<div class="fancyboxGroup">
		<?php foreach($actionChambre->getMurales() as $ts){ ?>
			<a class="fancybox shadow" rel="gallery1" href="/Web/<?= $ts["IMAGE"]?>" title="<?= $ts["DESCRIPTION"]?>">
	        	<img src="/Web/<?= $ts["THUMBNAIL"]?>" alt="<?= $ts["NOM"]?>">
	        </a>
		<?php } ?>
	</div>