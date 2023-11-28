<?php $bodyClass = 'logement'; ?>
<?php $title = 'Résidence Odalys Bellecôte'; ?>
<?php $description = ''; ?> 
<?php require('../sections/head.php'); ?>
<!-- CONTENT --> 

<!-- LOGIN -->
<section class="section-spacing">
  <div class="container">
    <h1 class='h2 nmb'>Résidence Odalys Bellecôte</h1>
    <p class='size-tiny subbed nmt'>Le Grand Domaine, Saint François Longchamp, France</p>

    <?php require('../snippets/ratings.php'); ?>



    <div class='gallery flexbox'>
      <div class='bigImgContainer imgContainer col-lg-6'>
        <?php echo '<img src="'.SCRIPT_ROOT.'/img/chalet.png">'; ?>
      </div>
      <div class='smallImgContainer flexbox col-lg-6'>
        <div class='imgContainer'>
          <?php echo '<img src="'.SCRIPT_ROOT.'/img/chalet.png">'; ?>
        </div>
        <div class='imgContainer'>
          <?php echo '<img src="'.SCRIPT_ROOT.'/img/chalet.png">'; ?>
        </div>
        <div class='imgContainer'>
          <?php echo '<img src="'.SCRIPT_ROOT.'/img/chalet.png">'; ?>
        </div>
        <div class='imgContainer'>
          <?php echo '<img src="'.SCRIPT_ROOT.'/img/chalet.png">'; ?>
        </div>
      </div>
    </div>


<!--
    <div class="row">
      <div id="demo-test-gallery" class="demo-gallery">
        <a href="https://farm4.staticflickr.com/3894/15008518202_c265dfa55f_h.jpg" data-size="1600x1600" data-med="https://farm4.staticflickr.com/3894/15008518202_b016d7d289_b.jpg" data-med-size="1024x1024" data-author="Folkert Gorter" class="demo-gallery__img--main">
          <img src="https://farm4.staticflickr.com/3894/15008518202_b016d7d289_m.jpg" alt="" />
          <figure>This is dummy caption.</figure>
        </a>
        <a href="https://farm6.staticflickr.com/5591/15008867125_b61960af01_h.jpg" data-size="1600x1068" data-med="https://farm6.staticflickr.com/5591/15008867125_68a8ed88cc_b.jpg" data-med-size="1024x683" data-author="Samuel Rohl">
          <img src="https://farm6.staticflickr.com/5591/15008867125_68a8ed88cc_m.jpg" alt="" />
          <figure>This is dummy caption. It has been placed here solely to demonstrate the look and feel of finished, typeset text.</figure>
        </a>
        <a href="https://farm4.staticflickr.com/3902/14985871946_24f47d4b53_h.jpg" data-size="1600x1067" data-med="https://farm4.staticflickr.com/3902/14985871946_86abb8c56f_b.jpg" data-med-size="1024x683" data-author="Ales Krivec">
          <img src="https://farm4.staticflickr.com/3902/14985871946_86abb8c56f_m.jpg" alt="" />
          <figure>This is dummy caption. It is not meant to be read.</figure>
        </a>
        <a href="https://farm6.staticflickr.com/5584/14985868676_b51baa4071_h.jpg" data-size="1600x1067" data-med="https://farm6.staticflickr.com/5584/14985868676_4b802b932a_b.jpg" data-med-size="1024x683" data-author="Michael Hull">
          <img src="https://farm6.staticflickr.com/5584/14985868676_4b802b932a_m.jpg" alt="" />
          <figure>Dummy caption. It's Greek to you. Unless, of course, you're Greek, in which case, it really makes no sense.</figure>
        </a>
        <a href="https://farm4.staticflickr.com/3920/15008465772_d50c8f0531_h.jpg" data-size="1600x1067" data-med="https://farm4.staticflickr.com/3920/15008465772_383e697089_b.jpg" data-med-size="1024x683" data-author="Thomas Lefebvre">
          <img src="https://farm4.staticflickr.com/3920/15008465772_383e697089_m.jpg" alt="" />
          <figure>It's a dummy caption. He who searches for meaning here will be sorely disappointed.</figure>
        </a>
      </div>
    </div>

    <div id="gallery" class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">

        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>

        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip">
            </div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__center">
            </div>
          </div>
        </div>
      </div>
    </div>
  -->
  </div>
</section>

