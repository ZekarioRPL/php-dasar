<?php 
// pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// for ($i=0; $i < 5 ; $i++) { 
// 	echo "goblok <br>";
// }

// ----------------------------
// $j = 0;
// while ($j <= 10) {
// 	echo "goblok22";

// $j++;
// }

// ----------------------
// $k = 10; 
// do {
// 	echo "dalam game/<br>";
// 	$k++;
// } while ($k <= 2);

// $l = 0; 
// do {
// 	echo "dalam game/";
// 	$l++;
// } while ($l <= 5);

// ----------------------------


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>percobaan3</title>
 	<style >
 		.warna  {
 			background-color: red;
 		}
 	</style>
 </head>
 <body>

 <!-- 	<table border="1" cellspacing="0" cellpadding="10">
 		<?php 
 				for ($i=1; $i <= 3; $i++) { 
 					echo "<tr>";
 						for ($j=1; $j <= 5; $j++) { 
 							echo "<td>$i,$j</td>";
 						}
 					echo "<tr>";
 				}
 		 ?>
 		
 	</table> -->
 	

 	<!-- <table border="1" cellspacing="0" cellpadding="10">
 		<?php for ($i=1; $i <= 3; $i++) { ?>
 			<tr>
 				<?php for ($j=1; $j <=5; $j++) { ?>
 					<td><?php echo "$i,$j"; ?></td>
 				<?php } ?>
 			</tr>
 		<?php } ?>
 		
 	</table> -->
<!-- 
 	<table border="1" cellspacing="0" cellpadding="10">
 		<?php for ($i=1; $i <= 3; $i++) : ?>
 			<tr>
 				<?php for ($j=1; $j <=5; $j++) { ?>
 					<td><?php echo "$i,$j"; ?></td>
 				<?php } ?>
 			</tr>
 		<?php endfor; ?>
 		
 	</table> -->

 	<table border="1" cellspacing="0" cellpadding="10">
 		<?php for ($i=1; $i <= 10; $i++) : ?>

 			<?php if($i % 2 == 1) :?>
 				<tr class="warna">
 			<?php else : ?>
 				<tr>
 			<?php endif; ?> 
 			<!-- setiap END diakhiri dengan pasangannya contoh : ENDIF (hurufkecil) -->

 				<?php for ($j=1; $j <=5; $j++) { ?>
 					<td><?php echo "$i,$j"; ?></td>
 				<?php } ?>

 			</tr>
 		<?php endfor; ?>
 		
 	</table>
 
 </body>
 </html>