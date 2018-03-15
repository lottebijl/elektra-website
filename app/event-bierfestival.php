<?php
  include 'content.php';
  $compiler = include('compiler.php');

  $data['event'] = $data['eventBierfestivalArray'];

  echo $compiler->render('event', $data);
?>