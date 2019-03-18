	<!-- Header section -->

<header style="background-color:#ffcbc5;" class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="./index.php" class="site-logo">
							<img style="height:80px;width:80px" src="" alt="">
						</a>
					</div>
					<div class="col-xl-5 col-lg-4">
						<form class="header-search-form">
							<input type="text" placeholder="Search on divisima ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-5 col-lg-6">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="#">Sign</a> In or <a href="#">Create Account</a>
							</div>
							<div class="up-item ml">
								<div class="shopping-card" >
									<i class="flaticon-bag"></i>
									<span class="total-count"></span>
								</div>
								<a href="#" data-toggle="modal" data-target="#cart"> Shopping Cart</a>
							</div>
							<div class="up-item">
								<div class="shopping-card">
									<i class="fa fa-info" aria-hidden="true"></i>
								</div>
								<a href="contact.php">About us</a>
							</div>
						</div>
	
					</div>
				</div>
			</div>
		</div>


		
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="index.php">Accueil</a></li>
	
	
					<li><a href="#">Accessoires Femmes</a>
						<ul class="sub-menu">
							<li><a href="./category.php?categorie=echarpe">Echarpes</a></li>
							<li><a href="./category.php?categorie=accessoire cheveux">Accessoires Cheveux</a></li>
							<li><a href="./category.php?categorie=ceinture">Ceintures</a></li>
							<li><a href="./category.php?categorie=gant">Gants</a></li>
						</ul>
					</li>
					<li><a href="#">Bijoux</a>
						<ul class="sub-menu">
							<li><a href="./category.php?categorie=boucles d'oreilles">Boucles d'oreilles</a></li>
							<li><a href="./category.php?categorie=bracelet">Bracelets</a></li>
							<li><a href="./category.php?categorie=collier">Colliers</a></li>
							<li><a href="./category.php?categorie=bague">Bagues</a></li>
							<li><a href="./category.php?categorie=ensemble bijoux">Ensemble De Bijoux</a></li>
						</ul>
					</li>
					<li>
						<a href="#">Montres
							<span class="new">New</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->
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