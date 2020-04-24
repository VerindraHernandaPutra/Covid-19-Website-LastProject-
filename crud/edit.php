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
  		<h2 class="card-title"> <i class="fas fa-edit"> </i> Edit Data Hasil Pasien </h2>
  </div>

<center>
		<br/>

		<h3> Edit Data Hasil Pasien</h3>

		<form action="proses_edit.php" method="post">
			<table>
				<input type="hidden" name="id_hasil" value="<?= $data['id_hasil']; ?>">
				<tr>
					<td>
	  					<div class="form-group">
	    					<label> Nama </label>
	    					<input type="text" class="form-control" name="nama" value="<?= $data['nama']; ?>">
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<label> Tanggal Lahir  </label>
	    					<input type="date" class="form-control" name="tanggal_lahir"  value="<?= $data['tanggal_lahir']; ?>">
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<label> Jenis Kelamin </label>
	    					<input type="text" class="form-control" name="kelamin"  value="<?= $data['kelamin']; ?>">
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
						<div class="form-group">
	    					<label> Hasil </label>
	    					<input type="text" class="form-control" name="hasil"  value="<?= $data['hasil']; ?>">
	  					</div>
					</td>
				</tr>

				<br>

				<tr>
					<td> <button type="submit" class="btn btn-primary" name="simpan"> EDIT </button> </td>
				</tr>
			</table>
		</form>
		<br>
		<br>
		<br>

	</center>
