<?php
		include('koneksi.php'); 
			$tipe_kamar				= $_POST['tipe_kamar']; 
			$jumlah_kamar			= $_POST['jumlah_kamar'];
			
			
			$sql = mysqli_query($koneksi, "UPDATE tb_kamar SET tipe_kamar='$tipe_kamar', jumlah_kamar='$jumlah_kamar' WHERE tipe_kamar='$tipe_kamar'") or die(mysqli_error($koneksi)); //GANTI
			
			if($sql)
			{
				echo '<script>alert("Berhasil menyimpan data."); document.location="kamar_admin.php";</script>'; //GANTI
			}
			else
			{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
?>