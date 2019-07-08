<?php
// untuk koneksi ke database
include_once "../../database/koneksi.php";
$id   = $_GET['id'];
$sql  = "DELETE FROM tb_datamhs WHERE npm='$id'";
$sql2 = "DELETE FROM tb_login WHERE npm='$id'";
mysqli_query($koneksi, $sql);
mysqli_query($koneksi, $sql2);
header("location:dtmhs.php?&hapus");
?>
