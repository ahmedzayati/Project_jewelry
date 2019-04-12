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
    <!-- <form action="ins.php" method="post" enctype="multipart/form-data">
            nom<input type="text" name="nom_produit" />
            description<input type="text" name="description"/>
            prix<input type="text"  name="prix"/>
            prix pro<input type="number" name="prix_promotion"/>
            image<input type="file" name="image"/>
            <select name="categorie">
                <option value="bracelet">Bracelet</option>
                <option value="echarpe">Echarpe</option>
                <option value="ceinture">Ceinture</option>
                <option value="gant">Gant</option>
                <option value="accessoire cheveux">Accessoire cheveux</option>
                <option value="collier">Collier</option>
                <option value="bague">Bague</option>
                <option value="boucles d'oreilles">Boucles d'oreilles</option>
                <option value="ensemble bijoux">Ensemble bijoux</option>


               
            <input type="submit" value="inserer" />

    </form> -->
    

            <div id="id02" class="modal" >
                     <span onclick="document.getElementById('id02').style.display='none'" >&times;</span>
                     <form method="POST" action="admin.php" enctype="multipart/form-data" style="padding: 20px;" class="modal-content animate form-row">
                     
                     <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="supprimee" >Choisir produit  supprimer</label>
                        <select  class="form-control col-sm-12" id="supprimee" name="supprimee">
                        <?php  
                        $bdd = dbConnect();
                        $query = "SELECT nom_produit FROM produit ";
                            $result = $bdd->query($query); 
                            while($row=$result->fetch())   
                           {    
                           echo '<option value="'.$row['nom_produit'].'">'.$row['nom_produit'].'</option>';
                           

                           }
                            $result->closeCursor();
                           ?>
                           
                          
                           
                        
                        </select>
                        </div></div>
                        <input type="submit" value="Supprimer" class="btn btn-primary">
                        
                  </form>
                     </div>

<div class="container">
<div class="row">
  <div class="col-10">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id commande</th>
      <th scope="col">Nom utilisateur</th>
      <th scope="col">Email</th>
      <th scope="col">Date</th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
  <?php 
        $bdd=dbConnect();
        $commande=$bdd->prepare("select * from commande c,utilisateurs e where c.id_user=e.Id");
        $commande->execute();
        while($com=$commande->fetch())
                          {
  ?>
    <tr>
      <th scope="row"><?php echo $com['id_commande'] ?></th>
      <td><?php echo $com['Nom'] ?></td>
      <td><?php echo $com['Email'] ?></td>
      <td><?php echo $com['date_commande'] ?></td>
      <td><a href="commande.php?id=<?php echo $com['id_commande'] ?>" >Voir detail</a></td>
    </tr>
                        <?php } $commande->closeCursor(); ?>
  </tbody>
</table>
  </div>

</div>
</div>

    
</body>
</html>
<script>
      var modal1 = document.getElementById("id03");
      var modal2 = document.getElementById("id01");
      var modal = document.getElementById("id02");
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
        if (event.target == modal1) {
          modal1.style.display = "none";
        }
        if (event.target == modal2) {
          modal2.style.display = "none";
        }
      }
    </script><?php } ?>