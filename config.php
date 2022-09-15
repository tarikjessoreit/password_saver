<?php 
date_default_timezone_set('Asia/Dhaka'); 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "password_saver";

$conn = new mysqli($servername,$username,$password, $dbname);

if ($conn->connect_error) {
	die("Error: ".$conn->connect_error);
}


