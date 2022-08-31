<?php 
session_start();

// ditambahkan di bawah ini karena ada beberapa kasus sessionnya tidak di reset
$_SESSION =[];
session_unset();

session_destroy();


// cara menghapus cookie
// setcookie( '(dengan nama yang sama', '(nilainya kosong)', time() + (ini diberi nilai waktu yang sudah lewat))
setcookie('id', '', time() + -3600);
setcookie('key', '', time() + -3600);

header("Location: login.php");
exit;

 ?>