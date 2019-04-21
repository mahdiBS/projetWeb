<?PHP
include "../config.php";
include "../config1.php";

class SoldeC {
function affichesolde ($solde){
		echo "IDsolde: ".$solde->getIDsolde();
		echo "ID produit: ".$solde->getProduit();
		echo "Nouveauprix: ".$solde->getNouveauprix();
		


	}


function affichersolds(){
		//$sql="SElECT * From solde e inner join formationphp.solde a on e.IDsolde= a.IDsolde";
		$sql="SElECT * From solde";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;

		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	
	function ajoutersolde($solde){
		$sql="insert into solde (IDsolde,Produit,Nouveauprix) values (:IDsolde, :Produit,:Nouveauprix)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

		

        $IDsolde=$solde->getIDsolde();
        $prduit=$solde->getProduit();
        $Nouveauprix=$solde->getNouveauprix();
        

		$req->bindValue(':IDsolde',$IDsolde);
		$req->bindValue(':Produit',$prduit);
		$req->bindValue(':Nouveauprix',$Nouveauprix);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	
	function supprimersolde($IDsolde){
		$sql="DELETE FROM solde where IDsolde= :IDsolde";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':IDsolde',$IDsolde);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiersolde($solde,$IDsolde){
		$sql="UPDATE solde SET IDsolde=:IDsolden, Produit=:produit,Nouveauprix=:nouveauprix WHERE IDsolde=:IDsolde";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

		$IDsolden=$solde->getIDsolde();
        $produit=$solde->getProduit();
        $nouveauprix=$solde->getNouveauprix();
        

		$datas = array(':IDsolden'=>$IDsolden,':IDsolde'=>"$IDsolde", ':produit'=>$produit, ':nouveauprix'=>$nouveauprix);
		
$req->bindValue(':IDsolde',$IDsolde);
		$req->bindValue(':IDsolden',$IDsolden);
		$req->bindValue(':produit',$produit);
		$req->bindValue(':nouveauprix',$nouveauprix);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperersolde($IDsolde){
		$sql="SELECT * from solde where IDsolde=$IDsolde";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}












	
	
}

?>