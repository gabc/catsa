<?php
	require_once("action/AdminAction.php");

	$action = new AdminAction();
	$action->execute();

	require_once("partial/header.php")
?>
	<p> Fooo </p>

	<script src="js/ckeditor/ckeditor.js"></script>
	<textarea cols="80" id="editor1" name="editor1" rows="10" >
	</textarea>

	<script>
		CKEDITOR.replace( 'editor1', {
			height: 260
		} );
	</script>

<?php require_once("partial/footer.php");
