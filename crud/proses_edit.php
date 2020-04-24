<?php 

include '../koneksi.php';

if (isset($_POST['simpan'])) {
	$id_hasil = $_POST['id_hasil'];
	$nama = $_POST['nama'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$kelamin = $_POST['kelamin'];
	$hasil = $_POST['hasil'];

	$sql = "UPDATE data_hasil SET nama='$nama', tanggal_lahir='$tanggal_lahir', kelamin='$kelamin', hasil='$hasil' WHERE id_hasil='$id_hasil'";

	$res = mysqli_query($connect, $sql);

	$count = mysqli_affected_rows($connect);

	if ($count == 1) {
		echo "<script> alert('Data berhasil diedit.');window.location='data_hasil.php' </script>";
	}
	else {
		header("Location: edit.php");
	}
}


?>