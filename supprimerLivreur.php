<?PHP
include "../core/livreurC.php";
$livreurC=new livraisonC();
if (isset($_POST["IDLivreur"])){
	$livreurC->supprimerLivreur($_POST["IDLivreur"]);
	header('Location: afficherLivreur.php');
}

?>