<!DOCTYPE html>
<html>
<head>
	<title>percobaan1</title>
<!-- 	<style>
 		.kotak {
 			width: 50px;
 			height: 50px;
 			background-color: red;
 			text-align: center;
 			line-height: 50px;
 			float: left;
 			margin: 4px;
 		}
 		.clear {
 			clear: both;
 		}
 	</style> -->
</head>
<body>
<?php 
// $mahasiswa = [
// 	["sefdanny", "31312321", "rpl", "sadsad@31312"],
// 	["sefdannynur", "31312321", "rpl", "sadsad@31312"],
// 	["sefdannyafizar", "31312321", "rpl", "sadsad@31312"],
// ];

// ----------------------------
// array associative
// definisi sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$barang = [

	[
		"nama_barang" => "Ember",
		"satuan" => "unit",
		"stok" => "12",
		"gambar" => "2090.jpg"

	],
	[
		"nama_barang" => "kursi",
		"satuan" => "unit",
		"stok" => "5",
		"gambar" => "kirito.png"

	],
	[
		"nama_barang" => "meja",
		"satuan" => "unit",
		"stok" => "2",
		"gambar" => "totem.jpeg"
	],
	[
		"nama_barang" => "gayung",
		"satuan" => "unit",
		"stok" => "7",
		"gambar" => "2090.jpg"
	],


];
 ?>

 <h1>perabotan</h1>
 <ul>
<?php foreach ($barang as $brg ) {?>

	<li>
		<a href="percobaan2.php?nama_barang=<?php  echo $brg["nama_barang"];?>
			&satuan=<?php  echo $brg["satuan"];?>
			&stok=<?php  echo $brg["stok"];?>
			&gambar=<?php  echo $brg["gambar"];?>

		"><?php echo $brg["nama_barang"]; ?></a>
	</li>
<?php } ?>
</ul>


</body>
</html>