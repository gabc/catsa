<?php
	require_once("action/AdminAction.php");

	$action = new AdminAction();
	$action->execute();

	require_once("partial/header_admin.php")
?>

        <form method="post" action="admin.php">
        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	  	<script src="js/ckeditor/ckeditor.js"></script>

<div id="tabs">
  <ul>
    <li><a href="#tab" id="acceuil">Acceuil</a></li>
    <li><a href="#tabs-2" id="contact">Contact</a></li>
    <li><a href="#tabs-3" id="presentation">Presentation</a></li>
  </ul>
  <div id="tabs-1">
   </div>
  <div id="tabs-2">
  </div>
  <div id="tabs-3">
  </div>
</div>
		<textarea cols="80" id="editor1" name="editor1" rows="10" >
		</textarea>
        	<button type="submit">Nouveau texte</button>
        </form>

<?php require_once("partial/footer_admin.php");
