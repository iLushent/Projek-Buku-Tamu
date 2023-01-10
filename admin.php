<?php 
session_start();
require 'function.php';

if(isset($_POST["kirim"])){
  if(tambahPengunjung($_POST) > 0){
    echo "
        <script type='text/javascript'>
          alert('Data berhasil ditambahkan');
          window.location = 'admin.php';
        </script>
    ";
  }else{
    echo "
        <script type='text/javascript'>
          alert('Data gagal ditambahkan');
          window.location = 'admin.php';
        </script>
    ";
  }
}

$pengunjung = query("SELECT * FROM pengunjung where tanggal");

?>
<?php require_once('header.php') ?>

<nav class="navbar navtas navbar-expand-lg bg-light mt-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><b>Buktam</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="rekappengunjung.php">Data Pengunjung</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="rekapresepsionis.php">Data Resepsionis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="rekapgtk.php">Data GTK</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
          <!-- statr row -->
          <div class="row mt-2">
            <!-- statr col-lg-7 -->
            <div class="col-lg-7 mb-3">
              <div class="card shadow bg-light">
                <!-- card body -->
                <div class="card-body">
                <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Identitas Pengunjung</h1>
                  </div>
                  <form class="user" action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                      <input type="hidden" class="form-control form-control-user" name="tanggal" id="tanggal" value="2022-12-09">
                      </div>
                      <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Pengunjung" required>
                      </div>
                      <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="asal_pengunjung" id="asal_pengunjung" placeholder="Asal Pengunung" required>
                      </div>
                      <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="keperluan" id="keperluan" placeholder="Keperluan" required>
                      </div>
                      <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="tujuan" id="tujuan" placeholder="Tujuan" required>
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control form-control-user" name="no_hp" id="no_hp" placeholder="Nomor HP" required>
                      </div>
                      <div class="form-group">
                          <input type="hidden" class="form-control form-control-user" name="status" id="status" value="Waiting">
                      </div>
      
                      <button type="submit" name="kirim" class="btn btn-primary btn-user btn-block">Tambah & Simpan Data Pengunjung</button>
                      <hr>
                      <div class="tmbhdata text-center m-2">
                      <a href="tambahresepsionis.php" class="btn btn-success">Tambah data Resepsionis</a>
                      <a href="tambahgtk.php" class="btn btn-warning">Tambah data GTK</a>
                      </div>
                  </form>
                  <hr>
                  <div class="text-center">
                      <a class="small" href="#">By. Pietro Albani | 2022 - <?= date('Y') ?></a>
                  </div>
                </div>
                <!-- end card body -->
              </div>
            </div>
            <!-- end col-lg-7 -->
      
              <!-- start col-lg-5 -->
            <div class="col-lg-5 mb-3">
              <!-- card -->
              <div class="card shadow">
                <!-- card body -->
                <div class="card-body">
                  <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Statistik Pengunjung</h1>
                  </div>
            <?php

            $tgl_sekarang = date('Y-m-d');

            $kemarin = date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d'))));

            $seminggu = date('Y-m-d h:i:s', strtotime('-1 week +1 day', strtotime($tgl_sekarang)));

            $sebulan = date('m');

            $sekarang = date('Y-m-d h:i:s');


            $tgl_sekarang = mysqli_fetch_array(mysqli_query(
                $conn, "SELECT count(*) FROM  pengunjung where tanggal like '%$tgl_sekarang%'"
            ));

            $kemarin = mysqli_fetch_array(mysqli_query(
                $conn, "SELECT count(*) FROM  pengunjung where tanggal like '%$kemarin%'"
            ));

            $seminggu = mysqli_fetch_array(mysqli_query(
                $conn, "SELECT count(*) FROM  pengunjung where tanggal BETWEEN '$seminggu' and '$sekarang'"
            ));

            $sebulan = mysqli_fetch_array(mysqli_query(
                $conn, "SELECT count(*) FROM  pengunjung where month(tanggal) = '$sebulan'"
            ));

            $keseluruhan = mysqli_fetch_array(mysqli_query(
                $conn, "SELECT count(*) FROM  pengunjung"
            ));

            ?>
                  <table class="table table-bordered">
                      <tr>
                          <td>Hari ini</td>
                          <td>: <?= $tgl_sekarang[0]?></td>
                      </tr>
                      <tr>
                          <td>Kemarin</td>
                          <td>: <?= $kemarin[0]?></td>
                      </tr>
                      <tr>
                          <td>Minggu ini</td>
                          <td>: <?= $seminggu[0]?></td>
                      </tr>
                      <tr>
                          <td>Bulan ini</td>
                          <td>: <?= $sebulan[0]?></td>
                      </tr>
                      <tr>
                          <td>Keseluruhan</td>
                          <td>: <?= $keseluruhan[0]?></td>
                      </tr>
                  </table>
                </div>
                <!-- end card body -->
              </div>
              <!-- end card -->
            </div>
            <!-- end col-lg-5 -->
      
          </div>
          <!-- end row -->
      
                  <!-- DataTales Example -->
                  <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Data Pengunjung [<?= date('d-n-Y') ?>]</h6>
              </div>
              <div class="card-body">
                  <a href="logout.php" class="btn btn-danger mb-3 float-right"><i class="fa fa-sign-out-alt"></i> Logout</a>
      
      
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr>
                                  <th>No.</th>
                                  <th>Tanggal</th>
                                  <th>Nama Pengunjung</th>
                                  <th>Asal Pengunjung</th>
                                  <th>Tujuan</th>
                                  <th>No. HP</th>
                                  <th>status</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php $i = 1; ?>
                            <?php foreach($pengunjung as $data) : ?>
                              <tr>
                                  <td><?= $i; ?></td>
                                  <td><?= $data["tanggal"]; ?></td>
                                  <td><?= $data["nama_lengkap"]; ?></td>
                                  <td><?= $data["asal_pengunjung"]; ?></td>
                                  <td><?= $data["tujuan"]; ?></td>
                                  <td><?= $data["no_hp"]; ?></td>
                                  <td><?= $data["status"]; ?></td>
                              </tr>
                              <?php $i++; ?>
                              <?php endforeach; ?>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
    <?php require_once('footer.php') ?>