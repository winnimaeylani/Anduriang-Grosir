<?php  

session_start();
include 'koneksi.php';

	
require_once 'admin/bs-binary-admin/vendor/dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$idpelangganyangbeli = $detail["id_pelanggan"];  
$idpelangganyanglogin = $_SESSION["pelanggan"]["id_pelanggan"];
$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan WHERE pembelian.id_pembelian='$_GET[id]'");
	$detail = $ambil->fetch_assoc();

$isi = "<div class='row'>";
$isi.="<div class='col-md-4'>";
		$isi.="<h3>Pembelian</h3>";
		$isi.="<strong>No. Pembelian:".$detail['id_pembelian']."</strong><br>";
		$isi.="Tanggal:".date("d F Y",strtotime($detail['tanggal_pembelian']))."<br>";
		$isi.="Total: Rp. ".number_format($detail['total_pembelian'])."";
	$isi.="</div>";
	$isi.="<div class='col-md-4'>";
		$isi.="<h3>Pelanggan</h3>";
		$isi.="<strong>".$detail['nama_pelanggan']."</strong><br>";
		$isi.="<p>";
			$isi.="".$detail['telepon_pelanggan']."<br>";
			$isi.="".$detail['email_pelanggan']."";
		$isi.="</p>";
	$isi.="</div>";
	$isi.="<div class='col-md-4'>";
		$isi.="<h3>Pengiriman</h3>";
		$isi.="<strong>".$detail['tipe']."".$detail['distrik']."".$detail['provinsi']."</strong><br>";
		$isi.="Ongkos Kirim: Rp. ".number_format($detail['ongkir'])."<br>";
		$isi.="Ekspedisi: ".$detail['ekspedisi']."".$detail['paket']."". $detail['estimasi']." <br>";
		$isi.="Alamat:".$detail['alamat_pengiriman']."";
	$isi.="</div>";
$isi.="</div>";

$isi.="<table class='table table-bordered'>";
	$isi.="<thead>";
		$isi.="<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Harga</th>
			<th>Berat</th>
			<th>Jumlah</th>
			<th>subberat</th>
			<th>Subtotal</th>
		</tr>";
	$isi.="</thead>";
	$isi.="<tbody>";
		$nomor=1;
		$ambil=$koneksi->query("SELECT * FROM pembelian_produk WHERE id_pembelian='$_GET[id]'");
		while($pecah=$ambil->fetch_assoc()){
		$isi.="<tr>";
			$isi.="<td>".$nomor."</td>";
			$isi.="<td>".$pecah['nama']."</td>";
			$isi.="<td>Rp.".number_format($pecah['harga'])."</td>";
			$isi.="<td>".$pecah['berat']." Gr.</td>";
			$isi.="<td>".$pecah['jumlah']."</td>";
			$isi.="<td>".$pecah['subberat']." Gr.</td>";
			$isi.="<td>Rp.".number_format($pecah['subharga'])."</td>";
		$isi.="</tr>";
		$nomor++; 
		}
	$isi.="</tbody>";
$isi.="</table>";


$dompdf->loadHtml($isi);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("nota.pdf");

?>