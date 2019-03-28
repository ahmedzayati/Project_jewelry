<?php 
session_start();

if ( !isset( $_SESSION['nom_adm'] ) ) {
  
 header("location:index.php");exit;}
else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Divisima | eCommerce Template</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->   
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="css/style_daw.css" />
      <link href="css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<?php require "header_admin.php" ?>
<?php require "model.php" ?>
<?php 
        $bdd=dbConnect();
        $commande1=$bdd->prepare("select * from commande c,utilisateurs e where c.id_user=e.Id and id_commande=?");
        $commande1->execute([$_GET['id']]);
        if($com1=$commande1->fetch())
        $commande2=$bdd->prepare("select * from commande c,comm_prod e ,produit p where c.id_commande=e.id_comm and p.id_produit=e.id_prod  and id_commande=?");
        $commande2->execute([$_GET['id']]);
        
                          
  ?>

<div class="row">
    <div class="col-9">
        <h2> detail commande num <?php echo $_GET['id']?> </h2>
        <h3>propriétaire de la commande: <?php echo $com1['Nom']?></h3>
        <h3>les produits:</h3>
        <?php while($com2=$commande2->fetch())
         { ?>
         <h3>id: <?php echo $com2['id_prod']?> nom_produit: <?php echo $com2['nom_produit'] ?>
         prix_nitaire: <?php echo $com2['prix'] ?>DT Quantité: <?php echo $com2['quantite'] ?></h3>
         <?php } ?>
    </div>
</div>



    
</body>
</html>
<?php } ?>