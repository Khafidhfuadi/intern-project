<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

  <title>Softy Pinko - Bootstrap 4.0 Theme</title>
  <!--
SOFTY PINKO
https://templatemo.com/tm-535-softy-pinko
-->

  <!-- Additional CSS Files -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

  <link rel="stylesheet" href="assets/css/templatemo-softy-pinko.css">
  <link rel="stylesheet" href="assets/css/customized.css">
  <?php wp_head(); ?>
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <nav class="main-nav">
      <!-- ***** Logo Start ***** -->
      <a href="#" class="logo">
        <img src=" <?php echo get_theme_file_uri("assets/images/logo.png"); ?>" alt="Softy Pinko" />
      </a>
      <!-- ***** Logo End ***** -->
      <!-- ***** Menu Start ***** -->
      <ul class="nav">
        <!-- <li><a href="#welcome" class="active">Home</a></li>
        <li><a href="#features">About</a></li>
        <li><a href="#work-process">Work Process</a></li>
        <li><a href="#testimonials">Testimonials</a></li>
        <li><a href="#pricing-plans">Pricing Tables</a></li>
        <li><a href="#blog">Blog Entries</a></li>
        <li><a href="#contact-us">Contact Us</a></li> -->
        <li><?php wp_nav_menu(array('theme_location' => 'main_menu')); ?></li>
      </ul>
      <a class='menu-trigger'>
        <span>Menu</span>
      </a>
      <!-- ***** Menu End ***** -->
    </nav>
  </header>
  <!-- ***** Header Area End ***** -->