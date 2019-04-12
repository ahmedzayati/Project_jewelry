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
    $_SESSION['message']="email already exist";
    header("location:error.php");

}
else
{
    $qr = "INSERT INTO utilisateurs ( `Nom`,`Prenom`,`Email`,`Mot_de_passe`,`Date_de_naissance`,`Adresse`,`Telephone`,`Hash`) VALUES('$Nom','$Prenom','$Email','$hashed_password','$Date','$Adresse','$Tel','$hash')";
	if($bdd->exec($qr)){
        $_SESSION['active']=0;
        $_SESSION['loggin']=true;
        $_SESSION['message']="sign in succ";

        $to = $Email ;
        $subject = 'Account verification';
        $message_body = 'Hello' .$Prenom. 'Thank you for signing up
                        Please click the link to verify you account 
                        http://localhost/Project_jewelry/verify.php?Email='.$Email.'&Hash='.$hash ;



            require_once('PHPMailer/PHPMailerAutoload.php') ;
            $mail = new PHPMailer(); // create a new object
            $mail->IsSMTP(); // enable SMTP
            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465; // or 587
            $mail->IsHTML(true);
            $mail->Username = "accessoiryyy@gmail.com";
            $mail->Password = "gyyyg1256";
            $mail->SetFrom("accessoiryyy@gmail.com");
            $mail->Subject =  $subject;
            $mail->Body =   $message_body;
            $mail->AddAddress( $to);
            
             if(!$mail->Send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
             } else {
                header("location:index.php");
            }

    } 
    else{
        $_SESSION['message']="email already exist";
        header("location:error.php");
    }
}


?>