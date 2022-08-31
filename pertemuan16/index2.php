<?php 
session_start();

// kalau tidak ada $_SESSION["login"] maka = 
if ( !isset($_SESSION["login"]) ) {
	// pindahkan atau pentalkan ke
	header("Location: login.php");

	exit;
}

require 'functions.php';
//  memanggil
$barang = query("SELECT * FROM barang");
// SELECT * FROM barang ORDER BY id ASC = dari kecil ke besar
// SELECT * FROM barang ORDER BY id DESC = dari besar ke kecil

if ( isset($_POST["cari"]) ) {
	$barang = cari($_POST["keyword"]);
	// arti kode diatas = kalo tombol cari di klik {( isset($_POST["cari"])} ambil apapun yang diketik oleh user{($_POST["keyword"])} dan masukkan ke dalam function cari {cari}
	// $_POST["keyword"] artinya yang di inputkan di name = keyword
};

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>percobv</title>
 </head>
 <body>
 <h1>stok barang</h1>
<a href="tambah_barang2.php">tambah data barang</a>
<br><br>

<form action="" method="post">
	
	<input type="text" name="keyword" size="30" placeholder="MENCARI" autocomplete="" autofocus="">
	<button type="submit" name="cari">Cari</button>



</form>

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No</th>
		<th>Aksi</th>
		<th>gambar</th>
		<th>Barang</th>
		<th>satuan</th>
		<th>stok</th>
	</tr>
<?php $i = 1; ?>
<!-- jika dibawah php while maka $i tidak akan berfungsi sepenuhnya -->
<?php foreach( $barang as $row) :?>
	<!--  foreach untuk array dan while untuk yang bukan array(default) -->

	<tr>
		
		<td><?php echo $i; ?></td>
		<td>
			<a href="ubah.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin')">ubah</a> ||
			<a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin')">Hapus</a>
		</td>
		<td><img src="gambar/<?php echo $row["gambar"]; ?>" width="50"></td>
		<td><?php echo $row["nama_barang"]; ?></td>
		<td><?php echo $row["satuan"]; ?></td>
		<td><?php echo $row["stok"]; ?></td>

	</tr>
<?php $i++; ?>
<?php endforeach; ?>

</table>


<!-- untuk ke logout.php -->
	<form action="logout.php">
		<button type="submit" name="logout">logout</button>
	</form>






 </body>
 </html>