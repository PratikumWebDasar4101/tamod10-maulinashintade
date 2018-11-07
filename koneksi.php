<?php 

$server		= "localhost";
$username	= "root";
$password	= "";
$db			= "modul8";

$conn =  mysqli_connect($server,$username,$password,$db);

if (!$conn) {
	//echo "Terhubung".mysqli_connect($conn);
	die("Gagal Terhubung".mysqli_error($conn));
}

 ?>