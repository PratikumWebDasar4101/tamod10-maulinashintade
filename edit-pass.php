<?php 

require_once 'Controller.php';
$Controller = new Controller();
$username	= $_GET['username'];
$result		= $Controller->datapass($username);

if (mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$username	= $row['username'];
		$password	= $row['password'];
	}
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form>
 	<h2>Edit Password</h2>
 	Username : <input type="text" name="username" value="<?php echo $username; ?>">
 	Password : <input type="text" name="password" value="<?php echo $password; ?>">
 	New Password : <input type="text" name="newpassword">
 	<input type="submit" name="ubah" value="Ubah"> 
 </form>
 </body>
 <?php $Controller->editpass();?>
 </html>