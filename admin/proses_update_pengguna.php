<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim dari from
$user_id = $_POST['user_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "UPDATE user SET username='$username',password='$password',email='$email',
                        nama_lengkap='$nama_lengkap',alamat='$alamat' WHERE user_id='$user_id '");

//mengalihkan halaman kembali ke index.php
header("location:pengguna.php?pesan=update");

?>