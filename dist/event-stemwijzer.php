<?php
  include 'content.php';
  $compiler = include('compiler.php');

  $data['event'] = $data['eventStemwijzerArray'];

  echo $compiler->render('event', $data);
?>