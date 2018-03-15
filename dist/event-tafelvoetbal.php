<?php
  include 'content.php';
  $compiler = include('compiler.php');

  $data['event'] = $data['eventTafelvoetbalArray'];

  echo $compiler->render('event', $data);
?>