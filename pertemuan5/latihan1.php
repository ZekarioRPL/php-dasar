<?php 
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// ------------------------------------------
// membuat array
// cara lama
$hari = array("senin", "selasa", "rabu");
// cara baru
$bulan = ["januari", "februari", "maret"];
$arri = [123, "tulisan", false];

// ------------------------------------------
// menampilkan Array
// var_dump atau print_r

// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";
// print_r($arri);
// echo "<br>";

// menampilkan 1 elemen array

// echo $arri[1];
// echo "<br>";

// ---------------------------------------------
// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);



 ?>