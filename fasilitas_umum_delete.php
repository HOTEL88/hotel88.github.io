<?php
	include('koneksi.php');
	$nama_fasilitas = $_GET['nama_fasilitas']; //GANTI	
	$cek = mysqli_query($koneksi, "SELECT * FROM tb_fasilitas_umum WHERE nama_fasilitas='$nama_fasilitas'") or die(mysqli_error($koneksi)); //GANTI	
	if(mysqli_num_rows($cek) > 0)
	{
		$del = mysqli_query($koneksi, "DELETE FROM tb_fasilitas_umum WHERE nama_fasilitas='$nama_fasilitas'") or die(mysqli_error($koneksi)); //GANTI
		if($del)
		{
			echo '<script>alert("Berhasil menghapus data."); document.location="fasilitas_umum.php";</script>'; //GANTI
		}
		else
		{
			echo '<script>alert("Gagal menghapus data."); document.location="fasilitas_umum.php";</script>'; //GANTI
		}
	}
	else
	{
		echo '<script>alert("ID tidak ditemukan di database."); document.location="fasilitas_umum.php";</script>'; //GANTI
	}
?>