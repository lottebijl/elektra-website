<?php
  include 'content.php';
  $compiler = include('compiler.php');

  $data['event'] = $data['eventMoonTapesArray'];

  echo $compiler->render('event', $data);
?>