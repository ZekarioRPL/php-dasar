<?php 
// Pertemuan 2 - PHP dasar
// sintaks PHP
/* ini juga komentar antar baris*/
// standar output
// echo, print
// print_r
// var_dump

// echo "game";
// print " /goblok";
// print_r(" /wewewe /");
// var_dump(" /zenkgames");

// ----------------------------------
// penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// ------------------------------------
// variabel dan tipe data
// variabel
// tidak boleh diawal dengan angka, tapi boleh mengandung angka
// $nama = "aditnya";

// echo " /nama saya $nama /";
// echo ' /nama saya $nama/';

// operatot
// aritmatika
// ......

// penggabung string/ concat
// .
// $nama_depan = "/danny/";
// $nama_belakang = "/nakal/";
// echo $nama_depan . "/ /".$nama_belakang;

// ----------------
// assignment
// =, +=, !=....................

// ------------------------------
// perbandingan
// <, >, <=, >=, ==
// var_dump( 1 === "5");

// identitas
// ===, !==

// logika
// && atau dan, || atau or, !
 


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Goblok</title>
 </head>
 <body>
 	<hr>
 	<h1>Halo selamat datang di game <?php echo "valorant"; ?></h1>
 	<h2><?php echo $nama  ?></h2>
 
 </body>
 </html>