<?php 
// variable scope / lingkup variabel
$x =10;


function tampilx(){
	global $x;
	// mencari keluar
	echo $x;
}

tampilx();
 ?>