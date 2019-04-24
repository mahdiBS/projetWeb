<?PHP
include "../core/soldeC.php";
$soldeC=new SoldeC();
if (isset($_POST["IDsolde"])){
	$soldeC->supprimersolde($_POST["IDsolde"]);
	header('Location: supprimerSolde.php');
}

?>

