<?php 
		// date
// 	echo date("l");
// // dalam bentuk hari
// 	echo date("d");
// // dalam bentuk tanggal
// 	echo date("M");
// // dalam bentuk bulan
// 	echo date("m");
// // dalam bentuk bulan (menggunakan number)
// 	echo date("l, d-M-Y");
// untuk menampilkan tanggal

// ---------------------------------
// time
	echo time(), "<br>";
	echo "<br>";

	echo date("l", time()+60*60*24*2);
	echo "<br>";

	echo "<br>";

	echo "<br>";

// ------------------------
// mktime
	// mktime(0,0,0,0,0,0,)
	// jam,menit,detik,bulan,tanggal,tahun
	echo date("l", mktime(0,0,0,9,12,2004));
	echo "<br>";


// ----------------------------
	// strtotime
	echo date("l", strtotime("12 sep 2004"));
	echo "<br>";

	










 ?>