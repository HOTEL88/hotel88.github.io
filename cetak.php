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
  <?php
    include "koneksi.php";
    $query    =mysqli_query($koneksi, "SELECT * FROM tb_pemesanan ORDER BY nama_pemesanan DESC LIMIT 1");
    while($data    =mysqli_fetch_array($query)){
  ?>    
    <div class="page-heading">
	  <div class="container">
	    <h2>Formulir Pemesanan Hotel88</h2>
		<br>
	  </div>
	</div>
	    <table border="0">
	        <tr>
	            <td width="150px"></td>
	            <td>
	                <table border="0" height="200px">
        			 <tr>
        			    <td width="10px">Tanggal Check In</td>
        			    <td width="10px">:</td>
                        <td width="50px"><?=$data['check_in']?></td>
                     </tr>
                     <tr>
                         <td>Tanggal Check Out</td>
                         <td>:</td>
                        <td><?=$data['check_out']?></td>
                     </tr>
                     <tr>
                         <td>Jumlah Kamar</td>
                         <td>:</td>
                        <td><?=$data['jumlah_kamar']?></td>
                     </tr>
                     <tr>
                         <td>Nama Pemesanan</td>
                         <td>:</td>
                        <td><?=$data['nama_pemesanan']?></td>
                     </tr>
                     <tr>
                         <td>Email</td>
                         <td>:</td>
                        <td><?=$data['email']?></td>
                     </tr>
                     <tr>
                         <td>No Handphone</td>
                         <td>:</td>
                        <td><?=$data['no_handphone']?></td>
                     </tr>
                     <tr>
                         <td>Nama Tamu</td>
                         <td>:</td>
                        <td><?=$data['nama_tamu']?></td>
                     </tr>
                     <tr>
                         <td>Tipe Kamar</td>
                         <td>:</td>
                        <td><?=$data['tipe_kamar']?></td>
                     </tr>
                    </table>
	            </td>
	            <td width="150px"></td>
	        </tr>
	    </table>
  <?php
  }
  ?>
</body>
<script>
window.print()
</script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<script type="text/javascript" src="js/all.js"></script>
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/jquery.rateyo.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</html>