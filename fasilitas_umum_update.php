<?php
		include('koneksi.php'); 
			$nama_fasilitas			= $_POST['nama_fasilitas'];
			$keterangan				= $_POST['keterangan'];
			
			$sql = mysqli_query($koneksi, "UPDATE tb_fasilitas_umum SET nama_fasilitas='$nama_fasilitas', keterangan='$keterangan' WHERE nama_fasilitas='$nama_fasilitas'") or die(mysqli_error($koneksi));
			if($sql)
			{
				echo '<script>alert("Berhasil menyimpan data."); document.location="fasilitas_umum.php";</script>';
			}
			else
			{
				echo '<div class="alert alert-warning">Gagal melakukan prosessd edit data.</div>';
			}
?>