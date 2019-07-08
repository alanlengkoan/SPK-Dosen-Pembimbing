<?php
// untuk koneksi ke database
include_once "../../database/koneksi.php";
$id  = $_GET['id'];
$sql = "DELETE FROM tb_golongan WHERE kd_golongan='$id'";
mysqli_query($koneksi, $sql);
header("location:golongan.php");
?>
