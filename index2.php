<?php 
session_start();
require "model.php";
$bdd =dbConnect();
$id="select * from utilisateurs where email='".$_SESSION['email']."'";
$t=$bdd->query($id);
while($user=$t->fetch()){echo $user['Id'];} echo "<br>";
$q='select max(id_commande) from commande';
$r=$bdd->query($q);
while($cmd=$r->fetch())echo $cmd[0];

$idp="select * from produit where nom_produit='".$panier[0]['name']."'";
$tp=$bdd->query($idp);
while($product=$tp->fetch()){$pr= $product[0];}
echo $pr;

?>
