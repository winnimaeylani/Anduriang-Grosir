<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Anduriang Grosir</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Daftar Produk
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Berat</th>
                                            <th>Stok</th>
                                            <th>Foto</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $nomor=1; ?>
                                        <?php $ambil=$koneksi->query("SELECT * FROM produk LEFT JOIN kategori ON produk.id_kategori=kategori.id_kategori");?>
                                        <?php while($pecah = $ambil->fetch_assoc()){ ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $pecah['nama_kategori']; ?></td>
                                            <td><?php echo $pecah['nama_produk']; ?></td>
                                            <td><?php echo $pecah['harga_produk']; ?></td>
                                            <td><?php echo $pecah['berat_produk']; ?></td>
                                            <td><?php echo $pecah['stok_produk']; ?></td>
                                            <td>
                                                <img src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" width="100">
                                            </td>
                                            <td><?php echo $pecah['deskripsi_produk']; ?></td>
                                            <td>
                                                <a href="index.php?halaman=hapusproduk&id=<?php echo $pecah['id_produk']; ?>" 
                                                    class="btn-danger btn"><i class="fa fa-pencil"></i> Hapus</a>
                                                <a href="index.php?halaman=ubahproduk&id=<?php echo $pecah['id_produk']; ?>" class="btn-warning btn"><i class="fa fa-edit "></i> Ubah</a>
                                                <a href="index.php?halaman=detailproduk&id=<?php echo $pecah['id_produk']; ?>" class="btn-info btn"><i class="fa fa-eye "></i> Detail</a>
                                            </td>
                                        </tr>
                                        <?php $nomor++; ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            <a href="index.php?halaman=tambahproduk" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
               
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
