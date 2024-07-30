<?php  

class Hewan {
	public $nama,
		   $spesies,
		   $umur;

	public function __construct($nama, $spesies, $umur)
	{
		$this->nama = $nama;
		$this->spesies = $spesies;
		$this->umur = $umur;
	}
}

class Singa extends Hewan {
	public function suara() {
		return "Rawwr";
	}

	public function infoHewan() {
		return "{$this->nama} adalah spesies {$this->spesies}, umur {$this->umur} th dengan suara {$this->suara()}";
	}
}

class Sapi extends Hewan{
	public function suara() {
		return "Mooo";
	}

	public function infoHewan() {
		return "{$this->nama} adalah spesies {$this->spesies}, umur {$this->umur} th dengan suara {$this->suara()}";
	}
}

class Nemo extends Hewan{
	public function suara() {
		return "Bloob bloob";
	}

	public function infoHewan() {
		return "{$this->nama} adalah spesies {$this->spesies}, umur {$this->umur} th dengan suara {$this->suara()}";
	}

}


$simba = new Singa("Simba", "Hewan Buas", 5);

$Bimbo = new Sapi("Bimbo", "Hewan Herbivora", 3);

$Nimo = new Nemo("Nimo", "Ikan Air Asin", 1);

class Information  {
	public function info(Singa $obj1, Sapi $obj2, Nemo $obj3) {
		return "{$obj1->infoHewan()} | {$obj2->infoHewan()} | {$obj3->infoHewan()}";
	}
}

$info1 = new Information;
echo $info1->info($simba, $Bimbo, $Nimo);