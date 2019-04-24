<?PHP
include "config.php";
include "config1.php";

class EvenementC {
function afficherevenement ($evenement){
		echo "IDevenement: ".$evenement->getIDevenement();
		echo "Nomevenement: ".$evenement->getNomevenement();
		echo "Prénom: ".$evenement->getPRIXevenement();
		echo "Nombres des places: ".$evenement->getNombresplaces()."<br>";
		echo "ADRESSEevenement : ".$evenement->getADRESSEevenement()."<br>";

		echo "Date: ".$evenement->getDateevenement();
		echo "Heure : ".$evenement->getHeureevenement();


	}


function afficherevenements(){
		//$sql="SElECT * From evenement e inner join formationphp.evenement a on e.IDevenement= a.IDevenement";
		$sql="SElECT * From evenement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;

		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	
	function ajouterevenement($evenement){
		$sql="insert into evenement (IDevenement,Nomevenement,PRIXevenement,ADRESSEevenement,Nombresplaces,Date,Heure) values (:IDevenement, :Nomevenement,:PRIXevenement,:ADRESSEevenement,:Nombresplaces,:Dateevenement,:Heureevenement)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

		

        $IDevenement=$evenement->getIDevenement();
        $Nomevenement=$evenement->getNomevenement();
        $PRIXevenement=$evenement->getPRIXevenement();
        $ADRESSEevenement=$evenement->getADRESSEevenement();
        $Nombresplaces=$evenement->getNombresplaces();
        $Dateevenement=$evenement->getDateevenement();
        $Heureevenement=$evenement->getHeureevenement();


		$req->bindValue(':IDevenement',$IDevenement);
		$req->bindValue(':Nomevenement',$Nomevenement);
		$req->bindValue(':PRIXevenement',$PRIXevenement);
		$req->bindValue(':ADRESSEevenement',$ADRESSEevenement);
		$req->bindValue(':Nombresplaces',$Nombresplaces);
		$req->bindValue(':Dateevenement',$Dateevenement);
		$req->bindValue(':Heureevenement',$Heureevenement);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	
	function supprimerevenement($IDevenement){
		$sql="DELETE FROM evenement where IDevenement= :IDevenement";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':IDevenement',$IDevenement);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierevenement($evenement,$IDevenement){
		$sql="UPDATE evenement SET IDevenement=:IDevenementn, Nomevenement=:Nomevenement,PRIXevenement=:PRIXevenement,ADRESSEevenement=:ADRESSEevenement,Nombresplaces=:Nombresplaces WHERE IDevenement=:IDevenement";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$IDevenementn=$evenement->getIDevenement();
        $Nomevenement=$evenement->getNomevenement();
        $PRIXevenement=$evenement->getPRIXevenement();
        $ADRESSEevenement=$evenement->getADRESSEevenement();
        $Nombresplaces=$evenement->getNombresplaces();

		$datas = array(':IDevenementn'=>$IDevenementn, ':IDevenement'=>$IDevenement, ':Nomevenement'=>$Nomevenement,':PRIXevenement'=>$PRIXevenement,':ADRESSEevenement'=>$ADRESSEevenement,':Nombresplaces'=>$Nombresplaces);
		$req->bindValue(':IDevenementn',$IDevenementn);
		$req->bindValue(':IDevenement',$IDevenement);
		$req->bindValue(':Nomevenement',$Nomevenement);
		$req->bindValue(':PRIXevenement',$PRIXevenement);
		$req->bindValue(':ADRESSEevenement',$ADRESSEevenement);
		$req->bindValue(':Nombresplaces',$Nombresplaces);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupernbr($IDevenement){
		$connect = config1::getConnexion(); 
		
 //$query = "SELECT Nombresplaces from evenement where Nomevenement=$IDevenement";  
 //$result = mysqli_query($connect, $query);
 $sql="SELECT Nombresplaces from evenement where Nomevenement='$IDevenement'";
		$db = config::getConnexion();
		$result=$db->query($sql);
foreach($result as $row){
		$id=$row['Nombresplaces'];
   }

 return $id;

	}

function increeveenement($IDevenement,$nbrplace){
		$sql="UPDATE evenement SET Nombresplaces=:Nombresplaces WHERE Nomevenement=:IDevenement";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $Nombresplaces=$nbrplace-1;

		
		
		$req->bindValue(':Nombresplaces',$Nombresplaces);
		$req->bindValue(':IDevenement',$IDevenement);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   
        }
		
	}





	function recupererevenement($IDevenement){
		$sql="SELECT * from evenement where IDevenement=$IDevenement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	




function graphe()

{

$connect = config1::getConnexion(); 
 $query = "SELECT Nombresplaces,Nomevenement FROM evenement GROUP BY Nomevenement";  
 $result = mysqli_query($connect, $query);

   

 return $result;
		
 
 
}



function i()

{

	$connect = config1::getConnexion(); 


$query = "SELECT * FROM `evenement`";


$result2 = mysqli_query($connect, $query);

return $result2;

}



	
	
}

?>