<?php 

include '../koneksi.php';

$query = mysqli_query($connect, ("SELECT * FROM status"));
	
?>

<?php 
	include '../aset/header.php';
?>

<div class="card">
  <div class="card-header">
  		<h2 class="card-title"> <i class="fas fa-edit"> </i> Data Pasien </h2>
  </div>

<center>
		<br/>

		<h3> TAMBAH DATA PASIEN</h3>

		<form action="proses_tambah.php" method="post">
			<table>
				<tr>
					<td>
	  					<div class="form-group">
	    					<label> Nama </label>
	    					<input type="text" class="form-control" name="nama" required>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<label> Alamat </label>
	    					<input type="text" class="form-control" name="alamat" required>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<label> Suhu </label>
	    					<input type="text" class="form-control" name="suhu" required>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
						<div class="form-group">
    						<label> Status </label>
						    <select class="form-control" name="id_status" required>

						      <option> Pilih </option>
						      	<?php while ($status = mysqli_fetch_assoc($query)): ?>

						      <option value="<?php echo $status["id_status"]; ?>"> <?php echo $status["status"]; ?> </option>

						      <?php endwhile; ?>
						    </select>
  						</div>
					</td>
				</tr>

				<br>

				<tr>
					<td> <button type="submit" class="btn btn-primary" name="simpan"> Simpan </button> </td>
				</tr>
			</table>
		</form>
		<br>
		<br>
		<br>

	</center>