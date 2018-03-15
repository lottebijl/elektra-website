<?php
  include 'content.php';
  $compiler = include('compiler.php');

  $data['event'] = $data['eventStillwaveArray'];

  echo $compiler->render('event', $data);
?>