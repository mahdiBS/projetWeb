<?PHP
class Evenement{
	private $IDevenement;
	private $Nomevenement;
	private $PRIXevenement;
	private $ADRESSEevenement;
	private $Nombresplaces;
	private $Dateevenement;
	private $Heureevenement;
	function __construct($IDevenement,$Nomevenement,$PRIXevenement,$adr,$nb,$date,$heure){
		$this->IDevenement=$IDevenement;
		$this->Nomevenement=$Nomevenement;
		$this->PRIXevenement=$PRIXevenement;
		$this->ADRESSEevenement=$adr;
		$this->Nombresplaces=$nb;
		$this->Dateevenement=$date;
		$this->Heureevenement=$heure;


	}
	function getDateevenement(){
		return $this->Dateevenement;
	}
	function getHeureevenement(){
		return $this->Heureevenement;
	}
	
	function getIDevenement(){
		return $this->IDevenement;
	}
	function getNomevenement(){
		return $this->Nomevenement;
	}
	function getPRIXevenement(){
		return $this->PRIXevenement;
	}
	function getADRESSEevenement(){
		return $this->ADRESSEevenement;
	}
	function getNombresplaces(){
		return $this->Nombresplaces;
	}


    function setIDevenement($idevenement){
		$this->IDevenement=$idevenement;
	}
	function setNomevenement($nomevenement){
		$this->Nomevenement=$nomevenement;
	}
	function setPRIXevenement($prixevenement){
		$this->PRIXevenement=$prixevenement;
	}
	function setADRESSEevenement($adresseevenement){
		$this->ADRESSEevenement=$adresseevenement;
	}
	function setNombresplaces($nombresplaces){
		$this->Nombresplaces=$nombresplaces;
	}

	function setDateevenement($dateevenement){
		$this->Dateevenement=$dateevenement;
	}
	function setHeureevenement($heureevenement){
		$this->Heureevenement=$heureevenement;
	}






	
}

?>