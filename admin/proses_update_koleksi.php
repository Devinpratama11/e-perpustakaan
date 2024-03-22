<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim dari from
$kategori_id= $_POST['kategori_id'];
$buku_id = $_POST['buku_id'];

mysqli_query($koneksi, "UPDATE kategoribuku_relasi SET buku_id='$buku_id' WHERE 	kategori_id='$kategori_id'");

//mengalihkan halaman kembali ke index.php
header("location:koleksi.php?pesan=update");

?>