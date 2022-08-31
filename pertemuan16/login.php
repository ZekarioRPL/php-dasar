<?php 

session_start();

// kalau ada $_SESSION["login"] maka = 
if ( isset($_SESSION["login"]) ) {
	// pindahkan atau pentalkan ke
	header("Location: index2.php");

	exit;
}

// konek
require 'functions.php';

if ( isset($_POST["login"]) ) {


		// if( isset($_POST["login"]) ) {
		// 	global $conn;

		$username = $_POST["username"];
		$password = $_POST["password"];

		// ada gak username tertentu di table user
		$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");

		// cek apakah ada username di data base
		// mysqli_num_rows() untuk menghitung ada berapa barisyang dikembalikan yang di kembalikan dari fungsi select di atas
		// kalau ketemu akan dikembalikan 1 dan kalu gak ada ditulis 0
		if( mysqli_num_rows($result) === 1 ) {
			// kalau ada 
			// cek username
			$row = mysqli_fetch_assoc($result);

			// mengecek sebuah string has di password(database) apakah sama tidak dengan di insetkan dimenu login
			if( password_verify($password, $row["password"]) ) {

				// set session
				$_SESSION["login"] = true;


				header("Location: index2.php");

				// sepaya berhenti 
				exit;
			}
			
		}

		$error = true;


	}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>
 	<link rel="stylesheet" href="css_login.css">
 </head>
 <body>

 	<?php if(isset($error) ) :?>
 		<p>username / password salah</p>
 	<?php endif; ?>

 	
 	<form class="box" action="" method="post">
		<h1>Login</h1>

		<input type="text" name="username" placeholder="username" >
		
		<input type="password" name="password" placeholder="Password">

<!-- 		<input type="submit" name="" value="Login"> -->
		<button type="submit" name="login">Login</button>

	</form>



 
 </body>
 </html>