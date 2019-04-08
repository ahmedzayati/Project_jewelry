<?php
require "model.php";
 $bdd = dbConnect();
 $no = $_POST['getresult'];
 $req = $bdd->prepare("SELECT * from produit order by vendu desc limit $no,2");
 $req->execute();
  //$result = topSelling(); 
  while($row=$req->fetch())
                        {
                        ?>
						<div class="col-3">
                     <div class="product-item" style="border:1px solid rgba(0,0,0,.1);border-radius:15px">
                        <div class="pi-pic">
                           <img style="border-radius:15px 15px 0 0;width:100%" <?php echo 'src="data:image/jpeg;base64,'.base64_encode($row['image']).'"' ?>alt="">
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