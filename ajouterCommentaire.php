<?php 
session_start();
if(isset($_SESSION['login_in']))
{
?>
<?php  
include($_SERVER["DOCUMENT_ROOT"] . '/integrationfinale/Entities/Commentaire.php');
include($_SERVER["DOCUMENT_ROOT"] . '/integrationfinale/Core/CommentaireC.php');
//include ($_SERVER["DOCUMENT_ROOT"] . '/integrationfinale/Core/UtilisateurCYesmine.php');
	

if (isset($_POST['com']) and isset($_POST['Identifiant']))
{
$commentaire1=new Commentaire($_SESSION["nom"],$_SESSION["prenom"],$_SESSION["id"],$_SESSION["mail"],$_POST['Identifiant'],$_POST['com'],date("d.m.Y"),0);

$commentaire1C=new CommentaireC();
$commentaire1C->ajouterCommentaire($commentaire1);
header('Location:single.php?IdProduit='.$_POST['Identifiant']);
}
else
{
	echo "vérifier les champs";
}
?>
<?php
}
    else
        header('location:./login.php');
      ?>