
   	<?php 
  		if($_SESSION["menuActive"] !== 'login.php' && 
  			$_SESSION["menuActive"] !== 'error.php') {
  	?>
  		<ul id="sideMenuAdmin">
			<li class="ui-widget-header">Gestionnaire de contenu</li>
			<li><a href="texteAdmin.php">Modifier le texte</a></li>
			<li><a href="realisationAdmin.php?page=1">Gérer les réalisations</a></li>
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
