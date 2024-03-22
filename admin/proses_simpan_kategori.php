<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim dari from
$nama_kategori = $_POST['nama_kategori'];

//menginput data ke database
mysqli_query($koneksi, "INSERT INTO kategori_buku values('','$nama_kategori')");

//mengalihkan halaman kembali ke index.php
header("location:kategori.php?pesan=simpan");

?>