<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang diambil dari url
$buku_id = $_GET['buku_id'];

// menghapus data dari database
mysqli_query($koneksi,"DELETE from buku where buku_id ='$buku_id'");

// mengalihkan halaman kembali ke index.php
header("location:buku.php?pesan=hapus");
?>