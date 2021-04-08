<?php
	include 'koneksi.php';
	error_reporting(E_ALL ^ E_NOTICE);
	$date = $_GET['date'];
	$kondisi = "acc";

	$update = "UPDATE form SET kondisi = '$kondisi' where date = '$date'";
	$hasil = mysql_query($update);

	if ($hasil){
		Print '<script>alert("Successfully Updated!");</script>'; // Prompts the user
		Print '<script>window.location.assign("home_admin.php#booklist");</script>'; // redirects to register.php
	} 
	else { 
		Print '<script>alert("Failed!");</script>'; // Prompts the user
		Print '<script>window.location.assign("home_admin.php#booklist");</script>'; // redirects to register.php
	}
?>
