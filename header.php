<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php
  // ENQUEUE your css and js in inc/enqueues.php

    wp_head();
  ?>

  <?php echo get_option('google_analytics'); ?>
</head>
<body <?php echo body_class(); ?>>
  <!-- <div class="preloader"></div> -->
  
  <header id="header" role="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><span class="lightdarkblack font-weight-bold">TimeToTop</span> <span class="mobile-none">|</span><span class="lightdarkblack font-weight-light mobile-none"> Создание сайтов</span></a>
            <div class="headermenu">
              <div class="pc-show">
                <div class="menu">
                  <?php 
                    wp_nav_menu( array(
                      'menu'            => 'MainMenu', 
                    ))
                  ?>
                </div>
              </div>
              <div class="mobile-show">
                <div class="toogle-menu"></div>
                <div class="slide-menu">
                  <div class="menu">
                    <?php 
                      wp_nav_menu( array(
                        'menu'            => 'MainMenu', 
                      ))
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <section id="content" role="main">