<?php
/* -----------------------------------------------------
 *					                       				*
 *    Projet synthèse : H2015	           				*
 *    Fait Par : François Genest et Gabriel Beauchamp	*
 *					                       				*
 *----------------------------------------------------- */
?>
	    <ul class="pagination">
	    <?php
	    if($_GET["page"] > 1){
	    ?>
	    	<li><a href="/Web/<?= $page ?>/<?= $_GET["page"]-1 ?><?php if(!empty($_GET["item"])){echo '&item='.$_GET["item"];}?>"><span class="glyphicon glyphicon-menu-left"></span></a></li>
	    <?php 
	    }
	    ?>
	    <?php 
	    for($i=$action->pageDebut; ($i >= $action->pageDebut) && ($i <= $action->pageMax) && $i <= $action->nbPages;$i++){
	    ?>
	    	<li <?php if($_GET["page"] ==  $i){echo 'class ="active"'; } ?>><a href="/Web/<?= $page ?>/<?php if(!empty($_GET["item"])){echo $_GET["item"] . '/';}?><?= $i ?>"><?= $i ?></a></li>
	    <?php 
	    }
	    if($_GET["page"] < $action->nbPages){
	    ?>
			<li><a href="/Web/<?= $page ?>/<?= $_GET["page"]+1 ?><?php if(!empty($_GET["item"])){echo '&item='.$_GET["item"];}?>"><span class="glyphicon glyphicon-menu-right"></span></a></li>
		<?php 
	    }
	   	?>
	   	</ul>