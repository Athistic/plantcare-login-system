<?php

if(isset($_POST["submit"])){
	

$token=$_POST['token'];
$password=$token;
$email=$_POST['email'];
require_once '../dbh.php';
require_once '../newFunctions.php';
require_once '../testerFunctions.php';

if(ForgotUserNamexists($conn,$email,$token)!==false){
	$new_password = password_hash($password, PASSWORD_DEFAULT);
	$sql="UPDATE tbl_registration SET password='$new_password' WHERE email='$email'";
	if (mysqli_query($conn, $sql)) {
  header("location:../PasswordReset.php?error=noError");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
}
}
else{
	header:"location:../login.php";
	
}

?>