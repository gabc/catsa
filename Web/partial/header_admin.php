<?php
   require_once("partial/header_base.php")
?>

<script type="text/javascript" src="./js/admin.js"></script>

<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> -->
<link type="text/css" href="./css/admin.css" rel="stylesheet">
</head>
<body>
  <div class="center">
  	<?php 
  		if($_SESSION["menuActive"] !== 'login.php' && 
  			$_SESSION["menuActive"] !== 'error.php') {
  	?>
		    <ul id="sideMenuAdmin">
		      <li class="ui-widget-header">Gestionnaire de contenu</li>
		      <li><a href="texteAdmin.php">Modifier le texte</a></li>
		      <li><a href="realisationAdmin.php">Gérer les réalisations</a></li>
		      <li class="ui-widget-header">Gestion admin</li>    
		      <li>Changement mot de passe</li>
		      <li>Création compte</li>
		    </ul>
	<?php 
		}
	?>