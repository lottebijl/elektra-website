<?php
  include 'content.php';
  $compiler = include('compiler.php');

  $data['event'] = $data['eventDisquietArray'];

  echo $compiler->render('event', $data);
?>