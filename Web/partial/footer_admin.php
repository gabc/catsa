<?php
/* -----------------------------------------------------
 *					                       				*
 *    Projet synthèse : H2015	           				*
 *    Fait Par : François Genest et Gabriel Beauchamp	*
 *					                       				*
 *----------------------------------------------------- */
?>

   	<?php 
  		if(CommonAction::getPage() !== 'login.php' && 
  			CommonAction::getPage() !== 'error.php') {
  	?>
  		<ul id="sideMenuAdmin">
			<li class="ui-widget-header">Gestionnaire de contenu</li>
			<a href="texteAdmin.php"><li>Modifier le texte</li></a>
			<a href="newsAdmin.php"><li>Ajouter une news</li></a>
			<a href="modifRealisationAdmin.php"><li>Ajouter une réalisation</li></a>
			<a href="realisationAdmin.php?page=1"><li>Gérer les réalisations</li></a>
			<li class="ui-widget-header">Gestion admin</li>    
			<a href="passwordAdmin.php"><li>Changement mot de passe</li></a>
		</ul>
	<?php 
		}
	?>
</div>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
