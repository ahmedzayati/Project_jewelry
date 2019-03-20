<?php 

$_SESSION['email']=$_POST['email'];
$_SESSION['nom']=$_POST['nom'];
$_SESSION['prenom']=$_POST['prenom'];

$Nom=$_POST['nom'];
$Prenom=$_POST['prenom'];
$Email=$_POST['email'];
$Password=$_POST['pass'];
$hashed_password = password_hash($Password, PASSWORD_DEFAULT);
$hash = md5(rand(0,1000)) ;
$Adresse=$_POST['adresse'];
$Tel=$_POST['tel'];
$Date=$_POST['Date'];

$query = "SELECT * from utilisateurs where Email='".$Email."'";
$result = $bdd->query($query); 

if($row=$result->fetch())
{
    $_SESSION['message']="eamil already exist";
    header("location :error.php");
}
else
{
    echo("qsdqdqs");

    $qr = "INSERT INTO utilisateurs ( `Nom`,`Prenom`,`Email`,`Mot_de_passe`,`Date_de_naissance`,`Adresse`,`Telephone`,`Hash`) VALUES('$Nom','$Prenom','$Email','$hashed_password','$Date','$Adresse','$Tel','$hash')";
	if($bdd->exec($qr)){
        $_SESSION['active']=false;
        $_SESSION['loggin']=true;
        $_SESSION['message']="sign in succ";

    } 
}


?>