<!DOCTYPE html>
<!-- saved from url=(0023)http://muralecatsa.com/ -->
<html class="wf-myriadpro-n3-active wf-myriadpro-n4-active wf-myriadpro-n6-active wf-myriadpro-n7-active wf-myriadpro-n9-active wf-active">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- <link rel="stylesheet" type="text/css" href="./css/catsa-screen.css"> -->
    <link rel="shortcut icon" href="http://muralecatsa.com/favicon.png">
    <meta property="og:image" content="/tableaux/survol/noir_et_blanc.jpg">
    <title>Murales Catsa, Chambres et commerces à Montréal, Laval, Rive-Sud et les environs</title>


    <link type="text/css" href="./css/pikachoose-classic-theme.css" rel="stylesheet">
    <link type="text/css" href="./css/global.css" rel="stylesheet">
    <link type="text/css" href="./css/ckedit.css" rel="stylesheet">
    <link type="text/css" href="./css/jquery-ui.min.css" rel="stylesheet">
    <link type="text/css" href="./css/jquery-ui.theme.min.css" rel="stylesheet">
    <link type="text/css" href="./css/jquery-ui.structure.min.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="./js/jquery.pikachoose.full.js"></script>
    <script type="text/javascript" src="./js/javascript.js"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="./js/fancyBox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="./js/fancyBox/source/jquery.fancybox.css" type="text/css" media="screen">
    <script type="text/javascript" src="./js/fancyBox/source/jquery.fancybox.pack.js"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="./js/fancyBox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen">
    <script type="text/javascript" src="./js/fancyBox/source/helpers/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="./js/fancyBox/source/helpers/jquery.fancybox-media.js"></script>

    <link rel="stylesheet" href="./js/fancyBox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen">
    <script type="text/javascript" src="./js/fancyBox/source/helpers/jquery.fancybox-thumbs.js"></script>
  </head>
  <body class="" style="margin-right: 0px;">

    <div style="width:850px;margin:auto;">
      <header>
        <nav>
          <ul>
            <li <?php if($_SESSION["menuActive"] == 'index.php'){echo 'class ="active"> <img class="active-image" src="./img/coc1.jpg"';} ?> >
              <a href="index.php">Accueil</a>
            </li>
            <li <?php if($_SESSION["menuActive"] == 'murales.php'){echo 'class ="active"> <img class="active-image" src="./img/coc1.jpg"';} ?> >
              <a href="murales.php">Murales</a>
            </li>
            <li <?php if($_SESSION["menuActive"] == 'tableaux.php'){echo 'class ="active"> <img class="active-image" src="./img/coc1.jpg"';} ?> >
              <a href="tableaux.php">Tableaux</a>
            </li>
            <li <?php if($_SESSION["menuActive"] == 'contact.php'){echo 'class ="active"> <img class="active-image" src="./img/coc1.jpg"';} ?> >
              <a href="contact.php">Contact</a>
            </li>
            <li <?php if($_SESSION["menuActive"] == 'news.php'){echo 'class ="active"> <img class="active-image" src="./img/coc1.jpg"';} ?> >
              <a href="news.php">News</a>
            </li>
            <?php  
              if(CommonAction::isLoggedIn())
              {
            ?>
              <li <?php if($_SESSION["menuActive"] == 'admin.php'){echo 'class ="active"> <img class="active-image" src="./img/coc1.jpg"';} ?> >
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