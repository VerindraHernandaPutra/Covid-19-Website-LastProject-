<?php 
	include '../aset/header.php';
?>

<html>
<head>
	<title> Isi Data </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="../aset/jquery.js"></script>
</head>
<body>
 
	<div class="kotak_isi">
		<center> <img src="user.png" style="border-radius: 50%" width="150" height="150"> </center>

		<p class="tulisan"><br>Silahkan isi data</p>
 
		<form action="proses_isi.php" method="post">
			
			<div class="form-group">
    			<label> Nama </label>
    			<input type="text" name="nama" class="form-isi" placeholder="Masukkan Nama .." required>
  			</div>
 
			<div class="form-group">
    			<label> Tanggal Lahir </label>
    			<input type="date" name="tanggal_lahir" class="form-isi" required>
  			</div>

  			<div class="form-group">
    			<label> Jenis Kelamin </label> <br>
    			<input type="radio" name="kelamin" value=" laki-laki" required /> laki-laki
    			<input type="radio" name="kelamin" value=" perempuan" required /> perempuan
  			</div>
 			
 			<br>
 
			<input type="submit" class="tombol_konfirmasi" name="simpan" value="KONFIRMASI">
 
			<br>
			<br>
			
		</form>
		
	</div>


</body>
</html>