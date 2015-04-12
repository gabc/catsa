<?php
	require_once("action/LoginAction.php");

	$action = new LoginAction();
	$action->execute();

	require_once("partial/header_admin.php")
?>
	<div class="center">
		<h2>Admin</h2>
		<?php 
			if ($action->wrongLogin) {
		?>
				<div class="error-div"><strong>Erreur : </strong>Connexion erronée</div>
		<?php
			}
		?>

		<form method="post" action="login.php">
		    	<p><input type="text" name="username" value="" placeholder="Nom d'utilisateur"></p>
		    	<p><input type="password" name="pwd" value="" placeholder="Mot de passe"></p>
				<button type="submit">Login</button>
		</form>
	</div>
<?php require_once("partial/footer_admin.php");
