<?php
/* -----------------------------------------------------
 *                                                      *
 *    Projet synthèse : H2015                           *
 *    Fait Par : François Genest et Gabriel Beauchamp   *
 *                                                      *
 *----------------------------------------------------- */
?>
    <div>
      <header>
        <nav>
          <ul>
            <li <?php if(CommonAction::getPage() == 'index.php'){echo 'class ="active"> <img class="active-image" src="/Web/img/coc1.jpg"';} ?> >
              <a href="/Web/index">Accueil</a>
            </li>
            <li <?php if(CommonAction::getPage() == 'murales.php'){echo 'class ="active"> <img class="active-image" src="/Web/img/coc1.jpg"';} ?> >
              <a id="murales" href="/Web/murales">Murales</a>
              <ul id="muralesMenu">
                <?php $types = CommonAction::getTypes();
                      foreach ($types as $t) { ?>
                        <li><a href="/Web/murales/<?= $t['NOM'] ?>"><?= $t['NOM'] ?></a></li>
                <?php } ?>
              </ul>
            </li>
            <li <?php if(CommonAction::getPage() == 'tableaux.php'){echo 'class ="active"> <img class="active-image" src="/Web/img/coc1.jpg"';} ?> >
              <a id="tableaux" href="/Web/tableaux">Tableaux</a>
            </li>
            <li <?php if(CommonAction::getPage() == 'contact.php'){echo 'class ="active"> <img class="active-image" src="/Web/img/coc1.jpg"';} ?> >
              <a href="/Web/contact">Contact</a>
            </li>
            <li <?php if(CommonAction::getPage() == 'news.php'){echo 'class ="active"> <img class="active-image" src="/Web/img/coc1.jpg"';} ?> >
              <a href="/Web/news/1">News</a>
            </li>
            <li <?php if(CommonAction::getPage() == 'nous.php'){echo 'class ="active"> <img class="active-image" src="/Web/img/coc1.jpg"';} ?> >
              <a href="/Web/nous">Nous</a>
            </li>
            <?php  
              if(CommonAction::isLoggedIn())
              {
            ?>
              <li <?php if(preg_match('/admin/i', CommonAction::getPage())){echo 'class ="active"> <img class="active-image" src="/Web/img/coc1.jpg"';} ?> >
                <a href="admin">Admin</a>
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
        <img src="/Web/img/cocinelles.jpg" id="coc" alt="Cocinelle">
      </div>