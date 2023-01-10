
<?php require_once('header.php') ?>

<div class="row">
  <div class="col-md-12">
  <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Rekapitulasi Pengunjung</h6>
        </div>
        <div class="card-body">
          <form action="" method="POST" class="text-center">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-3">
                <div class="form-group">
                    <label for="">Dari Tanggal</label>
                    <input type="date" name="tanggal1" class="form-control" value="<?= isset($_POST['tanggal1']) ? $_POST['tanggal1'] : date('Y-m-d') ?>" required>
                  </div>
                </div>
                <div class="col-md-3">
                <div class="form-group">
                    <label for="">Hingga Tanggal</label>
                    <input type="date" name="tanggal2" class="form-control" value="<?= isset($_POST['tanggal2']) ? $_POST['tanggal2'] : date('Y-m-d') ?>" required>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-2">
                <button class="btn btn-primary form-control" name="btampilkan"><i class="fa fa-search"></i> Tampilkan</button>
              </div>
              <div class="col-md-2">
                <a href="admin.php" class="btn btn-danger form-control"><i class="fa fa-backward"></i> Kembali</a>
              </div>
            </div>
          </form>

          <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal</th>
                            <th>Nama Pengunjung</th>
                            <th>Alamat</th>
                            <th>Tujuan</th>
                            <th>No. HP</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <td>1</td>
                            <td><?= date('Y-m-d') ?></td>
                            <td>Pietro Albani</td>
                            <td>JL. SetiaKawan Raya 5</td>
                            <td>Belajar</td>
                            <td>1234567890</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
  </div>
  </div>

</div>
<div class="row">
  <div class="col-md-12">
  <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Rekapitulasi Pengunjung</h6>
        </div>
        <div class="card-body">
          <form action="" method="POST" class="text-center">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-3">
                <div class="form-group">
                    <label for="">Dari Tanggal</label>
                    <input type="date" name="tanggal1" class="form-control" value="<?= isset($_POST['tanggal1']) ? $_POST['tanggal1'] : date('Y-m-d') ?>" required>
                  </div>
                </div>
                <div class="col-md-3">
                <div class="form-group">
                    <label for="">Hingga Tanggal</label>
                    <input type="date" name="tanggal2" class="form-control" value="<?= isset($_POST['tanggal2']) ? $_POST['tanggal2'] : date('Y-m-d') ?>" required>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-2">
                <button class="btn btn-primary form-control" name="btampilkan"><i class="fa fa-search"></i> Tampilkan</button>
              </div>
              <div class="col-md-2">
                <a href="admin.php" class="btn btn-danger form-control"><i class="fa fa-backward"></i> Kembali</a>
              </div>
            </div>
          </form>

          <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal</th>
                            <th>Nama Pengunjung</th>
                            <th>Alamat</th>
                            <th>Tujuan</th>
                            <th>No. HP</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <td>1</td>
                            <td><?= date('Y-m-d') ?></td>
                            <td>Pietro Albani</td>
                            <td>JL. SetiaKawan Raya 5</td>
                            <td>Belajar</td>
                            <td>1234567890</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
  </div>
  </div>

</div>
<div class="row">
  <div class="col-md-12">
  <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Rekapitulasi Pengunjung</h6>
        </div>
        <div class="card-body">
          <form action="" method="POST" class="text-center">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-3">
                <div class="form-group">
                    <label for="">Dari Tanggal</label>
                    <input type="date" name="tanggal1" class="form-control" value="<?= isset($_POST['tanggal1']) ? $_POST['tanggal1'] : date('Y-m-d') ?>" required>
                  </div>
                </div>
                <div class="col-md-3">
                <div class="form-group">
                    <label for="">Hingga Tanggal</label>
                    <input type="date" name="tanggal2" class="form-control" value="<?= isset($_POST['tanggal2']) ? $_POST['tanggal2'] : date('Y-m-d') ?>" required>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-2">
                <button class="btn btn-primary form-control" name="btampilkan"><i class="fa fa-search"></i> Tampilkan</button>
              </div>
              <div class="col-md-2">
                <a href="admin.php" class="btn btn-danger form-control"><i class="fa fa-backward"></i> Kembali</a>
              </div>
            </div>
          </form>

          <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal</th>
                            <th>Nama Pengunjung</th>
                            <th>Alamat</th>
                            <th>Tujuan</th>
                            <th>No. HP</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <td>1</td>
                            <td><?= date('Y-m-d') ?></td>
                            <td>Pietro Albani</td>
                            <td>JL. SetiaKawan Raya 5</td>
                            <td>Belajar</td>
                            <td>1234567890</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
  </div>
  </div>

</div>

<?php require_once('footer.php') ?>