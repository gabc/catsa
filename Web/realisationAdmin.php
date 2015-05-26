<?php
	require_once("action/RealisationAdminAction.php");

	$action = new RealisationAdminAction();
	$action->execute();

	require_once("partial/header_admin.php")
?>
	<script type="text/javascript" src="js/adminResultRealisation.js"></script>
	<link type="text/css" href="./css/realisationAdmin.css" rel="stylesheet">
    <div class="row">
    	<a class="btn btn-lg btn-primary col-sm-9 col-right" href="modifRealisationAdmin.php" role="button">Ajouter</a>
   	</div> 
    	<?php
    	foreach($action->creations as $creation){ 
    		?>
    		<div class="row">
		    		<div class="panel panel-default col-sm-9 col-right">
		    		<div class="panel-heading">
		    			<h2 class="panel-title nomReal"><?= $creation["NOM"] ?></h2>
		  			</div>
		  			<div class="panel-body">
		  				<div class="container-fluid">
		  					<div class="row">
			  					<img class="col-md-2 img-rounded imageReal" src="<?= $creation["IMAGE"] ?>">
			    				<p class="col-md-7 descriptionReal"><?= $creation["DESCRIPTION"] ?></p>
			    				<span class="col-md-1"><input disabled class="slideshowReal" type="checkbox" name="slideshow" value="slideshow" <?= ($creation["SLIDESHOW"]) ? "checked" : "" ;?> >Dans le slideshow</span>
			    				<a class="btn col-md-1 modifierReal" data-toggle="modal" href="#stack1" role="button"><span class="glyphicon glyphicon-pencil modifierReal"></span></a>
			    				<a class="btn col-md-1 removeReal" data-toggle="modal" href="#removeRealModal" role="button"><span class="glyphicon glyphicon-remove removeReal"></span></a>
		    				</div>
		    				<div class="row">
		    					<p class="col-md-5"><?php if($creation["CATEGORIE"] !== null){ ?>Catégorie: <span class="categorieReal"><?= $creation["CATEGORIE"] ?></span> <?php } ?></p>
		    					<p class="col-md-5">Type: <span class="typeReal"><?= $creation["TYPE"] ?></span></p>
		    				</div>
		    			</div>
		    		</div>
		    	</div>
		    </div>
	    
	    <?php 
	    }
	    require_once("pagination.php");
	    ?>

	<link type="text/css" href="css/bootstrap_patch.css" rel="stylesheet">
	<link type="text/css" href="css/bootstrap-modal.css" rel="stylesheet">
	<script type="text/javascript" src="js/bootstrap-modal.js"></script>
	<script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>

	<!-- Double Modal: http://jschr.github.io/bootstrap-modal/bs3.html -->
	<!-- Dialog - Modifier une création -->
    <div id="stack1" class="modal fade bs-modal-lg" data-replace="true" tabindex="-1" style="display: none;" role="dialog" data-focus-on="input:first" aria-labelledby="creationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
        	<div class="form-horizontal">
	   			<fieldset>
	            	<div class="modal-header">
	                	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                	<legend class="modal-title">Modifier une création</legend>
	              	</div>
	              	<div class="modal-body">
	              	<script type="text/javascript" src="js/adminRealisation.js"></script>
	              		 <?php
							  require_once("action/ModifRealisationAdminAction.php");
								
							  $action = new ModifRealisationAdminAction();
							  $action->execute();
							  require_once("creationForm.php");
							?>
							
	   					 <button class="btn btn-default btn-lg btn-block updateReal">Modifier</button>
	   				</div>
            	</fieldset>
            </div>
	   	</div>
	   </div>
    </div>

    <!-- Dialog - Supprimer une création -->
    <div id="removeRealModal" class="modal fade bs-modal-lg" data-replace="true" tabindex="-1" role="dialog" data-focus-on="input:first" aria-labelledby="creationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
        	<div class="form-horizontal">
	   			<fieldset>
	            	<div class="modal-header">
	                	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                	<legend class="modal-title">Voulez-vous vraiment supprimer cette réalisation ?</legend>
	              	</div>
	              	<div class="modal-body">							
	   					 <button class="btn btn-default btn-lg removeRealModal">Oui</button>
	   					 <button class="btn btn-default btn-lg" data-dismiss="modal">Non</button>
	   				</div>
            	</fieldset>
            </div>
	   	</div>
	   </div>
    </div>

<?php
	require_once("categorieModal.php");
	require_once("partial/footer_admin.php");