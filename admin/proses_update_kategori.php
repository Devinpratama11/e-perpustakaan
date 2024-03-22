<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim dari from
$kategori_id = $_POST['kategori_id'];
$nama_kategori = $_POST['nama_kategori'];

mysqli_query($koneksi, "UPDATE kategori_buku SET nama_kategori='$nama_kategori' WHERE kategori_id='$kategori_id '");

//mengalihkan halaman kembali ke index.php
header("location:kategori.php?pesan=update");

?>