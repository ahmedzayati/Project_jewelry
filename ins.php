<?php

	$bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', '');



$name=$_POST['nom_produit'];
$price=$_POST['prix'];

$imagename=$_FILES["image"]["name"]; 
$description=$_POST['description'];

$quantite=$_POST['prix_promotion'];

$imagetmp=addslashes (file_get_contents($_FILES['image']['tmp_name']));


$insert_image="INSERT INTO produit ( `image`,`prix`,`nom_produit`,`description`) VALUES('$imagetmp','$price','$name','$description')";

$rep=$bdd->query($insert_image);

header("location:cart.php")
?>