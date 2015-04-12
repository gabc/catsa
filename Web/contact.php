<?php
	require_once("action/ContactAction.php");

	$action = new ContactAction();
	$action->execute();

	require_once("partial/header.php")
?>

	<p>L’entreprise Catsa est l'union professionnelle de Catherine Petit et Sarah Bronsard, deux amies passionnées de peinture. Depuis 2003, Catsa conçoit et réalise des murales de tous genres partout au Québec.

Outre les chambres d'enfants, les salles de jeux et les garderies, où Catsa possède une solide expertise, divers projets qui n'ont rien d'enfantin bénéficient également de la touche Catsa : commerces, bureaux, salles d’attente, etc. Chaque décor est unique avec Catsa. Les murales reproduites sur ce site ne sont qu'un aperçu de ce que l’on peut réaliser pour vous.

Une rencontre sur les lieux du projet précède chaque murale. On échange alors sur vos besoins et vos désirs. Un voyage passé, une literie, une passion ou une photo sont autant de points de départ possibles à l'élaboration d'un concept qui sera à la hauteur de vos attentes. Une esquisse vous est envoyée pour approbation avant la réalisation finale de la murale. La peinture utilisée est de haute qualité assurant ainsi un résultat remarquable pendant plusieurs années.</p>

<?php require_once("partial/footer.php");
