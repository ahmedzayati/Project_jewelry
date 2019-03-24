<?php
session_start();
$panier=json_decode($_POST['panier'],true);
$address=$_POST['address'];
$pays=$_POST['pays'];
$zipcode=$_POST['zipcode'];
$telephone=$_POST['telephone'];
$date = date('Y-m-d H:i:s');
$ville=$_POST['ville'];
require "model.php";
$bdd =dbConnect();



$id=$bdd->prepare("select * from utilisateurs where email=?");
$t=$id->execute([$_SESSION['email']]);
while($user=$t->fetch()){$usr= $user['Id'];} echo "<br>";



$q=$bdd->prepare('select max(id_commande) from commande');
$r=$q->execute();
while($cmd=$r->fetch())$n=1+ $cmd[0];

$insertcommande=$bdd->prepare("INSERT INTO `commande`(`id_commande`, `date_commande`, `id_user`, `address`, `telephone`, `pays`, `ville`, `zipcode`) VALUES (?,?,?,?,?,?,?,?)");
$insertcommande->execute([$n,$date,$usr,$address,$telephone,$pays,$ville,$zipcode]);



for($i=0;$i<sizeof($panier);$i++){


    $idp=$bdd->prepare("select * from produit where nom_produit=?");
    $tp=$$idp->execute([$panier[$i]['name']]);
    while($product=$tp->fetch()){$pr= $product[0];}

$insertassoc=$bdd->prepare("INSERT INTO comm_prod(`id_comm`, `id_prod`, `quantite`) VALUES (?,?,?)");
//$products='select * from produit where nom_produit="'.$panier[0]['name'].'")';
$rep1=$insertassoc->execute([$n,$pr,$panier[$i]['count']]);
}

?>