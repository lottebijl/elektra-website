<?php
  include 'content.php';
  $compiler = include('compiler.php');

  $data['title'] = 'Deze pagina konden we niet vinden.';

  echo $compiler->render('404', $data);
?>