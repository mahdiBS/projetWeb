<?php 
session_start();
if(isset($_SESSION['login_in']))
{
?>
<?php  
include ($_SERVER["DOCUMENT_ROOT"] . '/integrationfinale/Core/JaimeC.php');
include ($_SERVER["DOCUMENT_ROOT"] . '/integrationfinale/Entities/Jaime.php');
include ($_SERVER["DOCUMENT_ROOT"] . '/integrationfinale/Core/JaimepasC.php');
include ($_SERVER["DOCUMENT_ROOT"] . '/integrationfinale/Entities/Jaimepas.php');

if (isset($_GET['t'])and isset($_GET['identifiant']) and isset($_GET['idprod']) and isset($_GET['idcom']))
{
$idcom=(int) $_GET['idcom'];
$idprod=(int) $_GET['idprod'];
$identifiant=(int) $_GET['identifiant'];
echo $_GET['t'];

if($_GET['t'] == 1)
{
	$jaimepas1C=new JaimepasC();
	$existe=$jaimepas1C->existeJaimepas($_GET['identifiant'],$_GET['idcom']);
	if($existe->rowCount() > 0)
	{
		$jaimepas2C=new JaimepasC();
		$jaimepas2C->supprimerJaimepas($_GET['identifiant'],$_GET['idcom']);
	}
	$jaime1C=new JaimeC();
	$resultat=$jaime1C->existeJaime($_GET['identifiant'],$_GET['idcom']);
	var_dump($resultat);
	if($resultat->rowCount() == 0)
	{
		$jaime1=new Jaime($idcom,$identifiant,$idprod,1);	
		var_dump($jaime1);
		$jaime1C=new JaimeC();
		$jaime1C->ajouterJaime($jaime1);
	}
}
elseif($_GET['t'] == 2)
{
	$jaime1C=new JaimeC();
	$existe=$jaime1C->existeJaime($_GET['identifiant'],$_GET['idcom']);
	if($existe->rowCount() > 0)
	{
		$jaime2C=new JaimeC();
		$jaime2C->supprimerJaime($_GET['identifiant'],$_GET['idcom']);
	}
	$jaimepas1C=new JaimepasC();
	$resultat=$jaimepas1C->existeJaimepas($_GET['identifiant'],$_GET['idcom']);
	var_dump($resultat);
	if($resultat->rowCount() == 0)
	{
		$jaimepas1=new Jaimepas($idcom,$identifiant,$idprod,1);	
		
		$jaimepas1C=new JaimepasC();
		$jaimepas1C->ajouterJaimepas($jaimepas1);
		var_dump($jaimepas1);
	}	
}
header('Location: '.$_SERVER['HTTP_REFERER']);
	
}else{
	echo "vérifier les champs";
}
?>
<?php
}
    else
        header('location:./login.php');
 ?>