<?php
/* -----------------------------------------------------
 *                                                      *
 *    Projet synthèse : H2015                           *
 *    Fait Par : François Genest et Gabriel Beauchamp   *
 *                                                      *
 *----------------------------------------------------- */
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- <link rel="stylesheet" type="text/css" href="./css/catsa-screen.css"> -->
    <link rel="shortcut icon" href="http://muralecatsa.com/favicon.png">
    <meta property="og:image" content="/tableaux/survol/noir_et_blanc.jpg">

    <link type="text/css" href="css/jquery-ui.css" rel="stylesheet">
    <link type="text/css" href="css/jquery-ui.theme.css" rel="stylesheet">
    <link type="text/css" href="css/jquery-ui.structure.min.css" rel="stylesheet">
    <title><?= CommonAction::getTitle(); ?></title>
    
    <meta name="keywords" content="montreal, montréal, murale, chambre, commerce, tableau">
  </head>
  <body>

    <div>
      <header>
        <nav>
          <ul>
            <li <?php if(CommonAction::getPage() == 'index.php'){echo 'class ="active"> <img class="active-image" src="./img/coc1.jpg"';} ?> >
              <a href="index.php">Accueil</a>
            </li>
            <li <?php if(CommonAction::getPage() == 'murales.php'){echo 'class ="active"> <img class="active-image" src="./img/coc1.jpg"';} ?> >
              <a id="murales" href="murales.php">Murales</a>
              <ul id="muralesMenu">
                <?php $types = CommonAction::getTypes();
                      foreach ($types as $t) { ?>
                        <li><a href="<?= $t['NOM'] ?>.php"><?= $t['NOM'] ?></a></li>
                <?php } ?>
              </ul>
            </li>
            <li <?php if(CommonAction::getPage() == 'menuTableaux.php'){echo 'class ="active"> <img class="active-image" src="./img/coc1.jpg"';} ?> >
              <a id="tableaux" href="menuTableaux.php">Tableaux</a>
            </li>
            <li <?php if(CommonAction::getPage() == 'contact.php'){echo 'class ="active"> <img class="active-image" src="./img/coc1.jpg"';} ?> >
              <a href="contact.php">Contact</a>
            </li>
            <li <?php if(CommonAction::getPage() == 'news.php'){echo 'class ="active"> <img class="active-image" src="./img/coc1.jpg"';} ?> >
              <a href="news.php?page=1">News</a>
            </li>
            <li <?php if(CommonAction::getPage() == 'nous.php'){echo 'class ="active"> <img class="active-image" src="./img/coc1.jpg"';} ?> >
              <a href="nous.php">Nous</a>
            </li>
            <?php  
              if(CommonAction::isLoggedIn())
              {
            ?>
              <li <?php if(preg_match('/admin/i', CommonAction::getPage())){echo 'class ="active"> <img class="active-image" src="./img/coc1.jpg"';} ?> >
                <a href="admin.php">Admin</a>
              </li>
              <li>
                <a href="?logout=true">Déconnexion</a>
              </li>
            <?php 
              }
            ?>
          </ul>
        </nav>
        <h1>catsa</h1>
      </header>
      <div id="divcoc">
        <img src="./img/cocinelles.jpg" id="coc" alt="Cocinelle">
      </div>