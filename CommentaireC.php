<?php
include($_SERVER["DOCUMENT_ROOT"] . '/CRUD/Config.php');
class CommentaireC
{
	function ajouterCommentaire($commentaire)
		{
		$sql="INSERT INTO commentaire (nom,prenom,id,id_prod,com,dat) VALUES (:nom,:prenom,:id,:id_prod,:com,:dat)";
		$db = config::getConnexion();

        $req=$db->prepare($sql);
		
        $Nom=$commentaire->getnom();
        $Prenom=$commentaire->getprenom();
        $Identifiant=$commentaire->getid();
        $IdentifiantProd=$commentaire->getidprod();
        $Com=$commentaire->getcom();
        $Dat=$commentaire->getdat();
		$req->bindValue(':nom',$Nom);
		$req->bindValue(':prenom',$Prenom);
		$req->bindValue(':id',$Identifiant);
		$req->bindValue(':id_prod',$IdentifiantProd);
		$req->bindValue(':com',$Com);
		$req->bindValue(':dat',$Dat);
		
            $resultat=$req->execute();

       
        }	

	function supprimerCommentaire($id)
	{
		$sql="DELETE FROM commentaire WHERE id=:id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
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

	function afficherCommentaires()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * FROM commentaire ORDER BY id ASC";
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
		$sql="SELECT * from commentaire where id_prod='$id'";
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