
<?PHP
include "../entities/evenement.php";
include "../core/evenementC.php";

if (isset($_POST['IDevenement']) and isset($_POST['noom']) and isset($_POST['preenom']) and isset($_POST['nuumero']))
{
$evenementC=new EvenementC();
$nbr=$evenementC->recupernbr($_POST["IDevenement"]);
if($nbr>0){
$evenementC->increeveenement($_POST["IDevenement"],$nbr);

$to='mahdibensaid100@gmail.com';
$sujet='Demande de participation a l evenement '.$_POST['IDevenement'];
	$text="\n\r Nom:". $_POST['noom']." \n\r Prenom:". $_POST['preenom']."\n\r numero:". $_POST['nuumero'] ;
	
	$resultat=mail($to, $sujet, $text);


echo "<script type='text/javascript'>alert('ajoute avec succes');</script>";

}
else
{ echo "<script type='text/javascript'>alert('pas de place');</script>";


}
}


echo "<script type='text/javascript'>window.location.href='../evenements.php'</script>";

?>