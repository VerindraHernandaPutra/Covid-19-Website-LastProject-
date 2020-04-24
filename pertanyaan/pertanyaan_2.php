<?php 
	include '../aset/header.php';
	include '../koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title> Cek Diri </title>
	<link rel="stylesheet" type="text/css" href="desain.css">
</head>
<body>
	<br>
	<h1> Self Check Up COVID-19 </h1>

	<div class="kotak_pertanyaan">
		<h3> 2. Apakah Anda mengalami salah satu dari yang berikut: </h3>

		<br>

			<p> - Nafas yang pendek saat istirahat <br> </p>
			<p> - Ketidakmampuan untuk berbaring karena kesulitan bernafas <br> </p>
			<p> - Kondisi kesehatan kronis yang anda alami dirasakan lebih berat karena kesulitan bernapas <br> </p>

			<br>
			<br>

			<center>

			<form action="jawaban_iya.php" method="post">

				<input type="hidden" value="<?php echo $data['id_hasil'];?>" name="id_hasil">		

				<table>
				    <tr>
				      	<th scope="col"> <input type="submit" class="ya" name="simpan" value="Ya"> </th>
				      	<th> </th>
				      	<th> </th>
				      	<th scope="col"> <a href="http://localhost/Info_Covid19/pertanyaan/pertanyaan_3.php" class="tidak"> Tidak </a> </th>
				    </tr>
				</table>

			</form>

			</center>
	</div>
</body>
</html>
