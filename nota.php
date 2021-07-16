<?php

session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Nota Pembelian</title>
	<link rel="stylesheet" type="text/css" href="admin/bs-binary-admin/assets/css/bootstrap.css">
	<style>
    @media print {
        button.noPrint {
            display: none;
        }
        nav{
        	display: none;
        }
        .pelanggan{
        	float: left;
        }
        .pengiriman{
        	display: none;
        }
    }
</style>
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container">
		<ul class="nav navbar-nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="kategori.php">Kategori</a></li>
			<li><a href="keranjang.php">Keranjang</a></li>
			
			<!-- jika sudah login, maka yg muncul tombol logout -->
			<?php if (isset($_SESSION["pelanggan"])): ?>
				<li><a href="riwayat.php">Riwayat Belanja</a></li>
				<li><a href="logout.php">Logout</a></li>
			
			<!-- jika blm login, maka yg muncul tombol login -->
			<?php else: ?>
				<li><a href="login.php">Login</a></li>
				<!-- <li><a href="daftar.php">Daftar</a></li> -->
			<?php endif ?>
			
			<li><a href="checkout.php">Checkout</a></li>
			
		</ul>
	</div>
</nav>
<section class="konten">
	<div class="container">
		<h2>Detail Pembelian</h2>

<?php
	$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan WHERE pembelian.id_pembelian='$_GET[id]'");
	$detail = $ambil->fetch_assoc();
?>
<!-- <h1>Data Orang Yang beli $detail</h1> -->
<!-- <pre><?php //print_r($detail); ?></pre> -->
<!-- <h1>Data Orang Yang Login disession</h1> -->
<!-- <pre><?php //print_r($_SESSION); ?></pre> -->

<!-- jika pelanggan yg beli tidak sama dengan yg login, maka dilarikan ke riwayat.php karena dia tidak berhak me,ihat nota orang lain  -->
<!-- pelanggan yg beli harus yang login -->

<?php
//mendapatkan id yg beli
$idpelangganyangbeli = $detail["id_pelanggan"];  

//mendapatkan id pelanggan yang login
$idpelangganyanglogin = $_SESSION["pelanggan"]["id_pelanggan"];

if ($idpelangganyangbeli!==$idpelangganyanglogin) 
{
	echo "<script>alert('Oops jangan iseng ya');</script>";
	echo "<script>location='riwayat.php';</script>";
	exit();
}
?>

<div class="row">
	<div class="col-md-4">
		<h3>Pembelian</h3>
		<strong>No. Pembelian: <?php echo $detail['id_pembelian']; ?></strong><br>
		Tanggal: <?php echo date("d F Y",strtotime($detail['tanggal_pembelian'])) ?><br>
		Total: Rp. <?php echo number_format($detail['total_pembelian']); ?>
	</div>
	<div class="pelanggan">
	<div class="col-md-4">
		<h3>Pelanggan</h3>
		<strong><?php echo $detail['nama_pelanggan']; ?></strong><br>
		<p>
			<?php echo $detail['telepon_pelanggan']; ?><br>
			<?php echo $detail['email_pelanggan']; ?>
		</p>
	</div>
	</div>
	<div class="pengiriman">
	<div class="col-md-4">
		<h3>Pengiriman</h3>
		<strong><?php echo $detail['tipe']; ?> <?php echo $detail['distrik']; ?> <?php echo $detail['provinsi']; ?></strong>
		Ongkos Kirim: Rp. <?php echo number_format($detail['ongkir']); ?><br>
		Ekspedisi: <?php echo $detail['ekspedisi']; ?> <?php echo $detail['paket']; ?> <?php echo $detail['estimasi']; ?> <br>
		Alamat: <?php echo $detail['alamat_pengiriman']; ?>
	</div>
	</div>
</div>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Harga</th>
			<th>Berat</th>
			<th>Jumlah</th>
			<th>subberat</th>
			<th>Subtotal</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM pembelian_produk WHERE id_pembelian='$_GET[id]'"); ?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td>Rp. <?php echo number_format($pecah['harga']); ?></td>
			<td><?php echo $pecah['berat']; ?> Gr.</td>
			<td><?php echo $pecah['jumlah']; ?></td>
			<td><?php echo $pecah['subberat']; ?> Gr.</td>
			<td>Rp. <?php echo number_format($pecah['subharga']); ?></td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>


<div class="row">
	<div class="col-md-7">
		<div class="alert alert-info">
			<p>
				Silahkan melakukan pembayaran Rp. <?php echo number_format($detail['total_pembelian']);  ?> ke <br>
				<strong>BANK MANDIRI 113-8878273-82721 AN. Winni Maeylani</strong>
			</p>
		</div>
	</div>
</div>

<button type="button" class="noPrint btn btn-primary" value="Cetak Nota" onclick="window.print()">Cetak Nota</button><br>
<!-- <a href="cetaknota.php?id_pelanggan=<?php echo $idpelangganyanglogin  ?>"  class="btn btn-primary">Cetak Nota</a> -->
	</div>
</section>
</body>
</html>