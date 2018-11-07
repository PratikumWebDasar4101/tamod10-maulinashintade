<?php 

require_once("Controller.php");

$nim         	= $_GET['nim'];
$controller  	= new controller();
$result			= $controller->delete($nim);

if (!empty($_GET['nim'])) {
	require_once 'koneksi.php';
		$sql = "DELETE FROM mahasiswa WHERE nim='$nim'";
		if (mysqli_query($db, $sql)) {
			header("Location: dashboard.php");
		}else{
			echo "Error : " . $sql . "<br>" . mysqli_error($conn);
	}
}

 ?>