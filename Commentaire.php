<?php
class Commentaire
{
	private $idcom;
	private $nom;
	private $prenom;
	private $id;
	private $mail;
	private $id_prod;
	private $com;
	private $dat;
	private $signaler;

	function __construct($nom,$prenom,$identifiant,$mail,$identifiant_prod,$com,$dat,$signaler){
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->id=$identifiant;
		$this->mail=$mail;
		$this->id_prod=$identifiant_prod;
		$this->com=$com;
		$this->dat=$dat;
		$this->signaler=$signaler;
	}
	
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function getid(){
		return $this->id;
	}
	function getidprod(){
		return $this->id_prod;
	}
	function getmail(){
		return $this->mail;
	}
	function getcom(){
		return $this->com;
	}
	function getdat(){
		return $this->dat;
	}
	function getsignaler(){
		return $this->signaler;
	}

	function setnom($nom){
		$this->nom=$nom;
	}
	function setprenom($prenom){
		$this->prenom=$prenom;
	}
	function setid($identifiant){
		$this->id=$identifiant;
	}
	function setmail($mail){
		$this->mail=$mail;
	}
	function setidprod($identifiant){
		$this->id_prod=$identifiant;
	}
	function setcom($com){
		$this->com=$com;
	}
	function setdat($dat){
		$this->dat=$dat;
	}
	function setsignaler($signaler){
		$this->signaler=$signaler;
	}
}
?>