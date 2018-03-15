<?php
  include 'content.php';
  $compiler = include('compiler.php');

  $data['home'] = 'true';
  $data['title'] = 'Elektra Sliedrecht';

  $data['highlightedNews'] = $data['newsReunie80Array'];

  $data['upcoming'] = $data['eventDisquietArray'];
  $data['highlightedEvents'] = array($data['eventStPatrickArray'], $data['eventPowderforPigeonsArray'], $data['eventBierfestivalArray']);


  echo $compiler->render('home', $data);
?>