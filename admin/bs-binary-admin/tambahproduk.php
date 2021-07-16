<?php 

$datakategori = array();

$ambil = $koneksi->query("SELECT * FROM kategori");
while($tiap = $ambil->fetch_assoc())
{
	$datakategori[] = $tiap;
}

// echo "<pre>";
// print_r($datakategori);
// echo "</pre>";
?>

<h2>Tambah Produk</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Kategori</label>
		<select class="form-control" name="id_kategori">
			<option value="">Pilih Kategori</option>
			<?php foreach ($datakategori as $key => $value): ?>
			<option value="<?php echo $value ["id_kategori"] ?>"><?php echo $value ["nama_kategori"]; ?></option>
		<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Harga (RP)</label>
		<input type="number" class="form-control" name="harga">
	</div>
	<div class="form-group">
		<label>Berat</label>
		<input type="text" class="form-control" name="berat">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10"></textarea>
	</div>
	<div class="form-group">
		<label>Stok Barang</label>
		<input type="text" class="form-control" name="stok">
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
	$nama = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi, "../foto_produk/".$nama);
	$koneksi->query("INSERT INTO produk
		(nama_produk,harga_produk,berat_produk,foto_produk,deskripsi_produk,stok_produk, id_kategori) 
		VALUES('$_POST[nama]','$_POST[harga]','$_POST[berat]','$nama','$_POST[deskripsi]','$_POST[stok]','$_POST[id_kategori]')");

	//mendapatkan id produk baru 

	// $id_produk_baru = $koneksi->insert_id;

	// foreach ($namas as $key => $tiap_nama) 
	// {
	// 	$tiap_lokasi = $lokasis[$key];

	// 	move_uploaded_file($tiap_lokasi, "../foto_produk/".$tiap_nama);

		//simpan ke mysql dengan mengetahui id produknya

		// $koneksi->query("INSERT INTO produk_foto (id_produk, nama_produk_foto)
		// 	VALUES ('$id_produk_baru','$tiap_nama')");
	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";
	}
	
	

	// echo "<pre>";
	// print_r($_FILES['foto']);
	// echo "</pre>";
 
?>
<!-- <script>
	$(document).ready(function(){
		$(".btn-tambah").on("click",function(){
			$(".letak-input").append("<input type='file' class='form-control' name='foto[]'>");
		})
	})
</script> -->