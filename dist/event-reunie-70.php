<?php
  include 'content.php';
  $compiler = include('compiler.php');

  $data['event'] = $data['eventReunie70Array'];

  echo $compiler->render('event', $data);
?>