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
  <?php require_once("creationForm.php"); ?>

  </fieldset>
</form>
</div>

<?php require_once("partial/footer_admin.php");
