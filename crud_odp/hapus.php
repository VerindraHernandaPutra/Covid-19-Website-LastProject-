<?php 

include '../koneksi.php';

$id_odp = $_GET["id_odp"];

	$query = "DELETE FROM data_odp WHERE id_odp ='$id_odp'";
	$hasil = mysqli_query($connect, $query);

	// Periksa query, apakah ada kesalahan
	if (! $hasil) {
		die ("Gagal menghapus data: " . mysqli_errno($connect).
			" - " . mysqli_error($connect));
	}

	else {
		echo "<script> alert('Data berhasil dihapus.');window.location='data_odp.php' </script>";
	}

?>