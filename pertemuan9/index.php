<?php 
	// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel barang/ query data barang
$result = mysqli_query($conn, "SELECT * FROM barang");

// ambil data (fetch) barang dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array assocoative
// mysqli_fetch_array() // mengembalikan array keduanya
// mysqli_fetch_object() // mengembalikan array dengan tambahan -> {($barang->nama_barang])}

	// $barang = mysqli_fetch_assoc($result);
	// var_dump($barang["nama_barang"]);

// while( $barang = mysqli_fetch_assoc($result)) {
// 	var_dump($barang);
// }


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>halaman admin</title>
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
<?php while ( $row = mysqli_fetch_assoc($result) ) :?>

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
<?php endwhile; ?>

</table>







 </body>
 </html>