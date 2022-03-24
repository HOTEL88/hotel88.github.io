<?php
	$host="localhost";
	$user="id18506970_db_hotel888";
	$password="}N4H/ih8/(_v!4Z6";
	$db="id18506970_db_hotel88";
	$koneksi = mysqli_connect($host,$user,$password,$db);
	if (!$koneksi)
	{
			die("Koneksi gagal:".mysqli_connect_error());
	}
?>