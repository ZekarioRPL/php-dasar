<?php 

require  'functions.php';

	if ( isset($_POST["register"]) ) {
		// registrasi yang mengambil dari data $_POST || PHP 16. 13:42
		if (registrasi($_POST) > 0 ) {
			echo "<script>
				alert('user berhasil ditambahkan')

			</script>";
		}else {
			echo mysqli_error($conn);
				}
	}

?>

 <!DOCTYPE html>
<html>
<head>
	<title>
		Login | YOUTUBE
	</title>
	<link rel="stylesheet" href="css_login.css">
</head>
<body>
	
	<form class="box" action="" method="post">
		<h1>Registrasi</h1>

		<input type="text" name="username"placeholder="username" >
		
		<input type="password" name="password" placeholder="Password">
		<input type="password" name="password2" placeholder="Password">

<!-- 		<input type="submit" name="" value="Login"> -->
		<button type="submit" name="register">Login</button>
	</form>





</body>
</html>