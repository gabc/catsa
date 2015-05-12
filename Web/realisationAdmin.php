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
    	for($i=($_GET["page"]-1) * $action->nbResultPerPage; 
    		$i < $_GET["page"] * $action->nbResultPerPage && 
    		$i < count($action->creations);$i++){ ?>
    		<div class="row">
		    		<div class="panel panel-default col-sm-9 col-right">
		    		<div class="panel-heading">
		    			<h2 class="panel-title nomReal"><?= $action->creations[$i]["NOM"] ?></h2>
		  			</div>
		  			<div class="panel-body">
		  				<div class="container-fluid">
		  					<div class="row">
			  					<img class="col-md-2 img-rounded imageReal" src="<?= $action->creations[$i]["IMAGE"] ?>">
			    				<p class="col-md-7 descriptionReal"><?= $action->creations[$i]["DESCRIPTION"] ?></p>
			    				<span class="col-md-1"><input disabled class="slideshowReal" type="checkbox" name="slideshow" value="slideshow" <?= ($action->creations[$i]["SLIDESHOW"]) ? "checked" : "" ;?> >Dans le slideshow</span>
			    				<a class="btn col-md-1 modifierReal" data-toggle="modal" href="#stack1" role="button"><span class="glyphicon glyphicon-pencil"></span></a>
			    				<a class="btn col-md-1" href="#" role="button"><span class="glyphicon glyphicon-remove"></span></a>
		    				</div>
		    				<div class="row">
		    					<p class="col-md-5 categorieReal"><?= $action->creations[$i]["CATEGORIE"] ?></p>
		    					<p class="col-md-5 typeReal"><?= $action->creations[$i]["TYPE"] ?></p>
		    				</div>
		    			</div>
		    		</div>
		    	</div>
		    </div>
	    <!-- http://jschr.github.io/bootstrap-modal/bs3.html -->
	    <?php 
	    }
	    ?>
	    <ul class="pagination">
	    <?php
	    if($_GET["page"] > 1){
	    ?>
	    	<li><a href="?page=<?= $_GET["page"]-1 ?>"><span class="glyphicon glyphicon-menu-left"></span></a></li>
	    <?php 
	    }
	    ?>
	    <?php 
	    for($i=$action->pageDebut; ($i >= $action->pageDebut) && ($i <= $action->pageMax) && $i <= $action->nbPages;$i++){
	    ?>
	    	<li <?php if($_GET["page"] ==  $i){echo 'class ="active"'; } ?>><a href="?page=<?= $i ?>"><?= $i ?></a></li>
	    <?php 
	    }
	    if($_GET["page"] < $action->nbPages){
	    ?>
			<li><a href="?page=<?= $_GET["page"]+1 ?>"><span class="glyphicon glyphicon-menu-right"></span></a></li>
		<?php 
	    }
	   	?>
	   	</ul>
	
	<link type="text/css" href="css/bootstrap_patch.css" rel="stylesheet">
	<link type="text/css" href="css/bootstrap-modal.css" rel="stylesheet">
	<script type="text/javascript" src="js/bootstrap-modal.js"></script>
	<script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>

	<!-- Dialog - Modifier une création -->
    <div id="stack1" class="modal fade bs-modal-lg" style="display: none;" data-replace="true" tabindex="-1" style="display: none;" role="dialog" data-focus-on="input:first" aria-labelledby="creationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
        	<form class="form-horizontal" action='realisationAdmin.php' method="POST">
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
							
	   					 <button type="submit" class="btn btn-default btn-lg btn-block">Modifier</button>
	   				</div>
            	</fieldset>
            </form>
	   	</div>
	   </div>
    </div>

<?php
	require_once("categorieModal.php");
	require_once("partial/footer_admin.php");