<?php 

$Email=$_POST['email'];
$query = "SELECT * from utilisateurs where Email='".$Email."'";
$result = $bdd->query($query); 


if($row=$result->fetch())
{
    if(password_verify($_POST['pass'],$row['Mot_de_passe'])){
        $_SESSION['email']=$row['Email'];
        $_SESSION['nom']=$row['Nom'];
        $_SESSION['prenom']=$row['Prenom'];
        $_SESSION['active']=$row['Active'];
        $_SESSION['loggin']=true;
        header("location:index.php");
    }
    else{
        $_SESSION['message']="wrong pass";
        header("location:error.php");
    }    
}
else
{
    $_SESSION['message']="email not found";
    header("location:error.php");
}
?>