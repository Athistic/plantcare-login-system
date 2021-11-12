<?php

$conn = mysqli_connect('localhost', 'root', '','db_app');
if(!$conn){
die("Connection to database failed:" .mysqli_connect_error())	;
	
}
else
{
	
	echo"Database connection successful";
}



?>