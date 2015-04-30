<?php
	require_once("action/ModifRealisationAdminAction.php");

	$action = new ModifRealisationAdminAction();
	$action->execute();

	require_once("partial/header_admin.php")
?>
<script type="text/javascript" src="js/adminRealisation.js"></script>

<div class ="col-md-9 col-sm-9 col-sx-9 col-right">
<form class="form-horizontal" enctype="multipart/form-data" method="POST" action="modifRealisationAdmin.php">
  <fieldset>

  <!-- Form Name -->
  <legend>Modification d'une réalisation</legend>
  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-2 control-label">Nom</label>
    <div class="col-md-9">
     <input name="nomReal" type="text" class="form-control input-md" required>
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-2 control-label">Type</label>
    <div class="col-md-8">
      <div class="row">
        <div class="col-xs-4">
          <form method="POST" action="modifRealisationAdmin.php">
            <select id="selectType" class="form-control col-md-4" name="selectType" >
              <?php
                foreach($action->getAllTypes() as $type){
              ?>
                <option><?= $type["NOM"] ?></option>
                <?php
                }
              ?>
            </select>
          </form>
        </div>
        <div class="col-xs-2">
          <label class="control-label">Catégorie</label>
        </div>
        <div class="col-xs-4">
          <input readonly id="categorieReadOnly" class="form-control" name="" type="text">
        </div>
        <div class="col-xs-1">
          <a data-toggle="modal" data-target=".bs-modal-lg"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-2 control-label">Description</label>
    <div class="col-md-8">
     <textarea class="form-control" name="desc" maxlength="200" rows="4" cols="50"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-2 control-label" >Image</label>
      <input id="imageReal" name="imageReal" class="col-md-10" type="file" accept="image/*" required>
   </div>
  <div class="form-group">
   <div class="thumbnail-lg col-md-12">
      <img class="img-thumbnail" id="previewImage"/>
    </div>
  </div>

  <div class="checkbox">
    <label>
      <input type="checkbox" name="slideshow" value="1">Slideshow
    </label>
  </div>

    <button type="submit" class="btn btn-default btn-lg btn-block">Ajouter</button>

    <!-- Dialog - Ajouter une catégorie -->
    <div class="modal fade bs-modal-lg" tabindex="-1" role="dialog" aria-labelledby="serieModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">

        <div class="modal-content">
          <form class="form-horizontal" action='modifRealisationAdmin.php' method="POST">
            <fieldset>
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <legend class="modal-title">Ajouter une catégorie</legend>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label class="col-md-2 control-label">Nom *</label>
                  <div class="col-md-4">
                   <input name="nomCategorie" type="text" placeholder="Nom de la catégorie" class="form-control input-md">
                  </div>
                </div>
              </div> 
            </fieldset>
             <div class="modal-footer">
              <button type="submit" class="btn btn-default btn-lg btn-block">Ajouter</button>
            </div>
          </form>
        </div>
      </div>
    </div>


  </fieldset>
</form>
</div>

<?php require_once("partial/footer_admin.php");
