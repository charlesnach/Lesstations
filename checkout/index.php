<?php $bodyClass = 'logement'; ?>
<?php $title = 'Résidence Odalys Bellecôte'; ?>
<?php $description = ''; ?> 
<?php require('../sections/head.php'); ?>
<!-- CONTENT --> 
<div id="formNavigation" class='container bg_blue stepFollow' activestep="0">
    <ul class="navigationSteps">
        <li class="navStep h6 nmb completed" step="0">
            <div>1</div>
            <span>Informations</span>
        </li>
        <li class="navStep h6 nmb" step="1">
            <div>2</div>
            <span>Coordonnées</span>
        </li>
        <li class="navStep h6 nmb" step="2">
            <div>3</div>
            <span>Finalisation</span>
        </li>
    </ul>
</div>
<div class='container'>
    <div class='checkout-container'>
        <form class="systemGenerator checkout-form" method="post" action="/area" activestep="0">
            <section class="section-spacing">
                <div id="formMain" class='container'>
                    <!-- STEP 0: INFORMATIONS -->
                    <div class="form-section current">
                        <div class='detailBlock'>
                            <div class='prose'>
                                <h3 class="h5">Les voyageurs</h3>
                                <p class='size-large'>Veuillez saisir les noms de tous les voyageurs. Cela vous permettra de vérifier les options supplémentaires choisies pour chaque individu. Chaque réservation doit comporter au moins un passager âgé de 18 ans ou plus.</p>
                            </div>
                            <div class='prose'>
                                <h4 class="h6">Voyageur 1</h4>
                                <p class='size-large'>En qualité de détenteur du dossier, vous êtes la personne de référence pour toute question concernant les détails de votre séjour.</p>
                            </div>
                            <div class="inputBox buildingType flexbox">
                                <input type="text" required id='nom-voyageur-1' name='nom-voyageur-1' placeholder="Nom" class='col-lg-5'>
                                <input type="text" required id='prenom-voyageur-1' name='name-voyageur-1' placeholder="Prénom" class='col-lg-5'>
                                <input type="date" required id='birthday-voyageur-1' name='birthday-voyageur-1' class='col-lg-2'>
                            </div>

                            <div class='prose'>
                                <h4 class="h6">Voyageur 2</h4>
                            </div>
                            <div class="inputBox buildingType flexbox">
                                <input type="text" required id='nom-voyageur-2' name='nom-voyageur-2' placeholder="Nom" class='col-lg-5'>
                                <input type="text" required id='prenom-voyageur-2' name='name-voyageur-2' placeholder="Prénom" class='col-lg-5'>
                                <input type="date" required id='birthday-voyageur-2' name='birthday-voyageur-2' class='col-lg-2'>
                            </div>
                        </div>

                        <div class='detailBlock'>
                            <div class='prose'>
                                <h3 class="h5">Programme départ 18 : 25</h3>
                                <p class='size-large'>Vous pensez partir dans le cadre du programme et/ou bénéficier de l'aide.</p>
                            </div>
                        </div>

                        <div class='detailBlock'>
                            <div class='prose'>
                                <h3 class="h5">Forfait de ski, Matériel</h3>
                                <p class='size-large'>Protégez-vous et vos compagnons de voyage contre d'éventuels problèmes de santé, accidents ou pertes de bagages. Pour découvrir les différentes couvertures d'assurance adaptées à chaque situation, veuillez consulter la section</p>
                            </div>
                        </div>
                    </div>
                    <!-- STEP 1: COORDONNÉES -->
                    <div class="form-section">
                        <h3 class="Heading u-h4 uppercase">Coordonnées</h3>
                        <div class="inputBox">
                            <h6>1. Construction year</h6>
                            <input type="number" class="smallerInput" name="buildingYear" id="buildingYear" value="" placeholder="1975" min="1500" required="" data-parsley-group="block-1">
                        </div>
                        <div class="inputBox">
                            <h6>2. Primary used material</h6>
                            <div class="checkbox_container tighter">
                                <input name="home_material" id="wood" type="radio" class="radio_btn" value="Wood" checked="" data-parsley-group="block-1">
                                <label for="wood" class="radio_btnLabel" data-image="">Wood</label>
                                <input name="home_material" id="concret" type="radio" class="radio_btn" value="Concret" data-parsley-group="block-1">
                                <label for="concret" class="radio_btnLabel" data-image="">Concret</label>
                                <input name="home_material" id="bricks" type="radio" class="radio_btn" value="Bricks" data-parsley-group="block-1">
                                <label for="bricks" class="radio_btnLabel" data-image="">Bricks</label>
                                <input name="home_material" id="natural_stone" type="radio" class="radio_btn" value="Natural stone" data-parsley-group="block-1">
                                <label for="natural_stone" class="radio_btnLabel" data-image="">Natural stone</label>
                                <input name="home_material" id="steel" type="radio" class="radio_btn" value="Steel" data-parsley-group="block-1">
                                <label for="steel" class="radio_btnLabel" data-image="">Steel</label>
                                <input name="home_material" id="home_material_other" type="radio" class="radio_btn" value="Other" data-parsley-group="block-1">
                                <label for="home_material_other" class="radio_btnLabel" data-image="">Other</label>
                            </div>
                        </div>
                        <div class="inputBox">
                            <h6>3. Building type</h6>
                            <div class="checkbox_container tighter">
                                <input name="house_type" id="Detached" type="radio" class="radio_btn" value="Detached" checked="" data-parsley-group="block-1">
                                <label for="Detached" class="radio_btnLabel" data-image="">Detached</label>
                                <input name="house_type" id="Semi-detached" type="radio" class="radio_btn" value="Semi-detached" data-parsley-group="block-1">
                                <label for="Semi-detached" class="radio_btnLabel" data-image="">Semi-detached</label>
                            </div>
                        </div>
                        <div class="inputBox">
                            <h6>4. Building floor space</h6>
                            <div class="inputWithUnit smallerInput">
                                <input name="house-size" id="house-size" type="number" value="" class="" placeholder="0" required="" data-parsley-group="block-1">
                                <div class="unit">m²</div>
                            </div>
                        </div>
                        <div class="inputBox peopleCapacityBox">
                            <h6 class="peopleCapacity">5. How many people live in your household?</h6>
                            <input name="people" id="household" type="number" value="" class="smallerInput" placeholder="0" required="" data-parsley-group="block-1">
                        </div>
                        <div class="inputBox flatsNumber hidden">
                            <h6>6. How many flats are in the apartment complex?</h6>
                            <input name="flats" id="flatsNumber" type="number" value="" class="smallerInput" placeholder="0" data-parsley-group="block-1">
                        </div>
                        <div class="inputBox hotelRooms hidden">
                            <h6>6. How many rooms does your hotel have?</h6>
                            <input name="rooms" id="hotelRooms" type="number" value="" class="smallerInput" placeholder="0" data-parsley-group="block-1">
                        </div>
                    </div>
                    <!-- STEP 2: FINALISATION -->
                    <div class="form-section">
                        <h3 class="Heading u-h4">Finalisation</h3>
                        <button type="submit" name="action" value="" class="button" data-parsley-group="block-2">Create my account</button>
                    </div>

                    <!-- FORM NAVIGATION -->
                    <div class="form-navigation">
                        <div class="next_prev_nav">
                            <!--<button type="button" class="previous button button--primary" style="display: none;">Previous</button>-->
                            <button type="button" class="next button button--primary full-w">Étape suivante</button>
                        </div>
                        <span class="clearfix"></span>
                    </div>
                </div>
            </section>
        </form>
        <div class="sticky">
            <?php require('../snippets/card-item-vertical.php'); ?>
        </div>
    </div>
