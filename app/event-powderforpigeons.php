<?php
  include 'content.php';
  $compiler = include('compiler.php');

  $data['event'] = $data['eventPowderforPigeonsArray'];

  echo $compiler->render('event', $data);
?>