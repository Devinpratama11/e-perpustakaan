<?php
include 'header.php';
include 'navbar.php';
?>
<div class ="content mt-3">
		<div class ="card">
			<div class ="card-body">
				<?php
					if(isset($_GET['pesan'])){
						if($_GET['pesan']=="gagal"){
						echo "<div class='alert alert-danger'>Username dan Password tidak sesuai !</div>";
					}
						}
					if(isset($_GET['pesan'])){
						if($_GET['pesan']=="info_login"){
						echo "<div class='alert alert-info'>maaf anda belum login !</div>";
					}
						}
					if(isset($_GET['pesan'])){
						if($_GET['pesan']=="info_logout"){
						echo "<div class='alert alert-success'>anda berhasil logout !</div>";
					}
						}
				?>
				<a href="tambah_kategori.php" class="btn btn-primary btn sm mt-3">TambahData</a>
            <table class="table">
            	<thead>
            		<tr>
            			<th>NO</th>
            			<th>Nama Kategori</th>
            			<th>Aksi</th>
            		</tr>
            	</thead>
            	<tbody>
            	 <?php 
                 include '../koneksi.php';
                 $no = 1;
                 $data = mysqli_query($koneksi,"select * from kategori_buku");
                 while($d = mysqli_fetch_array($data)){
                ?>
            	<tr>
            		<td><?php echo $no++; ?></td>
            		<td><?php echo $d ['nama_kategori']; ?></td>
            		<td>
            			<a href="edit_kategori.php?kategori_id=<?php echo $d['kategori_id']; ?>"
            			class="btn btn-warning btn-sm mb-3">Edit</a>
            			<a href="proses_hapus_kategori.php?kategori_id=<?php echo $d["kategori_id"]; ?>" class="btn btn-danger btn-sm mb-3">Hapus</a>
            		</td>
            	</tr>
            <?php 
				} 
			?>
        </tbody>
           </table>
   </div>
</div>
</div>
<?php
	include "footer.php";
?>

			