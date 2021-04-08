<?php
	include 'koneksi.php';
	error_reporting(E_ALL ^ E_NOTICE);
    $id = $_GET['id'];
	$username = $_GET['username'];
	$npm = $_GET['npm'];
	$name = $_GET['name'];
	$fakultas = $_GET['fakultas'];
	$phone = $_GET['phone'];
	$email = $_GET['email'];
    $password = $_GET['password'];

	$update = "UPDATE users SET username = '$username', npm = '$npm', name = '$name', fakultas = '$fakultas', 
		phone = '$phone', email = '$email', password = '$password' where username = '$id'";
	$hasil = mysql_query($update);

	if ($hasil){
		Print '<script>alert("Successfully Updated!");</script>'; // Prompts the user
		Print '<script>window.location.assign("home_admin.php#checkdate");</script>'; // redirects to register.php
	} 
	else { 
		Print '<script>alert("Failed!");</script>'; // Prompts the user
		Print '<script>window.location.assign("home_admin.php#checkdate");</script>'; // redirects to register.php
	}
?>