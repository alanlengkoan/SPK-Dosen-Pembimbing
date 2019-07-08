<?php
include_once "../../database/koneksi.php";
$id  = $_GET['id'];
$sql = "DELETE FROM tb_datadosen WHERE nip = '$id'";
mysqli_query($koneksi, $sql);
header("location:dados.php?&hapus");
?>
