<?php

	if(isset($_POST['submit'])){
	
	$name = $_POST['name'];
	$cell = $_POST['cell'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	require_once '../dbh.php';
    require_once '../functions.php';
		

AddToContacts($conn,$name,$cell,$email,$message);
}
	
	else

	header("location:../contact.php");
	exit();
?>