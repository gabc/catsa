      <!-- Dialog - Ajouter une catégorie -->
    <div id="stack2" class="modal fade bs-modal-lg" data-replace="true" tabindex="-1" data-focus-on="input:first" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <form class="form-horizontal" action='modifRealisationAdmin.php' method="POST">
            <fieldset>
              <div class="modal-header">
                <button type="button" class="close closeStack" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <legend class="modal-title">Ajouter une catégorie</legend>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label class="col-md-2 control-label">Nom *</label>
                  <div class="col-md-4">
                   <input name="nomCategorie" type="text" placeholder="Nom de la catégorie" class="form-control input-md" required>
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
  </div>