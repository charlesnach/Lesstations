<?php $bodyClass = 'home'; ?>
<?php $title = 'Connexion'; ?>
<?php $description = ''; ?> 
<?php require('../sections/head.php'); ?>
<!-- CONTENT --> 

  <!-- CARDS HORIZONTAL -->
  <section class="section-spacing">
    <div class="container container--narrow">
      <h3 class="h3">8 séjours trouvés à La plagne</h3>
      <div class='flexbox cards-container c-horizontal'>

        <?php require('../snippets/card-item-horizontal.php'); ?>
        <?php require('../snippets/card-item-horizontal.php'); ?>  
        <?php require('../snippets/card-item-horizontal.php'); ?>
        <?php require('../snippets/card-item-horizontal.php'); ?>         
        
      </div>
    </div>
  </section>

  <section class="section-spacing">
    <div class="container container--narrow">
      <h3 class="h3">Plus de résultats aux alentours</h3>
      <div class='flexbox cards-container c-horizontal'>

        <?php require('../snippets/card-item-horizontal.php'); ?>
        <?php require('../snippets/card-item-horizontal.php'); ?>  
        <?php require('../snippets/card-item-horizontal.php'); ?>
      </div>
    </div>
  </section>
<!-- END CONTENT --> 
<?php require('../sections/footer.php'); ?>




