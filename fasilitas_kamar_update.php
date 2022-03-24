<?php
		include('koneksi.php'); 
			//nama db 		//nama di web
			$tipe_kamar				= $_POST['tipe_kamar']; 
			$nama_fasilitas			= $_POST['nama_fasilitas'];
			$fasilitas_kamar		= $_POST['fasilitas_kamar'];
			
			
			$sql = mysqli_query($koneksi, "UPDATE tb_fasilitas_kamar SET tipe_kamar='$tipe_kamar', nama_fasilitas='$nama_fasilitas', fasilitas_kamar='$fasilitas_kamar' WHERE nama_fasilitas='$nama_fasilitas'") or die(mysqli_error($koneksi)); //GANTI
			
			if($sql)
			{
				echo '<script>alert("Berhasil menyimpan data."); document.location="fasilitas_kamar.php";</script>'; //GANTI
			}
			else
			{
				echo '<div class="alert alert-warning">Gagal melakukan prosessd edit data.</div>';
			}
?>