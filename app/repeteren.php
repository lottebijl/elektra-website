<?php
  include 'content.php';
  $compiler = include('compiler.php');
  $data['title'] = 'Oefenruimte';
  $data['pageContent'] = '<p>In het pand van jongerencentrum Elektra is een repetitie kelder beschikbaar. Daarnaast is er ook een mogelijkheid om de concertzaal als repetitie ruimte te gebruiken, mits er geen andere activiteiten plaats vinden. In zowel de kelder als de concertzaal is het volgende aanwezig<ul><li>een zangversterker</li><li>2 grote boxen</li><li>een basis drum kit</li><li>een ruimte om  je eigen spullen veilig op te slaan</li></p><p>Deze repeteerruimten zijn bedoeld voor muzikanten uit Sliedrecht en de naast gelegen gemeentes. Muzikanten uit Sliedrecht krijgen echter wel voorrang. Tevens is de leeftijd van belang. Wij richten ons voornamelijk op de jeugd en jongeren van 13 t/m 26 jaar.</p><p>De kosten zijn € 35,– per maand per band. Dus voor dit bedrag kun je 4 a 5 x per maand oefenen op een vast dagdeel oefenen.</p><p>Wil je met je band komen oefenen? Neem contact op met onze jongerenwerker <a href="mailto:anne@sojs.nl">Anne</a> of bel <a href="tel:0630785484">06-30785484</a>.</p>';
  $data['infoLinks'] = array($data['infoVrijwilliger'], $data['infoArtiest'], $data['infoOver'], $data['infoHuisregels'], $data['infoSOJS']);
  echo $compiler->render('over-elektra', $data);
?>