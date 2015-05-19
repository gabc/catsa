<?php
	require_once("action/CommerceAction.php");

	$action = new CommerceAction();
	$action->execute();

	require_once("partial/header.php")
?>
	<div class="fancyboxGroup">
		<?php foreach($action->getMurales() as $ts){ ?>
			<a class="fancybox shadow" rel="gallery1" href="<?= $ts["THUMBNAIL"]?>" title="<?= $ts["DESCRIPTION"]?>">
	        	<img src="<?= $ts["IMAGE"]?>" alt="<?= $ts["NOM"]?>">
	        </a>
		<?php } ?>
	</div>
	
<?php require_once("partial/footer.php");
