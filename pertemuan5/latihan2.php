<?php 
$mahasiswa = [
	["sefdanny", "31312321", "rpl", "sadsad@31312"],
	["sefdannynur", "31312321", "rpl", "sadsad@31312"],
	["sefdannyafizar", "31312321", "rpl", "sadsad@31312"],
];



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan2</title>
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

 <?php foreach( $mahasiswa as $siswa ) {?>

 	<?php foreach( $siswa as $s ) {?>
 		<div class="kotak"> <?php echo $s; ?> </div>
 	<?php } ?>
 	<div class="clear"></div>
<?php } ?>


 
<?php foreach( $mahasiswa as $msh) {?>
	<ul>
		<?php for ($i=0; $i < 4; $i++) { ?>
			<li><?php echo $msh[$i]; ?></li>
		<?php } ?>
	</ul>
<?php } ?>

<br><hr>

<?php foreach( $mahasiswa as $msh) {?>
	<ul>
		
		<li><?php echo $msh[0]; ?></li>
		<li><?php echo $msh[1]; ?></li>
		<li><?php echo $msh[2]; ?></li>
		<li><?php echo $msh[3]; ?></li>
		
	</ul>
<?php } ?>

 </body>
 </html>