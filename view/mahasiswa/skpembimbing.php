<!-- untuk bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<?php
// mengambil data berdasarkan id
$npm     = $_SESSION["inpnpm"];
$sql     = "SELECT a.*, b.* FROM tb_trsbimbingan AS a INNER JOIN tb_datamhs AS b ON a.npm = b.npm WHERE a.npm = '$npm'";
$qe      = mysqli_query($koneksi, $sql);
$data    = mysqli_fetch_array($qe, MYSQLI_ASSOC);
$dos_pem = $data['dosen_pembimbing'];
$dat_dos = json_decode($dos_pem, true);
?>
<!-- untuk bagian menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Dosen Pembimbing Mahasiswa
          </div>
          <div class="card-body">

            <form class="form-horizontal">
              <div class="row form-group">
                <div class="col col-md-3">
                  <label class=" form-control-label">NPM</label>
                </div>
                <div class="col-12 col-md-9">
                  <?php echo $data['npm'] ?>
                </div>
              </div>
              <div class="row form-group">
                <div class="col col-md-3">
                  <label class=" form-control-label">Nama Mahasiswa</label>
                </div>
                <div class="col-12 col-md-9">
                  <?php echo $data['nama_mahasiswa']; ?>
                </div>
              </div>
              <div class="row form-group">
                <div class="col col-md-3">
                  <label class=" form-control-label">Telepon</label>
                </div>
                <div class="col-12 col-md-9">
                  <?php echo $data['tlp']; ?>
                </div>
              </div>
              <div class="row form-group">
                <div class="col col-md-3">
                  <label class=" form-control-label">Jurusan</label>
                </div>
                <div class="col-12 col-md-9">
                  <?php echo $data['jurusan']; ?>
                </div>
              </div>
              <div class="row form-group">
                <div class="col col-md-3">
                  <label class=" form-control-label">Judul</label>
                </div>
                <div class="col-12 col-md-9">
                  <?php echo $data['judul']; ?>
                </div>
              </div>
              <div class="row form-group">
                <div class="col col-md-3">
                  <label class=" form-control-label">Tempat Penelitian</label>
                </div>
                <div class="col-12 col-md-9">
                  <?php echo $data['tempat_penelitian']; ?>
                </div>
              </div>
            </form>

            <hr />

            <div class="row">
              <div class="col-lg-6">
                <h4>Pembimbing 1</h4>
                <br />
                <form class="form-horizontal">
                  <div class="row form-group">
                    <div class="col col-md-4">
                      <label class=" form-control-label">NIDN</label>
                    </div>
                    <div class="col col-md-8">
                      <?php echo $dat_dos[0]['nip']; ?>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col col-md-4">
                      <label class=" form-control-label">Nama</label>
                    </div>
                    <div class="col col-md-8">
                      <?php echo $dat_dos[0]['nama_dosen']; ?>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col col-md-4">
                      <label class=" form-control-label">Golongan</label>
                    </div>
                    <div class="col col-md-8">
                      <?php echo $dat_dos[0]['golongan']; ?>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col col-md-4">
                      <label class=" form-control-label">Jabatan Fungsional</label>
                    </div>
                    <div class="col col-md-8">
                      <?php echo $dat_dos[0]['jabatan_fungsional']; ?>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col col-md-4">
                      <label class=" form-control-label">Jabatan Struktural</label>
                    </div>
                    <div class="col col-md-8">
                      <?php echo $dat_dos[0]['jabatan_struktural']; ?>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col col-md-4">
                      <label class=" form-control-label">S2</label>
                    </div>
                    <div class="col col-md-8">
                      <?php echo $dat_dos[0]['s2']; ?>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col col-md-4">
                      <label class=" form-control-label">Bidang Ilmu</label>
                    </div>
                    <div class="col col-md-8">
                      <?php echo $dat_dos[0]['bidang_ilmu1']; ?>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col col-md-4">
                      <label class=" form-control-label">S3</label>
                    </div>
                    <div class="col col-md-8">
                      <?php echo $dat_dos[0]['s3']; ?>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col col-md-4">
                      <label class=" form-control-label">Bidang Ilmu</label>
                    </div>
                    <div class="col col-md-8">
                      <?php echo $dat_dos[0]['bidang_ilmu2']; ?>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-lg-6">
                <h4>Pembimbing 2</h4>
                <br />
                <form class="form-horizontal">
                  <div class="row form-group">
                    <div class="col col-md-4">
                      <label class=" form-control-label">NIDN</label>
                    </div>
                    <div class="col col-md-8">
                      <?php echo $dat_dos[1]['nip']; ?>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col col-md-4">
                      <label class=" form-control-label">Nama</label>
                    </div>
                    <div class="col col-md-8">
                      <?php echo $dat_dos[1]['nama_dosen']; ?>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col col-md-4">
                      <label class=" form-control-label">Golongan</label>
                    </div>
                    <div class="col col-md-8">
                      <?php echo $dat_dos[1]['golongan']; ?>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col col-md-4">
                      <label class=" form-control-label">Jabatan Fungsional</label>
                    </div>
                    <div class="col col-md-8">
                      <?php echo $dat_dos[1]['jabatan_fungsional']; ?>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col col-md-4">
                      <label class=" form-control-label">Jabatan Struktural</label>
                    </div>
                    <div class="col col-md-8">
                      <?php echo $dat_dos[1]['jabatan_struktural']; ?>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col col-md-4">
                      <label class=" form-control-label">S2</label>
                    </div>
                    <div class="col col-md-8">
                      <?php echo $dat_dos[1]['s2']; ?>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col col-md-4">
                      <label class=" form-control-label">Bidang Ilmu</label>
                    </div>
                    <div class="col col-md-8">
                      <?php echo $dat_dos[1]['bidang_ilmu1']; ?>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col col-md-4">
                      <label class=" form-control-label">S3</label>
                    </div>
                    <div class="col col-md-8">
                      <?php echo $dat_dos[1]['s3']; ?>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col col-md-4">
                      <label class=" form-control-label">Bidang Ilmu</label>
                    </div>
                    <div class="col col-md-8">
                      <?php echo $dat_dos[1]['bidang_ilmu2']; ?>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <a class="btn btn-success" href="skcetak.php?npm=<?php echo $npm; ?>" target="_blank"> <i class="fa fa-print"></i> Cetak SK Pembimbing </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once 'atribut/foot.php'; ?>
