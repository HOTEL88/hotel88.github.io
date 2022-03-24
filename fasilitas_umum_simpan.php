<?php
				include('koneksi.php'); 
				//nama db 		//nama di web
				$nama_fasilitas					= $_POST['nama_fasilitas'];
				$keterangan						= $_POST['keterangan'];
				
					$sql = mysqli_query($koneksi, "INSERT INTO tb_fasilitas_umum ( nama_fasilitas, keterangan) VALUES(  '$nama_fasilitas','$keterangan')") or die(mysqli_error($koneksi)); //GANTI
					
					if($sql)
					{
						echo '<script>alert("Berhasil menambahkan data."); document.location="fasilitas_umum.php";</script>'; //GANTI
					}
					else
					{
						echo '<script>alert("Gagal melakukan proses tambah data"); document.location="fasilitas_umum.php";</script>'; //GANTI
					}
	?>