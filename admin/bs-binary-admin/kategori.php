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
        <?php 
        $semuadata = array();
        $ambil = $koneksi->query("SELECT * FROM kategori");
        while($tiap = $ambil->fetch_assoc())
        {
        	$semuadata[] = $tiap;
        }

        // echo "<pre>";
        // print_r($semuadata);
        // echo "</pre>";

        ?>


            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Daftar Kategori
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
										<tr>
											<th>No</th>
											<th>Kategori</th>
											<!-- <th>Aksi</th> -->
										</tr>
									</thead>
                                    <tbody>
										<?php foreach ($semuadata as $key => $value): ?>

										<tr>
											<td><?php echo $key+1; ?></td>
											<td><?php echo $value ["nama_kategori"]; ?></td>
											<!-- <td>
												<a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Ubah</a>
												<a href="index.php?halaman=hapuskategori&id=
                                                <?php echo $pecah['id_kategori']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-pencil"></i> Hapus</a>
											</td> -->
										</tr>
										<?php endforeach ?>
									</tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            <a href="index.php?halaman=tambahkategori" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
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


