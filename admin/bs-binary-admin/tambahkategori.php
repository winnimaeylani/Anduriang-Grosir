<h2>Tambah Produk</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Kategori</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
	$koneksi->query("INSERT INTO kategori
		(nama_kategori) VALUES('$_POST[nama]')");

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
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=kategori'>";
	}
