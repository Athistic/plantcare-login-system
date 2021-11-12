<?php

if(isset($_POST["submit"])){
	
$username=$_POST['username'];
$password=$_POST['password'];
$passwordRepeat=$_POST['passwordRepeat'];
 
		
require_once '../dbh.php';
require_once '../functions.php';

if(invalidPassword($password)!==false){
	header("location:../update page.php?error=invalidPassword");
	exit();
}

if(passwordMatch($password,$passwordRepeat)!==false){
	header("location:../update page.php?error=passwordsdontMatch");
	exit();
}


if ($password==$passwordRepeat){
	
	$new_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "UPDATE tbl_registration SET password='$new_password' WHERE username='$username'";

if (mysqli_query($conn, $sql)) {
  header("location:../update page.php?error=noError");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
}
}
else{
	header:"location:../login.php";
	
}


mysqli_close($conn);
?>