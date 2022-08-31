<?php 
// koneksi ke funtions.php
require 'functions.php';

// ambil data di URL 
// $_GET adalah untuk mengambil di ["nama colom di database"] 
$id = $_GET["id"];

// query data barang berdasarkan id
// seperti di cmd
// membuat variabel dan mencetak atau mengambil menggunakan function query
$brg = query("SELECT * FROM barang WHERE id= $id")[0];
// angka 0 dibelakang sendiri | php 13. 14:20


// -------------------------
// koneksi ke database
// $conn = mysqli_connect( "localhost", "root", "", "phpdasar");
// -------------------
// cek apakah tombol submit telah di klik
if ( isset($_POST["submit"]) ) {

	// cek apakah data berhasil di tambahkan atau tidak
	if (ubah($_POST) > 0 ) {

		// cek apakah data berhasil di tambahkan atau tidak
		if (mysqli_affected_rows($conn) > 0 ) {
			echo "
				<script>
					alert('Data Berhasil di ubah')
					document.location.href = 'index2.php'
				</script>

			";
		} else {
			echo "

				<script>
					alert('Data gagal di ubah')
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
 	<title>ubah barang</title>
 </head>
 <body>
<h1>ubah Barang2</h1>
<form action="" method="post" enctype="multipart/form-data">
<ul>
	<li>
		<input type="hidden" name="id" value="<?= $brg["id"] ?>">
		<input type="hidden" name="gmr" value="<?= $brg["gambar"] ?>">
	</li>
	<li>
		<label for="nama">nama_barang</label>
		<input type="text" name="nama" id="nama" required value="<?= $brg["nama_barang"] ?>">
	</li>	
	<li>
		<label for="satuan">satuan</label>
		<input type="text" name="satuan" id="satuan" required value="<?= $brg["satuan"] ?>">
	</li>
	<li>
		<label for="stok">stok</label>
		<input type="number" name="stok" id="stok" required value="<?= $brg["stok"] ?>">
	</li>
	<li>
		<label for="gambar">gambar</label>
		<img src="gambar/<?= $brg["gambar"] ?>" width="20px;">
		<input type="file" name="gambar" id="gambar" required value="<?= $brg["gambar"] ?>">
	</li>
	<li>
		<button type="submit" name="submit">ubah data</button>
	</li>



</ul>
</form>
<a href="index2.php">logout</a>

 
 </body>
 </html>