
<?php
  include 'content.php';
  $compiler = include('compiler.php');
  $data['title'] = 'Huisregels';
  $data['pageContent'] = '<p>Net als in andere publieke gelegenheden is het in Elektra niet toegestaan:</p><ul><li>te handelen in drugs</li><li>harddrugs te gebruiken</li><li>alcohol te drinken onder de 18 jaar</li><li>softdrugs te gebruiken onder de 18 jaar</li><li>te discrimineren, te intimideren of te stelen</li><li>agressief gedrag te vertonen</li><li>moedwillig schade aan te brengen</li><li>voorwerpen die als wapen kunnen worden aangemerkt bij zich te dragen</li></ul><p>Daarnaast is het niet toegestaan om hier:</p><ul><li>glaswerk mee naar buiten te nemen</li><li>zelf meegebrachte drank te nuttigen</li><li>te spelen voor geld, goederen of diensten</li><li>Moedwillig toegebrachte schade wordt op de dader verhaald. Voorts kan bij overtreding van de gedrags- of huisregels ontzegging worden opgelegd voor kortere (tot 3 maanden) of langere (vanaf drie maanden tot levenslang) tijd.</li></ul><p>Medewerkers zijn verplicht om overtreding van bovengenoemde regels te melden bij de staf en het bestuur.</p>';
  $data['infoLinks'] = array($data['infoVrijwilliger'], $data['infoArtiest'], $data['infoOefenruimte'], $data['infoOver'], $data['infoSOJS']);
  echo $compiler->render('over-elektra', $data);
?>
