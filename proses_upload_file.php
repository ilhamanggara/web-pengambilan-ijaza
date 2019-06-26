<?php 

$folder_cover = "upload/";
    
    // skripsi
    $skripsi = round(microtime(true)) . '1.' . end($temp);
    $file_skripsi = $folder_cover. basename($skripsi);
    $prosesupload = move_uploaded_file($_FILES['skripsi']['tmp_name'], $file_skripsi);
    $nama_skripsi = $skripsi;

    //poster
    $poster = round(microtime(true)) . '2.' . end($temp_poster);
    $file_poster = $folder_cover. basename($poster);
    $prosesupload_poster = move_uploaded_file($_FILES['poster']['tmp_name'], $file_poster);
    $nama_poster = $poster;

    //jurnal
    $jurnal = round(microtime(true)) . '3.' . end($temp_jurnal);
    $file_jurnal = $folder_cover. basename($jurnal);
    $prosesupload_jurnal = move_uploaded_file($_FILES['jurnal']['tmp_name'], $file_jurnal);
    $nama_jurnal = $jurnal;

    //ebook
    $ebook = round(microtime(true)) . '4.' . end($temp_ebook);
    $file_ebook = $folder_cover. basename($ebook);
    $prosesupload_ebook = move_uploaded_file($_FILES['ebook']['tmp_name'], $file_ebook);
    $nama_ebook = $ebook;

    //kwitansi
    $kwitansi = round(microtime(true)) . '5.' . end($temp_kwitansi);
    $file_kwitansi = $folder_cover. basename($kwitansi);
    $prosesupload_kwitansi = move_uploaded_file($_FILES['kwitansi']['tmp_name'], $file_kwitansi);
    $nama_kwitansi = $kwitansi;

    //buku
    $buku = round(microtime(true)) . '6.' . end($temp_buku);
    $file_buku = $folder_cover. basename($buku);
    $prosesupload_buku = move_uploaded_file($_FILES['buku']['tmp_name'], $file_buku);
    $nama_buku = $buku;

?>