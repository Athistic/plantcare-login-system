<?php

if(isset($_POST["submit"])){

$email=$_POST['email'];
	
$token=substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"),0,15);
$_POST['token']=$token;



require_once 'dbh.php';
require_once 'testerFunctions.php';

if(emptyInputSignUp($email,$token)!==false){
	header("location:forgotPassword.php?error=emptyinput");
	exit();
}



if(UserNamexists($conn,$email)!==false){
	
	$receiver =$_POST['email'];
$subject = "Plant Care password reset";
$body = "Copy the token:       ".
            $token."       ".
            "And paste it in the link  "." 'http://localhost/plantcare/passwordReset.php>";

$sender = "From:PlantCare021@gmail.com";

	



if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
	createUser($conn,$email,$token);
	UpdateUser($conn,$token,$email);
	
	 
}else{
    echo "Sorry, failed while sending mail!";
}
	exit();
}else{
	header("location:forgotPassword.php?error=NoSuchUsername");
	exit();
}
	
	
	

	

}


else{
	
header("location:tester2.php");
	exit();
}


?>