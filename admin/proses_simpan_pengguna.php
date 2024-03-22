<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim dari from
$user_id = $_GET["user_id"];

//menginput data ke database
mysqli_query($koneksi, "INSERT INTO user values('','$$user_id)");

//mengalihkan halaman kembali ke index.php
header("location:pengguna.php?pesan=simpan");

?>