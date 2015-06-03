<?php
/* -----------------------------------------------------
 *					                       				*
 *    Projet synthèse : H2015	           				*
 *    Fait Par : François Genest et Gabriel Beauchamp	*
 *					                       				*
 *----------------------------------------------------- */
?>
<?php
	require_once("action/ErrorAction.php");

	$action = new ErrorAction();
	$action->execute();
	require_once("partial/header_admin.php")
?>
	<div class="center">

		<?php
			if(!empty($_GET["code"])){
				if ($_GET["code"] === '404') {
				?>
					<h3>Perdu ? Va sur une page qui existe !</h3>
					<img src="/Web/img/error_404.jpg">
					<?php
				}
				else if ($_GET["code"] === 500) {
				?>
					<h3>Erreur ! Zut !</h3>
					<img src="/Web/img/error_500.jpg">
					<?php 
				}
			}
		?>
	</div>
<?php
	require_once("partial/footer_admin.php");