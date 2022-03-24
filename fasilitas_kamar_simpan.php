<?php
				include('koneksi.php'); 
				//nama db 		//nama di web
				$tipe_kamar						= $_POST['tipe_kamar']; 
				$nama_fasilitas					= $_POST['nama_fasilitas'];
				$fasilitas_kamar			    = $_POST['fasilitas_kamar'];
				
					$sql = mysqli_query($koneksi, "INSERT INTO tb_fasilitas_kamar (tipe_kamar, nama_fasilitas, fasilitas_kamar) VALUES(  '$tipe_kamar', '$nama_fasilitas', '$fasilitas_kamar')") or die(mysqli_error($koneksi)); //GANTI
					
					if($sql)
					{
						echo '<script>alert("Berhasil menambahkan data."); document.location="fasilitas_kamar.php";</script>'; //GANTI
					}
					else
					{
						echo '<script>alert("Gagal melakukan proses tambah data"); document.location="fasilitas_kamar.php";</script>'; //GANTI
					}
	?>