<!-- CARDS VERTICAL -->
<section class="section-spacing">
  <div class="container">
    <nav class='bookingNavigation'>
      <ul>
        <li class='active'><a href='#description'>Description</a></li>
        <li><a href='#localisation'>Localisation</a></li>
        <li><a href='#environnement'>L'environnement</a></li>
        <li><a href='#a-noter'>À noter</a></li>
      </ul>
    </nav>
    <div class='booking-container'>
      <div class='informations-logement'>
        <div class='prose detailBlock' id="description">
          <h4 class="h6">Description</h4>
          <p>Residence tueda n° 204 - type c1<br>
          Classement 2*pour 4 personnes<br>
          Appartement de charme - label méribel</p>

          <p>Studio avec coin montagne, 4 personnes, 25m², balcon sud, 2ème étage 
          Entrée : coin couchage avec 1 ensemble de lits superposés (80x190) 
          Séjour : 2 banquettes lits simples (80x190) et 1 dessous gigogne (80x190)...</p>
          <div class='link'>Lire la suite</div>
        </div>

        <div class='prose detailBlock' id="localisation">
          <h4 class="h6">Localisation</h4>
          <p>Pistes de ski : Tous les bâtiments sont ski au pied. Un chemin skiable serpente entre les résidences et vous ramènera vers le front de neige principal (à l'Ouest - TSD Marmottes et Bois de l'Ours). Pour les enfants : - Club Cariboo (jardin d'enfant, garderie) géré par l'école "Spirit" au coeur du village. - Club Pioupiou ESF sur Arc 2000 (accès par télécabine) - Rdv ESF et école Spirit au village (sauf cours ESF adulte, rdv à Arc 2000).<br>
          Commerces : Tous commerces autour de la place de l'horloge.<br>
          Centre station : Le village est de conception compacte, quelque soit votre bâtiment vous serez à quelques pas du centre.</p>
          <div class='mapBox rad16'>
            <iframe src="https://snazzymaps.com/embed/535626" width="100%" height="100%" style="border:none;"></iframe>
          </div>
          <a class='button button--outlined' href='#' target='_blank'>Télécharger le plan de la station</a>
        </div>
        <div class='prose detailBlock' id="environnement">
          <h4 class="h6">L'environnement</h4>
          <p>La Résidence Tuéda est en bord de pistes. À la sortie du casier à skis, il vous suffit de prendre la piste rouge de l'aigle pour regagner le départ principal des remontées mécaniques. pour accéder au centre commercial du châtelet, prenez l'ascenseur incliné dans la résidence à côté (environ 50m) ou par la route, marchez pendant 700m.</p>
          <p>C'est à côté du centre commercial que se situe l'arrêt de navette le plus proche : arrêt " châtelet ".<br>L’accès au quartier du hameau et du laitelet se fait via le téléporté des chalets, ouvert de 7h20 à 23h30 en libre accès.<br>La gare de départ se situe à 100 m derrière l’hôtel du ruitor, au départ de la piste de la truite.</p>
          <p>Un arrêt intermédiaire est également disponible au 975, chemin des gentianes pour les résidents du laitelet. pour accéder au quartier du hameau, la gare d’arrivée se trouve au 2025, route du laitelet, entre les résidences Dandy et Boulevard.</p>
        </div>
        <div class='prose detailBlock' id="a-noter">
          <h4 class="h6">À noter</h4>
          <p>Horaires d'ouverture de la réception :<br>
          lundi : 00:00-24:00<br>
          mardi : 00:00-24:00<br>
          mercredi : 00:00-24:00<br>
          jeudi : 00:00-24:00<br>
          vendredi : 00:00-24:00<br>
          samedi : 00:00-24:00<br>
          dimanche : 00:00-24:00</p>

          <p>Remise des clés : Séjour semaine, à partir de 17:00.</p>
          <p>Heure de départ (au plus tard) : 10 heures</p>
        </div>
      </div>
      <div class='sticky booking-form formBox rad16'>
        <form method="post" action="/login?redirect=%2Fmember">
          <select>
            <option value="Value 1">Value 1</option>
            <option value="Value 2">Value 2</option>
            <option value="Value 3">Value 3</option>
            <option value="Value 4">Value 4</option>
          </select>
          <select>
            <option value="Value 1">Value 1</option>
            <option value="Value 2">Value 2</option>
            <option value="Value 3">Value 3</option>
            <option value="Value 4">Value 4</option>
          </select>
          <select>
            <option value="Value 1">Value 1</option>
            <option value="Value 2">Value 2</option>
            <option value="Value 3">Value 3</option>
            <option value="Value 4">Value 4</option>
          </select>
          <select>
            <option value="Value 1">Value 1</option>
            <option value="Value 2">Value 2</option>
            <option value="Value 3">Value 3</option>
            <option value="Value 4">Value 4</option>
          </select>

          <div class="linkBox text-center full-w">
            <a href='../checkout' class="button button--primary full-w">Réserver</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>







<!-- CARDS VERTICAL -->
<section class="section-spacing">
  <div class="container">
    <h3 class="h3">Établissements à proximité</h3>
    <div class='flexbox cards-container c-vertical'>

      <?php require('../snippets/card-item-vertical.php'); ?>
      <?php require('../snippets/card-item-vertical.php'); ?>
      <?php require('../snippets/card-item-vertical.php'); ?>
      <?php require('../snippets/card-item-vertical.php'); ?>

    </div>
  </div>
</section>


<!-- INSTAGRAM FEED -->
<section class="section-spacing">
  <div class="container text-center">
    <h3 class="h3">Ils partagent leurs vacances sur instagram</h3>
    <?php require('../sections/instagram.php'); ?>        
  </div>
</section>



<!-- END CONTENT --> 
<?php require('../sections/footer.php'); ?>




