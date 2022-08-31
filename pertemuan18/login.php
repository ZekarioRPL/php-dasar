<?php 
// konek || jika koneksi ini tidak di taruh atas maka coding di atas nya tidak dapat memnggunakan functions.php
require 'functions.php';

session_start();

// cel cookie
// jika login di klik dan $_COOKIE ada maka

// cek duhulu ada gak cookie login
if ( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {

	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	// ambil username berdasarkan idnya
	$result = mysqli_query($conn, "SELECT username FROM user WHERE ID_LOGIN = $id");
	// ambil $ambil dari seperti diatas(database) ke sini(login.php)
	$row = mysqli_fetch_assoc($result);

	// cek cookie id dan cookie key(username)
	// hash('md5', $row['username']) ini artinya mengacak lagi username
	if ( $key === hash('md5', $row['username']) ) {
		
			// jika ya maka $_SESSION = true {boolean}
		$_SESSION['login'] = true;
		// seolah olah dia masih login

	}

// jika ya cek apakah $_COOKIE['login'] == 'ok' jika lanjutakan bawahnya
// jika login diklik maka $_COOKIE = 'ok'{ini adalah string}
	// if (isset($_COOKIE['login']) == 'ok') {


	// 	// jika ya maka $_SESSION = true {boolean}
	// 	$_SESSION{'login'} = true;
	// 	// seolah olah dia masih login
	// }
}

// kalau ada $_SESSION["login"] maka = 
if ( isset($_SESSION["login"]) ) {
	// pindahkan atau pentalkan ke
	header("Location: index2.php");

	exit;
}

// konek || jika koneksi ini tidak di taruh atas maka coding di atas nya tidak dapat memnggunakan functions.php
// require 'functions.php';

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

				// cek remember me
				if (isset($_POST['remember']) ) {
					// buat cookkie
					setcookie('id', $row["ID_LOGIN"], time()+60);
					setcookie('key', hash('md5', $row["username"]), time()+60);
				}
				// ----------------
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

		
		<input type="checkbox" name="remember" id="remember">
		<label for="remember">Remenber me</label>

<!-- 		<input type="submit" name="" value="Login"> -->
		<button type="submit" name="login">Login</button>

	</form>



 
 </body>
 </html>