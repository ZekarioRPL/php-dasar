<?php 
require 'functions.php';

$id = $_GET["id"];

if( hapus($id) > 0 ) {
	echo "
				<script>
					alert('Data Berhasil dihapus')
					document.location.href = 'index2.php'
				</script>

			";
		} else {
			echo "
				<script>
					alert('Data gagal Dihapus')
					document.location.href = 'index2.php'
				</script>

			";
		}



 ?>