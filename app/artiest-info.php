<?php
  include 'content.php';
  $compiler = include('compiler.php');

  $data['title'] = 'Artiest info';
  $data['infoLinks'] = array($data['infoVrijwilliger'], $data['infoOver'], $data['infoOefenruimte'], $data['infoHuisregels'], $data['infoSOJS']);

  //Lijst met apparatuur
  //Eetcafe info
  //Neem contac top met je contactpersoon voor backline info en allergieen
  //Geef voor maandag op hoeveel mensen er mee komen eten
  echo $compiler->render('over-elektra', $data);
?>