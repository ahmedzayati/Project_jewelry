<?php 
session_start();
            require "model.php";

    if(isset($_POST['nom_adm']) && isset($_POST['pass_adm'])){
            $bdd=dbConnect();

                                
                        $query = 'SELECT * FROM web_addmin where nom_adm="'.$_POST['nom_adm'].'"';
                         $result = $bdd->query($query); 
                         if($row=$result->fetch()){
                               
                                if (password_verify($_POST['pass_adm'],$row['pass_adm'])){

                                    $_SESSION['pass_adm']=$_POST['pass_adm'];
                                    $_SESSION['nom_adm']=$_POST['nom_adm'];
                                    header("location:admin.php");
                                }
                                    else echo "errer";
                         }
                        }


// $hash=password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
// if (password_verify('rasmuslerdorf', $hash)) {
//     echo 'Password is valid!';
// } else {
//     echo 'Invalid password.';
// }
?>


