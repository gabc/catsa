<?php
	require_once("action/ContactAction.php");

	$action = new ContactAction();
	$action->execute();

	require_once("partial/header.php")
?>
	<br />
	<div class="success box">Le mail s'est bien envoyé</div>
	<div class="error box">Il y a eu un problème lors de l'envoit</div>
	<div class="warning box">Le capchat n'est pas bon.</div>

	<?php if(isset($action->success))
			if($action->success){ ?>
				<script>showSuccess();</script>
	<?php 	}else{ ?>
				<script>showError();</script>
	<?php 	}
			if(isset($action->capchat) && !$action->capchat){?>
				<script>showWarning();</script>
	<?php 	}?>
	
	<form method="post">
  		Adresse Courriel: <input name="email" type="text" /><br />
  		Sujet: <input name="sujet" type="text" /><br />
  		Message:<br />
  		<textarea name="texte" rows="15" cols="40"></textarea><br />
  		Combien fait 9 et 4: <input name="capchat" type="text" /><br />
  		<input type="submit" value="Submit" />
    </form>
<?php require_once("partial/footer.php");
