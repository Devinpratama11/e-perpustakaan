<?php
include 'header.php';
include 'navbar.php';
?>
<div class="content mt-3">
	<div class="row">
		<div class="col-sm-3">
			<div class="card">

				<?php
				include "../koneksi.php";
				$data_buku = mysqli_query($koneksi, "SELECT * FROM buku");
				$tampil_buku = mysqli_num_rows($data_buku);
				?>
				<?php
				include "../koneksi.php";
				$data_kategori = mysqli_query($koneksi, "SELECT * FROM kategori_buku");
				$tampil_kategori = mysqli_num_rows($data_kategori);
				?>
				<?php
				include "../koneksi.php";
				$data_user = mysqli_query($koneksi, "SELECT * FROM user");
				$tampil_user = mysqli_num_rows($data_user);
				?>
				<?php
				include "../koneksi.php";
				$data_peminjam = mysqli_query($koneksi, "SELECT * FROM peminjaman");
				$tampil_peminjam = mysqli_num_rows($data_peminjam);
				?>

				<div class="card-body bg-warning text-center">
					<h3>Data Buku</h3>
					<h2><?php echo $tampil_buku ?></h2>
					<hr>
					<a href="buku.php" class="btn btn-dark btn-sm">Lihat Data</a>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card">
				<div class="card-body bg-danger text-center">
					<h3>Kategori Buku</h3>
					<h2><?php echo $tampil_kategori ?></h2>
					<hr>
					<a href="kategori.php" class="btn btn-dark btn-sm">Lihat Data</a>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card">
				<div class="card-body bg-info text-center">
					<h3>Pengguna</h3>
					<h2><?php echo $tampil_user ?></h2>
					<hr>
					<a href="pengguna.php" class="btn btn-dark btn-sm">Lihat Data</a>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card">
				<div class="card-body bg-primary text-center">
					<h3>Peminjaman</h3>
					<i class="fa fa-book"></i><h2><?php echo $tampil_peminjam ?></h2>
					<hr>
					<a href="peminjam.php" class="btn btn-dark btn-sm">Lihat Data</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="container">
<div class="content mt-3">
	<div class="card">
		<div class="card-body">
			<p> Halo <b><?php echo $_SESSION['username']; ?></b> Selamat anda telah berhasil login <b><?php echo $_SESSION['level']; ?></b></p>
		</div>
	</div>
</div>
</div>
<?php
include 'footer.php';
?>