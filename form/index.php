<!DOCTYPE html>
<?php
	require "../model.php";
	$bdd = dbConnect();
	session_start();
?>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>

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

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/jquery-ui.min.css"/>

	<link rel="stylesheet" href="./css/style.css"/>

</head>

<body class="bg-gra-01">

<?php if($_SERVER['REQUEST_METHOD'] =='POST'){
		if(isset($_POST['login'])){
			echo("ssssss") ;
		}
		elseif(isset($_POST['signup'])){
			require "./signup.php";
		}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	



} ?>
 
	<div class="page-wrapper bg-gra-01 p-t-30 p-b-100 font-poppins">        
		<div class="wrapper wrapper--w780 tab-content">
				  
			<ul class="tab-group">
				<li class="tab active" ><a style="border-top-left-radius: 20px;" href="#signup">Sign Up</a></li>
				<li class="tab"><a style="border-top-right-radius: 20px;" href="#login">Log In</a></li>
			</ul>
			
			<div id="signup">   
				  
				<div class="card card-3">
					<div class="container" >
						<div class="row ">
							<div class="col-12 col-sm-6 card-heading" >
							</div>
							<div class="col-sm-6 col-12 card-body">
								<h2 class="title">CRÉEZ VOTRE COMPTE</h2>
			
								<form method="POST" action="index.php">
				
									<div>
										<input type="text" placeholder="Nom" name="nom" required>
									</div>
				
									<div >
										<input  type="text" placeholder="Prenom" name="prenom" required>
									</div>
				
									<div > 
										<input type="email" placeholder="Adresse e-mail" name="email" required>
									</div>
									
				
									<div >
										<input type="password" placeholder="Mot de passe" name="pass" required>
									</div>
				

									<div >
										<input required  placeholder="Date de naissance" type="text" id='date' name="Date" onfocus="(this.type='date')">
		
									</div>
				
									<div >
										<input  type="text" placeholder="Adresse" name="adresse" required>
									</div>

									<div >
										<input  type="text" placeholder="Numéro de téléphone" name="tel" required>
									</div>
					
										
									<div class="p-t-10">
										<button class="btn btn--pill btn--pink" name="signup" type="submit">S'inscrire</button>
									</div>
								</form>  
						</div>
					</div>
				</div>
			</div>
		</div>
			


			
			<div id="login">   
				<div class="card card-3">
					<div class="container" >
						<div class="row" >

							<div class="col-12 col-sm-6 card-heading"></div>

							<div class="col-12 col-sm-6 card-body " style="min-height:570px;padding-top:160px" >
								<div>
								<h2 class="title">DÉJÀ INSCRIT?</h2>
								<form method="POST">
									<div>
										<input  type="email" placeholder="Adresse e-mail" name="email">
									</div>
						
									<div>
										<input  type="password" placeholder="Mot de passe" name="pass">
									</div>
						
								
									<div>
										<button class="btn btn--pill btn--pink" name="login" type="submit">Connexion</button>
									</div>
								</form>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>


		</div>
	</div>
			

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script  src="js/index.js"></script>
	<!--====== Javascripts & Jquery ======-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery-ui.min.js"></script>
	<script src="../js/main.js"></script>


</body>

</html>

