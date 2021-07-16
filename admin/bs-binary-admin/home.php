<?php  

$ambil = $koneksi->query("SELECT * FROM produk");
while ($pecah=$ambil->fetch_assoc()) {
    $jml_brg = $ambil->num_rows;
}

$ambil1 = $koneksi->query("SELECT * FROM pelanggan");
while($pecah1 = $ambil1->fetch_assoc()){
    $dat_pel = $ambil1->num_rows;
}


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Anduriang Grosir</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="admin/bs-binary-admin/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="admin/bs-binary-admin/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="admin/bs-binary-admin/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="admin/bs-binary-admin/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" type="text/css" href="admin/bs-binary-admin/assets/css/bootstrap.css">
</head>
<body>
    <marquee><b>Selamat Datang Di Halaman Admin Toko Anduriang Grosir</b></marquee>
    <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Dashboard</h2>   
                        <h5>Selamat Datang Admin , Semoga Harimu Menyenangkan </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-user"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo $dat_pel; ?></p>
                    <p class="text-muted">Data Pelanggan</p>
                </div>
             </div>
             </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-tags"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo $jml_brg; ?></p>
                    <p class="text-muted">Daftar Produk</p>
                </div>
             </div>
             </div>
                    <!-- <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">240 New</p>
                    <p class="text-muted">Notifications</p>
                </div>
             </div>
             </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">3 Orders</p>
                    <p class="text-muted">Pending</p>
                </div>
             </div> -->
             </div>
<!-- <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-user"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">10 Pelanggan</p>
                    <p class="text-muted">Pelanggan</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">20 Item</p>
                    <p class="text-muted">Jumlah item</p>
                </div>
             </div>
		     </div>
          <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-bell"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">5 Pesanan</p>
                    <p class="text-muted">Pemesanan</p>
                </div>
             </div>
		     </div>
         <div class="col-md-3 col-sm-6 col-xs-6">           
               <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                   <i class="fa fa-shopping-cart"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Rp. 500.000/Bln</p>
                    <p class="text-muted">Pemasukan</p>
                </div>
             </div>
         </div>
			</div> -->
			<!-- /. ROW  -->
                <!-- <hr />                
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue">
                    <i class="fa fa-warning"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">52 Important Issues to Fix </p>
                    <p class="text-muted">Please fix these issues to work smooth</p>
                    <p class="text-muted">Time Left: 30 mins</p>
                    <hr />
                    <p class="text-muted">
                          <span class="text-muted color-bottom-txt"><i class="fa fa-edit"></i>
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. 
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. 
                               </span>
                    </p>
                </div>
             </div>
		     </div> -->
</body>
<!-- <pre><?php //print_r($_SESSION); ?></pre> -->