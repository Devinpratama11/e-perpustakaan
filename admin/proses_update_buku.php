<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim dari from
$buku_id = $_POST['buku_id'];
$judul= $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];


mysqli_query($koneksi, "UPDATE buku SET judul='$judul',penulis='$penulis',penerbit='$penerbit',tahun_terbit='$tahun_terbit' WHERE buku_id='$buku_id' ");

//mengakihkan halaman kembali ke index.php
header("location:buku.php?pesan=update");

?>