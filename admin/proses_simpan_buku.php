<?php
//koneksi database
include '../koneksi.php';

$judul= $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];


//menginput data ke database
mysqli_query($koneksi,"insert into buku values('','$judul','$penulis','$penerbit','$tahun_terbit')");

//mengakihkan halaman kembali ke index.php
header("location:buku.php?pesan=simpan");

?>