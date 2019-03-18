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


$insert_image="INSERT INTO produit ( `image`,`prix`,`nom_produit`,`description`,`categorie`) VALUES('$imagetmp','$price','$name','$description','$categorie')";

$rep=$bdd->query($insert_image);

header("location:cart.php")
?>