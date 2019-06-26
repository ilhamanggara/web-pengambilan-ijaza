<?php 

$temp = explode(".", $_FILES["skripsi"]["name"]);
$format = end($temp);

$temp_poster = explode(".", $_FILES["poster"]["name"]);
$format_poster = end($temp_poster);

$temp_jurnal = explode(".", $_FILES["jurnal"]["name"]);
$format_jurnal = end($temp_jurnal);

$temp_ebook = explode(".", $_FILES["ebook"]["name"]);
$format_ebook = end($temp_ebook);

$temp_kwitansi = explode(".", $_FILES["kwitansi"]["name"]);
$format_kwitansi = end($temp_kwitansi);

$temp_buku = explode(".", $_FILES["buku"]["name"]);
$format_buku = end($temp_buku);
if ($format!="pdf") {
    die("<script type=text/Javascript> alert('Masukan Format File Skripsi Yang Benar !')
            window.location = 'form_pengambilan.php';
        </script>");
}

if ($format_poster!="pdf") {
    die("<script type=text/Javascript> alert('Masukan Poster File Yang Benar !')
            window.location = 'form_pengambilan.php';
        </script>");
}

if ($format_jurnal!="pdf") {
    die("<script type=text/Javascript> alert('Masukan Jurnal File Yang Benar !')
            window.location = 'form_pengambilan.php';
        </script>");
}

if ($format_ebook!="pdf") {
    die("<script type=text/Javascript> alert('Masukan E-Book File Yang Benar !')
            window.location = 'form_pengambilan.php';
        </script>");
}

if ($format_kwitansi!="pdf") {
    die("<script type=text/Javascript> alert('Masukan Kwitansi File Yang Benar !')
            window.location = 'form_pengambilan.php';
        </script>");
}

if ($format_buku!="pdf") {
    die("<script type=text/Javascript> alert('Masukan Buku File Yang Benar !')
            window.location = 'form_pengambilan.php';
        </script>");
}

?>