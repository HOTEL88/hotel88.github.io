<!DOCTYPE html>
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
	    <h2>TAMBAH DATA KAMAR</h2>

		<section class="contact-page-section">
			<div class="people-info-wrap">
			    <form role="form" method="POST" action="kamar_simpan.php">
					<select class="input- subject" name="tipe_kamar">
						<option value="twin_room">Twin room</option>
						<option value="single_room">Single room</option>
						<option value="murphy_room">Murphy room</option>
					</select>
					<input type="number" placeholder="Jumlah Kamar*" class="input- subject" name="jumlah_kamar" required>
					<input type="submit" value="Simpan">
				</form>
			</div>
        </section>
      </div>
    </div>
    
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.rateyo.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>