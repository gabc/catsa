<?php
	require_once("action/MenuTableauxAction.php");

	$action = new MenuTableauxAction();
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
		<?php foreach (CommonAction::getCategories() as $t) { 
				$crea = $action->getUneImage($t["NOM"]);
				if(!empty($crea)) {?>
					<a href="tableaux.php?categories=<?= $t["NOM"] ?>">
						<img src="<?= $crea[0]["IMAGE"]?>">
						<div><?= "Asd" ?></div>
					</a>
		<?php 	}
			} ?>
		
	</div>
<?php require_once("partial/footer.php");
