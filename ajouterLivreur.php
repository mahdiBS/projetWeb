<?PHP
include "../entities/livreur.php";
include "../core/livreurC.php";

if (isset($_POST['IdLivreur']) and isset($_POST['AdresseLivreur']) and isset($_POST['NuméroDeTéléphone']) and isset($_POST['NomLivreur']) and isset($_POST['PrenomLivreur'])  and isset($_POST['CIN'])  and isset($_POST['Email'])  and isset($_POST['message'])){
$livreur1=new livreur($_POST['IdLivreur'],$_POST['AdresseLivreur'],$_POST['NomLivreur'],$_POST['PrenomLivreur'],$_POST['CIN'],$_POST['Email'],$_POST['NuméroDeTéléphone'],$_POST['message']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$liveur1C=new liveurC();
$livreur1C->ajouterLivreur($livreur1);
header('Location: afficherLivreur.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>