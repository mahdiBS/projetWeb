<?PHP
include "../core/evenementC.php";

$evenementC=new EvenementC();
if (isset($_POST["IDevenement"])){
	$evenementC->supprimerevenement($_POST["IDevenement"]);

	
	header('Location: supprimerEve.php');
}

?>


