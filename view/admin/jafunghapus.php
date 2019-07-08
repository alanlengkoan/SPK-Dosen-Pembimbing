<?php
// untuk koneksi ke database
include_once "../../database/koneksi.php";
$id  = $_GET['id'];
$sql = "DELETE FROM tb_jafung WHERE id_jafung = '$id'";
mysqli_query($koneksi, $sql);
header("location:jafung.php?&hapus");
?>
