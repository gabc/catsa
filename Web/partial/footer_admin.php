
   	<?php 
  		if(CommonAction::getPage() !== 'login.php' && 
  			CommonAction::getPage() !== 'error.php') {
  	?>
  		<ul id="sideMenuAdmin">
			<li class="ui-widget-header">Gestionnaire de contenu</li>
			<a href="texteAdmin.php"><li>Modifier le texte</li></a>
			<a href="realisationAdmin.php?page=1"><li>Gérer les réalisations</li></a>
			<li class="ui-widget-header">Gestion admin</li>    
			<li>Changement mot de passe</li>
			<li>Création compte</li>
		</ul>
	<?php 
		}
	?>
</div>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
