<?php  

$id_produk = $_GET["id"];

$ambil = $koneksi->query("SELECT * FROM produk LEFT JOIN kategori ON produk.id_kategori=kategori.id_kategori WHERE id_produk='$id_produk'");
$detailproduk = $ambil->fetch_assoc();

$ambilfoto = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
$tiap = $ambilfoto->fetch_assoc();

// echo "<pre>";
// print_r($tiap);
// echo "</pre>";

?>

<h2>Detail Produk</h2>

<table class="table">
	<tr>
		<th>Kategori</th>
		<td><?php echo $detailproduk["nama_kategori"]; ?></td>
	</tr>
	<tr>
		<th>Produk</th>
		<td><?php echo $detailproduk["nama_produk"]; ?></td>
	</tr>
	<tr>
		<th>Harga Produk</th>
		<td>Rp. <?php echo number_format($detailproduk["harga_produk"]); ?></td>
	</tr>
	<tr>
		<th>Berat Produk</th>
		<td><?php echo $detailproduk["berat_produk"]; ?></td>
	</tr>
	<tr>
		<th>Deskripsi</th>
		<td><?php echo $detailproduk["deskripsi_produk"]; ?></td>
	<tr>
		<th>Stock Produk</th>
		<td><?php echo $detailproduk["stok_produk"]; ?></td>
	</tr>
</table>

<div class="row">
	<div class="col-md-3">
		<img src="../foto_produk/<?php echo $tiap["foto_produk"] ?>" class="img-responsive">
	</div>
</div>