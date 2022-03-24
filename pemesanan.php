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
	<link rel="stylesheet" type="text/css" href="inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
</head>
<body>
	<div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
        <header class="main-header">
		    <div class="container">
				<div class="nav-wrap">
					<nav class="nav-desktop">
						<ul class="menu-list">
						    <li><a href="index.php">Home</a></li>
							<li><a href="pemesanan.php">Pemesanan</a></li>
							<li><a href="kamar.php">Kamar</a></li>
							<li><a href="fasilitas.php">Fasilitas</a></li>
							<li><a href="login.php">Login</a></li>
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
		<div class="banner">
			<div class="owl-four owl-carousel" itemprop="image">
				<img src="images/klo.jpg" alt="Image of Bannner">
				<img src="images/kl.jpg" alt="Image of Bannner">
				<img src="images/kj.jpg" alt="Image of Bannner">
			</div>
			<div id="owl-four-nav" class="owl-nav"></div>
		</div>
	</div>

	<section class="contact-page-section">
		<div class="container">
			<div class="people-info-wrap">
				<h2>From Pemesanan</h2>
				<br>
				<br>
				<form role="form" method="POST" action="pemesanan_simpan.php">
				    <label>Tanggal Check In</label>
					<input type="date" placeholder="Tanggal*" class="input- subject" name="check_in">
					<label>Tanggal Check Out</label>
					<input type="date" placeholder="Tanggal*" class="input- subject" name="check_out">
					<input type="text" placeholder="Jumlah Kamar*" class="input- subject" name="jumlah_kamar">
					<input type="text" placeholder="Nama pemesanan*" class="input- subject" name="nama_pemesanan">
					<input type="text" placeholder="Email*" class="input- subject" name="email">
    				<input type="text" placeholder="No handphone *" class="input- subject" name="no_handphone">
					<input type="text" placeholder="Nama tamu*" class="input- subject" name="nama_tamu">
					<select class="input- subject" name="tipe_kamar">
						<option value="twin_room">Twin room</option>
						<option value="single_room">Single room</option>
						<option value="murphy_room">Murphy room</option>
					</select>
					<input type="submit" value="Konfirmasi Pemesanan">
				</form>
			</div>
		</div>
	</section>
</body>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<script type="text/javascript" src="js/all.js"></script>
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/jquery.rateyo.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</html>