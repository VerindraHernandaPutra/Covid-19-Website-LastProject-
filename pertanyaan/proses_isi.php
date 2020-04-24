<?php 
include '../koneksi.php';

date_default_timezone_set('Asia/Jakarta');

if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $kelamin = $_POST['kelamin'];
  $hasil = "Sehat";

  $sql = mysqli_query($connect, "INSERT INTO data_hasil (nama, tanggal_lahir, kelamin, hasil) VALUES ('$nama', '$tanggal_lahir', '$kelamin', '$hasil')");

  if ($sql) {
    echo "<script> alert('Data berhasil ditambah.');window.location='pertanyaan_1.php' </script>";
  }
  else {
    var_dump($sql);
  }
}


?>