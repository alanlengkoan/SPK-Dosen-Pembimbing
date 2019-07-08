<!-- untuk memanggil bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<?php
// mengambil file berdasarkan id
$id_krt = $_GET['id_kriteria'];
$sql    = "SELECT * FROM tb_kriteria WHERE id_kriteria = '$id_krt'";
$query  = mysqli_query($koneksi, $sql);
$data   = mysqli_fetch_array($query, MYSQLI_ASSOC);
?>
<!-- untuk memanggil menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="breadcrumbs">
  <div class="col-sm-4">
    <div class="page-header float-left">
      <div class="page-title">
        <h1>Ubah Data Kriteria</h1>
      </div>
    </div>
  </div>
</div>

<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">

            <form method="post">
              <div class="form-group">
                <label>ID Kriteria</label>
                <input class="form-control" type="text" name="inpidkrt" value=<?php echo $_GET['id_kriteria']; ?> readonly="readonly">
              </div>
              <div class="form-group">
                <label>Kode Kriteria</label>
                <input class="form-control" type="text" name="inpkdkrt" value="<?php echo $data['kd_kriteria']; ?>" readonly="readonly">
              </div>
              <div class="form-group">
                <label>Nama Kriteria</label>
                <input class="form-control" type="text" name="inpnmkrt" value="<?php echo $data['nama_kriteria']; ?>">
              </div>
              <div class="form-group">
                <input class="btn btn-danger btn-sm" type="button" name="batal" value="Batal" onClick="javascript:history.back()">
                <input class="btn btn-success btn-sm" type="submit" name="ubah" value="Ubah">
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- untuk memanggil bagian bawah -->
<?php include_once 'atribut/foot.php'; ?>

<?php
//proses ubah data
if (isset($_POST['ubah'])) {

  $id_kriteria = $_POST['inpidkrt'];
  $kd_kriteria = $_POST['inpkdkrt'];
  $nm_kriteria = $_POST['inpnmkrt'];

  $sql   = "UPDATE tb_kriteria SET kd_kriteria = '$kd_kriteria', nama_kriteria = '$nm_kriteria' WHERE id_kriteria = '$id_kriteria'";
  $query = mysqli_query($koneksi, $sql);

  if ($query) {
    echo "
    <script>
      window.location=(href='kriteria.php?&ubah');
    </script>
    ";
  } else {
    echo "
    <script>
      alert('Maaf Tidak Dapat Mengubah Data !');
      window.location=(href='kriteria.php');
    </script>";
  }
}
?>
