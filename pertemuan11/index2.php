<?php 
require 'functions.php';
//  memanggil
$barang = query("SELECT * FROM barang")

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>percobv</title>
 </head>
 <body>
 <h1>stok barang</h1>
<a href="tambah_barang.php">tambah data barang</a>
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







 </body>
 </html>