<?php
  $compiler = include('compiler.php');

  $data['title'] = 'Contact';

//   Bezoekadres:
// Poppodium Elektra
// Stationsweg 4, 3363 GA
// Sliedrecht	Algemeen:
// T: 0184-414273
// E: info@elektra-sliedrecht.nl
// Openingstijden Open inloop
// Maandag     14.00 – 18.00
// Dinsdag       12.00 – 21.00
// Woensdag    12.00 – 21.00
// Donderdag   12.00 – 21.00
// Vrijdag         12.00 – 17.00
// Openingstijden weekendactiviteiten
// Vrijdag        17.00 – 02.00
// Zaterdag     16.00 – 02.00
// Zondag       18.30 – 21.30
// Openbaar vervoer
// Vanaf het station Sliedrecht Centraal is het ongeveer 10 minuten lopen naar Poppodium Elektra.

  echo $compiler->render('contact', $data);
?>