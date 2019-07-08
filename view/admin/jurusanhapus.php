<?php
// untuk koneksi ke database
include_once "../../database/koneksi.php";
$id  = $_GET['id'];
$sql = "DELETE FROM tb_jurusan WHERE kd_jurusan = '$id'";
mysqli_query($koneksi, $sql);
header("location:jurusan.php?&hapus");
?>
