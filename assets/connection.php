<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "mindbuddy";

//$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

//if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
//{

//	die("failed to connect!");
//}



$con = new mysqli("$dbhost","$dbuser","$dbpass","$dbname");

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}

?>