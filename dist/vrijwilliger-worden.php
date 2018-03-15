<?php
  include 'content.php';
  $compiler = include('compiler.php');

  $data['title'] = 'Vrijwilliger worden';
  $data['pageContent'] = '<p>Binnen Elektra zijn er een aantal werkgroepen die er voor zorgen dat het poppodium draaiendewordt gehouden. Deze werkgroepen zijn volledig gebouwd op vrijwilligers. Ook jij zou ons teamkunnen versterken. Lees hier verder over de verschillende mogelijkheden.</p><p></p><strong>Bar</strong><p>Het centrum van ons poppodium is de grote barruimte. Per avond zijn er 2 bardiensten, één van20.00 tot 23.00 uur en één van 23.00 tot 02.00 uur. Wij zijn altijd op zoek naar barvrijwilligers.</p><strong>Snackteam</strong><p>Op de avonden dat er bands spelen, zorgen wij ook voor de nodige snacks.Een dienst in het snackteam is van ca. 22.00 tot 01.30 uur.</p><strong>PA</strong><p>Ook het licht en geluid wordt door een kleinere groep vrijwilligers verzorgd, het team wordt opgeleiddoor elkaar en is daarom kwalitatief nog steeds groeiende. Bij de PA draai je met z’n tweeën deavond van 17.00 tot 02.00 uur.</p><strong>Sportcafé</strong><p>Elke vrijdagmiddag van 17.00 tot 20.00 uur is het sportcafé geopend. Op de eerste verdieping vind jeeen klein, gezellig café waar we het weekend op een gezellige manier inluiden. Ook tijdens dezomerstop is het sportcafé open om een koud biertje te scoren.</p><strong>Entree</strong><p>Het entree team staat bij elke concertavond paraat om tickets te verkopen. Bij de entree sta je metzijn tweeën en je begint rond 21.00 uur.</p><strong>Eetcafé</strong><p>Op de zaterdagavonden dat er concerten plaats vinden (om de 2 weken), bieden de vrijwilligers vanhet eetcafé aan de bezoekers, artiesten en P.A medewerkers een gevarieerd driegangen menu metverse producten. Hou je van koken, kom dan dit gezellige team versterken!</p><p></p><p>Zou jij graag een van onze werkgroepen komen versterken?<br>Mail dan je motivatie naar <a href="mailto:bestuur@sojs.nl">bestuur@sojs.nl</a></p>';
  $data['infoLinks'] = array($data['infoOver'], $data['infoArtiest'], $data['infoOefenruimte'], $data['infoHuisregels'], $data['infoSOJS']);

  echo $compiler->render('over-elektra', $data);

?>



<!--
<p>Binnen Poppodium Elektra zijn er een aantal werkgroepen die er voor zorgen dat wij onze avonden kunnen draaien, deze werkgroepen zijn volledig gebouwd op vrijwilligers. Ook jij zou ons team kunnen versterken, lees hier beneden verder over de verschillende mogelijkheden.</p>
<p></p>
<p></p>
<strong>Bar</strong>
<p>Het centrum van ons poppodium is de grote bar ruimte, het is dus ook belangrijk dat we een flink bar-team hebben. Taken die bij het barwerk komen kijken zijn natuurlijk niet alleen dranken verkopen. Je zorgt er voor dat je bar netjes blijft, alle lege flessen netjes in de kratten terecht komen en dat er na sluitingstijd goed afgesloten wordt.</p>
<p>De avonden bestaan uit 2 bardiensten, een van 20:00 23:00 en een van 23:00 tot 02:00.</p>
<p></p>
<strong>Snackteam</strong>
<p>Op de avonden dat er bands spelen in onze zaal, zorgen wij ook voor de nodige snack. Bij het snackteam kan je dus altijd terecht als je even trek hebt.</p>
<p>Voordat de dag begint kom je even langs om te kijken wat er nodig is aan inkopen, zodat je niet voor verrassingen komt te staan in de avond. Je maakt je keuken klaar rond een uur of 10 en sluit deze rond 01:00/01:30 af, daarna tel je het gel. Het snackteam bestaat maar uit 1, niet al te lange dienst per avond.</p>
<p></p>
<strong>PA</strong>
<p>Ook het licht en geluid wordt door een kleinere groep vrijwilligers gedaan, het team wordt opgeleid door elkaar en is daarom kwalitatief nog steeds groeiende. </p>
<p>Bij de PA draai je een hele avond met zn 2en, vanaf de opbouw en soundcheck tot het afruimen van het podium en alles afsluiten. Dit zijn dan ook diensten van 17:00 tot 02;00 en daarmee de langste dienst die je als vrijwilliger kan draaien.</p>
<p></p>
<strong>Sportcafe</strong>
<p>Elke vrijdagmiddag van 17:00 tot 20:00 is het sportcafé open, op de eerste verdieping vind je een klein, gezellig café waar we het weekend op een gezellige manier beginnen. Maar ook tijdens de zomerstop is het sportcafé open om een koud biertje te scoren. </p>
<p>Het sportcafé wordt gerund door een kleine groep vrijwilligers. Je zorgt er bij het Sportcafé voor dat je koelkasten goed op tijd gevuld zijn en je iedereen goed kan voorzien voor zijn/haar vrijdagmiddagborrel.</p>
<strong>Entree</strong>
<p>Het entree team staat bij elke concertavond voor je klaar om tickets contant aan de deur te kunnen kopen. Je krijgt dan een bandje waarmee je in en uit kunt lopen. Het team kan uit 2 of 3 mensen bestaan en kan wisselen als het gaat om langere entree tijden zoals bij een festival.</p>
<p>Bij de entree zorg je met zijn tweeën ervoor dat je er voor aanvang (rond 21.00) bent om alle mensen die al binnen zijn, te laten betalen voor de avond. Tijdens de avond ben jij het eerste gezicht bij binnenkomst van het poppodia en laat je betalende klanten binnen. Aan het einde van de avond (rond 23.30) tel je het geld en de bezoekers.</p>
<strong>Eetcafe</strong>
<p>Later meer informatie over ons eetcafe</p>
<strong>Programmaraad</strong>
<p>Later meer informatie over het programmaraad</p>
<p></p>
<p>Zou jij graag een van onze werkgroepen komen versterken? Email dan je motivatie naar <a href="mailto:bestuur@sojs.nl">bestuur@sojs.nl</a></p> -->
