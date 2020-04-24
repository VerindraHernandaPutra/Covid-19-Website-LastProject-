<?php 

include '../koneksi.php';

if (isset($_POST['simpan'])) {
	$id_odp = $_POST['id_odp'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$suhu = $_POST['suhu'];
	$id_status = $_POST['id_status'];

	$sql = "UPDATE data_odp SET nama='$nama', alamat='$alamat', suhu='$suhu', id_status='$id_status' WHERE id_odp='$id_odp'";

	$res = mysqli_query($connect, $sql);

	$count = mysqli_affected_rows($connect);

	if ($count == 1) {
		echo "<script> alert('Data berhasil diedit.');window.location='data_odp.php' </script>";
	}
	else {
		header("Location: tambah.php");
	}
}


?>