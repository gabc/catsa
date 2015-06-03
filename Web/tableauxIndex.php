<?php
/* -----------------------------------------------------
 *					                       				*
 *    Projet synthèse : H2015	           				*
 *    Fait Par : François Genest et Gabriel Beauchamp	*
 *					                       				*
 *----------------------------------------------------- */
?>
<?php
	// require_once("action/MuralesAction.php");

	// $action = new MuralesAction();
	// $action->execute();
?>
<div class="margintop text-center">
	<?php foreach($action->getDeuxMurales() as $ts){ ?>
		<div class="left text-center">
			<a class="fancybox" rel="gallery1" href="murales/<?= $ts["LINK"].".php" ?>" title="<?= $ts["DESCRIPTION"]?>">
		       	<img src="<?= $ts["IMAGE"]?>" alt="<?= $ts["NOM"]?>">
		       	<div><?= $ts["LINK"] ?></div>
		    </a>
	    </div>
	<?php } ?>
</div>
<div class="clear"></div>