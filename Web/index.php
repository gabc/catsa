<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$action->execute();

	require_once("partial/header.php")
?>
	<ul>
		<?php foreach ($action->getMess() as $text) { ?>
			<li><?= $text ?></li>
		<?php } ?>
	</ul>
	<p><?= $action->getTexte("acceuil") ?></p>
<?php require_once("partial/footer.php");
