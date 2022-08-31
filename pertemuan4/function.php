<?php 

function salam($waktu = "datang", $nama = "User") {
	return "selamat $waktu, $nama";
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan</title>
 </head>
 <body>
 	
 	<h1><?php echo salam("pagi", "veri"); ?></h1>

 </body>
 </html>