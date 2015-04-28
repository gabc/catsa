<?php
	require_once("action/RealisationAdminAction.php");

	$action = new RealisationAdminAction();
	$action->execute();

	require_once("partial/header_admin.php")
?>
	<link type="text/css" href="./css/realisationAdmin.css" rel="stylesheet">
    <div class="row">
    	<a class="btn btn-lg btn-primary col-sm-9 col-right" href="modifRealisationAdmin.php" role="button">Ajouter</a>
   	</div> 
    <?php $i=0;
    	foreach($action->getCreations() as $c) { ?>
    		<div class="row">
		    		<div class="panel panel-default col-sm-9 col-right">
		    		<div class="panel-heading">
		    			<h2 class="panel-title"><?= $c["nom"] ?></h2>
		  			</div>
		  			<div class="panel-body">
		  				<div class="container-fluid">
		  					<img class="col-md-1" src="<?= $c["image"] ?>">
		    				<p class="col-md-4"><?= $c["description"] ?></p>
		    				<span class="col-md-1"><input type="checkbox" name="slideshow" value="slideshow" <?= ($c["slideshow"]) ? "checked" : "" ;?> >Dans le slideshow</span>
		    				<a class="btn col-md-1" href="#" role="button"><span class="glyphicon glyphicon-pencil"></span></a>
		    				<a class="btn col-md-1" href="#" role="button"><span class="glyphicon glyphicon-remove"></span></a>
		    			</div>
		    		</div>
		    	</div>
		    </div>
	    <!-- </div> -->
    <?php } ?>
<?php require_once("partial/footer_admin.php");
