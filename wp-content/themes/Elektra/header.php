<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="height=device-height,width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0" >
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Elektra Sliedrecht</title>
    <link rel="icon" href="<?php bloginfo('template_directory');?>/assets/images/elektra-favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Raleway:400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/style.min.css">
  </head>
  <body>
    <div class="mobile-menu">
      <div class="row">
        <div class="columns small-23 small-offset-1">
          <ul class="mobile-menu__subnav">
            <li><a href="repeteren.php"><i class="icon icon-arrow"></i>Oefenruimte</a></li>
            <li><a href="vrijwilliger-worden.php"><i class="icon icon-arrow"></i>Vrijwilliger worden</a></li>
          </ul>
        </div>
      </div>
    </div><button class="btn btn-menu">Menu<i class="icon icon-menu"></i></button>
    <div class="top-navigation">
      <div class="row">
        <div class="columns small-3">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="top-navigation__logo">
            <h1>Elektra</h1>
          </a>
        </div>
        <div class="columns small-12">
          <?php wp_nav_menu(
              array(
                'theme_location' => 'header-menu',
                'container' => '',
                'menu_class' => 'top-navigation__menu',
              )
            );
          ?>
        </div>
      </div>
    </div>
