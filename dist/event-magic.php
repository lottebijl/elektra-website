<?php
  include 'content.php';
  $compiler = include('compiler.php');

  $data['event'] = $data['eventMagicArray'];

  echo $compiler->render('event', $data);
?>