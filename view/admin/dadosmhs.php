<!-- untuk bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<?php
$nip        = $_GET['id'];
$sql        = "SELECT * FROM tb_datadosen WHERE nip = '$nip'";
$query      = mysqli_query($koneksi, $sql);
$result     = mysqli_fetch_array($query, MYSQLI_ASSOC);
$nama_dosen = $result['nama_dosen'];

$sql2   = "SELECT * FROM tb_trsbimbingan";
$query2 = mysqli_query($koneksi, $sql2);
$nama   = array();
while ($result = mysqli_fetch_array($query2, MYSQLI_ASSOC)) {
  $hasil = json_decode($result['dosen_pembimbing'], true);
  for ($i=0; $i < count($hasil); $i++) {
    // untuk menampilkan nama mahasiswa bimbingan dosen
    if ($hasil[$i]['nama_dosen'] == $nama_dosen) {
      // jika mahasiswa yang dibimbing ada
      $sql    = "SELECT * FROM tb_datamhs WHERE npm = $result[npm]";
      $query  = mysqli_query($koneksi, $sql);
      $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
      $nama[] = [
        $result['npm'],
        $result['nama_mahasiswa'],
      ];
    }
  }
}
?>
<!-- untuk bagian menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Mahasiswa Bimbingan
          </div>
          <div class="card-body">

            <div class="row">
              <div class="col-lg-3">
                Nama Dosen
              </div>
              <div class="col-lg-8">
                <?php echo $nama_dosen; ?>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3">
                Nama Mahasiswa
              </div>
              <div class="col-lg-8">
                <?php
                $jumlah = count($nama);

                if ($jumlah == 0) {
                  echo "Belum Ada!";
                } else {
                  for ($i=0; $i < count($nama); $i++) {
                    echo $nama[$i][0]." : ".$nama[$i][1];
                    echo "<br />";
                  }
                }
                ?>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3">
                Jumlah
              </div>
              <div class="col-lg-8">
                <?php echo $jumlah; ?>
              </div>
            </div>

            <a href="dados.php" class="btn btn-danger btn-sm">Kembali</a>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once 'atribut/foot.php'; ?>

<?php
if (isset($_POST['edit'])) {

  $nip                = $_POST['nip'];
  $nama               = $_POST['nama'];
  $golongan           = $_POST['golongan'];
  $jabatan_fungsional = $_POST['jabatan_fungsional'];
  $jstruktural        = $_POST['jabatan_struktural'];
  $bidangi_lmu1       = $_POST['bidangilmu1'];
  $bidang_ilmu2       = $_POST['bidangilmu2'];

  $sql  = "UPDATE tb_datadosen SET nama_dosen='$nama', golongan='$golongan', jabatan_fungsional='$jabatan_fungsional', jabatan_struktural='$jstruktural', bidang_ilmu1='$bidangi_lmu1', bidang_ilmu2='$bidang_ilmu2' WHERE nip='$nip'";
  $edit = mysqli_query($koneksi, $sql);

  if ($edit) {
    echo "
    <script>
      document.location.href='dados.php?&ubah';
    </script>
    ";
  }else {
    echo "
    <script>
      alert('Gagal mengedit data!');
      document.location.href='dados.php';
    </script>
    ";
  }

}
?>
