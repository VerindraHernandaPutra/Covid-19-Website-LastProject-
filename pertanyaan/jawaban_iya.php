<?php 
  
include '../koneksi.php';
include 'fungsi.php';

if (isset($_POST['simpan'])) {
  $id_hasil = $_POST['id_hasil'];
  $hasil = $_POST['hasil'];

  $sql = "UPDATE data_hasil SET hasil='$hasil' WHERE id_hasil='$id_hasil'";

  $res = mysqli_query($connect, $sql);

  $count = mysqli_affected_rows($connect);

  if ($sql) {
    header("location: kesimpulan_bahaya.php");
  }
  else {
    var_dump($sql);
  }
}

?>