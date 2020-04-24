<?php 
	// Mengaktifkan session php
	session_start();

	// Menghubungkan dengan koneksi
	include '../koneksi.php';

	$username = $_POST['username'];

	$password = $_POST['password'];

	$sql = mysqli_query($connect, "SELECT * FROM data_register WHERE username='$username'");

	$data = mysqli_fetch_array($sql);

	if ($password <> $data['password']) {
       echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
    } 
    else {
       $_SESSION['username'] = $data['username'];
       header('location: ../web/home.php');
    }

?>