<?php
$fedoracore = array();
$fedoracore['name'] = "FedoraCore";
$fedoracore['url'] = "http://core.fedoracoin.net/";
$fedoracore['fee'] = 1;
$fedoracore['verified'] = true;
$fedoracore['type'] = "Proportional";
$fedoracore['owner'] = "tipsfedora/invisibel (TIPS developer)";

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
$suchpool['owner'] = "CryptoSiD and eth2";

$coinpool = array();
$coinpool['name'] = "Coin-Pool.org";
$coinpool['url'] = "http://fedora.coin-pool.org/";
$coinpool['fee'] = 1;
$coinpool['verified'] = true;
$coinpool['type'] = "Proportional and VARDIFF";
$coinpool['owner'] = "speed-";

$dedicated = array();
$dedicated['name'] = "DedicatedPool.com";
$dedicated['url'] = "http://tips.dedicatedpool.com/";
$dedicated['fee'] = 2;
$dedicated['verified'] = false;
$dedicated['type'] = "Proportional?";
$dedicated['owner'] = "binaryclock at #dedicatedpool on freenode";

$pools = array();
$pools[] = $fedoracore;
$pools[] = $pcfil;
$pools[] = $strips;
$pools[] = $suchpool;
$pools[] = $coinpool;
$pools[] = $dedicated;

shuffle($pools);
header('Content-Type: application/json');
echo json_encode($pools);
?>
