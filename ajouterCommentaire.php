<?php  
include($_SERVER["DOCUMENT_ROOT"] . '/CRUD/Entities/Commentaire.php');
include($_SERVER["DOCUMENT_ROOT"] . '/CRUD/Core/CommentaireC.php');
include($_SERVER["DOCUMENT_ROOT"] . '/CRUD/Entities/Utilisateur.php');
include($_SERVER["DOCUMENT_ROOT"] . '/CRUD/Core/UtilisateurC.php');

if (isset($_POST['com']) and isset($_POST['Identifiant']))
{
echo $_POST['Identifiant'];

$utilisateur1C=new UtilisateurC();
$resultat=$utilisateur1C->recupererUtilisateurId($_POST['Identifiant']);
	foreach($resultat as $row)
	{
		$Nom=$row['nom'];
		$Prenom=$row['prenom'];
		$Identifiant=$row['identifiant'];
	}
var_dump($resultat);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3

$commentaire1=new Commentaire($Nom,$Prenom,$Identifiant,$_POST['Identifiant'],$_POST['com'],date("d.m.Y"));

$commentaire1C=new CommentaireC();
$commentaire1C->ajouterCommentaire($commentaire1);
header('Location: single.php');
	
}else{
	echo "vérifier les champs";
}
?>