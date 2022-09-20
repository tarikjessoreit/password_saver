<?php 
session_start();
date_default_timezone_set('Asia/Dhaka'); 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "password_saver";



// All Tables
define('TBL_DATA', 'ps_data');
define('TBL_USER', 'ps_users');

$conn = new mysqli($servername,$username,$password, $dbname);

if ($conn->connect_error) {
	die("Error: ".$conn->connect_error);
}


