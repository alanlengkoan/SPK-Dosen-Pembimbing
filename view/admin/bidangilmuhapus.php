<?php
// untuk koneksi ke database
include_once "../../database/koneksi.php";
$id  = $_GET['id'];
$sql = "DELETE FROM tb_bidangilmu WHERE id_bidangilmu = '$id'";
mysqli_query($koneksi, $sql);
header("location:bidangilmu.php?&hapus");
?>
