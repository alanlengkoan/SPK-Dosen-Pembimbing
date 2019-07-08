<!-- untuk memanggil bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<!-- untuk memanggil menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="breadcrumbs">
  <div class="col-sm-4">
    <div class="page-header float-left">
      <div class="page-title">
        <h1>Data Analisa Alternatif</h1>
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
            <button type="button" class="btn btn-success btn-sm mb-1" data-toggle="modal" data-target="#modalTambah"><i class="fa fa-plus"></i>&nbsp; Data Analisa Alternatif</button>
          </div>
          <div class="card-body">

            <!-- untuk tampilan alerts -->
            <?php
            if (isset($_GET['tambah'])) {
              echo "
              <div class='alert alert-success alert-dismissible fade show' role='alert'>
              <strong>Berhasil!</strong> Alternatif berhasil ditambahkan.
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
                <th>ID Alternatif</th>
                <th>Nama Alternatif</th>
                <th>Nilai Perbandingan</th>
                <th>Nama Alternatif</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no    = 1;
              $sql   = "SELECT * FROM tb_perb_alternatif";
              $query = mysqli_query($koneksi, $sql);
              while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $row['id_alternatif']; ?></td>
                  <td><?php echo $row['alternatif1']; ?></td>
                  <td><?php echo $row['nm_banding']; ?></td>
                  <td><?php echo $row['alternatif']; ?></td>
                  <td align="center">
                    <a class="btn btn-danger btn-sm" href="analisa_alternatif_hapus.php?id_alternatif=<?php echo $row['id_alternatif'] ?>" onclick="return confirm('Anda yakin ingin menghapus data kriteria ini ?')"><i class="fa fa-trash"></i> </a>
                  </td>
                </tr>
                <?php } ?>
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
        <h5 class="modal-title" id="mediumModalLabel">Tambah Data Dosen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php
        //pemberian kode id secara otomatis
        $carikode = mysqli_query($koneksi, "SELECT id_alternatif FROM tb_perb_alternatif") or die(mysql_error());
        $datakode = mysqli_fetch_array($carikode);
        $jumlah_data = mysqli_num_rows($carikode);

        if ($datakode) {
          $nilaikode = substr($jumlah_data[0], 1);
          $kode = (int) $nilaikode;
          $kode = $jumlah_data + 1;
          $kode_otomatis = "A".str_pad($kode, 2, "0", STR_PAD_LEFT);
        } else {
          $kode_otomatis = "A01";
        }
        ?>

        <form method="post" class="form-horizontal">
          <div class="row form-group">
            <div class="col col-md-3">
              <label for="text-input" class=" form-control-label">ID Perbandingan</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="inpidalter" value="<?php echo $kode_otomatis; ?>" readonly="readonly" required="required">
            </div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3">
              <label for="text-input" class=" form-control-label">Nama Alternatif</label>
            </div>
            <div class="col-12 col-md-9">
              <select class="form-control" name="inpnmalter">
                <option>- Pilih Nama Alternatif -</option>
                <?php
                $hasil = mysqli_query($koneksi, "SELECT * FROM tb_alternatif");
                while ($row = mysqli_fetch_array($hasil)) {
                  echo "<option value='".$row['nama_alternatif']."'>".$row['nama_alternatif']."</option>";
                }
                ?>
              </select>
            </div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3">
              <label for="text-input" class=" form-control-label">Perbandingan</label>
            </div>
            <div class="col-12 col-md-9">
              <select class="form-control" name="inpperb">
                <option>- Pilih Perbandingan -</option>
                <option value="1">1. Sama penting dengan</option>
                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                <option value="3">3. Sedikit lebih penting dari</option>
                <option value="4">4. Mendekati lebih penting dari</option>
                <option value="5">5. Lebih penting dari</option>
                <option value="6">6. Mendekati sangat penting dari</option>
                <option value="7">7. Sangat penting dari</option>
                <option value="8">8. Mendekati mutlak dari</option>
                <option value="9">9. Mutlak sangat penting dari</option>
              </select>
            </div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3">
              <label for="text-input" class=" form-control-label">Nama Alternatif</label>
            </div>
            <div class="col-12 col-md-9">
              <select class="form-control" name="inpnmalter2">
                <option>- Pilih Nama Alternatif -</option>
                <?php
                $hasil = mysqli_query($koneksi, "SELECT * FROM tb_alternatif");
                while ($row = mysqli_fetch_array($hasil)) {
                  echo "<option value='".$row['nama_alternatif']."'>".$row['nama_alternatif']."</option>";
                }
                ?>
              </select>
            </div>
          </div>

          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</button>
          <input class="btn btn-warning btn-sm" type="reset" name="kosongkan" value="Kosongkan">
          <input type="submit" name="simpan" value="Simpan" class="btn btn-success btn-sm">
        </form>

      </div>
    </div>
  </div>
</div>

<?php include_once 'atribut/foot.php'; ?>

<?php
//proses tambah data
if (isset($_POST['simpan'])) {

  $id_alter    = $_POST['inpidalter'];
  $nm_banding  = $_POST['inpperb'];
  $alternatif1 = $_POST['inpnmalter'];
  $alternatif2 = $_POST['inpnmalter2'];

  if ($nm_banding==1) {
    $nilai = 1;
    $nama = "1. Sama penting dengan";
  } elseif ($nm_banding==2) {
    $nilai = 2;
    $nama = "2. Mendekati sedikit lebih penting dari";
  } elseif ($nm_banding==3) {
    $nilai = 3;
    $nama = "3. Sedikit lebih penting dari";
  } elseif ($nm_banding==4) {
    $nilai = 4;
    $nama = "4. Mendekati lebih penting dari";
  } elseif ($nm_banding==5) {
    $nilai = 5;
    $nama = "5. Lebih penting dari";
  } elseif ($nm_banding==6) {
    $nilai = 6;
    $nama = "6. Mendekati sangat penting dari";
  } elseif ($nm_banding==7) {
    $nilai = 7;
    $nama = "7. Sangat penting dari";
  } elseif ($nm_banding==8) {
    $nilai = 8;
    $nilai = "8. Mendekati mutlak dari";
  } elseif ($nm_banding==9) {
    $nilai = 9;
    $nama = "9. Mutlak sangat penting dari";
  }

  $sql   = "INSERT INTO tb_perb_alternatif (id_alternatif, nm_banding, nb_db, alternatif1, alternatif) VALUES ('$id_alter', '$nama', '$nilai', '$alternatif1', '$alternatif2')";
  $query = mysqli_query($koneksi, $sql);

  if ($query) {
    // berhasil
    echo "
    <script>
      window.location=(href='analisa_alternatif.php?&tambah')
    </script>
    ";
  } else {
    // gagal
    echo "
    <script>
      window.location=(href='analisa_alternatif.php?&gagal')
    </script>
    ";
  }

}
?>
