<?php 
  include '../koneksi.php';

  $sql = "SELECT * FROM data_odp INNER JOIN status ON data_odp.id_status=status.id_status";

  $res = mysqli_query($connect, $sql);

  $data_odp = array();

  while ($data = mysqli_fetch_assoc($res)) {
    $data_odp[] = $data;
  }
?>

<?php 
  include '../aset/header.php';
?>

<div class="container">
  <div class="row mt-4">
    <div class="col-md">
      
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header">
      <h2 class="card-title"> <i class="fas fa-address-book"> </i> Data Pasien ODP</h2>
      <a href="tambah.php" class="badge badge-primary"><i class="fas fa-book-medical" ></i> Tambah Pasien </a>
  </div>

  <div class="card-body">
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Suhu</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php 
      $no = 1;
      foreach ($data_odp as $p) {
        ?>
      

    <tr>
      <th scope="row"> <?= $no ?> </th>
      <td> <?= $p['nama'] ?> </td>
      <td> <?= $p['alamat'] ?> </td>
      <td> <?= $p['suhu'] ?> </td>
      <td> 

        <?php 
          if ($p['status'] == "ODP") {
            echo '<h5><span class="badge badge-info">ODP</span></h5>';
          }
          elseif ($p['status'] == "PDP") {
            echo '<h5><span class="badge badge-warning">PDP</span></h5>';
          }
          else {
            echo '<h5><span class="badge badge-danger">Positif</span></h5>';
          }
        ?>

      </td>
      <td>
        <a href="detail.php?id_odp=<?php echo $p['id_odp']; ?>" class="badge badge-success">Detail</a>
        <a href="edit.php?id_odp=<?php echo $p['id_odp']; ?>" class="badge badge-warning">Edit</a>
        <a href="hapus.php?id_odp=<?php echo $p['id_odp']; ?>" class="badge badge-danger">Hapus</a>
      </td>
    </tr>

    <?php 
      $no++;
    }
    ?>
  </tbody>

</table>
  </div>
</div>
