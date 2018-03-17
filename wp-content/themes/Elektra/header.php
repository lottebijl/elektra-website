<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="height=device-height,width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0" >
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Elektra Sliedrecht</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Raleway:400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/style.min.css">
  </head>
  <body>
    <div class="mobile-menu">
      <div class="row">
        <div class="columns small-23 small-offset-1">
          <!-- <ul class="mobile-menu__nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="agenda.php">Agenda</a></li>
            <li><a href="over-elektra.php">Over Elektra</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul> -->
          <?php wp_nav_menu(
							array(
								'theme_location' => 'header-menu',
								'container' => '',
								'menu_class' => 'mobile-menu__nav',
							)
						);?>
          <ul class="mobile-menu__subnav">
            <li><a href="repeteren.php"><i class="icon icon-arrow"></i>Oefenruimte</a></li>
            <li><a href="vrijwilliger-worden.php"><i class="icon icon-arrow"></i>Vrijwilliger worden</a></li>
            <!-- <li><a href="praktische-info.php"><i class="icon icon-arrow"></i>Praktische informatie</a></li> -->
            <!-- <li><a href="werken-bij.php"><i class="icon icon-arrow"></i>Werken bij Elektra</a></li> -->
          </ul>
        </div>
      </div>
    </div><button class="btn btn-menu">Menu<i class="icon icon-menu"></i></button>
    <div class="top-navigation">
      <div class="row">
        <div class="columns small-3">
          <!-- TODO: change to index -->
          <a href="index.php" class="top-navigation__logo">
            <h1>Elektra</h1>
          </a>
        </div>
        <div class="columns small-12">
          <ul class="top-navigation__menu">
            <li><a href="agenda.php">Agenda</a></li>
            <li><a href="over-elektra.php">Over Elektra</a></li>
            <li class="dropdown"><a target="_blank" href="https://www.google.nl/maps/place/Stichting+Open+Jeugdwerk+Sliedrecht+%2F+Jongenerencentrum-poppodium+Elektra/@51.82267,4.7697643,17z/data=!3m1!4b1!4m5!3m4!1s0x47c429e1c6d62a87:0xdeed2be6acee23ee!8m2!3d51.82267!4d4.771953">Locatie</a>
              <div class="top-navigation__submenu">
                <a target="_blank" href="https://www.google.nl/maps/place/Stichting+Open+Jeugdwerk+Sliedrecht+%2F+Jongenerencentrum-poppodium+Elektra/@51.82267,4.7697643,17z/data=!3m1!4b1!4m5!3m4!1s0x47c429e1c6d62a87:0xdeed2be6acee23ee!8m2!3d51.82267!4d4.771953"><i class="icon icon-pin"></i>Stationsweg 4, Sliedrecht</a>
              </div>
            </li>
            <li class="dropdown"><a href="contact.php">Contact</a>
              <div class="top-navigation__submenu">
                <a href="tel:31184414273 "><i class="icon icon-phone"></i>+31 184-414273 </a>
                <a href="mailto:bestuur@sojs.nl "><i class="icon icon-mail"></i>bestuur@sojs.nl </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
