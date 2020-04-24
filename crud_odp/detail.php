<?php 	

include '../koneksi.php';
include '../aset/header.php';

$id_odp = $_GET["id_odp"];

$query = mysqli_query($connect, "SELECT * FROM data_odp INNER JOIN status ON data_odp.id_status=status.id_status");

$data = mysqli_fetch_assoc($query);

?>

<div class="card">
  <div class="card-header">
  		<h2 class="card-title"> <i class="fas fa-edit"> </i> Detail Data Pasien ODP </h2>
  </div>

<center>
		<br/>

		<h3> Detail Data Pasien ODP</h3>

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
	    					<b><label> Alamat  </label></b> <br>
	    					<?= $data['suhu']; ?>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<b><label> Suhu </label></b> <br>
	    					<?= $data['suhu']; ?>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
						<div class="form-group">
	    					<b><label> Status </label></b> <br>
	    					<?= $data['status']; ?>
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
