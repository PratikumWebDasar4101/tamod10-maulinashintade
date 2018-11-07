<?php 
require_once("Controller.php");
$controller = new controller();
 ?>
 <table border="1" class="table">
 		<thead>
 			<form action="" method="post">
 				Cari : <input type="text" name="cari" placeholder="Masukkan Nim Anda">
 				<input type="submit" name="cari" value="Cari">
 				<br>
 				<br>
 			</form>
 			<th>Nama Depan</th>
 			<th>Nama Belakang</th>
 			<th>NIM</th>
 			<th>Kelas</th>
 			<th>Hobi </th>
 			<th>Genre Film </th>
 			<th>Tempat Wisata</th>
 			<th>Tanggal Lahir</th>
 			<th>Email</th>
 			<th>Action</th>
 		</theads>
 		<?php
 		if (isset($_POST['cari'])) {
 			$controller->cari();
 		}else{
 			$controller->dashboard();
 		}
 		?>
 	</tbody>
  </tbody>
 </table>
 <br>
 <a href="newdata.php">Input Data Kembali</a>
 <br>
 <br>
 <a href="index.php">LOGOUT</a>
