<?php
//koneksi database
require_once "../koneksi.php";

$user_id = $_GET["user_id"];
//mengambil buku_id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM user WHERE user_id='$user_id' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='pengguna.php';</script>";
    }

?>