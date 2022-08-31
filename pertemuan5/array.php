<?php 
// pengulangan pada array
// for / foreach
$angka = [2, 31, 23, 23,31 ,31 ,31];





 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan array</title>
 	<style>
 		.kotak {
 			width: 50px;
 			height: 50px;
 			background-color: red;
 			text-align: center;
 			line-height: 50px;
 			float: left;
 			margin: 4px;
 		}
 		.clear {
 			clear: both;
 		}
 	</style>
 </head>
 <body>

<?php for ($i=0; $i < count($angka); $i++) { ?>
	<div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>
<br>

<?php foreach ($angka as $a) { ?>
	<div class="kotak"><?php echo $a; ?></div>
<?php } ?>
 
<div class="clear"></div>




 </body>
 </html>