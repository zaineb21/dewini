<?PHP
class consultation{
	private $numOrd;
	private $date;
	private $nomDoc;
	private $maladie;
	private $url;

	function __construct($numOrd,$date,$nomDoc,$maladie,$url){
		$this->url=$url;
		$this->numOrd=$numOrd;
		$this->date=$date;
		$this->nomDoc=$nomDoc;
		$this->maladie=$maladie;

	}

	function getnumOrd(){
		return $this->numOrd;
	}
	function getdate(){
		return $this->date;
	}
	function getnomDoc(){
		return $this->nomDoc;
	}
	function getmaladie(){
		return $this->maladie;
	}
		function geturl(){
		return $this->url;
	}


	function setdate($date){
		$this->date=$date;
	}
	function setnomDoc($nomDoc){
		$this->nomDoc;
	}
	function setmaladie($maladie){
		$this->maladie=$maladie;
	}

}

?>
