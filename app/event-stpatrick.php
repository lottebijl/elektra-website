<?php
  include 'content.php';
  $compiler = include('compiler.php');

  $data['event'] = $data['eventStPatrickArray'];

  echo $compiler->render('event', $data);
?>