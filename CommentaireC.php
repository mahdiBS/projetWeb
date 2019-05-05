<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/integrationfinale/config.php');
class CommentaireC
{
	function ajouterCommentaire($commentaire)
		{
		$sql="INSERT INTO commentaire (nom,prenom,id,mail,id_prod,com,dat,signaler) VALUES (:nom,:prenom,:id,:mail,:id_prod,:com,:dat,:signaler)";
		$db = config::getConnexion();

        $req=$db->prepare($sql);
		
        $Nom=$commentaire->getnom();
        $Prenom=$commentaire->getprenom();
        $Identifiant=$commentaire->getid();
        $Mail=$commentaire->getmail();
        $IdentifiantProd=$commentaire->getidprod();
        $Com=$commentaire->getcom();
        $Dat=$commentaire->getdat();
        $Signaler=$commentaire->getsignaler();
		$req->bindValue(':nom',$Nom);
		$req->bindValue(':prenom',$Prenom);
		$req->bindValue(':id',$Identifiant);
		$req->bindValue(':mail',$Mail);
		$req->bindValue(':id_prod',$IdentifiantProd);
		$req->bindValue(':com',$Com);
		$req->bindValue(':dat',$Dat);
		$req->bindValue(':signaler',$Signaler);
		
            $resultat=$req->execute();

       
        }	

	function supprimerCommentaire($id)
	{
		$sql="DELETE FROM commentaire WHERE idcom=$id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function afficherCommentaire($commentaire)
	{
		echo "Nom: ".$commentaire->getnom()."<br>";
		echo "Prénom: ".$commentaire->getprenom()."<br>";
		echo "Identifiant client: ".$commentaire->getid()."<br>";
		echo "Commentaire: ".$commentaire->getcom()."<br>";
		echo "Date: ".$commentaire->getdat()."<br>";
	}

	function afficherCommentaires($id)
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * FROM commentaire WHERE id_prod:=$id";
		$db = config::getConnexion();
		$req=$db->prepare($sql);	
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherCommentairesTri($id)
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * FROM commentaire WHERE id_prod:=$id ORDER BY dat ASC";
		$db = config::getConnexion();
		$req=$db->prepare($sql);	
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function recupererCommentaire($id){
		$sql="SELECT * FROM commentaire WHERE id_prod=$id ORDER BY dat ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function recupererIdProduitCommentaire(){
		$sql="SELECT DISTINCT id_prod FROM commentaire";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function envoyerMailSignaler($mail)
	{

		$to=$mail;
		$sujet="commentaire supprime";
  		$text="votre message a été supprimé car il semblait inapproprié pour certains utilisateurs";
  		$header='From : hamza.ennour@esprit.tn';
  		$resultat=mail($to, $sujet, $text,$header);
		if($resultat)
		{
			?>
  			<script type="text/javascript">
  			alert("mail send");
			</script>
  			<?php
 
		}
		else{echo "non";
		}

		}
	

    function signalerCommentaire($id)
	{
		$sql="UPDATE commentaire SET signaler=signaler+1  WHERE idcom=$id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
	}

    function nbsignaler($id)
	{
		$sql="SELECT * FROM commentaire WHERE idcom=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
		


}
?>