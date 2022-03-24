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
	    <h2>RESEPSIONIS</h2>
		<br>

    	<?php
    		require_once'koneksi.php'
    	?>
    
        <form method="post">
	        <input type="text" placeholder="Cari Nama Tamu" class="input- subject" name="nt">
            <input type="submit" name="submit" value="Cari">
        </form>
    	<br>
    	<section class="contact-page-section">
        <table id="datatable" class="table table-hover" border="1" cellpadding="0" cellspacing="0">
    		<thead>
    		    <tr>
    		        <td>Tanggal Check In</td>
    		        <td>Tanggal Check Out</td>
    		        <td>Jumlah Kamar</td>
    				<td>Nama Pemesanan</td>
    				<td>Email</td>
    				<td>No Hp</td>
    				<td>Nama Tamu</td>
    				<td>Tipe Kamar</td>
    			</tr>
    		</thead>
    		<tbody>
    		<?php
    		if(!ISSET($_POST['submit']))
    		{
    		$sql = "SELECT * FROM tb_pemesanan";
    		$query = mysqli_query($koneksi, $sql);
    		while ($data = mysqli_fetch_array($query))
    		{
    	  	  ?>
    			<tr>
    			    <td><?php echo $data['check_in'];?></td>
    			    <td><?php echo $data['check_out'];?></td>
    			    <td><?php echo $data['jumlah_kamar'];?></td>
    				<td><?php echo $data['nama_pemesanan'];?></td>
    				<td><?php echo $data['email'];?></td>
    				<td><?php echo $data['no_handphone'];?></td>
    				<td><?php echo $data['nama_tamu'];?></td>
    				<td><?php echo $data['tipe_kamar'];?></td>
    			</tr>
    		<?php }} ?>
    
    		<?php if (ISSET($_POST['submit']))
    		{
    		$cari = $_POST['nt'];
    		$query2 = "SELECT * FROM tb_pemesanan WHERE nama_tamu LIKE '%$cari%'";
        	$sql = mysqli_query($koneksi, $query2);
    		while ($r = mysqli_fetch_array($sql))
    		{
    		  ?>
    			<tr>
    			    <td><?php echo $r['check_in'];?></td>
    			    <td><?php echo $r['check_out'];?></td>
    			    <td><?php echo $r['jumlah_kamar'];?></td>
    				<td><?php echo $r['nama_pemesanan'];?></td>
    				<td><?php echo $r['email'];?></td>
    				<td><?php echo $r['no_handphone'];?></td>
    				<td><?php echo $r['nama_tamu'];?></td>
    				<td><?php echo $r['tipe_kamar'];?></td>
    			</tr>
    		
    		<?php }} ?>
    		</tbody>
    	</table>
    	</section>
    </div>
  </div>
</body>
</html>