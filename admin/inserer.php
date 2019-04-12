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
	<link href="../img/favicon.ico" rel="shortcut icon"/>

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
<link rel="stylesheet" href="../css/style_daw.css" />
      <link href="css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/flaticon.css"/>
	<link rel="stylesheet" href="../css/slicknav.min.css"/>
	<link rel="stylesheet" href="../css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="../css/animate.css"/>
	<link rel="stylesheet" href="../css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<?php require "../header_admin.php" ?>
<?php require "../model.php" ?>
<div class="container">
<form method="POST" action="ins.php" enctype="multipart/form-data" style="padding: 20px;">
                        <div class="form-row">
                           <div class="form-group col-md-4" >
                              <label for="nom_produit">Nom produit</label>
                              <input type="text"  id="nom_produit" aria-describedby="emailHelp" class="form-control" placeholder="Name" name="nom_produit" required maxlength="30">
                           </div>
                           <div class="form-group col-md-4">
                              <label for="prix">prix</label>
                              <input type="number"  id="prix" aria-describedby="emailHelp" class="form-control" placeholder="prix" name="prix" required maxlength="5">
                           </div>
                           <div class="form-group col-md-4">
                              <label for="prix_promotion">prix</label>
                              <input type="number"  id="prix_promotion" aria-describedby="emailHelp" class="form-control" placeholder="prix_promotion" name="prix_promotion" required maxlength="5">
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="categorie" >Choisir categorie</label>
                              <select   id="categorie" name="categorie" class="form-control">
                                    <option value="bracelet">Bracelet</option>
                                    <option value="echarpe">Echarpe</option>
                                    <option value="ceinture">Ceinture</option>
                                    <option value="gant">Gant</option>
                                    <option value="accessoire cheveux">Accessoire cheveux</option>
                                    <option value="collier">Collier</option>
                                    <option value="bague">Bague</option>
                                    <option value="boucles oreilles">Boucles d'oreilles</option>
                                    <option value="ensemble bijoux">Ensemble bijoux</option>
                              </select>
                           </div>
                           <div class="form-group col-md-5">
                           <label for="image" >Choisir image</label>

                           <input type="file" name="image"  class="form-control-file">
                          
                            </div>
                        </div>
                        
                        <div class="form-row">
                           <div class="form-group col-md-10">
                              <label for="verify" >Description</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required ></textarea>                                
                           </div>
                        </div>
                        <input type="submit" name="submit_image" value="Upload"  class="btn btn-primary">
                     </form>
    </div>
</body>
</html>
<?php } ?>