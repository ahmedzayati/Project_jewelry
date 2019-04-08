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
            <center><h2>Félicitation votre commande était passé avec succes</h2></center>
            <center><h3>Vous pouvez nous contacter pour plus des details</h3></center>
            
         </div>
      </div>
      <!-- Page info end -->
<br>


 

    
     
      
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