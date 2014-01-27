<?php
$fedoracore = array();
$fedoracore['name'] = "FedoraCore";
$fedoracore['url'] = "http://core.fedoracoin.net/";
$fedoracore['fee'] = 1;
$fedoracore['verified'] = true;
$fedoracore['type'] = "Proportional";

$pcfil = array();
$pcfil['name'] = "PCFiL";
$pcfil['url'] = "http://fedora.pcfil.com/";
$pcfil['fee'] = 1;
$pcfil['verified'] = true;
$pcfil['type'] = "Proportional";

$strips = array();
$strips['name'] = "ChickenStrips.net";
$strips['url'] = "http://chickenstrips.net";
$strips['fee'] = 1;
$strips['verified'] = true;
$strips['type'] = "Proportional";

$pools = array();
$pools[] = $fedoracore;
$pools[] = $pcfil;
$pools[] = $strips;

shuffle($pools);
header('Content-Type: application/json');
echo json_encode($pools);
?>
