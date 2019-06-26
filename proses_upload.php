<?php 
session_start();
$npm = $_SESSION['npm'];
include "koneksi.php";

$sql_cek = "SELECT * FROM tb_upload WHERE npm = '$npm'";
$query_cek = mysqli_query($con,$sql_cek);
$ada_npm = mysqli_num_rows($query_cek);

if ($ada_npm > 0) {
    die("<script type=text/Javascript> alert('Anda Sudah Upload File !')
            window.location = 'home.php';
        </script>");
}

include "verf_format.php";
include "proses_upload_file.php";


$sql = "INSERT INTO tb_upload (npm,skripsi,poster,jurnal,ebook,kwitansi,buku) VALUES ('$npm','$nama_skripsi','$nama_poster','$nama_jurnal','$nama_ebook','$nama_kwitansi','$buku')";
$query = mysqli_query($con,$sql);

if ($query) {
    echo    "<script type=text/Javascript> alert('Data berhasil Di Input')
                    window.location = 'home.php';
                </script>";
}else{
    echo    "<script type=text/Javascript> alert('Data gagal Di Input')
                    window.location = 'home.php';
                </script>";
}
?>