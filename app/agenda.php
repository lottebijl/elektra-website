<?php
  include 'content.php';
  $compiler = include('compiler.php');

  $data['title'] = 'Agenda';
  $data['allEvents'] = array($data['eventDisquietArray'], $data['eventStPatrickArray'], $data['eventPowderforPigeonsArray'], $data['eventBierfestivalArray'], $data['eventReunie80Array'], $data['eventTuinfeest2018Array'] );
  $data['archiveEvents'] = array($data['eventTafelvoetbalArray'], $data['eventStillwaveArray'], $data['eventMagicArray'], $data['eventMoonTapesArray'], $data['eventStemwijzerArray'], $data['eventUpTheIronsArray'], $data['eventReunie70Array']);

  echo $compiler->render('agenda', $data);
?>