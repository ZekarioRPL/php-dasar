<?php 
// cek apakah tombol submit sudah ditekan atau belum
if ( isset ($_POST["submit"]) ){
	// cek username dan password
	// arti dari isset ($_POST["submit"]) adalah apakah tombol submit dipencet apa belum
	
	if ( $_POST["username"] == "admin" && 
		$_POST["password"] == "123" ) {
	// jika benar, redirect ke halaman admin
		header("Location: admin.php");
		exit;
		} else{
	// jika salah, tampilkan kesalahan
		$error = true;
	}
	}

	



?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>login</title>
 </head>
 <body>
 
<?php if( isset($error)) :?>
	<p style="color: red; font-style: italic;">username / password = salah</p>
<?php endif; ?>

<ul>
	<form action="" method="post">
		<li>
			<label for="username">username :</label>
			<input type="text" name="username" id="username">
			<!-- for() pasangannya dengan id ="" -->
		</li>
		<li>
			<label for="password">password :</label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<button type="password" name="submit">Kirim</button>
		</li>

	</form>


</ul>


 </body>
 </html>