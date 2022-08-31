<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ){
		$rows[] = $row;
		
	}
	return $rows;
}



function tambah($data) {
	global $conn;

	// ambil data dari tiap elemen dalam form agar mudah
	// jadikan jadi variabel
	$nama_barang = htmlspecialchars($data["nama"]);
	$satuan =  htmlspecialchars($data["satuan"]);
	$stok =  htmlspecialchars($data["stok"]);
	$gambar =  htmlspecialchars($data["gambar"]);

	// query insert data
	$query = "INSERT INTO barang VALUES
				('',
				'$nama_barang',
				'$satuan',
				'$stok',
				'$gambar'
				)


			";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM barang WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;
	// ambil data dari tiap elemen dalam form agar mudah
	// jadikan jadi variabel
	$id = $data["id"];
	$nama_barang = htmlspecialchars($data["nama"]);
	$satuan =  htmlspecialchars($data["satuan"]);
	$stok =  htmlspecialchars($data["stok"]);
	$gambar =  htmlspecialchars($data["gambar"]);

	// query insert data
	$query = "UPDATE barang SET 
				nama_barang = '$nama_barang',
				satuan = '$satuan',
				stok = '$stok',
				gambar = '$gambar'

				WHERE id = $id




			"; 


		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);


}



function cari($keyword) {
	$query = "SELECT * FROM barang
				WHERE
				nama_barang LIKE '%$keyword%' OR 
				satuan LIKE '%$keyword%' OR 
				stok LIKE '%$keyword%' 
			";

	return query($query);
	// kita panggil function yang kita buat ke function baru
}

 ?>