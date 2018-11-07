<?php 
require_once("Controller.php");
$controller = new controller();

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title></title>
</head>
<body >
		<form action="submit.php" method="post">
			<table class="table">
				<h2>Input Data Anda</h2>
			<tr>
				<td>Nama Depan </td>
				<td>:</td>
				<td><input type="text" name="namadepan" pattern="[A-Za-z ]{1,25}" title=" Nama harus maks 35 karakter" required></td>	
			</tr>
			<tr>
				<td>Nama Belakang </td>
				<td>:</td>
				<td><input type="text" name="namabelakang" pattern="[A-Za-z ]{1,25}" title=" Nama harus maks 35 karakter" required></td>	
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" name="nim"  pattern="[0-9]{10}" title="Nim harus angka dan 10 karakter"  required ></td>	
			</tr>
			<tr>
				<td>Kelas </td>
				<td>:</td>
					<td>
						<input type="radio" name="kelas" value="MI-4101"> MI-4101<br>
						<input type="radio" name="kelas" value="MI-4102"> MI-4102<br>
						<input type="radio" name="kelas" value="MI-4103"> MI-4103<br>
						<input type="radio" name="kelas" value="MI-4104"> MI-4104<br>
					</td>
				</tr>	
			<tr>
				<td>Hobi</td>
				<td>:</td> 
				<td>
				<input type="checkbox" name="hobi" value="Bernyanyi">Bernyanyi<br>
				<input type="checkbox" name="hobi" value="Menulis">Menulis<br>
				<input type="checkbox" name="hobi" value="Membaca">Membaca<br>
				<input type="checkbox" name="hobi" value="Berenang">Berenang<br></td>
			</tr>
			<tr>
				<td>Genre Film</td>
				<td>:</td> 
				<td><input type="checkbox" name="film" value="Horor">Horor<br>
				<input type="checkbox" name="film" value="Anime">Anime<br>
				<input type="checkbox" name="film" value="Action">Action<br>
				<input type="checkbox" name="film" value="Drama">Drama<br></td>
			</tr>
			<tr>
				<td>Tempat Wisata</td>
				<td>:</td> 
				<td><input type="checkbox" name="wisata" value="Bali">Bali<br>
				<input type="checkbox" name="wisata" value="Tanjung Selor">Tanjung Selor<br>
				<input type="checkbox" name="wisata" value="Jakarta">Jakarta<br>
				<input type="checkbox" name="wisata" value="Lombok">Lombok<br></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="tanggal"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" placeholder="example@gmail.com" required></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><br><input type="submit" name="submit" value="simpan"></td>					
			</tr>		
		</table>	
		</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <?php $controller->newData(); ?>
</body>
</html>

