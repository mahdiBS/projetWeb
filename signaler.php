<?php 
session_start();
if(isset($_SESSION['login_in']))
{
?>
<?php  
include ($_SERVER["DOCUMENT_ROOT"] . '/integrationfinale/Core/CommentaireC.php');
include ($_SERVER["DOCUMENT_ROOT"] . '/integrationfinale/Entities/Commentaire.php');

if (isset($_GET['mail']) and isset($_GET['idcom']))
{
$idcom=(int) $_GET['idcom'];
echo $_GET['mail'];

$commentaire1C=new CommentaireC();
$commentaire1C->signalerCommentaire($_GET['idcom']);

$commentaire2C=new CommentaireC();
$resultat=$commentaire2C->nbsignaler($_GET['idcom']);
var_dump($resultat);
foreach ($resultat as $rec)
{
	echo "test";
	echo $rec['signaler'];
	echo "test";	
	if($rec['signaler'] == 5)
	{
	$commentaire3C=new CommentaireC();
	$supprimer=$commentaire3C->supprimerCommentaire($_GET['idcom']);
	if($supprimer)
	{
		$commentaire4C=new CommentaireC();
		$envoi=$commentaire4C->envoyerMailSignaler($_GET['mail']);
		if($envoi)
		{
			echo "you made it guuuuuuurl";
		}
	}
	}
}


//header('Location: '.$_SERVER['HTTP_REFERER']);
	
}else{
	echo "vérifier les champs";
}
?>
<?php
}
    else
        header('location:./login.php');
 ?>