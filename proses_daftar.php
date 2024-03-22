<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

// menginput data ke database
mysqli_query($koneksi, "insert into user values('','$username','$password','$email','$nama_lengkap','$alamat','3')");

// level 3 untuk peminjam buku


header("location:index.php ?pesan=info_daftar")
?>