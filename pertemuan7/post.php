<!DOCTYPE html>
<html>
<head>
	<title>post</title>
</head>
<body>

<?php if ( isset($_POST["submit"])) {?>
	<h1>selamt datang <?php echo $_POST["nama"] ;?></h1>
<?php } ?>

	<form action="" method="post">
	<!-- method bisa get atau post |-->
		masukkan nama
		<input type="text" name="nama">
		<br>
		<button type="submit" name="submit">kirim</button>
	</form>

</body>
</html>