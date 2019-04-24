<?PHP
include "../entities/solde.php";
include "../core/soldeC.php";

if (isset($_POST['idSolde']) and isset($_POST['produit']) and isset($_POST['pourcentageSolde'])and isset($_POST['datedebut']) and isset($_POST['datefin']) and isset($_POST['description']) ){

$solde=new Solde($_POST['idSolde'],$_POST['produit'],$_POST['pourcentageSolde'],$_POST['datedebut'],$_POST['datefin'],$_POST['description']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3

$soldeC=new SoldeC();
$soldeC->ajoutersolde($solde);


header("Location: ajouterSolde.php");


	
}
//*/

?>