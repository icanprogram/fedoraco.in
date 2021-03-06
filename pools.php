<?php
class Pool
{
	public $name;
	public $url;
	public $fee;
	public $verified;
	public $type;
	public $owner;
	public $software;
	
	public function __construct($name, $url, $fee, $verified, $type, $owner, $software)
	{
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
$pools[] = new Pool("PCFiL", "http://fedora.pcfil.com/", 1, true, "Proportional", "PCFiL", "mpos");
$pools[] = new Pool("ChickenStrips.net", "http://chickenstrips.net/", 0.5, true, "Proportional", "chisefu", "mpos");
$pools[] = new Pool("Coin-Pool.org", "http://fedora.coin-pool.org/", 1, true, "Proportional and VARDIFF", "speed-", "mpos");
$pools[] = new Pool("yun235", "fed.yun235.net", 0.5, false, "PPLNS", "bambooo", "mpos");

shuffle($pools);
header('Content-Type: application/json');
echo json_encode($pools);
?>
