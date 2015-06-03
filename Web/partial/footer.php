<?php
/* -----------------------------------------------------
 *                                                      *
 *    Projet synthèse : H2015                           *
 *    Fait Par : François Genest et Gabriel Beauchamp   *
 *                                                      *
 *----------------------------------------------------- */
?>
<div class="infoRangee">
  <p>Points de <strong>vente</strong> des tableaux</p>

  <div class="infoBox">
    <p>Boutique Ciconia</p>
    <small>1493 Laurier Est, Montréal</small>
    <small>514·504·4366</small>
  </div>
  <div class="infoBox">
    <p>Boutique Lili &amp; Théo</p>
    <small>650 Fleury Est, Montréal</small>
    <small>514·544·7181</small>
  </div>
  <div class="infoBox">
    <p>Boutique la Culotte à l'envers</p>
    <small>3162 Masson, Montréal</small>
    <small>514·564·3174</small>
  </div>
</div>

<div class="infoRangee">
  <div class="infoBox">
    <p>Le Parchemin</p>
    <small>505 Ste-Catherine Est, Montréal</small>
    <small>514·845·5243</small>
  </div>
  <div class="infoBox">
    <p>Boutique Pinkiblue</p>
    <small>4278 Ch. Côte de Liesse, V.M.R.</small>
    <small>514·731·3535</small>
  </div>
  <div class="infoBox">
    <p>Charlotte et Charlie</p>
    <small>2600 boulevard Laurier #151, Québec</small>
    <small>418·651·2828</small>
  </div>
</div>



<div class = "ligneBox">
  <div id="facebookBox">
    <a href="http://www.facebook.com/pages/Murale-Catsa/142348105922701" target="_blank"> Suivez-nous!
      <img src="/Web/img/fb.png" style="width:40px;"> 
      <?php 
        $fb_likes = CommonAction::getFacebookLikes();
        echo $fb_likes;
      ?>
    </a>
  </div>
</div>

<div id="contactBox">
  <div>
    <a target="_blank" href="mailto:info@muralecatsa.com?subject=Information%20%C3%A0%20propos%20des%20murales%20Catsa">
      info@muralecatsa.com
    </a>
  </div>
  <div>
    <p>Catherine</p>
    <p>514·385·3530</p>
  </div>
  <p>À <strong>Montréal</strong>, et aux alentours!</p>
</div>
<div id="menuAdmin">
  <a href="admin.php">Admin</a>
</div>
<div class="blankSpace"></div>

</div>
</body>
</html>