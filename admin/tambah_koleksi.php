<?php
include 'header.php';
include 'navbar.php';
?>
<div class="content mt-3">
	<div class="card">
		<div class="card-body">
			<form action="proses_simpan_koleksi.php" method="post">
				
				<div class="from-group">
					<label>Pilih Buku</label>
					<select class="from-control mt-2" name="buku_id">
						<option>Silahkan Pilih</option>
						<?php
						include "../koneksi.php";
						$data = mysqli_query($koneksi,"select * from buku");
						while($d_kategoribuku = mysqli_fetch_array($data)){ ?>
							<option value="<?php echo $d_kategoribuku['buku_id']; ?>">
							<?php echo $d_kategoribuku['judul']; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="from-group">
					<label>Pilih Kategori</label>
					<select class="from-control mt-2" name="kategori_id">
						<option>Silahkan Pilih</option>
						<?php
						include "../koneksi.php";
						$data = mysqli_query($koneksi,"select * from kategori_buku");
						while($d_kategoribuku = mysqli_fetch_array($data)){ ?>
							<option value="<?php echo $d_kategoribuku['kategori_id']; ?>">
							<?php echo $d_kategoribuku['nama_kategori']; ?></option>
						<?php } ?>
					</select>
				</div>

				<div class="from-gruop">
					<button type="submit" name="submit" class="from-control btn btn-primary btn-sm mt-3">Simpan</button>
				</div>
			</from>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>
