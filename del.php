<?php

require "model.php";


if (isset($_POST['supprimee'])) {
    $bdd=dbConnect();

    $s=$_POST['supprimee'];
    echo $s;
    $supp='DELETE from produit WHERE nom_produit="'.$s.'"';
   /* "DELETE FROM produit where categorie='".$_GET['categorie']."' order by id DESC limit 9 "*/
    $result = $bdd->query($supp);
  }

header("location:admin.php")
?>