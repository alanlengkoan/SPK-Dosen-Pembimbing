<?php
include_once "../../../database/koneksi.php";
$id_krt = $_GET['id_kriteria'];
$sql    = "DELETE FROM tb_kriteria WHERE id_kriteria = '$id_krt'";
$query  = mysqli_query($koneksi, $sql);

if ($query) {
  // berhasil
  header("location:kriteria.php?&hapus");
  exit;
} else {
  // gagal
  echo "
    <script>
      alert('Maaf Tidak Dapat Menghapus Data !')
      window.location=(href='kriteria.php')
    </script>
  ";
}

?>
