<?php
include 'header.php';
include 'navbar.php';
?>
<div class="content mt-3">
	<div class="card">
		<div class="card-body">
			<form action="proses_simpan_kategori.php" method="post">
				<div class="from-group">
					<label>Nama Kategori</label>
					<input type="text" class="from-control" name="nama_kategori">
				</div>
				<div class="from-group">
					<button type="submit" class="from-control btn-primary btn-sm mt-3">Simpan</button>
				</div>
			</from>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>