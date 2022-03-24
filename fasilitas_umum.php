<html>
<head>
	<title>hotel 88</title>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.rateyo.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/meanmenu.min.css"> -->
	<link rel="stylesheet" type="text/css" href="inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
</head>
<body>
	<div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
			<header class="top-header">
		    <div class="container">
				<div class="nav-wrap">
					<nav class="nav-desktop">
						<ul class="menu-list">
							<li><a href="kamar_admin.php">Data Kamar</a></li>
							<li><a href="fasilitas_kamar.php">Data Fasilitas Kamar</a></li>
							<li><a href="fasilitas_umum.php">Data Fasilitas Umum</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</nav>
					<div id="bar">
						<i class="fas fa-bars"></i>
					</div>
					<div id="close">
						<i class="fas fa-times"></i>
					</div>
				</div>
			</div>
	    </header>
	</div>


    <div class="page-heading">
	  <div class="container">
	    <h2>DATA FASILITAS UMUM</h2>
		<br>
		
        <section class="contact-page-section">
		  <table id="" class="" border="1" cellpadding="0" cellspacing="0">
			<thead>
			  <tr>
				<th>Nama Fasilitas</th>
                <th>Keterangan</th>
                <th>Aksi</th>
			  </tr>
			</thead>
			<tbody>
									<?php
									   include('koneksi.php');
									  $sql = mysqli_query($koneksi, "SELECT * FROM tb_fasilitas_umum") or die(mysqli_error($koneksi)); //GANTI
									  if(mysqli_num_rows($sql) > 0)
									  {
										
										while($data = mysqli_fetch_assoc($sql))
										{
										  echo '
										  <tr>
											
											<td>'.$data['nama_fasilitas'].'</td>
											<td>'.$data['keterangan'].'</td>
											<td>
											  <a href="fasilitas_umum_edit.php?nama_fasilitas='.$data['nama_fasilitas'].'" class="badge badge-warning">Edit</a> <!--GANTI-->
											  <a href="fasilitas_umum_delete.php?nama_fasilitas='.$data['nama_fasilitas'].'" class="badge badge-danger" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a> <!--GANTI-->
											</td>
										  </tr>
										  ';
										}
									  }
									  else
									  {
										echo '
										<tr>
										  <td colspan="6">Tidak ada data.</td>
										</tr>
										';
									  }
									?>
        	</tbody>
		  </table> 
        </section>
      </div>
    </div>
        
    <div class="container">
      <section class="quick-contact">
	    <h2><a href="fasilitas_umum_tambah.php">Tambah Fasilitas Umum</a></h2>
      </section>
    </div>
				<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.rateyo.js"></script>
	<!-- <script type="text/javascript" src="js/jquery.mmenu.all.js"></script> -->
	<!-- <script type="text/javascript" src="js/jquery.meanmenu.min.js"></script> -->
	<script type="text/javascript" src="js/custom.js"></script>
 </head>
</html>