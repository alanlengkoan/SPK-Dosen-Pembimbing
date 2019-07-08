<?php
// untuk koneksi ke database
include_once "../../database/koneksi.php";
$id  = $_GET['id'];
$sql = "DELETE FROM tb_trsbimbingan WHERE kd_trsbimbingan='$id'";
mysqli_query($koneksi, $sql);
header("location:trsbim.php?&hapus");
?>
