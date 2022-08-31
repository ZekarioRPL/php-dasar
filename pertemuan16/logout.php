<?php 
session_start();

// ditambahkan di bawah ini karena ada beberapa kasus sessionnya tidak di reset
$_SESSION =[];
session_unset();

session_destroy();


header("Location: login.php");
exit;

 ?>