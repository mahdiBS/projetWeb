<?php
  class config1{
    public static function getConnexion() {
    $connect = mysqli_connect("localhost", "root", "", "gestion"); 
    return $connect;
    } 
  }
?>