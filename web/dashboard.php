<?php 
	include '../aset/header.php';
?>

<?php 
  include '../koneksi.php';

  $sql = "SELECT * FROM data_hasil";

  $res = mysqli_query($connect, $sql);

  $data_hasil = array();

  while ($data = mysqli_fetch_assoc($res)) {
    $data_hasil[] = $data;
  }
?>

<html>
<head>
	<title> Halaman Utama Covid-19 </title>
	<link rel="stylesheet" type="text/css" href="desainz.css">
</head>
<body>

	<div class="container">
    <div class="row mt-4">
      <div class="col-md">
      <h2><i class="fas fa-chart-line mr-2"></i>Dashboard</h2>
      <hr class="bg-light">
    </div>
  </div>

        <table class="table table-borderless">

          <td>
            <div class="card mb-3" style="max-width: 400px;">
              <div class="row no-gutters">
                <div class="card bg-info" style="width: 20px">
                  
                </div>
                <div class="col-md-11">
                  <div class="card-body">
                    <h5 class="card-title">Jumlah ODP</h5>
                    <p class="card-text">186.330 orang</p>
                    <p class="card-text"><small class="text-muted">Last updated 4 days ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </td>

          <td>
            <div class="card mb-3" style="max-width: 400px;">
              <div class="row no-gutters">
                <div class="card bg-warning" style="width: 20px">
                  
                </div>
                <div class="col-md-11">
                  <div class="card-body">
                    <h5 class="card-title">Jumlah PDP</h5>
                    <p class="card-text">16.763 orang</p>
                    <p class="card-text"><small class="text-muted">Last updated 4 days ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </td>

          <td>
            <div class="card mb-3" style="max-width: 400px;">
            <div class="row no-gutters">
            <div class="card bg-danger" style="width: 20px">
              
              </div>
                <div class="col-md-11">
                    <div class="card-body">
                      <h5 class="card-title">Jumlah Positif</h5>
                      <p class="card-text">7.135 orang</p>
                      <p class="card-text"><small class="text-muted">Last updated 4 days ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
          </td>
          

        </table>

        <br>
        <br>

        <table>
          <td>
            <form>
      
  <table class="table table-striped table-light">
  <thead>
    <tr>
      <th colspan="3">
        Daftar Pasien Terbaru
      </th>
    </tr>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
    </tr>

    <tr>
      <?php 
      $no = 1;
      foreach ($data_hasil as $p) {
        ?>
      <th scope="row"> <?= $no ?> </th>  
      <td colspan="1"> <?= $p['nama'] ?> </td>
      <td> </td>
    </tr>

      <?php 
      $no++;
    }
    ?>
  </thead>


</table>
      
            </form>
          </td>

          <form>

          <td>
            <b>Peta Sebaran Corona di Indonesia</b>
            <img src="peta.jpg">
          </td>
        </table>
          </form>


	<br>
	<br>
	<br>

</body>
</html>