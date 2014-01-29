<?php
class Pool{
	public $name;
	public $url;
	public $fee;
	public $verified;
	public $type;
	public $owner;
	public $software;
	
	public function __construct($name, $url, $fee, $verified, $type, $owner, $software){
		$this->name = $name;
		$this->url = $url;
		$this->fee = $fee;
		$this->verified = $verified;
		$this->type = $type;
		$this->owner = $owner;
		$this->software = $software;
	}
}

$pools = array();

$pools[] = new Pool("FedoraCore", "http://core.fedoracoin.net/", 1, true, "Proportional", "tipsfedora/invisibel", "mpos");
$pools[] = new Pool("PCFiL", "http://fedora.pcfil.com/", 1, true, "Proportional", "PCFiL", "mpos");
$pools[] = new Pool("ChickenStrips.net", "http://chickenstrips.net/", 0.5, true, "Proportional", "chisefu", "mpos");
$pools[] = new Pool("SuchPool.pw", "http://tips.suchpool.pw/", 1, false, "Proportional and VARDIFF", "CryptoSiD", "mpos");

shuffle($pools);
header('Content-Type: application/json');
echo json_encode($pools);
?>
