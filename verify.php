<?php 
require "./model.php";
$bdd = dbConnect();
session_start();

if(isset($_GET['Email']) && !empty($_GET['Email'])  AND  isset($_GET['Hash']) && !empty($_GET['Hash'])){

    $email = $_GET['Email'] ;
    $hash = $_GET['Hash'] ;

    $query = "SELECT * from utilisateurs where Email='$email' AND Hash='$hash' AND Active='0' ";
    $result = $bdd->query($query); 
   
    if($row=$result->fetch())
    {
       $_SESSION['message']="Your accuont has been activated " ;
       $bdd->query("UPDATE utilisateurs set Active='1' where Email='$email'"); 
       $_SESSION['active']=1;
       header("location:index.php");
    }
    else{
        $_SESSION['message']="Your accuont has already been activated or URL is invalid " ;
        header("location:error.php");
    }
}
else{
    $_SESSION['message']="nboooooooooooooooo " ;
    header("location:error.php");
}
?>