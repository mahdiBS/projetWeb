<?PHP
include "../entities/evenement.php";
include "../core/evenementC.php";

if (isset($_POST['IDevenement']) and isset($_POST['Nomevenement']) and isset($_POST['PRIXevenement']) and isset($_POST['ADRESSEevenement']) and isset($_POST['Nombresplaces']) and isset($_POST['Heureevenement']) and isset($_POST['Dateevenement'])){

$employe1=new Evenement($_POST['IDevenement'],$_POST['Nomevenement'],$_POST['PRIXevenement'],$_POST['ADRESSEevenement'],$_POST['Nombresplaces'] ,$_POST['Dateevenement'],$_POST['Heureevenement']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$employe1C=new EvenementC();
$employe1C->ajouterevenement($employe1);


header("Location: ajouterEvenement.html");


	
}
//*/

?>