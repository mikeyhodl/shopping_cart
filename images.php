<?php

$user="root";
$pass="";
$host="localhost";
$db="images";

$conn=mysqli_connect($user,$pass,$host,$db);
if($conn){
	echo "connected";
}else{
	echo "error";
}


?>