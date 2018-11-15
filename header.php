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
  <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>">
  <?php echo get_option('google_analytics'); ?>
  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2086714528307650');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=2086714528307650&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->
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