<?php 
session_start();

$npm = $_POST['npm'];
$password = $_POST['password'];

include "koneksi.php";

$sql_cek_npm = "SELECT npm FROM tb_user WHERE npm = '$npm'";
$query = mysqli_query($con,$sql_cek_npm);
$cek_npm = mysqli_num_rows($query);


if($cek_npm >= 1){
    $cek_password = "SELECT password FROM tb_user WHERE npm = '$npm'";
    $query_password = mysqli_query($con,$cek_password);
    $data_password = mysqli_fetch_array($query_password);
    $hash_password =  $data_password['password'];
    if (password_verify($password, $hash_password)) {
        
        $_SESSION['logged-mhs'] = true;
        $_SESSION['npm'] = $npm;
        header('location: home.php');

    }else{
        echo    "<script type=text/Javascript> alert('Password Salah !')
                    window.location = 'login.php';
                </script>";
    }
}else{
    echo    "<script type=text/Javascript> alert('Npm Salah !')
                    window.location = 'login.php';
                </script>";
}

?>