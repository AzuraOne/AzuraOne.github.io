<?php 
error_reporting(0);
require 'koneksi.php';

	$nama = $_POST['username'];
	$password = $_POST['password'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$telp = $_POST['telp'];
	

	$query = "INSERT INTO pengunjung VALUES ('','$nama','$alamat','$email','$telp','$password')";
		$result = mysqli_query($koneksi, $query);
		

	
		
	if (!$result) {
		die("Query Gagal dijalankan : " . mysqli_errno($koneksi)." - ". mysqli_error($koneksi));		
	}
	else {
		echo "<script>alert('Data Telah Ditambah'); window.location.href='login.php' </script>";
		}
		
	


 ?>
