<?php
				include('koneksi.php'); 
				$check_in        = $_POST['check_in'];
				$check_out       = $_POST['check_out'];
				$jumlah_kamar    = $_POST['jumlah_kamar'];
				$nama_pemesanan	 = $_POST['nama_pemesanan'];
				$email			 = $_POST['email'];
				$no_handphone	 = $_POST['no_handphone']; 
				$nama_tamu		 = $_POST['nama_tamu'];
				$tipe_kamar		 = $_POST['tipe_kamar'];
				
                
					$sql = mysqli_query($koneksi, "INSERT INTO tb_pemesanan (check_in, check_out, jumlah_kamar, nama_pemesanan, email, no_handphone, nama_tamu, tipe_kamar) VALUES('$check_in', '$check_out', '$jumlah_kamar', '$nama_pemesanan', '$email', '$no_handphone', '$nama_tamu', '$tipe_kamar')") or die(mysqli_error($koneksi)); //GANTI
					
					if($sql)
					{
						echo '<script>alert("Berhasil menambahkan data."); document.location="cetak.php";</script>'; //GANTI
					}
					else
					{
						echo '<script>alert("Gagal melakukan proses tambah data"); document.location="pemesanan.php";</script>'; //GANTI
					}
?>