<?php

require "model.php";
$bdd=dbConnect();


$name=$_POST['nom_produit'];
$price=$_POST['prix'];

$imagename=$_FILES["image"]["name"]; 
$description=$_POST['description'];
$categorie=$_POST['categorie'];

$quantite=$_POST['prix_promotion'];

$imagetmp=addslashes (file_get_contents($_FILES['image']['tmp_name']));
if ($_FILES["image"]["size"] > 500000) {echo "<h1>ERREur</h1>";header("location:error.php");exit;}

$insert_image="INSERT INTO produit ( `image`,`prix`,`nom_produit`,`description`,`categorie`) VALUES('$imagetmp','$price','$name','$description','$categorie')";

$rep=$bdd->query($insert_image);



//$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

$target_dir = "img/";
$target_file = $target_dir . basename($_POST['nom_produit']);


if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))
header("location:cart.php");
else echo "<h1>ERREur</h1>";
?>