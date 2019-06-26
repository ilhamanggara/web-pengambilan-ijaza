<?php 
include "koneksi.php";

// $npm = $_POST['npm'];
// $password = $_POST['password'];

// $hash_password = password_hash($password, PASSWORD_DEFAULT);

// $sql = "INSERT INTO tb_user (npm,password) VALUES ('$npm','$hash_password')";
// $query = mysqli_query($con,$sql);
// var_dump($sql);

$username = $_POST['username'];
$password = $_POST['password'];
$hash_password = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO tb_admin (username,password,status) values ('$username','$hash_password','baa')";
$query = mysqli_query($con,$sql);
?>