<?php
include_once "../../database/koneksi.php";
$id  = $_GET['id'];
$sql = "DELETE FROM tb_jstruktural WHERE id_jstruktural = '$id'";
mysqli_query($koneksi, $sql);
header("location:jstruktural.php?&hapus");
?>
