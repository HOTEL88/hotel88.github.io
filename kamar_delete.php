<?php
	include('koneksi.php');
	$tipe_kamar = $_GET['tipe_kamar']; //GANTI	
	$cek = mysqli_query($koneksi, "SELECT * FROM tb_kamar WHERE tipe_kamar='$tipe_kamar'") or die(mysqli_error($koneksi)); //GANTI	
	if(mysqli_num_rows($cek) > 0)
	{
		$del = mysqli_query($koneksi, "DELETE FROM tb_kamar WHERE tipe_kamar='$tipe_kamar'") or die(mysqli_error($koneksi)); //GANTI
		if($del)
		{
			echo '<script>alert("Berhasil menghapus data."); document.location="kamar_admin.php";</script>'; //GANTI
		}
		else
		{
			echo '<script>alert("Gagal menghapus data."); document.location="kamar_admin.php";</script>'; //GANTI
		}
	}
	else
	{
		echo '<script>alert("ID tidak ditemukan di database."); document.location="kamar_admin.php";</script>'; //GANTI
	}
?>