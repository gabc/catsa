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
    	<?php
    	for($i=($_GET["page"]-1) * $action->nbResultPerPage; 
    		$i < $_GET["page"] * $action->nbResultPerPage && 
    		$i < count($action->creations);$i++){ ?>
    		<div class="row">
		    		<div class="panel panel-default col-sm-9 col-right">
		    		<div class="panel-heading">
		    			<h2 class="panel-title"><?= $action->creations[$i]["NOM"] ?></h2>
		  			</div>
		  			<div class="panel-body">
		  				<div class="container-fluid">
		  					<img class="col-md-2 img-rounded" src="<?= $action->creations[$i]["IMAGE"] ?>">
		    				<p class="col-md-7"><?= $action->creations[$i]["DESCRIPTION"] ?></p>
		    				<span class="col-md-1"><input disabled type="checkbox" name="slideshow" value="slideshow" <?= ($action->creations[$i]["SLIDESHOW"]) ? "checked" : "" ;?> >Dans le slideshow</span>
		    				<a class="btn col-md-1" href="#" role="button"><span class="glyphicon glyphicon-pencil"></span></a>
		    				<a class="btn col-md-1" href="#" role="button"><span class="glyphicon glyphicon-remove"></span></a>
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
	    for($i=0; $i < $action->nbPages;$i++){
	    ?>
	    	<li <?php if($_GET["page"] ==  $i +1){echo 'class ="active"'; } ?>><a href="?page=<?= $i +1 ?>"><?= $i +1 ?></a></li>
	    <?php 
	    }
	    if($_GET["page"] < $action->nbPages){
	    ?>
			<li><a href="?page=<?= $_GET["page"]+1 ?>"><span class="glyphicon glyphicon-menu-right"></span></a></li>
		<?php 
	    }
	   	?>
	   	</ul>
<?php require_once("partial/footer_admin.php");