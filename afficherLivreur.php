<?PHP
include "../core/livreurC.php";
$livreur1C=new livreurC();
$listeLivreur=$livreur1C->afficherLivreur();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>IdLivreur</td>
<td>AdresseLivreur</td>
<td>NuméroDeTéléphone</td>
<td>CIN</td>
<td>NomLivreur</td>
<td>PrenomLivreur</td>
<td>Email</td>
<td>message</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeLivraison as $row){
	?>
	<tr>
	<td><?PHP echo $row['IdLivreur']; ?></td>
	<td><?PHP echo $row['AdresseLivreur']; ?></td>
	<td><?PHP echo $row['NuméroDeTéléphone']; ?></td>
	<td><?PHP echo $row['NomLivreur']; ?></td>
	<td><?PHP echo $row['PrenomLivreur']; ?></td>
	<td><?PHP echo $row['CIN']; ?></td>
	<td><?PHP echo $row['Email']; ?></td>
	<td><?PHP echo $row['message']; ?></td>
	<td><form method="POST" action="supprimerLivreur.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['IdLivreur']; ?>" name="IdLivreur">
	</form>
	</td>
	<td><a href="modifierLivreur.php?IdLivreur=<?PHP echo $row['IdLivreur']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


