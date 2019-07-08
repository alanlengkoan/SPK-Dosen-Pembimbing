<?php
include_once "../../../database/koneksi.php";
$id_dta = $_GET['id_data'];
$sql    = "DELETE FROM tb_alternatif WHERE id_data = '$id_dta'";
$query  = mysqli_query($koneksi, $sql);

if ($query) {
  // berhasil
  header("location:alternatif.php?&hapus");
  exit;
} else {
  // gagal
  echo "
    <script>
      alert('Maaf Tidak Dapat Menghapus Data !')
      window.location=(href='alternatif.php')
    </script>
  ";
}

 ?>
