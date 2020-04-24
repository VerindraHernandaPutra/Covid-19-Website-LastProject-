<?php 	

include '../koneksi.php';
include '../aset/header.php';

$id_odp = $_GET["id_odp"];

$query = mysqli_query($connect, "SELECT * FROM data_odp INNER JOIN status ON data_odp.id_status=status.id_status");

$data = mysqli_fetch_assoc($query);

?>

<div class="card">
  <div class="card-header">
  		<h2 class="card-title"> <i class="fas fa-edit"> </i> Edit Data Pasien ODP </h2>
  </div>

<center>
		<br/>

		<h3> Edit Data Pasien ODP</h3>

		<form action="proses_edit.php" method="post">
			<table>
				<input type="hidden" name="id_odp" value="<?= $data['id_odp']; ?>">
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
	    					<label> Alamat  </label>
	    					<input type="text" class="form-control" name="alamat"  value="<?= $data['alamat']; ?>">
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<label> Suhu </label>
	    					<input type="text" class="form-control" name="suhu"  value="<?= $data['suhu']; ?>">
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
						<div class="form-group">
    						<label> Status </label>
						    <select class="form-control" name="id_status">

						      <?php 

						      	$query = mysqli_query($connect, "SELECT * FROM status");

						      ?>

						      	<?php while ($status = mysqli_fetch_assoc($query)):?>

						      <option value="<?php echo $status["id_status"]; ?>"> <?php echo $status['status']; ?> </option>

						      <?php endwhile; ?>
						    </select>
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
