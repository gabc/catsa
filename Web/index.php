<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$action->execute();

	require_once("partial/header.php")
?>
	<div class="fancyboxGroup">
		<!--  le rel sert à grouper les images pour le prev/next pour le fancyBox -->
		<!-- TODO: Télécharger les grandes images et les mettres dans le dossier img -->
		<a class="fancybox" rel="gallery1" href="http://muralecatsa.com/murales/chambres/full/alys.jpg" title="Murale de Chambre - Les Fleurs d'Alys">
			<img src="./img/alys.t.jpg" alt="Murale de Chambre - Les Fleurs d'Alys"></a>
		<a class="fancybox" rel="gallery1" href="http://muralecatsa.com/murales/chambres/full/arctique.jpg" title="Murale de Chambre - L'Arctique">
			<img src="./img/arctique.t.jpg" alt="Murale de Chambre - L'Arctique" ></a>
		<a class="fancybox" rel="gallery1" href="http://muralecatsa.com/murales/chambres/full/chateau1.jpg" title="Murale de Chambre - Le Chateau de Matisse">
			<img src="./img/chateau1.t.jpg" alt="Murale de Chambre - Le Chateau de Matisse"></a>
		<a class="fancybox" rel="gallery1" href="http://muralecatsa.com/murales/chambres/full/chateau2.jpg" title="Murale de Chambre - Le Chateau de Matisse">
			<img src="./img/chateau2.t.jpg" alt="Murale de Chambre - Le Chateau de Matisse"></a>
		<a class="fancybox" rel="gallery1" href="http://muralecatsa.com/murales/chambres/full/chevaux.jpg" title="Murale de Chambre - Le Chateau de Matisse">
			<img src="./img/chevaux.t.jpg" alt="Murale de Chambre - Les Chevaux"></a>
	</div>
<?php require_once("partial/footer.php");
