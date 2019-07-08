<?php
include_once "../../../database/koneksi.php";
$id_art = $_GET['id_alternatif'];
$sql    = "DELETE FROM tb_perb_alternatif WHERE id_alternatif = '$id_art'";
$query  = mysqli_query($koneksi, $sql);

if ($query) {
  // berhasil
  header("location:analisa_alternatif.php?&hapus");
  exit;
} else {
  // gagal
  echo "
  <script>
    alert('Maaf Tidak Dapat Menghapus Data!')
    window.location=(href='analisa_kriteria.php')
  </script>
  ";
}

 ?>
