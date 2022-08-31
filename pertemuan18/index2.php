<?php 
session_start();

// kalau tidak ada $_SESSION["login"] maka = 
if ( !isset($_SESSION["login"]) ) {
	// pindahkan atau pentalkan ke
	header("Location: login.php");

	exit;
}
//  memanggil
require 'functions.php';


// pagination
// konfigurasi
$jumlahdataperhalaman = 2;

// -------------------------
	// $game = mysqi_query($conn, "SELECT * FROM barang");

	// 
	// $jumlahdata = mysqli_num_rows($game)
// ---------------------------
		// atau
	// count adalah ???????? (cari di google)
$jumlahdata = count(query("SELECT * FROM barang"));
// ------------------
// round() = digunakan untuk membulatkan pecahan desimail terdekatnya
	// $jumlahhalaman = round($jumlahdata / $jumlahdataperhalaman);
// floor() = digunakan untuk membulatkan pecahan ke bawah
	// $jumlahhalaman = floor($jumlahdata / $jumlahdataperhalaman);
// ceil() = digunakan untuk membulatkan pecahan ke atas
	$jumlahhalaman = ceil($jumlahdata / $jumlahdataperhalaman);
// ------------------------------

// -------------------------
	// cara pertama
	// cara if
	// if ( isset($_GET["halaman"]) ) {
	// 	$halamanaktif = $_GET["halaman"];
	// }else {
	// 	$halamanaktif = 1;
	// }
// -----------------------------------

// -----------------------------------
	// cara kedua
	// dengan operator ternary
	// jika di link di masukkan $_GET["halaman"] maka
	// jika ya ===  ? $_GET["halaman"]
	// jika tidak ===  : 1
	$halamanaktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;

// -------------------------------
	$awaldata = ( $jumlahdataperhalaman * $halamanaktif) - $jumlahdataperhalaman;

// -----------------------------


	

$barang = query("SELECT * FROM barang LIMIT $awaldata, $jumlahdataperhalaman");
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

<br><br>
<!-- --------------------------- -->

<!-- previous  -->

<?php if ( $halamanaktif > 1) :?>
	<!-- &laquo; -->
	<a href="?halaman=<?= $halamanaktif-1; ?>">&lt;</a>
<?php endif; ?>


<!-- --------------------------------------- -->
<!-- navigasi untuk halaman -->
<!-- $i <= $jumlahhalaman; artinya $i lebihkecil sama dengan dari $jumlahhalaman -->
<?php for ($i=1; $i <= $jumlahhalaman; $i++) :?>
	<?php if ( $i == $halamanaktif) :?>
		<!-- bisa juga tanpa ada index2.php -->
		<a href="index2.php?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
	<?php else : ?>
		<!-- bisa juga tanpa ada index2.php -->
		<a href="index2.php?halaman=<?= $i; ?>" ><?= $i; ?></a>
	<?php endif; ?>
<?php endfor; ?>

<!-- ----------------------- -->
<!-- next -->
<?php if ( $halamanaktif < $jumlahhalaman) :?>
	<!-- &raquo; -->
<a href="?halaman=<?= $halamanaktif+1; ?>">&gt;</a>
<?php endif; ?>

<!-- --------------------------- -->

<br><br>

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