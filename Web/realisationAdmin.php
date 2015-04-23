<?php
	require_once("action/RealisationAdminAction.php");

	$action = new RealisationAdminAction();
	$action->execute();

	require_once("partial/header_admin.php")
?>
    <a class="btn btn-lg btn-primary" href="modifRealisationAdmin.php" role="button">Ajouter</a>
  </div>
<?php require_once("partial/footer_admin.php");
