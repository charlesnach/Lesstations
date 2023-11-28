<!doctype html>
  <html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Les Stations | <?= $title ?></title>
        <meta name="description" content='<?= $description ?>'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		    <link rel=icon href="" type="image/png">
        <meta property="og:url" content="https://www.mojodealers.com" />
        <meta property="og:title" content="<?= $title ?>" />
        <meta property="og:image" content="" />
        <meta property="og:description" content="<?= $description ?>" />
        <meta property="og:type" content="Web" />

        <?php define( 'SCRIPT_ROOT', 'http://localhost:8888/lesstations.com' ); ?>
        <?php echo '<link rel="icon" type="image/x-icon" href="'.SCRIPT_ROOT.'/img/fav.png">'; ?>

        <link rel='stylesheet' href='https://unpkg.com/carbon-components@latest/css/carbon-components.css'>

        <!-- photoswipe -->
        <?php echo '<link rel="stylesheet" type="text/css" href="'.SCRIPT_ROOT.'/assets/css/photoswipe.css">'; ?>
        <link rel='stylesheet' href='http://photoswipe.com/dist/photoswipe.css?v=4.1.1-1.0.4'>
        <link rel='stylesheet' href='http://photoswipe.com/dist/default-skin/default-skin.css?v=4.1.1-1.0.4'>


      	<?php echo '<link rel="stylesheet" type="text/css" href="'.SCRIPT_ROOT.'/assets/css/style.css">'; ?>
        <?php echo '<link rel="stylesheet" type="text/css" href="'.SCRIPT_ROOT.'/assets/css/checkout.css">'; ?>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    </head>
    <body class="<?= $bodyClass ?>">
              <header class='container flexbox'>
    <div>
      <?php echo '<a href="'.SCRIPT_ROOT.'/">'; ?>
        <?php echo '<img src="'.SCRIPT_ROOT.'/img/logo.svg">'; ?>
      </a>
    </div>
    <div class="text-center">
      Départ 18 : 25
    </div>
    <div class='flexbox flex-end'>
      <a href='#' class='ico blue'>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 2C6.47727 2 2 6.47727 2 12C2 17.5227 6.47727 22 12 22C17.5227 22 22 17.5227 22 12C22 6.47727 17.5236 2 12 2ZM20.1928 12C20.1928 12.6217 20.1232 13.2262 19.9913 13.809L16.7104 12.4373C16.3707 12.2991 16.3345 12.0009 16.3345 11.8789C16.3345 11.7569 16.3716 11.4588 16.7104 11.3205L19.9705 10.1016C20.116 10.7106 20.1928 11.3467 20.1928 12ZM19.3254 8.33415L16.0652 9.55128C15.9008 9.61814 15.7454 9.70127 15.5999 9.79796C15.2177 9.17539 14.6791 8.65944 14.0376 8.30433C14.1045 8.19319 14.1641 8.07662 14.2138 7.95283L15.5981 4.64028C17.2074 5.43002 18.5203 6.73299 19.3254 8.33324V8.33415ZM11.9991 14.4126C10.6681 14.4126 9.58561 13.3301 9.58561 11.9991C9.58561 10.6681 10.6681 9.58561 11.9991 9.58561C13.3301 9.58561 14.4126 10.6681 14.4126 11.9991C14.4126 13.3301 13.3301 14.4126 11.9991 14.4126ZM13.8216 4.01139L12.4708 7.24442C12.3325 7.58417 12.0343 7.62031 11.9124 7.62031C11.7904 7.62031 11.4922 7.58327 11.3539 7.24442L10.1476 4.01771C10.7431 3.87946 11.363 3.80627 11.9991 3.80627C12.6352 3.80627 13.2352 3.87675 13.8216 4.01048V4.01139ZM8.37571 4.65293L9.58381 7.88958C9.65338 8.06036 9.74013 8.2221 9.84133 8.373C9.21424 8.74709 8.69287 9.2784 8.33053 9.91271C8.2212 9.84766 8.10644 9.78983 7.98536 9.74013L4.66287 8.35222C5.46255 6.75106 6.77094 5.44719 8.37481 4.65293H8.37571ZM3.80717 12C3.80717 11.3548 3.88217 10.7259 4.02404 10.1233L7.27876 11.4831C7.61851 11.6214 7.65465 11.9196 7.65465 12.0416C7.65465 12.1635 7.6176 12.4617 7.27876 12.6L4.01139 13.8216C3.87765 13.2352 3.80717 12.6253 3.80717 11.9991V12ZM4.63938 15.5963L7.92392 14.3701C8.07843 14.3069 8.22481 14.2292 8.36306 14.1397C8.73895 14.7767 9.27659 15.3062 9.91994 15.6713C9.86573 15.7662 9.81693 15.8646 9.77447 15.9677L8.36487 19.3407C6.74926 18.5375 5.43454 17.2164 4.63938 15.5954V15.5963ZM10.1377 19.9796L11.5184 16.6761C11.6566 16.3363 11.9548 16.3002 12.0768 16.3002C12.1988 16.3002 12.497 16.3372 12.6352 16.6761L13.8695 19.9778C13.2686 20.1187 12.6434 20.1928 12.0009 20.1928C11.3585 20.1928 10.7368 20.1187 10.1386 19.9796H10.1377ZM15.6387 19.3398L14.4044 16.0327C14.3439 15.8845 14.2698 15.7445 14.1858 15.6116C14.8183 15.2276 15.3415 14.6828 15.6993 14.0331C15.796 14.0882 15.8963 14.1388 16.002 14.1813L19.3651 15.5863C18.5709 17.2101 17.2562 18.5338 15.6387 19.3389V19.3398Z" fill="#0D0E36"/>
        </svg>
        Besoin d'aide ?
      </a>
      <?php echo '<a href="'.SCRIPT_ROOT.'/admin/" class="button button--primary">'; ?>Se connecter</a>
    </div>
  </header>
















