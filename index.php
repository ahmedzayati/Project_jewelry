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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->   
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

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
	

<?php include 'header.php' ?>	
<?php require 'model.php' ?>	


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/bg11.png">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>denim jackets</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/bg5.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>denim jackets</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->



	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/1.png" alt="#">
						</div>
						<h2>Fast Secure Payments</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/2.png" alt="#">
						</div>
						<h2>Premium Products</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/3.png" alt="#">
						</div>
						<h2>Free Delivery</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- letest product section -->
	<section class="top-letest-product-section">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="section-title">
                     <h2>LATEST PRODUCTS</h2>
                  </div>
                  <div class="product-slider owl-carousel">
                     <?php
                        $bdd = dbConnect();
                        $query = "SELECT * FROM produit ";
                         $result = $bdd->query($query); 
                         while($row=$result->fetch())
                        {
                        ?>
                     <div class="product-item" style="border:1px solid rgba(0,0,0,.1);border-radius:15px">
                        <div class="pi-pic">
                           <img style="border-radius:15px 15px 0 0;" <?php echo 'src="data:image/jpeg;base64,'.base64_encode($row['image']).'"' ?>alt="">
                           <div class="pi-links">
                              <a href="#" class="add-card add-to-cart" data-name="<?php  echo $row['nom_produit']; ?>" data-price="<?php  echo $row['prix']; ?>" ><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                              <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                           </div>
                        </div>
                        <div class="pi-text">
                           <h6 class="price"><?php  echo $row['prix']; ?> DT</h6>
                           <p class="title"><a href="product.php?nom_produit=<?php  echo $row['nom_produit']; ?>"><?php  echo $row['nom_produit']; ?> </a></p>
                        </div>
                     </div>
                     <?php  
                        }
                        $result->closeCursor();
                        
                        ?>	
                  </div>
               </div>
            </div>
         </div>
      </section>
	<!-- letest product section end -->
<div class="container">
<div class="row">
	
	<div class="col-9">
	<div class="row">
	<div class="col-3  pr-0 pl-0">
	<div class="card">

<!-- Card image -->
<div class="view overlay">
  <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap">
  <a href="#!">
	<div class="mask rgba-white-slight"></div>
  </a>
</div>


	</div>
</div>


	<div class="col-3 pr-0 pl-0">
	<div class="card">

<!-- Card image -->
<div class="view overlay">
  <img class="card-img-top" src="https://static.lexpress.fr/medias_11391/w_1320,c_limit,g_north/v1488213309/bague-de-fiancailles-ruban-chanel_5832681.jpg" alt="Card image cap">
  <a href="#!">
	<div class="mask rgba-white-slight"></div>
  </a>
</div>


	</div>
</div>




	<div class="col-3 pr-0 pl-0">
	<div class="card">

<!-- Card image -->
<div class="view overlay">
  <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap">
  <a href="#!">
	<div class="mask rgba-white-slight"></div>
  </a>
</div>


 


	</div>
</div>



<div class="col-3 pr-0 pl-0">
	<div class="card">

<!-- Card image -->
<div class="view overlay">
  <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap">
  <a href="#!">
	<div class="mask rgba-white-slight"></div>
  </a>
</div>


	</div>
</div>

<div class="col-3 pr-0 pl-0">
	<div class="card">

<!-- Card image -->
<div class="view overlay">
  <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap">
  <a href="#!">
	<div class="mask rgba-white-slight"></div>
  </a>
</div>


	</div>
</div>
<div class="col-3 pr-0 pl-0">
	<div class="card">

<!-- Card image -->
<div class="view overlay">
  <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap">
  <a href="#!">
	<div class="mask rgba-white-slight"></div>
  </a>
</div>


	</div>
</div>
<div class="col-3 pr-0 pl-0">
	<div class="card">

<!-- Card image -->
<div class="view overlay">
  <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap">
  <a href="#!">
	<div class="mask rgba-white-slight"></div>
  </a>
</div>


	</div>
</div>
<div class="col-3 pr-0 pl-0">
	<div class="card">

<!-- Card image -->
<div class="view overlay">
  <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap">
  <a href="#!">
	<div class="mask rgba-white-slight"></div>
  </a>
</div>


	</div>
</div>


	</div>
</div>
	<div class="col-3">

	</div>


