<?php
	require_once("action/IndexAction.php");
	require_once("action/DAO/TexteDAO.php");

	$action = new IndexAction();
	$action->execute();

	require_once("partial/header.php")
?>
	<ul>
		<?php foreach ($action->getMess() as $text) { ?>
			<li><?= $text ?></li>
		<?php } ?>
	</ul>
	<?= TexteDAO::getTexte("acceuil") ?>
<?php require_once("partial/footer.php");
