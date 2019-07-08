<!-- untuk memanggil bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<!-- untuk memanggil menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="breadcrumbs">
  <div class="col-sm-4">
    <div class="page-header float-left">
      <div class="page-title">
        <h1>Data Alternatif</h1>
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
            <a href="alternatif_tambah.php" class="btn btn-success btn-sm"> <i class="fa fa-plus"></i> Data Alternatif </a>
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
                <th>Id Data</th>
                <th>Nama Alternatif</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no    = 1;
              $sql   = "SELECT * FROM tb_alternatif";
              $query = mysqli_query($koneksi, $sql);
              while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $row['id_data']; ?></td>
                  <td><?php echo $row['nama_alternatif']; ?></td>
                  <td align="center">
                    <div class="btn-group dropleft">
                      <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                        Pilih
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="alternatif_edit.php?id_data=<?php echo $row['id_data'] ?>"><i class="fa fa-edit"></i> Ubah </a>
                        <a class="dropdown-item" href="alternatif_hapus.php?id_data=<?php echo $row['id_data'] ?>" onclick="return confirm('Anda yakin ingin menghapus data kriteria ini ?')"><i class="fa fa-trash"></i> Hapus </a>
                      </div>
                    </div>
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

<?php include_once 'atribut/foot.php'; ?>
