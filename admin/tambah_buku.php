<?php
include 'header.php';
include 'navbar.php';
?>
<div class="content mt-3">
	<div class="card">
		<div class="card-body">
			<form action="proses_simpan_buku.php" method="post">
				<div class="from-group">
					<label>Judul</label>
					<input type="text" class="from-control" name="judul">
				</div>
				<div class="from-group">
					<label>Penulis</label>
					<input type="text" class="from-control" name="penulis">
				</div>
				<div class="from-group">
					<label>Penerbit</label>
					<input type="text" class="from-control" name="penerbit">
				</div>
				<div class="from-group">
					<label>Tahun Terbit</label>
					<input type="date" class="from-control" name="tahun_terbit">
				</div>
				<div class="from-group">
					<button type="submit" class="from-control btn btn-primary btn-sm mt-3">Simpan</button>
				</div>
			</from>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>