<?php 
session_start();

unset($_SESSION['logged-mhs']);


session_destroy();
header('Location: index.php')
?>