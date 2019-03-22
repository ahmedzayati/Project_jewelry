<?php
session_start();
$panier=json_decode($_POST['panier'],true);
$address=$_POST['address'];
$country=$_POST['country'];
$zipcode=$_POST['zipcode'];
$phone=$_POST['phone'];
$date = date('Y-m-d H:i:s');

require "model.php";
$bdd =dbConnect();
$id="select * from utilisateurs where email='".$_SESSION['email']."'";
$t=$bdd->query($id);
while($user=$t->fetch()){$usr= $user['Id'];} echo "<br>";
$q='select max(id_commande) from commande';
$r=$bdd->query($q);
while($cmd=$r->fetch())$n=1+ $cmd[0];

$insertcommande="INSERT INTO `commande`(`id_commande`, `id_user`) VALUES ('$n','$usr')";
$rep=$bdd->query($insertcommande);



for($i=0;$i<sizeof($panier);$i++){


    $idp="select * from produit where nom_produit='".$panier[$i]['name']."'";
    $tp=$bdd->query($idp);
    while($product=$tp->fetch()){$pr= $product[0];}

$insertassoc="INSERT INTO comm_prod(`id_comm`, `id_prod`, `quantite`) VALUES ('$n','$pr','".$panier[$i]['count']."')";
//$products='select * from produit where nom_produit="'.$panier[0]['name'].'")';
$rep1=$bdd->query($insertassoc);
}

?>