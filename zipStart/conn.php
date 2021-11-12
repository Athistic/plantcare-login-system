<?php


$dbhost ="localhost";
$dbuser ="root";
$dbpassword ="";
$dbname ="db_app";

if(!$connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname))
{

	die("Failed to connect");
}

?>
