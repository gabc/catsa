<?php
	require_once("action/TableauxAction.php");

	$action = new TableauxAction();
	$action->execute();

	require_once("partial/header.php")
?>

	<div class="fancyboxGroup">
		<!--  le rel sert à grouper les images pour le prev/next pour le fancyBox -->
		<!-- TODO: Télécharger les grandes images et les mettres dans le dossier img -->
		<div style="color:#333;">	
		<a class="fancybox" rel="gallery1" href="http://muralecatsa.com/tableaux/bibittes/full/abeille.jpg" title="Tableaux des Bibittes - L&#39;Abeille">
            <img src="./img/abeille.t.jpg" alt="Tableaux des Bibittes - L&#39;Abeille"></a>
        <a class="fancybox" rel="gallery1" href="http://muralecatsa.com/tableaux/bibittes/full/coccinelle.jpg" title="Tableaux des Bibittes - La Coccinelle">
            <img src="./img/coccinelle.t.jpg" alt="Tableaux des Bibittes - La Coccinelle"></a>
        <a class="fancybox" rel="gallery1" href="http://muralecatsa.com/tableaux/bibittes/full/libellule.jpg" title="Tableaux des Bibittes - La Libellule">
            <img src="./img/libellule.t.jpg" alt="Tableaux des Bibittes - La Libellule"></a>
        <a class="fancybox" rel="gallery1" href="http://muralecatsa.com/tableaux/bibittes/full/papillon.jpg" title="Tableaux des Bibittes - Le Papillon">
            <img src="./img/papillon.t.jpg" alt="Tableaux des Bibittes - Le Papillon"></a>
        </div>
	</div>

	<div>
	    <p>Les tableaux Catsa portent les personnages originaux et caractéristiques de la compagnie qui font la joie des enfants sur les murs de leurs chambres depuis 10 ans. Devenus nomades, ces personnages sont des compagnons de choix qui suiveront leurs propriétaires d’un décor à l’autre!</p>

	    <p>Chaque tableau provient d’un collage confectionné et peint à la main, fait avec une harmonie de papiers fins et de peinture acrylique. Imprimée puis découpée individuellement, l’image est ensuite apposée sur un tableau de bois de 12' par 12' et vernie pour préserver ses propriétées.  Une bande de papier décoratif orne le côté des tableaux de chaque collection. Prenez plaisir à les combiner, nos personnages adorent être bien entourés!</p>

	</div>
<?php require_once("partial/footer.php");
