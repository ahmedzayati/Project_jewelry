<?php
session_start();
$panier=json_decode($_POST['panier'],true);
$address=$_POST['address'];
$pays=$_POST['pays'];
$zipcode=$_POST['zipcode'];
$telephone=$_POST['telephone'];
$date = date('Y-m-d');
$ville=$_POST['ville'];
require "model.php";
$bdd =dbConnect();



$id=$bdd->prepare("select * from utilisateurs where email=?");
if(!($id->execute([$_SESSION['email']])))header("location:error.php");
if($user = $id->fetch()) {$usr=$user['Id'];}$id->closeCursor();

 



$q=$bdd->prepare('select max(id_commande) from commande');
if(!($q->execute())) header("location:error.php");
while($cmd=$q->fetch())$n=1+ $cmd[0];$q->closeCursor();

$insertcommande=$bdd->prepare("INSERT INTO `commande`(`id_commande`, `id_user`, `address`, `telephone`, `pays`, `ville`, `zipcode`) VALUES (?,?,?,?,?,?,?)");
if(!($insertcommande->execute([$n,$usr,$address,$telephone,$pays,$ville,$zipcode])))header("location:error.php");



for($i=0;$i<sizeof($panier);$i++){


    $idp=$bdd->prepare("select * from produit where nom_produit=?");
    if(!($idp->execute([$panier[$i]['name']]))) header("location:error.php");
    while($product=$idp->fetch()){$pr= $product[0]; }$idp->closeCursor();

$insertassoc=$bdd->prepare("INSERT INTO comm_prod(`id_comm`, `id_prod`, `quantite`) VALUES (?,?,?)");
//$products='select * from produit where nom_produit="'.$panier[0]['name'].'")';
if(!($rep1=$insertassoc->execute([$n,$pr,$panier[$i]['count']])))header("location:error.php");
}

?>