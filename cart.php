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
      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <!-- Stylesheets -->
      <link rel="stylesheet" href="css/bootstrap.min.css"/>
      <link rel="stylesheet" href="css/font-awesome.min.css"/>
      <link rel="stylesheet" href="css/flaticon.css"/>
      <link rel="stylesheet" href="css/slicknav.min.css"/>
      <link rel="stylesheet" href="css/jquery-ui.min.css"/>
      <link rel="stylesheet" href="css/owl.carousel.min.css"/>
      <link rel="stylesheet" href="css/animate.css"/>
      <link rel="stylesheet" href="css/style.css"/>
      <link rel="stylesheet" href="css/breadcrumb.css"/>
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <!-- Page Preloder -->
      <!-- Header section -->
      <?php include 'header.php' ?>
      <?php require 'model.php' ?>
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
<br>
<ul class="bc">
  <li class="bc_item bc_complete"></li>
  <li class="bc_item"></li>
  <li class="bc_item"></li>
  
</ul>

 

      <!-- cart section end -->
      <section class="cart-section spad">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 ">
               <div class="cf-title">Your cart</div>
                  <div class="cart-table">
                     
                     <div class="cart-table-warp">
                        <table>
                           <thead>
                              <tr>
                                 <th class="product-th">Product</th>
                                 <th class="quy-th">Quantity</th>
                                 <th class="size-th">Prix uni</th>
                                 <th class="total-th">Price</th>
                              </tr>
                           </thead>
                           <tbody id="bodyCart">
                             
                              
                           </tbody>
                        </table>
                     </div>
                     <div class="total-cost">
                        <h6 id="total">Total <span></span></h6>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 card-right">
                  <a href="checkout.php" class="site-btn">Proceed to checkout</a>
                  <a href="index.php" class="site-btn sb-dark">Continue shopping</a>
               </div>
            </div>
         </div>
      </section>
      <!-- cart section end -->
      <!-- Related product section -->
      <section class="related-product-section">
         <div class="container">
            <div class="section-title text-uppercase">
               <h2>Continue Shopping</h2>
            </div>
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <div class="product-item">
                     <div class="pi-pic">
                        <img src="./img/product/1.jpg" alt="">
                        <div class="pi-links">
                           <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                           <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                     </div>
                     <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      <!-- Related product section end -->
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
            out= out+'<tr>'+
                                 '<td class="product-col">'+
                                    '<img src="img/'+cart[i].name+'" alt="">'+
                                    '<div class="pc-title">'+
                                    '<h4>'+cart[i].name+'</h4>'+
                                       '<p>'+cart[i].price+' DT</p>'+
                                    '</div>'+
                                 '</td>'+
                                 '<td class="quy-col">'+
                                    '<div class="quantity">'+
                                       '<div class="pro-qty">'+
                                          '<input type="text" value="'+cart[i].count+'" >'+
                                       '</div>'+
                                    '</div>'+
                                 '</td>'+
                                '<td class="size-col">'+
                                    '<h4>'+cart[i].price+' DT</h4>'+
                                 '</td>'+
                                 '<td class="total-col">'+
                                    '<h4>'+parseFloat(cart[i].price)*parseFloat(cart[i].count)+'</h4>'+
                                 '</td>'+
                              '</tr>';
                              $('#bodyCart').html(out);
        }
        var total=sessionStorage.getItem('total');
	$('#total').html(total+" DT");
      </script>
   </body>
</html>