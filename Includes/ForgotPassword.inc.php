
<?php
if(isset($_POST["submit"])){


$username=$_POST['myUsername'];
$email=$_POST['myEmail'];

require_once '../dbh.php';
require_once '../functions.php';

if(UserNamexists($conn,$username,$email)!==false){
	header("location:../ForgotPassword.php?error=UserNamealreadyexists");
	
$token=substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"),0,15);
$token=$token;

$receiver =$_POST['myEmail'];
$subject = "Plant Care password reset";
$body = "Copy the token:       ".
            $token."       ".
            "Go back to forgot password page, click on the link and then past the above token in password field>";

$sender = "From:PlantCare021@gmail.com";

	



if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}
	exit();
}else{
	header("location:../ForgotPassword.php?error=NoSuchUsername");
	exit();
}
AddToken($conn,$username,$token);
}
else
	header("location:../login.php");
?>

