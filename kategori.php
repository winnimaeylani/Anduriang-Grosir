<?php
session_start();
//koneksi ke database
include 'koneksi.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Anduriang Grosir</title>
	<link rel="stylesheet" href="admin/bs-binary-admin/assets/css/bootstrap.css">
	<script src="admin/bs-binary-admin/assets/js/jquery-1.10.2.js"></script>
</head>
<body>

<?php include 'menu.php'; ?>
<!-- konten -->
<section class="konten">
	<div class="container">
		<center><h1>Daftar Kategori Produk Toko Anduriang Grosir</h1></center>
		<br><br>
		<div class="row">

		
  <ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" href="#alat_tulis" role="tab" data-toggle="tab">Alat Tulis</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#kertas" role="tab" data-toggle="tab">Kertas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#peralatan_umum" role="tab" data-toggle="tab">Peralatan Umum</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#file_organizer" role="tab" data-toggle="tab">File Organizer</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#buku" role="tab" data-toggle="tab">Buku</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade  in active" id="alat_tulis">
	<?php 
	            	$ambil = $koneksi->query("SELECT * FROM produk WHERE id_kategori=5");
	            	while($perproduk = $ambil->fetch_assoc()){
	            	 ?>
	              	<div class="col-md-4">
				<div class="thumbnail">
					<img src="admin/foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt="">
					<div class="caption">
						<h3><?php echo $perproduk['nama_produk']; ?></h3>
						<h5>Rp. <?php echo number_format($perproduk['harga_produk']); ?></h5>
						<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
						<a href="detail.php?id=<?php echo $perproduk["id_produk"]; ?>" class="btn btn-default">Detail</a>
					</div>
				</div>
			</div>
		<?php }; ?>

  </div>
  <div role="tabpanel" class="tab-pane fade" id="kertas">

<?php 
	            	$ambil = $koneksi->query("SELECT * FROM produk WHERE id_kategori=6");
	            	while($perproduk = $ambil->fetch_assoc()){
	            	 ?>
	              	<div class="col-md-4">
				<div class="thumbnail">
					<img src="admin/foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt="">
					<div class="caption">
						<h3><?php echo $perproduk['nama_produk']; ?></h3>
						<h5>Rp. <?php echo number_format($perproduk['harga_produk']); ?></h5>
						<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
						<a href="detail.php?id=<?php echo $perproduk["id_produk"]; ?>" class="btn btn-default">Detail</a>
					</div>
				</div>
			</div>
		<?php }; ?>
  </div>
  <div role="tabpanel" class="tab-pane fade  in active" id="peralatan_umum">
	<?php 
	            	$ambil = $koneksi->query("SELECT * FROM produk WHERE id_kategori=7");
	            	while($perproduk = $ambil->fetch_assoc()){
	            	 ?>
	              	<div class="col-md-4">
				<div class="thumbnail">
					<img src="admin/foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt="">
					<div class="caption">
						<h3><?php echo $perproduk['nama_produk']; ?></h3>
						<h5>Rp. <?php echo number_format($perproduk['harga_produk']); ?></h5>
						<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
						<a href="detail.php?id=<?php echo $perproduk["id_produk"]; ?>" class="btn btn-default">Detail</a>
					</div>
				</div>
			</div>
		<?php }; ?>

  </div>
  <div role="tabpanel" class="tab-pane fade" id="file_organizer">

<?php 
	            	$ambil = $koneksi->query("SELECT * FROM produk WHERE id_kategori=8");
	            	while($perproduk = $ambil->fetch_assoc()){
	            	 ?>
	              	<div class="col-md-4">
				<div class="thumbnail">
					<img src="admin/foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt="">
					<div class="caption">
						<h3><?php echo $perproduk['nama_produk']; ?></h3>
						<h5>Rp. <?php echo number_format($perproduk['harga_produk']); ?></h5>
						<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
						<a href="detail.php?id=<?php echo $perproduk["id_produk"]; ?>" class="btn btn-default">Detail</a>
					</div>
				</div>
			</div>
		<?php }; ?>
  </div>
  <div role="tabpanel" class="tab-pane fade" id="buku">

<?php 
	            	$ambil = $koneksi->query("SELECT * FROM produk WHERE id_kategori=9");
	            	while($perproduk = $ambil->fetch_assoc()){
	            	 ?>
	              	<div class="col-md-4">
				<div class="thumbnail">
					<img src="admin/foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt="">
					<div class="caption">
						<h3><?php echo $perproduk['nama_produk']; ?></h3>
						<h5>Rp. <?php echo number_format($perproduk['harga_produk']); ?></h5>
						<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
						<a href="detail.php?id=<?php echo $perproduk["id_produk"]; ?>" class="btn btn-default">Detail</a>
					</div>
				</div>
			</div>
		<?php }; ?>
  </div>
</div>
	            

</div>
	</div>

</section>

  <script src="admin/bs-binary-admin/assets/js/bootstrap.min.js"></script>
  <!-- CUSTOM SCRIPTS -->
    <script src="admin/bs-binary-admin/assets/js/custom.js"></script>
</body>
</html>