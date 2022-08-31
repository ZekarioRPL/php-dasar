<?php 
// cek apakah tidak ada data di $_GET
// ketika di link (http://localhost/phpdasar/pertemuan6/percobaan1.php) pada kata percobaan1.php(halaman sekarang) diganti percobaan2.php(halaman selanjutnya setelah klik maksutnya) agar tidak dilihat atau langusng dkembali ke halaman 1 
//  pelajaran pada php pemula | 9 (32.32)


if ( !isset($_GET["nama_barang"]) ||
	!isset($_GET["stok"]) ||
	!isset($_GET["satuan"]) ||
	!isset($_GET["gambar"]) || )
{ 
		// redirect
		header("Location: percobaan1.php");
		exit;
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>percobaan2</title>
</head>
<body>

<ul>
	<li><img src="gambar/<?php echo $_GET["gambar"]; ?>"></li>
	<li><?php echo $_GET["nama_barang"]; ?></li>
	<li><?php echo $_GET["satuan"]; ?></li>
	<li><?php echo $_GET["stok"]; ?></li>
</ul>

<a href="percobaan1.php">Kembali</a>

</body>
</html>