</div>
</div>
<!-- Card -->

	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>BROWSE TOP SELLING PRODUCTS</h2>
			</div>
			<ul class="product-filter-menu">
				<li><a href="#">TOPS</a></li>
				<li><a href="#">JUMPSUITS</a></li>
				<li><a href="#">LINGERIE</a></li>
				
			</ul>
			<div class="row">
			
               <div class="col-12">
                  <div class="product-slider owl-carousel">
				  <?php
                        $bdd = dbConnect();
                        
                         $result = topSelling(); 
                         while($row=$result->fetch())
                        {
                        ?>
                     <div class="product-item" style="border:1px solid rgba(0,0,0,.1);border-radius:15px">
                        <div class="pi-pic">
                           <img style="border-radius:15px 15px 0 0;" <?php echo 'src="data:image/jpeg;base64,'.base64_encode($row['image']).'"' ?>alt="">
                           <div class="pi-links">
                              <a href="#" class="add-card add-to-cart" data-name="<?php  echo $row['nom_produit']; ?>" data-price="<?php  echo $row['prix']; ?>" ><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                              <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                           </div>
                        </div>
                        <div class="pi-text">
                           <h6 class="price"><?php  echo $row['prix']; ?> DT</h6>
                           <p class="title"><a href="product.php?nom_produit=<?php  echo $row['nom_produit']; ?>"><?php  echo $row['nom_produit']; ?> </a></p>
                        </div>
                     </div>
                     <?php  
                        }
                        $result->closeCursor();
                        
                        ?>
				</div>
			</div>
			</div>
			
		</div>
	</section>
	<!-- Product filter section end -->
<div class="container">
	<div class="row" id="result_para">
	<?php
                        $bdd = dbConnect();
                        $req = $bdd->prepare("SELECT * from produit order by vendu desc limit 0,2");
    					$req->execute();
                         //$result = topSelling(); 
                         while($row=$req->fetch())
                        {
                        ?>
						<div class="col-3">
                     <div class="product-item" style="border:1px solid rgba(0,0,0,.1);border-radius:15px">
                        <div class="pi-pic">
                           <img style="border-radius:15px 15px 0 0;" <?php echo 'src="data:image/jpeg;base64,'.base64_encode($row['image']).'"' ?>alt="">
                           <div class="pi-links">
                              <a href="#" class="add-card add-to-cart" data-name="<?php  echo $row['nom_produit']; ?>" data-price="<?php  echo $row['prix']; ?>" ><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                              <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                           </div>
                        </div>
                        <div class="pi-text">
                           <h6 class="price"><?php  echo $row['prix']; ?> DT</h6>
                           <p class="title"><a href="product.php?nom_produit=<?php  echo $row['nom_produit']; ?>"><?php  echo $row['nom_produit']; ?> </a></p>
                        </div>
                     </div>
					 </div>
                     <?php  
                        }
                        $req->closeCursor();
                        
                        ?>

	</div>
	<input type="hidden" id="result_no" value="2">
  
	<div class="text-center pt-5">
				<button class="site-btn sb-line sb-dark" id="load">LOAD MORE</button>
			</div>
</div>

<br>



	<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="img/product/a.jpg">
				<div class="tag-new">NEW</div>
				<span>New Arrivals</span>
				<h2>STRIPED SHIRTS</h2>
				<a href="#" class="site-btn">SHOP NOW</a>
			</div>
		</div>
	</section>
	<!-- Banner section end  -->


		<!-- Main -->
		
		 <!-- Modal -->
		<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Cart</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<table class="show-cart table">
				  
				</table>
				<div>Total price: $<span class="total-cart"></span></div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Order now</button>
			  </div>
			</div>
		  </div>
		</div> 


 <?php include 'footer.php' ?>


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
	<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">
$(document).ready(function(){
 $("#load").click(function(){
  loadmore();
 });
});

function loadmore()
{
 var val = document.getElementById("result_no").value;
 $.ajax({
 type: 'post',
 url: 'fetch.php',
 data: {
  getresult:val
 },
 success: function (response) {
  var content = document.getElementById("result_para");
  content.innerHTML = content.innerHTML+response;

  // We increase the value by 2 because we limit the results by 2
  document.getElementById("result_no").value = Number(val)+2;
 }
 });
}
</script>

	</body>
</html>
