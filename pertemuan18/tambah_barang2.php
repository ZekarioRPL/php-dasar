<?php 
// koneksi ke funtions.php
require 'functions.php';

// koneksi ke database
// $conn = mysqli_connect( "localhost", "root", "", "phpdasar");
// cek apakah tombol submit telah di klik
if ( isset($_POST["submit"]) ) {



	// cek apakah data berhasil di tambahkan atau tidak
	if (tambah($_POST) > 0 ) {

		// cek apakah data berhasil di tambahkan atau tidak
		if (mysqli_affected_rows($conn) > 0 ) {
			echo "
				<script>
					alert('Data Berhasil Ditambahkan')
					document.location.href = 'index2.php'
				</script>

			";
		} else {
			echo "

				<script>
					alert('Data gagal Ditambahkan')
					document.location.href = 'index2.php'
				</script>

			";
			
		}
		
	}


	// -------------------------------------------------------
	// // ambil data dari tiap elemen dalam form agar mudah
	// // jadikan jadi variabel
	// $nama_barang = $_POST["nama"];
	// $satuan = $_POST["satuan"];
	// $stok = $_POST["stok"];
	// $gambar = $_POST["gambar"];

	// query insert data
	// $query = "INSERT INTO barang VALUES
	// 			('',
	// 			'$nama_barang',
	// 			'$satuan',
	// 			'$stok',
	// 			'$gambar'
	// 			)


	// 		";
	// 	mysqli_query($conn, $query);

		// cek apakah data berhasil di tambahkan atau tidak
		// if (mysqli_affected_rows($conn) > 0 ) {
		// 	echo "berhasil";
		// } else {
		// 	echo "Gagal";
		// 	echo "<br>";
		// 	echo mysqli_error($conn);
		// }
	// ------------------------------------------------------
}



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>tambah barang</title>
 </head>
 <body>
<h1>tambah Barang2</h1>
<form action="" method="post" enctype="multipart/form-data">
<ul>
	<li>
		<label for="nama">nama_barang</label>
		<input type="text" name="nama" id="nama">
	</li>	
	<li>
		<label for="satuan">satuan</label>
		<input type="text" name="satuan" id="satuan">
	</li>
	<li>
		<label for="stok">stok</label>
		<input type="number" name="stok" id="stok">
	</li>
	<li>
		<label for="gambar">gambar</label>
		<input type="file" name="gambar" id="gambar">
	</li>
	<li>
		<button type="submit" name="submit">tambah data</button>
	</li>



</ul>
</form>
<a href="index2.php">logout</a>

 
 </body>
 </html>