<?php 
session_start();
require 'function.php';

$id = $_GET["id"];
$pengunjung = query("SELECT * FROM pengunjung WHERE id_pengunjung = '$id'")[0];

if(isset($_POST["kirim"])){
  if(editPengunjung($_POST) > 0){
    echo "
        <script type='text/javascript'>
          alert('Data berhasil diubah');
          window.location = 'rekappengunjung.php';
        </script>
    ";
  }else{
    echo "
        <script type='text/javascript'>
          alert('Data gagal diubah');
          window.location = 'rekappengunjung.php';
        </script>
    ";
  }
}


?>
<?php require_once('header.php') ?>

<div class="row mt-2 my-5 align-item-center justify-content-center text-center">
            <!-- statr col-lg-7 -->
            <div class="col-lg-7 mb-3">
              <div class="card shadow bg-light">
                <!-- card body -->
                <div class="card-body">
                <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Identitas Admin & Resepsionis</h1>
                  </div>
                  <form class="user" action="" method="POST">
                      <div class="form-group">
                      <input type="hidden" name="id_pengunjung" value="<?= $pengunjung["id_pengunjung"]; ?>">
                      </div>
                      <div class="form-group">
                      <input type="hidden" class="form-control form-control-user" name="tanggal" id="tanggal" value="<?= $pengunjung["tanggal"]; ?>">
                      </div>
                      <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Resepsionis" value="<?= $pengunjung["nama_lengkap"]; ?>" required>
                      </div>
                      <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="asal_pengunjung" id="asal_pengunjung" placeholder="Asal Pengunjung" value="<?= $pengunjung["asal_pengunjung"]; ?>" required>
                      </div>
                      <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="keperluan" id="keperluan" placeholder="Keperluan" value="<?= $pengunjung["keperluan"]; ?>" required>
                      </div>
                      <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="tujuan" id="tujuan" placeholder="Tujuan" value="<?= $pengunjung["tujuan"]; ?>" required>
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control form-control-user" name="no_hp" id="no_hp" placeholder="Nomor HP" value="<?= $pengunjung["no_hp"]; ?>" required>
                      </div>
                      <div class="form-group">
                          <input type="hidden" class="form-control form-control-user" name="status" id="status" value="<?= $pengunjung["status"]; ?>">
                      </div>
      
                      <button type="submit" name="kirim" class="btn btn-primary btn-user btn-block">Tambah & Simpan Data Pengunjung</button>
                      <hr>
                  </form>
                  <div class="text-center">
                      <a class="small" href="#">By. Pietro Albani | 2022 - <?= date('Y') ?></a>
                  </div>
                </div>
                <!-- end card body -->
              </div>
            </div>
            <!-- end col-lg-7 -->
</div>
<?php require_once('footer.php') ?>