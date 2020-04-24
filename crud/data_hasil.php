<?php 
  include '../koneksi.php';

  $sql = "SELECT * FROM data_hasil";

  $res = mysqli_query($connect, $sql);

  $data_hasil = array();

  while ($data = mysqli_fetch_assoc($res)) {
    $data_hasil[] = $data;
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
      <h2 class="card-title"> <i class="fas fa-hospital"></i> Data Hasil Pasien </h2>
  </div>

  <div class="card-body">
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Hasil</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php 
      $no = 1;
      foreach ($data_hasil as $p) {
        ?>
      

    <tr>
      <th scope="row"> <?= $no ?> </th>
      <td> <?= $p['nama'] ?> </td>
      <td> <?= $p['tanggal_lahir'] ?> </td>
      <td> <?= $p['kelamin'] ?> </td>
      <td> <?= $p['hasil'] ?> </td>
      <td>
        <a href="detail.php?id_hasil=<?php echo $p['id_hasil']; ?>" class="badge badge-success">Detail</a>
        <a href="edit.php?id_hasil=<?php echo $p['id_hasil']; ?>" class="badge badge-warning">Edit</a>
        <a href="hapus.php?id_hasil=<?php echo $p['id_hasil']; ?>" class="badge badge-danger">Hapus</a>
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
