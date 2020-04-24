<?php 

// Mengaktifkan session php
  session_start();

include '../koneksi.php';

if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = mysqli_query($connect, "INSERT INTO data_register (nama, tanggal_lahir, username, password) VALUES ('$nama', '$tanggal_lahir', '$username', '$password')");

  if ($sql) {
    echo "<script> alert('Data berhasil ditambah.');window.location='login.php' </script>";
  }
  else {
    echo "";
  }
}


?>