<?php
	include "koneksi.php";
	error_reporting(E_ALL ^ E_NOTICE);
	$username = $_GET['username'];
	$name = $_GET['name'];
	$delete = "delete from users where username = '$username'";
	$hasil = mysql_query($delete);
	if ($hasil){
		Print '<script>alert("Successfully Deleted!");</script>'; // Prompts the user
		Print '<script>window.location.assign("home_admin.php#checkdate");</script>'; // redirects to register.php
	} 
	else { 
		Print '<script>alert("Failed!");</script>'; // Prompts the user
		Print '<script>window.location.assign("home_admin.php#checkdate");</script>'; // redirects to register.php
	}
?>