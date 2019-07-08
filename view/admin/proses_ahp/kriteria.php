<!-- untuk memanggil bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<!-- untuk memanggil menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="breadcrumbs">
  <div class="col-sm-4">
    <div class="page-header float-left">
      <div class="page-title">
        <h1>Data Kriteria</h1>
      </div>
    </div>
  </div>
</div>

<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <button type="button" class="btn btn-success btn-sm mb-1" data-toggle="modal" data-target="#modalTambah"><i class="fa fa-plus"></i>&nbsp; Data Kriteria</button>
          </div>
          <div class="card-body">

            <!-- untuk tampilan alerts -->
            <?php
            if (isset($_GET['tambah'])) {
              echo "
              <div class='alert alert-success alert-dismissible fade show' role='alert'>
              <strong>Berhasil!</strong> Kriteria berhasil ditambahkan.
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button>
              </div>
              ";
            } else if (isset($_GET['gagal'])) {
              echo "
              <div class='alert alert-danger alert-dismissible fade show' role='alert'>
              <strong>Gagal!</strong> Kriteria gagal ditambahkan.
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button>
              </div>
              ";
            } else if (isset($_GET['ubah'])) {
              echo "
              <div class='alert alert-success alert-dismissible fade show' role='alert'>
              <strong>Berhasil!</strong> Kriteria berhasil diubah.
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>
            ";
          } else if (isset($_GET['hapus'])) {
            echo "
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
              <strong>Berhasil!</strong> Kriteria berhasil dihapus.
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>
            ";
          }
          ?>

          <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Kriteria</th>
                <th>Nama Kriteria</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no    = 1;
              $sql   = "SELECT * FROM tb_kriteria";
              $query = mysqli_query($koneksi, $sql);
              while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['kd_kriteria']; ?></td>
                  <td><?php echo $row['nama_kriteria']; ?></td>
                  <td align="center">
                    <div class="btn-group dropleft">
                      <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                        Pilih
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="kriteria_edit.php?id_kriteria=<?php echo $row['id_kriteria'] ?>"><i class="fa fa-edit"></i> Ubah </a>
                        <a class="dropdown-item" href="kriteria_hapus.php?id_kriteria=<?php echo $row['id_kriteria'] ?>" onclick="return confirm('Anda yakin ingin menghapus data kriteria ini ?')"><i class="fa fa-trash"></i> Hapus </a>
                      </div>
                    </div>
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
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mediumModalLabel">Tambah Kriteria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php
        //pemberian kode id secara otomatis
        $carikode = mysqli_query($koneksi, "SELECT id_kriteria FROM tb_kriteria") or die(mysql_error());
        $datakode = mysqli_fetch_array($carikode);
        $jumlah_data = mysqli_num_rows($carikode);

        if ($datakode) {
          $nilaikode = substr($jumlah_data[0], 1);
          $kode = (int) $nilaikode;
          $kode = $jumlah_data + 1;
          $kode_otomatis = "krt-".str_pad($kode, 3, "0", STR_PAD_LEFT);
          $kode_kriteria = "2".str_pad($kode, 2, "0", STR_PAD_LEFT);
        } else {
          $kode_otomatis = "krt-001";
        }
        ?>

        <form method="post">
          <div class="row form-group">
            <div class="col col-md-3">
              <label for="text-input" class=" form-control-label">ID Kriteria</label>
            </div>
            <div class="col-12 col-md-9">
              <input type="hidden" name="inpidkrt" value="<?php echo $kode_otomatis; ?>" readonly="readonly">
              <input class="form-control" type="text" name="inpkdkrt" value="<?php echo $kode_kriteria; ?>" readonly="readonly">
            </div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3">
              <label for="text-input" class=" form-control-label">Nama Kriteria</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="inpnmkrt">
            </div>
          </div>
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</button>
          <input class="btn btn-warning btn-sm" type="reset" name="kosongkan" value="Kosongkan">
          <input class="btn btn-success btn-sm" type="submit" name="simpan" value="Simpan">
        </form>

      </div>
    </div>
  </div>
</div>

<?php include_once 'atribut/foot.php'; ?>

<?php
//proses tambah data
if (isset($_POST['simpan'])) {

  $id_kriteria = $_POST['inpidkrt'];
  $kd_kriteria = $_POST['inpkdkrt'];
  $nm_kriteria = $_POST['inpnmkrt'];

  $sql   = "INSERT INTO tb_kriteria (id_kriteria, kd_kriteria, nama_kriteria) VALUES ('$id_kriteria', '$kd_kriteria', '$nm_kriteria')";
  $query = mysqli_query($koneksi, $sql);

  if ($query) {
    // berhasil
    echo "
    <script>
      window.location=(href='kriteria.php?&tambah')
    </script>
    ";
  } else {
    // gagal
    echo "
    <script>
      window.location=(href='kriteria.php?&gagal')
    </script>
    ";
  }
}
?>
