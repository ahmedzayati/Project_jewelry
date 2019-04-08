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
			
								<form method="POST" action="auth.php">
				
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
								<form method="POST" action="auth.php">
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