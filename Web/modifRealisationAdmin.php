<?php
	require_once("action/ModifRealisationAdminAction.php");

	$action = new ModifRealisationAdminAction();
	$action->execute();

	require_once("partial/header_admin.php")
?>
<script type="text/javascript" src="js/adminRealisation.js"></script>

<div class ="col-md-9 col-sm-9 col-sx-9 col-right">
<form class="form-horizontal " amethod="POST" action="modifRealisationAdmin.php">
  <fieldset>

  <!-- Form Name -->
  <legend>Modification d'une réalisation</legend>
  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-2 control-label">Nom</label>
    <div class="col-md-9">
     <input name="firstname" type="text" class="form-control input-md">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-2 control-label">Type</label>
    <div class="col-md-8">
      <div class="row">
        <div class="col-xs-4">
          <form method="POST" action="modifRealisationAdmin.php">
            <select id="selectType" class="form-control col-md-4" name="selectType" >
              <option>Chambre</option>
              <option>Tableaux</option>
            </select>
          </form>
        </div>
        <div class="col-xs-2">
          <label class="control-label">Catégorie</label>
        </div>
        <div class="col-xs-4">
          <input readonly id="categorieReadOnly" class="form-control" type="text">
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
     <textarea class="form-control" maxlength="200" rows="4" cols="50"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-2 control-label" >Image</label>
      <input id="imageFrontUp" name="imageReal" class="col-md-4" type="file" accept="image/*" onchange="loadFile(event)">
      <div class="thumbnail-lg col-md-6">
        <img class="img-thumbnail" src="img/sans_photo.jpg" id="previewImage"/>
      </div>
   </div>

  <div class="checkbox">
    <label>
      <input type="checkbox" value="">Slideshow
    </label>
  </div>

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
                   <input name="nomSerie" type="text" placeholder="Nom de la catégorie" class="form-control input-md">
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
  <button type="submit" class="btn btn-default btn-lg btn-block">Ajouter</button>
</form>
</div>

<?php require_once("partial/footer_admin.php");
