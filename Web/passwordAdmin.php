<?php
/* -----------------------------------------------------
 *					                       				*
 *    Projet synthèse : H2015	           				*
 *    Fait Par : François Genest et Gabriel Beauchamp	*
 *					                       				*
 *----------------------------------------------------- */
?>
<?php
	require_once("action/PasswordAdminAction.php");

	$action = new PasswordAdminAction();
	$action->execute();

	require_once("partial/header_admin.php")
?>

<form method="post" action="passwordAdmin.php">
	<div class="minimarge">Ancien mot de passe: <input type="password" name="oldpwd"></div>
	<div class="minimarge">Nouveau mot de passe: <input type="password" name="newpass"></div>
	<div class="minimarge">Verification du nouveau mot de passe: <input type="password" name="newpassverif"></div>
	<button class="minimarge" type="submit">Changer le mot de passe</button>
</form>

<?php require_once("partial/footer_admin.php");