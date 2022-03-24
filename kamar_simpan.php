<?php
				include('koneksi.php'); 
				//nama db 		//nama di web
				$tipe_kamar			= $_POST['tipe_kamar']; 
				$jumlah_kamar		= $_POST['jumlah_kamar'];
				
					$sql = mysqli_query($koneksi, "INSERT INTO tb_kamar (tipe_kamar, jumlah_kamar) VALUES(  '$tipe_kamar', '$jumlah_kamar')") or die(mysqli_error($koneksi)); //GANTI
					
					if($sql)
					{
						echo '<script>alert("Berhasil menambahkan data."); document.location="kamar_admin.php";</script>'; //GANTI
					}
					else
					{
						echo '<script>alert("Gagal melakukan proses tambah data"); document.location="kamar_admin.php";</script>'; //GANTI
					}
	?>