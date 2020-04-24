<?php 	

include '../koneksi.php';
include '../aset/header.php';

	$conn = mysqli_connect("localhost", "root", "", "covid_19");

	// Check connection 
	if (mysqli_connect_errno()) {
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}


$id_hasil = $_GET["id_hasil"];

$query = mysqli_query($connect, "SELECT * FROM data_hasil");

$data = mysqli_fetch_assoc($query);

?>

<div class="card">
  <div class="card-header">
  		<h2 class="card-title"> <i class="fas fa-edit"> </i> Detail Data Hasil Pasien </h2>
  </div>

<center>
		<br/>

		<h3> Detail Data Hasil Pasien</h3>

		<form>
			<table>

				<tr>
					<td>
						<img src="user.png" style="border-radius: 50%" width="150" height="150">
					</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	  						<br>
	    					<b><label> Nama </label></b> <br>
	    					<?= $data['nama']; ?>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<b><label> Tanggal Lahir  </label></b> <br>
	    					<?= $data['tanggal_lahir']; ?>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<b><label> Jenis Kelamin </label></b> <br>
	    					<?= $data['kelamin']; ?>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
						<div class="form-group">
	    					<b><label> Hasil </label></b> <br>
	    					<?= $data['hasil']; ?>
	  					</div>
					</td>
				</tr>

				<br>

			</table>
		</form>
		<br>
		<br>
		<br>

	</center>
