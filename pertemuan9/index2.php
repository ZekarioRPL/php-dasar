<?php 
require 'functions.php';

$barang = query("select * from barang")

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>percobv</title>
 </head>
 <body>
 <h1>stok barang</h1>

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No</th>
		<th>Aksi</th>
		<th>gambar</th>
		<th>Barang</th>
		<th>satuan</th>
		<th>stok</th>
	</tr>
<?php $i =1; ?>
<!-- jika dibawah php while maka $i tidak akan berfungsi sepenuhnya -->
<?php foreach( $barang as $row) :?>

	<tr>
		
		<td><?php echo $i; ?></td>
		<td>
			<a href="">ubah</a> ||
			<a href="">Hapus</a>
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