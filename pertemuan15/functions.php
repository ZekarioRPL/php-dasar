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
// uploud gambar
	$gambar =  uploud();
	//  (dibbawah) artinya !$gambar sama dengan $gambar === false [jika salah maka]
	if ( !$gambar) {
		// kembali ke salah juga untuk menghentikan function
		return false;
	}

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
	// gmr dari ubah.php
	$gambarlama =  htmlspecialchars($data["gmr"]);

	// ini jika user tidak memilih gambar baru
	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambarlama;

	}else {
		// maka fungsi uploud di bawah dijalankan
		$gambar = uploud();
	}

	// $gambar =  htmlspecialchars($data["gambar"]);

	// query insert data
	$query = "UPDATE barang SET 
				nama_barang = '$nama_barang',
				satuan = '$satuan',
				stok = '$stok',
				gambar = '$gambar'

				WHERE id = $id




			"; 

		// tambahkan (insert) ke database
		mysqli_query($conn, $query);
		// -------------

		// untuk menghasilkan angka 1 jika berhasil dan -1 jika gagal
		return mysqli_affected_rows($conn);


}

function uploud() {
	// gambar dapat dari input (name ="gambar")
	$namafile = $_FILES['gambar']['name'];
	$ukuranfile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpname = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang di uploud
	if ( $error === 4) {
		echo "<script>
				alert('pilih gambar terlebih dahulu')
			</script>";
		return false;
	}

	// cek apakah yang diupolud adalah gambar
	$ekstensigambarvalid = ['jpg', 'jpeg', 'png'];
	// explode digunakan untuk memecah string menjadi array
	$ekstensigambar = explode('.', $namafile);
	// end digunakan untuk mengambil array yang terakhir
	// strtolower digunakan untuk mengubah katanya menjadi huruf kecil semua
	$ekstensigambar = strtolower(end($ekstensigambar));
	// in_array digunakan untuk mengecek adakah sebuah string di sebuah array(jarum,jerami)
	if ( !in_array($ekstensigambar, $ekstensigambarvalid)) {
		echo "<script>
				alert('uploud bukan gambar')
			</script>";
		return false;
	}
	// 1000000 artinya 1 juta byte
	if ($ukuranfile > 1000000){
		echo "<script>
				alert('ukuran terlalu besar')
			</script>";
		return false;
	}

	// lolos pengecekan, gambar siap uploud
	// generate nama gambar baru
	// uniqid  akan membangkitakan string random|| angka
	$namafilebaru = uniqid();
	// titik sebelum (=) artinya adalah di tempel
	$namafilebaru .= '.';
	$namafilebaru .= $ekstensigambar;

	// move_uploaded_file  digunakan untuk memindah file
	// move_uploaded_file($tmpname, 'gambar/' . $namafile); (sebelumnya)
	move_uploaded_file($tmpname, 'gambar/' . $namafilebaru);

	// return $namafile; (sebelumnya)
	return $namafilebaru;
	// penting di atas untuk mengembalikan lagi $namafile  - nya


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

function registrasi($game){
	global $conn;

	// stripcslashes untuk membersihkan karakter tertentu (blackslash)
	$username = strtolower(stripcslashes($game["username"]));
	// untuk memungkingkan memasukkan password ada tanda kutipnya
	// $password = mysqli_real_escape_string($game["password"]); (sebelumnya(error))
	// mysqli_real_escape_string membutuhkan 2 parameter

	$password = mysqli_real_escape_string($conn, $game["password"]);
	$password2 = mysqli_real_escape_string($conn, $game["password2"]);


	// cek username sudah ada apa belum
	$konfir = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if (mysqli_fetch_assoc($konfir) ) {
		echo "<script>
				alert('username sudah terdaftar')

			</script>";

			// untuk menghentikan
			return false;
		}

	

	// cek konfirmasi password
	if ( $password !== $password2) {
		echo "<script>
				alert('konfirmasi password salah')

			</script>";
			return false;
		// untuk menghentikan 
		// juga supaya insert nya gagal
		
	}

	// enkripsei password

	$password = password_hash($password, PASSWORD_DEFAULT);


	// tambahkan ke database
	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')

		");


	return mysqli_affected_rows($conn);




}












 ?>