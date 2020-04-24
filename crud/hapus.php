<?php 

include '../koneksi.php';

$id_hasil = $_GET["id_hasil"];

	$query = "DELETE FROM data_hasil WHERE id_hasil ='$id_hasil'";
	$hasil = mysqli_query($connect, $query);

	// Periksa query, apakah ada kesalahan
	if (! $hasil) {
		die ("Gagal menghapus data: " . mysqli_errno($connect).
			" - " . mysqli_error($connect));
	}

	else {
		echo "<script> alert('Data berhasil dihapus.');window.location='data_hasil.php' </script>";
	}

?>