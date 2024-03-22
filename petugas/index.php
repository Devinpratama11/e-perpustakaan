<?php
session_start();

// cek apakah yang memngakses halaman ini sudah login
if($_SESSION['level']==""){
	header("location:../index.php?pesan=info_login");
}
?>
<p> Halo <b><?php echo $_SESSION['username']; ?></b> Selamat anda telah berhasil login <b><?php echo $_SESSION['level'];?></b></p>
<a href="../logout.php">LOGOUT</a>