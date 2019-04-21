<?PHP
include "../entities/solde.php";
include "../core/soldeC.php";

if (isset($_POST['idSolde']) and isset($_POST['produit']) and isset($_POST['pourcentageSolde']) ){

$solde=new Solde($_POST['idSolde'],$_POST['produit'],$_POST['pourcentageSolde']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3

$soldeC=new SoldeC();
$soldeC->ajoutersolde($solde);


header("Location: ajouterSolde.html");


	
}
//*/

?>