<!-- <script type="text/javascript" src="js/modal.js"></script> -->

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
          <select disabled id="selectCategorie" class="form-control col-md-4" name="selectCategorie" >
              <?php
                foreach($action->getAllCategories() as $categorie){
              ?>
                <option><?= $categorie["NOM"] ?></option>
                <?php
                }
              ?>
            </select>
        </div>
        <div class="col-xs-1">
          <a data-toggle="modal" data-target=".bs-modal-lg" href="#stack2"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a>
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
    <div class="form-group">
    <label class="col-md-2 control-label" >Image slideshow</label>
      <input id="imageSlideshow" name="imageSlideshow" class="col-md-10" type="file" accept="image/*" required>
   </div>
  <div class="form-group">
   <div class="thumbnail-lg col-md-12">
      <img class="img-thumbnail" id="previewImageSlideshow"/>
    </div>
  </div>

  <div class="checkbox">
    <label>
      <input type="checkbox" name="slideshow" value="1">Slideshow
    </label>
  </div>