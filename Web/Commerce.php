<?php
	require_once("action/CommerceAction.php");

	$action = new CommerceAction();
	$action->execute();

	require_once("partial/header.php")
?>
	<div class="fancyboxGroup">
		<?php foreach($action->getMurales() as $ts){ ?>
			<a class="fancybox shadow" rel="gallery1" href="<?= $ts["IMAGE"]?>" title="<?= $ts["DESCRIPTION"]?>">
	        	<img src="<?= $ts["THUMBNAIL"]?>" alt="<?= $ts["NOM"]?>">
	        </a>
		<?php } ?>
	</div>
	
<?php require_once("partial/footer.php");
