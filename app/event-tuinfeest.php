<?php
  include 'content.php';
  $compiler = include('compiler.php');

  $data['event'] = $data['eventTuinfeest2018Array'];

  echo $compiler->render('event', $data);
?>