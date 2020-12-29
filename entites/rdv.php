<?PHP
class rdv{
	private $idRDV;
	private $specialité;
	private $date;
	private $heure;
	private $informations;
	private $disponibilité;
	
	function __construct($informations,$specialité,$date,$idRDV,$heure,$disponibilité){
		$this->informations=$informations;
		$this->idRDV=$idRDV;
		$this->specialité=$specialité;
		$this->date=$date;
		$this->heure=$heure;
		
		$this->disponibilité=$disponibilité;
	}
	
	function getidRDV(){
		return $this->idRDV;
	}
	function getspecialité(){
		return $this->specialité;
	}
	function getdate(){
		return $this->date;
	}
	function getheure(){
		return $this->heure;
	}
		function getinformations(){
		return $this->informations;
	}
	
	function getdisponibilité(){
		return $this->disponibilité;
	}


	
}

?>

    