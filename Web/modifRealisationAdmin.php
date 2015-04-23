<?php
	require_once("action/ModifRealisationAdminAction.php");

	$action = new ModifRealisationAdminAction();
	$action->execute();

	require_once("partial/header_admin.php")
?>
    <form method="post" action="modifRealisationAdmin.php">
      <h2>Modification d'une réalisation</h2>
      <div>
        <label>Nom</label>
        <input></input>
      </div>
      <div>
        <label>Type</label>
        <select>
          <option value="chambre">Chambre</option>
          <option value="commerce">Commerce</option>
          <option value="tableau">Tableau</option>
        </select>
        <label>Catégorie</label>
        <select disabled>
          <option value="savane">Savane</option>
          <option value="noirBlanc">Noir et blanc</option>
        </select>
      </div>
      <div>
        <label>Description</label>
      </div>
      <div>
        <textarea maxlength="200" rows="4" cols="50"></textarea>
      </div>
      <div class="checkbox">
        <label><input type="checkbox">Slideshow</label>
      </div>
    </form>
  </div>

<?php require_once("partial/footer_admin.php");
