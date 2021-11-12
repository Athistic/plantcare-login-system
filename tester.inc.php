<?php

if(isset($_POST["submit"])){

$username=$_POST['username'];
	
$token=substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"),0,15);

$token=$_POST['token'];


require_once 'dbh.php';
require_once 'testerFunctions.php';

if(emptyInputSignUp($username,$token)!==false){
	header("location:tester.php?error=emptyinput");
	exit();
}




if(invalidUserName($username)!==false){
	header("location:tester.php?error=invalidUserName");
	exit();
}


if(UserNamexists($conn,$username,$email)!==false){
	header("location:tester.php?error=UserNamealreadyexists");
	exit();
}
	createUser($conn,$username,$token);

}


else{
	
header("location:tester.php");
	exit();
}


?>