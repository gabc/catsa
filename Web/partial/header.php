<?php
/* -----------------------------------------------------
 *                                                      *
 *    Projet synthèse : H2015                           *
 *    Fait Par : François Genest et Gabriel Beauchamp   *
 *                                                      *
 *----------------------------------------------------- */
?>
<?php
   require_once("partial/head_base.php");
?>
  	<link type="text/css" href="/Web/css/pikachoose-classic-theme.css" rel="stylesheet">
   
  	<script type="text/javascript" src="/Web/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Web/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/Web/js/jquery.pikachoose.full.js"></script>
   	<script type="text/javascript" src="/Web/js/javascript.js"></script>
   	<script type="text/javascript" src="/Web/js/client.js"></script>

    <link type="text/css" href="/Web/css/global.css" rel="stylesheet">
    
   	  <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="/Web/js/fancyBox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="/Web/js/fancyBox/source/jquery.fancybox.css" type="text/css" media="screen">
    <script type="text/javascript" src="/Web/js/fancyBox/source/jquery.fancybox.pack.js"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="/Web/js/fancyBox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen">
    <script type="text/javascript" src="/Web/js/fancyBox/source/helpers/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="/Web/js/fancyBox/source/helpers/jquery.fancybox-media.js"></script>

    <link rel="stylesheet" href="/Web/js/fancyBox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen">
    <script type="text/javascript" src="/Web/js/fancyBox/source/helpers/jquery.fancybox-thumbs.js"></script>
  </head>
     
    <body>

      <?php
        require_once("partial/header_base.php");
      ?>
       <div class = "pikachoose-classic">
        <ul id="pikame"></ul>
      </div>
      <div id="ombre">
        <img src="/Web/img/ombre.jpg" width="857" alt="ombre">
      </div>

      <script>
        var images = [];
        <?php foreach(CommonAction::getSlideShows() as $img){ ?>
          images.push({"image":"<?= $img['IMAGESLIDESHOW'] ?>",
                       "caption":"<?= $img['DESCRIPTION'] ?>",
                       "link":"javascript:void($(\"#pikame\").data(\"pikachoose\").Next())",
                       "title":"<?= $img['NOM'] ?>"});
        <?php } ?>
      </script>      