<?php
session_start();
//$a=json_decode($_POST['name'],true);
?>
<!DOCTYPE html>
<html lang="zxx">
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
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<?php

require "model.php";
// $bdd=dbConnect();
// $_SESSION['panier']=$a;

// $insert_image='INSERT INTO produit ( `nom_produit`) VALUES("'.$_SESSION['panier'][0]['name'].'")';
// $rep=$bdd->query($insert_image);
	
	 include 'header.php';
	?>

	<!-- Header section end -->


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Your cart</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Your cart</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- checkout section  -->
	<section class="checkout-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 order-2 order-lg-1">
					<form class="checkout-form"  >
						<div class="cf-title">Billing Address</div>
						<div class="row">
							<div class="col-md-7">
								<p>*Billing Information</p>
							</div>
							<div class="col-md-5">
								<div class="cf-radio-btns address-rb">
									<div class="cfr-item">
										<input type="radio" name="pm" id="one">
										<label for="one">Use my regular address</label>
									</div>
									<div class="cfr-item">
										<input type="radio" name="pm" id="two">
										<label for="two">Use a different address</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row address-inputs">
							<div class="col-md-12">
								<input type="text" placeholder="Address" id="address" />
								<input type="text" placeholder="Country" id="country">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Zip code" id="zipcode">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Phone no." id="phone">
							</div>
						</div>
							
						<div id="items">
						</div>
						
						<button class="site-btn submit-order-btn" id="order2">Place Order</button>
					</form>
				</div>
				<div class="col-lg-4 order-1 order-lg-2">
					<div class="checkout-cart">
						<h3>Your Cart</h3>
						<ul class="product-list">
							
						</ul>
						<ul class="price-list">
							<li>Total<span id="total"></span></li>
							<li>Shipping<span>free</span></li>
							<li >Total<span id="total2"></span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- checkout section end -->

	<!-- Footer section -->
	<?php include 'footer.php' ?>

	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/cart.js"></script>

<script>
	var cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
	var out="";
	for(var i in cart){
		 out= out+'<li>'+
								'<div class="pl-thumb"><img src="img/cart/1.jpg" alt=""></div>'+
								'<h6>'+cart[i].name+'</h6>'+
								'<p>'+cart[i].price+'DT x '+cart[i].count+'</p>'+
							'</li>'
							$('.product-list').html(out);
		

	}
	var total=sessionStorage.getItem('total');
	$('#total').html(total+" DT");
	$('#total2').html(total+" DT");
	</script>
	<script>

	$(document).ready(function(){
$("#order2").click(function(){



$.post("commander.php", 
{ panier:sessionStorage.getItem('shoppingCart'),
   phone:$("#phone").val(),
   address:$("#address").val(),
   zipcode:$("#zipcode").val(),
   country:$("#country").val()},
function(response,status){ console.log(JSON.stringify(sessionStorage.getItem('shoppingCart')))
});
});});
	</script>
	</body>
</html>
