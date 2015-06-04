<?php
/* -----------------------------------------------------
 *					                       				*
 *    Projet synthèse : H2015	           				*
 *    Fait Par : François Genest et Gabriel Beauchamp	*
 *					                       				*
 *----------------------------------------------------- */
?>
<?php
	require_once("action/CommerceAction.php");

	$action = new CommerceAction();
	$action->execute();
?>
	<div class="fancyboxGroup">
		<?php foreach($action->getMurales() as $ts){ ?>
			<a class="fancybox shadow" rel="gallery1" href="/Web/<?= $ts["IMAGE"]?>" title="<?= $ts["DESCRIPTION"]?>">
	        	<img src="/Web/<?= $ts["THUMBNAIL"]?>" alt="<?= $ts["NOM"]?>">
	        </a>
		<?php } ?>
	</div>