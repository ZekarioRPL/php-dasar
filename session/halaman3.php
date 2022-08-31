<?php 
// jika halaman 2 sistem echo nya dijalankan dan ke halaman 3
// session nya akan ter reset (delete){harus ke halaman 1 dulu untuk set lagi}
// dan jika dari halaman 3 ke halaman 2 maka echonya tidak akan tampil
session_start();



session_destroy();

 ?>