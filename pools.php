<?php
$fedoracore = array();
$fedoracore['name'] = "FedoraCore";
$fedoracore['url'] = "http://core.fedoracoin.net/";
$fedoracore['fee'] = 1;
$fedoracore['verified'] = true;
$fedoracore['type'] = "Proportional";
$fedoracore['owner'] = "tipsfedora/invisibel";

$pcfil = array();
$pcfil['name'] = "PCFiL";
$pcfil['url'] = "http://fedora.pcfil.com/";
$pcfil['fee'] = 1;
$pcfil['verified'] = true;
$pcfil['type'] = "Proportional";
$pcfil['owner'] = "PCFiL";

$strips = array();
$strips['name'] = "ChickenStrips.net";
$strips['url'] = "http://chickenstrips.net/";
$strips['fee'] = 0.5;
$strips['verified'] = true;
$strips['type'] = "Proportional";
$strips['owner'] = "chisefu";

$suchpool = array();
$suchpool['name'] = "SuchPool.pw";
$suchpool['url'] = "http://tips.suchpool.pw/";
$suchpool['fee'] = 1;
$suchpool['verified'] = false;
$suchpool['type'] = "Proportional and VARDIFF";
$suchpool['owner'] = "CryptoSiD";

$pools = array();
$pools[] = $fedoracore;
$pools[] = $pcfil;
$pools[] = $strips;
$pools[] = $suchpool;

shuffle($pools);
header('Content-Type: application/json');
echo json_encode($pools);
?>
