<?php
	require_once("action/ContactAction.php");

	$action = new ContactAction();
	$action->execute();

	require_once("partial/header.php")
?>
	<br />
	<form method="post">
  		Adresse Courriel: <input name="email" type="text" /><br />
  		Sujet: <input name="sujet" type="text" /><br />
  		Message:<br />
  		<textarea name="texte" rows="15" cols="40"></textarea><br />
  		Capchatthing: <input name="capchat" type="text" /><br />
  		<input type="submit" value="Submit" />
    </form>
<?php require_once("partial/footer.php");
