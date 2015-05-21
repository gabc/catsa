<!DOCTYPE html>
<html class="wf-myriadpro-n3-active wf-myriadpro-n4-active wf-myriadpro-n6-active wf-myriadpro-n7-active wf-myriadpro-n9-active wf-active">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- <link rel="stylesheet" type="text/css" href="./css/catsa-screen.css"> -->
    <link rel="shortcut icon" href="http://muralecatsa.com/favicon.png">
    <meta property="og:image" content="/tableaux/survol/noir_et_blanc.jpg">
    <title>Murales Catsa, Chambres et commerces à Montréal, Laval, Rive-Sud et les environs</title>

    <link type="text/css" href="css/jquery-ui.css" rel="stylesheet">
    <link type="text/css" href="css/jquery-ui.theme.css" rel="stylesheet">
    <link type="text/css" href="css/jquery-ui.structure.min.css" rel="stylesheet">
  </head>
  <body class="" style="margin-right: 0px;">

    <div style="width:850px;margin:auto;">
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
              <a href="news.php">News</a>
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
      <div style="position:absolute;z-index:-100;">
        <img src="./img/cocinelles.jpg" id="coc" style="position:relative;left:790px;top:-100px;z-index:-10;">
      </div>