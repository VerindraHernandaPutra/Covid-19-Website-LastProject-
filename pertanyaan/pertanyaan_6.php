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
		<h3> 6. Apakah Anda memiliki kontak dekat dengan seseorang yang bepergian ke luar Negeri dalam 14 hari terakhir yang menjadi sakit (batuk, demam, bersin, atau sakit tenggorokan)? </h3>

		<br>


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
				      	<th scope="col"> <a href="http://localhost/Info_Covid19/pertanyaan/kesimpulan_sehat.php" class="tidak"> Tidak </a> </th>
				    </tr>
				</table>

			</form>

			</center>
	</div>
</body>
</html>
