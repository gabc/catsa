<?php
/* -----------------------------------------------------
 *					                       				*
 *    Projet synthèse : H2015	           				*
 *    Fait Par : François Genest et Gabriel Beauchamp	*
 *					                       				*
 *----------------------------------------------------- */
?>
<?php
	require_once("action/MuralesAction.php");

	$action = new MuralesAction();
	$action->execute();

	require_once("partial/header.php");
?>
<?php 
	if(!empty($_GET["query"])){
		if(strtolower($_GET["query"]) == "chambre"){
			require_once("Chambre.php");
		}else if(strtolower($_GET["query"]) == "commerce"){
			require_once("Commerce.php");
		}else{
		?>
			<script>window.location.href = "/Web/error/404";</script>
		<?php
		}
	}else{
		require_once("muralesIndex.php");
	}
 ?>
<?php require_once("partial/footer.php");
