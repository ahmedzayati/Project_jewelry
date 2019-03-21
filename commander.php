<?php
session_start();
$panier=json_decode($_POST['panier'],true);
$address=$_POST['address'];
$country=$_POST['country'];
$zipcode=$_POST['zipcode'];
$phone=$_POST['phone'];
require "model.php";
$bdd =dbConnect();
$insert_image='INSERT INTO produit ( `nom_produit`) VALUES("'.sizeof($panier).'")';
$rep=$bdd->query($insert_image);

//$products='select * from produit where nom_produit="'.$panier[0]['name'].'")';

?>