</div>


<script type="text/javascript">
/* PARSLEY */
$(function () {
  var $sections = $('.form-section');

  function navigateTo(index) {
    // Mark the current section with the class 'current'
    $sections
        .removeClass('current')
        .eq(index)
        .addClass('current');
    // Show only the navigation buttons that make sense for the current section:
    $('.form-navigation .previous').toggle(index > 0);
    var atTheEnd = index >= $sections.length - 1;
    $('.form-navigation .next').toggle(!atTheEnd);
    $('.form-navigation [type=submit]').toggle(atTheEnd);
  }

  function curIndex() {
    // Return the current index by looking at which section has the class 'current'
    return $sections.index($sections.filter('.current'));
  }

  // Previous button is easy, just go back
  $('.form-navigation .previous').click(function() {
    $('.systemGenerator').attr('activestep', curIndex() - 1);
    $('.stepFollow').attr('activestep', curIndex() - 1);
    navigateTo(curIndex() - 1);
  });

  // JUMP TO A STEP
  $('.navStep').click(function() {
    var jumpTo = $(this).attr('step');
    $('.systemGenerator').attr('activestep', jumpTo);
    $('.stepFollow').attr('activestep', jumpTo);
    navigateTo(jumpTo);
  });

  // Next button goes forward if current block validates
  $('.form-navigation .next').click(function() {
    $(window).scrollTop(0);
    $('.systemGenerator').parsley().whenValidate({
      group: 'block-' + curIndex()
    }).done(function() {
      $('.navStep[step=' + Math.floor(curIndex() + 1) + ']').addClass('completed');
      $('.systemGenerator').attr('activestep', curIndex() + 1); 
      $('.stepFollow').attr('activestep', curIndex() + 1); 
      navigateTo(curIndex() + 1);
    });
  });

  // Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
  $sections.each(function(index, section) {
    $(section).find(':input').attr('data-parsley-group', 'block-' + index);
  });
  navigateTo(0); // Start at the beginning
});
</script>

<!-- END CONTENT --> 
<?php require('../sections/footer-mini.php'); ?>

