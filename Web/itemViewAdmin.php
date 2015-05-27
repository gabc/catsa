<?php
/* -----------------------------------------------------
 *					                       				*
 *    Projet synthèse : H2015	           				*
 *    Fait Par : François Genest et Gabriel Beauchamp	*
 *					                       				*
 *----------------------------------------------------- */
?>
<?php
	require_once("action/ItemViewAdminAction.php");

	$action = new ItemViewAdminAction();
	$action->execute();

	require_once("partial/header_admin.php")
?>
	<script type="text/javascript" src="js/adminResultRealisation.js"></script>
	<link type="text/css" href="./css/realisationAdmin.css" rel="stylesheet">
    <div class="row">
    	<a class="btn btn-lg btn-primary col-sm-9 col-right" href="<?= $action->linkAjout ?>" role="button">Ajouter</a>
   	</div> 
    	<?php
    	foreach($action->items as $item){ 
    		?>
    		<script>itemType = "<?= $action->itemType ?>"</script>
    		<div class="row">
		    	<div class="panel panel-default col-sm-9 col-right">
		    		<div class="panel-heading">
		    			<h2 class="panel-title nomItem"><?= $item["NOM"] ?></h2>
		  			</div>
		  			<div class="panel-body">
		  				<div class="container-fluid">
		  					<div class="row">
		  						<?php if($action->itemType === "real"){ ?>
				  					<img class="col-md-2 img-rounded imageReal" src="<?= $item["IMAGE"] ?>">
				    				<p class="col-md-7 descriptionReal"><?= $item["DESCRIPTION"] ?></p>
				    				<span class="col-md-1"><input disabled class="slideshowReal" type="checkbox" name="slideshow" value="slideshow" <?= ($item["SLIDESHOW"]) ? "checked" : "" ;?> >Dans le slideshow</span>
				    				<a class="btn col-md-1 modifierReal" data-toggle="modal" href="#stack1" role="button"><span class="glyphicon glyphicon-pencil modifierReal"></span></a>
				    				<a class="btn col-md-1 removeReal" data-toggle="modal" href="#removeRealModal" role="button"><span class="glyphicon glyphicon-remove removeReal"></span></a>

		    				</div>
		    				<div class="row">
		    					<p class="col-md-5"><?php if($item["CATEGORIE"] !== null){ ?>Catégorie: <span class="categorieReal"><?= $item["CATEGORIE"] ?></span> <?php } ?></p>
		    					<p class="col-md-5">Type: <span class="typeReal"><?= $item["TYPE"] ?></span></p>
		    					<?php 
				    			}elseif($action->itemType === "news"){
				    			?>
				    				<span class="texteNews"><?= $item["TEXTE"] ?></span>
				    				<a class="btn modifierNews" data-toggle="modal" href="#modifyNewsModal" role="button"><span class="glyphicon glyphicon-pencil modifierReal"></span></a>
				    				<a class="btn removeNews" data-toggle="modal" href="#removeNewsModal" role="button"><span class="glyphicon glyphicon-remove removeReal"></span></a>	
				    			<?php 
				    			}
				    			?>
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

    	<!-- Dialog - Modifier une news -->
    <script src="js/ckeditor/ckeditor.js"></script>
    <div id="modifyNewsModal" class="modal fade bs-modal-lg" data-replace="true" tabindex="-1" style="display: none;" role="dialog" data-focus-on="input:first" aria-labelledby="newsModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
        	<div class="form-horizontal">
	   			<fieldset>
	            	<div class="modal-header">
	                	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                	<legend class="modal-title">Modifier une news</legend>
	              	</div>
	              	<div class="modal-body">
	              		<div class="form-group">
						    <label class="col-md-2 control-label">Titre</label>
						    <div class="col-md-8">
						     <input id="titreNews" class="form-control" name="titre" required></input>
						    </div>
						 </div>
						 <div class="form-group">
						    <label class="col-md-2 control-label">Texte</label>
						    <div class="col-md-8">
						     <textarea id="texteNewsModal" class="form-control" cols="80" name="editor1" rows="10" ></textarea>
						    </div>
						 </div>
	   					<button class="btn btn-default btn-lg btn-block updateNews">Modifier</button>
	   				</div>
            	</fieldset>
            </div>
	   	</div>
	   </div>
    </div>


    <!-- Dialog - Supprimer une news -->
    <div id="removeNewsModal" class="modal fade bs-modal-lg" data-replace="true" tabindex="-1" role="dialog" data-focus-on="input:first" aria-labelledby="newsModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
        	<div class="form-horizontal">
	   			<fieldset>
	            	<div class="modal-header">
	                	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                	<legend class="modal-title">Voulez-vous vraiment supprimer cette news ?</legend>
	              	</div>
	              	<div class="modal-body">							
	   					 <button class="btn btn-default btn-lg removeNewsModal">Oui</button>
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