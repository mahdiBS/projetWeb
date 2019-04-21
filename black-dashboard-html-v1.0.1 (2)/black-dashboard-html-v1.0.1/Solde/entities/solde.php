<?PHP
class Solde{
	private $IDsolde;
	private $Produit;
	private $Nouveauprix;
	
	function __construct($IDsolde,$Produit,$Nouveauprix){
		$this->IDsolde=$IDsolde;
		$this->Produit=$Produit;
		$this->Nouveauprix=$Nouveauprix;
		


	}
	function getIDsolde(){
		return $this->IDsolde;
	}
	function getProduit(){
		return $this->Produit;
	}
	
	function getNouveauprix(){
		return $this->Nouveauprix;
	}
	


    function setIDsolde($IDsolde){
		$this->IDsolde=$IDsolde;
	}
	function setProduit($Produit){
		$this->Produit=$Produit;
	}
	function setNouveauprix($Nouveauprix){
		$this->Nouveauprix=$Nouveauprix;
	}
	




	
}

?>