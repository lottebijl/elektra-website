<?php
  include 'content.php';
  $compiler = include('compiler.php');

  $data['event'] = $data['eventUpTheIronsArray'];

  echo $compiler->render('event', $data);
?>