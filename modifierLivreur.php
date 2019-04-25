<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/livreur.php";
include "../core/livreurC.php";
if (isset($_GET['IdLivreur'])){
	$livreurC=new livreurC();
    $result=$livreurC->recupererlivreur($_GET['IdLivreur']);
	foreach($result as $row){
		$IdLivreur=$row['IdLivraison'];
		$AdresseLivreur=$row['AdresseLivreur'];
		$NuméroDeTéléphone=$row['NuméroDeTéléphone'];
		$NomLivreur=$row['NomLivreur'];
		$PrenomLivreur=$row['PrenomLivreur'];
		$CIN=$row['CIN'];
		$Email=$row['Email'];
		$message=$row['message'];
?>
<form method="POST">
<table>
<caption>Modifier Livreur</caption>
<tr>
<td>IdLivraison</td>
<td><input type="text" name="IdLivreur" value="<?PHP echo $IdLivreur ?>"></td>
</tr>
<tr>
<td>AdresseLivraison</td>
<td><input type="text" name="AdresseLivreur" value="<?PHP echo $AdresseLivreur ?>"></td>
</tr>
<tr>
<td>NuméroFacture</td>
<td><input type="number" name="NuméroDeTéléphone" value="<?PHP echo $NuméroDeTéléphone ?>"></td>
</tr>
<tr>
<td>IDLivreur</td>
<td><input type="text" name="NomLivreur" value="<?PHP echo $NomLivreur ?>"></td>
</tr>
<td>IDLivreur</td>
<td><input type="text" name="PrenomLivreur" value="<?PHP echo $PrenomLivreur ?>"></td>
</tr>
<td>IDLivreur</td>
<td><input type="text" name="CIN" value="<?PHP echo $CIN ?>"></td>
</tr>
<td>IDLivreur</td>
<td><input type="text" name="Email" value="<?PHP echo $Email ?>"></td>
</tr>
<tr>
<td>message</td>
<td><input type="text" name="message" value="<?PHP echo $message ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="IdLivreur_ini" value="<?PHP echo $_GET['IdLivreur'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$livreur=new livreur($_POST['IdLivreur'],$_POST['AdresseLivreur'],$_POST['NuméroDeTéléphone'],$_POST['NomLivreur'],$_POST['PrenomLivreur'],$_POST['CIN'],$_POST['Email'],$_POST['message']);
	$livreurC->modifierLivreur($livreur,$_POST['IdLivreur_ini']);
	echo $_POST['IdLivreur_ini'];
	header('Location: afficherLivreur.php');
}
?>
</body>
</HTMl>