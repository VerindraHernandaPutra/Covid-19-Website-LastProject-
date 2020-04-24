<?php 

include '../koneksi.php';

if (isset($_POST['simpan'])) {
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$suhu = $_POST['suhu'];
	$id_status = $_POST['id_status'];

	$sql = "INSERT INTO data_odp (nama, alamat, suhu, id_status) VALUES ('$nama', '$alamat', '$suhu', '$id_status')";

	$res = mysqli_query($connect, $sql);

	$count = mysqli_affected_rows($connect);

	if ($count == 1) {
		echo "<script> alert('Data berhasil ditambah.');window.location='data_odp.php' </script>";
	}
	else {
		header("Location: tambah.php");
	}
}


?>