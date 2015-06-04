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
			<a class="adminLink" href="/Web/texteAdmin"><li>Modifier le texte</li></a>
			<a class="adminLink" href="/Web/newsAdmin"><li>Ajouter une news</li></a>
			<a class="adminLink" href="/Web/itemViewAdmin/news/1"><li>Gérer les news</li></a>
			<a class="adminLink" href="/Web/modifRealisationAdmin"><li>Ajouter une réalisation</li></a>
			<a class="adminLink" href="/Web/itemViewAdmin/real/1"><li>Gérer les réalisations</li></a>
			<li class="ui-widget-header">Gestion admin</li>    
			<a class="adminLink" href="/Web/passwordAdmin"><li>Changement mot de passe</li></a>
		</ul>
	<?php 
		}
	?>
</div>
	<script src="/Web/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
