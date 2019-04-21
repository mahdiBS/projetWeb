<?PHP
  include "../entities/solde.php";
include "../core/soldeC.php";

if (isset($_POST['modifier'])){

  $solde=new solde($_POST['id'],$_POST['produit'],$_POST['nov']);
$soldeC=new soldeC();
  $soldeC->modifiersolde($solde,$_POST['id']);


  $message="Modifier avec succes ";
echo '<script type="text/javascript">window.alert("'.$message.'");</script>';

//header('Location: modifierSolde.php');


  
  
}
?>