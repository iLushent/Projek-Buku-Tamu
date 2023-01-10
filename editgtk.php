<?php 
session_start();
require 'function.php';

$id = $_GET["id"];
$gtk = query("SELECT * FROM gtk WHERE id_gtk = '$id'")[0];

if(isset($_POST["kirim"])){
  if(editGtk($_POST) > 0){
    echo "
        <script type='text/javascript'>
          alert('Data berhasil diubah');
          window.location = 'rekapgtk.php';
        </script>
    ";
  }else{
    echo "
        <script type='text/javascript'>
          alert('Data gagal diubah');
          window.location = 'rekapgtk.php';
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
                      <input type="hidden" name="id_gtk" value="<?= $gtk["id_gtk"]; ?>">
                      </div>
                      <div class="form-group">
                      <input type="hidden" class="form-control form-control-user" name="tanggal" id="tanggal" value="<?= $gtk["tanggal"]; ?>">
                      </div>
                      <div class="form-group">
                      <input type="text" class="form-control " name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" value="<?= $gtk["nama_lengkap"]; ?>" required>
                      </div>
                      <div class="form-group">
                      <select name="roles" id="roles" class="form-control" value="<?= $gtk["roles"]; ?>">
                        <option value="Kepsek">Kepsek</option>
                        <option value="Wakepsek">Wakil Kepala Sekolah</option>
                        <option value="Guru">Guru</option>
                        <option value="Murid">Murid</option>
                      </select>
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control " name="tujuan" id="tujuan" placeholder="Tujuan" value="<?= $gtk["tujuan"]; ?>" required>
                      </div>
                      <div class="form-group">
                          <input type="hidden" class="form-control form-control-user" name="status" id="status" value="<?= $gtk["status"]; ?>">
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