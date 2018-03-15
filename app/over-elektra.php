<?php
  include 'content.php';
  $compiler = include('compiler.php');
  $data['title'] = 'Over Elektra';
  $data['pageContent'] = '<p>Elektra is een goedlopend open jongerencentrum in de gemeente Sliedrecht. Sinds 1970 wordt het pand verhuurd aan Stichting Open Jeugdwerk Sliedrecht (SOJS), welke is opgericht in 1968. Het jongerencentrum kreeg in 1975 de naam Elektra (daarvoor heette het de Rosmolen). Een naam met een specifieke betekenis: ‘Als je de wereld wilt veranderen dan moet je ook jezelf veranderen’.</p><p>De stichting wordt bestuurd door een jongerenzelfbestuur en ondersteund door beroepskrachten en een grote groep vrijwilligers. Het doel van de stichting is het ontwikkelen en in stand houden van activiteiten die jongeren in staat stellen een eigen bijdrage te leveren aan de ontwikkeling van de samenleving, waarbij de activiteiten afgestemd zijn op de specifieke behoeften van de jongeren.</p><p>In het jongerencentrum bevindt zich Poppodium Elektra welke gerund wordt door een 70tal vrijwilligers die werkzaam zijn in verscheidene werkgroepen (Bar, PA, Programmering, Promotie etc). De programmering richt zich op zowel regionale als internationale acts en streeft naar een breed en divers programma. Sinds 1970 organiseert het Poppodium het gratis popfestival genaamd ‘Tuinfeest’ wat elk jaar vele bezoekers trekt op het naastgelegen plantsoen. Sinds 2016 wordt ook een wintereditie georganiseerd.</p><p>Poppodium Elektra staat garant voor een avondje gezelligheid! Je bent van harte welkom om te komen kijken naar een band, een potje tafelvoetbal of voor gewoon een drankje aan onze bar.</p><p>Wil jij ook je steentje bijdragen? <a href="vrijwilliger-worden.php">Meld je dan aan als vrijwilliger</a> voor één van de werkgroepen.</p>';
  $data['infoLinks'] = array($data['infoVrijwilliger'], $data['infoArtiest'], $data['infoOefenruimte'], $data['infoHuisregels'], $data['infoSOJS']);

  echo $compiler->render('over-elektra', $data);
?>