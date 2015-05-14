<?php
	require_once("action/NewsAdminAction.php");

	$action = new NewsAdminAction();
	$action->execute();

	require_once("partial/header_admin.php")
?>
    <script type="text/javascript" src="./js/adminNews.js"></script>
    <script src="js/ckeditor/ckeditor.js"></script>

    <div class="success box">La news s'est bien ajoutée</div>
    <div class="error box">Il y a eu un problème lors de l'ajout de la news</div>
    
    <div id="tabs">
      <form method="post" action="newsAdmin.php">
        Titre: <input type="text" name="titre">
        <textarea cols="80" id="editor1" name="editor1" rows="10" ></textarea>
        <button id="formTexte">Sauvegarder</button>
      </form>
    </div>
<?php require_once("partial/footer_admin.php");