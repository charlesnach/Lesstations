<?php $bodyClass = 'home'; ?>
<?php $title = 'Connexion'; ?>
<?php $description = ''; ?> 
<?php require('../sections/head.php'); ?>
<!-- CONTENT --> 

  <!-- LOGIN -->
  <section class="section-spacing">
    <div class="container container--narrow">
      <h1 class="h2 text-center">J’ai un compte les stations.com</h1>
      <form method="post" action="/login?redirect=%2Fmember" class="adminForm formBox rad16">
        <input type="email" name="email" id="email" placeholder="E-mail" required="">
        <input type="password" name="password" id="password" placeholder="Password" required="">
        <div class="linkBox text-center full-w">
          <button class="button button--primary full-w">Login</button>
          <a href="/forget-password" class="link">I've forgotten my password</a>
        </div>
      </form>
    </div>
  </section>

<!-- END CONTENT --> 
<?php require('../sections/footer.php'); ?>




