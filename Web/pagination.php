	    <ul class="pagination">
	    <?php
	    if($_GET["page"] > 1){
	    ?>
	    	<li><a href="?page=<?= $_GET["page"]-1 ?>"><span class="glyphicon glyphicon-menu-left"></span></a></li>
	    <?php 
	    }
	    ?>
	    <?php 
	    for($i=$action->pageDebut; ($i >= $action->pageDebut) && ($i <= $action->pageMax) && $i <= $action->nbPages;$i++){
	    ?>
	    	<li <?php if($_GET["page"] ==  $i){echo 'class ="active"'; } ?>><a href="?page=<?= $i ?>"><?= $i ?></a></li>
	    <?php 
	    }
	    if($_GET["page"] < $action->nbPages){
	    ?>
			<li><a href="?page=<?= $_GET["page"]+1 ?>"><span class="glyphicon glyphicon-menu-right"></span></a></li>
		<?php 
	    }
	   	?>
	   	</ul>