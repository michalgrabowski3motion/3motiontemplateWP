<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>3motion - Agencja reklamowa</title>
    <!-- Bootstrap -->
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/mediaquery.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/unslider.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet">
    <link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body>

    <?php if(is_home() || is_page(118)) {
      echo '<section class="top">';
    }
    else {
      echo '<section class="top subpage">';
    }
      ?>
      <div class="container-fluid">
        <?php if(is_home() || is_page(118) || is_page(2) || is_page(146) || is_page(142) || is_page(267)) { ?>
          <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <img src="<?php echo AGENCY_THEME_URL ?>images/assets/3motion-white.svg" alt="logo 3motion">
            </a>
          </div>
          <div class="hamburger-menu">
            <!-- <span>menu</span> -->
              <!-- <img src="<?php echo AGENCY_THEME_URL ?>images/assets/hamburger-icon.png" alt=""> -->
              <div id="nav-icon3" class="whitenav">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
              <label for="#nav-icon3">MENU</label>
          </div>
        <?php } else { ?>
            <div class="logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo AGENCY_THEME_URL ?>images/assets/3motion.svg" alt="logo 3motion">
              </a>
            </div>
            <div class="hamburger-menu">
              <!-- <span class="white">menu</span> -->
                <!-- <img src="<?php echo AGENCY_THEME_URL ?>images/assets/hamburger-icon-white.png" alt=""> -->
                <div id="nav-icon3">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
                <label for="#nav-icon3">MENU</label>
            </div>
        <?php } ?>
        <div class="navigation">
         <div class="container">
             <div class="first">
              <?php wp_nav_menu( array('menu' => 'Home Menu', 'menu_class' => 'navi wow fadeIn') );?>
          </div>
          <div class="second">

                       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 box-menu wow fadeIn" data-wow-delay="0.25s">
              <div class="click-second">
               <h2>Projektujemy.</h2>
                <div class="desc">
                    Identyfikacja wizualna, logo, animacje,<br/>materiały drukowane, DTP
                </div>
              </div>
              <?php wp_nav_menu( array('menu' => 'Another Menu') );?>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 box-menu wow fadeIn " data-wow-delay="0.35s">
              <div class="click-second">
               <h2>Budujemy.</h2>
                <div class="desc">
                  Strony www, apliakcje mobilne, sklepy
                </div>
              </div>
              <?php wp_nav_menu( array('menu' => 'NewMenu') );?>
            </div>



            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 box-menu wow fadeIn" data-wow-delay="0.7s">
              <div class="click-second">
               <h2>Promujemy.</h2>
                <div class="desc">
                    Kampanie reklamowe,<br/>pozycjonowanie, eventy, Ad-Words
                </div>
              </div>
                <?php wp_nav_menu( array('menu' => 'An Extra Menu') );?>
            </div>

          </div>
         </div>

        </div>
      </div>
    </section>
