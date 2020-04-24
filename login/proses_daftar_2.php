<?php 

// Mengaktifkan session php
  session_start();

include '../koneksi.php';

if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $tanggal_lahir = $_POST['tanggal_lahir'];

  $sql = mysqli_query($connect, "INSERT INTO data_hasil (nama, tanggal_lahir) VALUES ('$nama', '$tanggal_lahir')");

  if ($sql) {
    echo "<script> alert('Data berhasil ditambah.');window.location='login.php' </script>";
  }
  else {
    echo "";
  }
}


?>