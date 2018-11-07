 <?php
	class controller{

		function login(){
		require_once "koneksi.php";
			if (isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];

			$sql = "INSERT INTO ta9_user (username,password) VALUES ('$username','$password')";
			
			$row = mysqli_num_rows($sql);
			if ($row==1) {
				session_start();
				header("location:dashboard.php");
			}else{
				echo "Anda Belum Terdaftar!";
				echo "<br>";
				echo "<a href=register.php>Create Akun</a>";
		}
	}
}
		function registrasi(){
		require_once "koneksi.php";
			if (isset($_POST['submit'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			//$conn = mysqli_connect("localhost","root","","db");
			$sql = "INSERT INTO ta9_user (username,password) VALUES ('$username','$password')";

			if (mysqli_query($conn, $sql)) {
				header("location:index.php");
			}else{
				echo "Eror";
		}
	}
}
		function dashboard(){
			require_once 'koneksi.php';
			session_start();
			$sql = "SELECT * FROM ta9_mahasiswa WHERE nim ";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result)>0) {

		while ($row = mysqli_fetch_assoc($result)) {
			$nim = $row['nim'];
			echo "<tr>";
			echo "<td>".$row['nama_depan']."</td>";
			echo "<td>".$row['nama_belakang']."</td>";
			echo "<td>".$row['nim']."</td>";
			echo "<td>".$row['kelas']."</td>";
			echo "<td>".$row['hobi']."</td>";
			echo "<td>".$row['film']."</td>";
			echo "<td>".$row['wisata']."</td>";
			echo "<td>".$row['tgl_lahir']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>"."<a href='edit.php?nim=$nim'>Edit</a>". " &nbsp; <a href='hapus.php?nim=$nim'>Hapus</a>"."</td>";
			echo "</tr>";
		
	}
}else{
	echo "<b>Data Anda Tidak Ditemukan!</b>";
	echo "<br>";
	echo "<a href=newdata.php>Masukkan Data Anda</a>";

	//echo "0 results";
}
mysqli_close($conn);
}
		function newData(){
			require_once("koneksi.php");

			if (isset($_POST['submit'])) {
			$nama_depan = $_POST['namadepan'];
			$nama_belakang = $_POST['namabelakang'];
			$nim = $_POST['nim'];
			$kelas = $_POST['kelas'];

			$hobi = $_POST['hobi'];
			$film = $_POST['film'];
			$wisata = $_POST['wisata'];

			$tgl_lahir = $_POST['tanggal'];
			$email = $_POST['email'];

			//$kesenangan = implode(",", $hobi);
			//$genre = implode(",", $film);
			//$tempat = implode(",", $wisata);

			$sql = "INSERT INTO ta9_mahasiswa(nama_depan,nama_belakang,nim,kelas,hobi,film,wisata,tgl_lahir,email) VALUES ('$nama_depan','$nama_belakang','$nim','$kelas','$hobi','$film','$wisata','$tgl_lahir','$email')";

			if (mysqli_query($conn, $sql)) {
				echo "Data Berhasil di Input";
				echo "<br>";
				echo "Silahkan Lihat Data Anda";
				echo "<br>";
				echo "<a href=dashboard.php>Cek Data</a>";
			}else{
				echo "Error". $sql."<br>".mysqli_error($conn);
			}
		}
	mysqli_close($conn);
}

		function profile(){
			require_once 'koneksi.php';
			session_start();
			$username = $_SESSION['username'];
			$sql = "SELECT * FROM user WHERE username='$username'";
			$result = mysqli_query($db, $sql);

			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$username = $row['username'];
					echo "<tr>";
					echo "<td>" . $username . "</td>";
					echo "<td>" . $password . "</td>";
					echo "<td><a href=edit-pass.php?username=$username>Edit Pass</a></td>";
					echo "</tr>";
			}
		}
	}
}

		function delete($nim){
			if (!empty($_GET['nim'])) {
			require_once 'koneksi.php';
				$sql = "DELETE FROM mahasiswa WHERE nim='$nim'";
				if (mysqli_query($db, $sql)) {
					header("Location: dashboard.php");
				}else{
					echo "Error : " . $sql . "<br>" . mysqli_error($conn);
			}
		}
	mysqli_close($db);
}

		function ambil_data($nim){
				require_once 'koneksi.php';
				$sql = "SELECT * from mahasiswa where nim='$nim'";
				return mysqli_query($db, $sql);

}
		function edit(){
			if (!empty($_GET['nim'])) {
			$nim = $_GET['nim'];
			$sql = "SELECT * FROM ta9_mahasiswa WHERE nim='$nim'";
			$result = mysqli_query($conn, $sql);

			$nim         	= $_GET['nim'];
			$mahasiswa  	= "SELECT * FROM ta9_ where nim = '$nim'";
			$result			= mysqli_query($conn, $mahasiswa);

			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$nama_depan = $row['nama_depan'];
					$nama_belakang = $row['nama_belakang'];
					$nim = $row['nim'];
					$kelas = $row['kelas'];
					$hobi = $row['hobi'];
					$film = $row['film'];
					$wisata = $row['wisata'];
					$tgl_lahir = $row['tgl_lahir'];
					$email = $row['email'];
		}
	}
}

		function datapass($username){
			require_once 'koneksi.php';
			$sql = "SELECT * FROM `user` WHERE username='$username'";
			return mysqli_query($db, $sql);

}

		function editpass(){
			if (isset($_POST['editpass'])) {
				$username = $_POST['username'];
				$newpass = $_POST['newpassword'];
				$db = new mysqli("localhost", "root", "", "praktikum8");
				$sql = "UPDATE `user` SET password='$newpass' WHERE username='$username'";

				if (mysqli_query($db, $sql)) {
					echo "<br>";
					echo "Password Berhasil Diubah";
				}else{
					echo "Error : " . $sql . "<br>" . mysqli_error($db);
			}
		mysqli_close($db);
	}
}

		function cari(){
			require_once 'koneksi.php';
			$cari = $_POST['cari'];
			$sql = "SELECT * FROM ta9_mahasiswa WHERE nim LIKE '%$cari%'";
			$result = mysqli_query($db, $sql);

			if (mysqli_num_rows($result)>0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$nim = $row['nim'];
				echo "<tr>";
				echo "<td>".$row['nama_depan']."</td>";
				echo "<td>".$row['nama_belakang']."</td>";
				echo "<td>".$row['nim']."</td>";
				echo "<td>".$row['kelas']."</td>";
				echo "<td>".$row['hobi']."</td>";
				echo "<td>".$row['film']."</td>";
				echo "<td>".$row['wisata']."</td>";
				echo "<td>".$row['tgl_lahir']."</td>";
				echo "<td>".$row['email']."</td>";
				echo "</tr>";
		}
	}
}

		function logout(){
			session_start();
			session_destroy();
			header("Location: index.php");
	}
}

	$controller = new Controller();
	if (isset($_GET['logout'])) {
		$controller->logout();
	}

	if (isset($_GET['delete'])) {
		$nim = $_GET['nim'];
		$controller->delete($nim);
	}
?>