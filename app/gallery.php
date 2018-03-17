<?php
  $compiler = include('compiler.php');

  $data['title'] = 'Gallery';

  echo $compiler->render('gallery', $data);
?>