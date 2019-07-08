<?php
include_once "../../database/koneksi.php";
$npm = $_GET['term'];
$sql = "SELECT * FROM tb_datamhs WHERE nama_mahasiswa LIKE '%".$npm."%' OR npm LIKE '%".$npm."%' ORDER BY npm ASC";
$mhs = mysqli_query($koneksi, $sql);

$response = array();
if($mhs->num_rows > 0){
	while ($row = mysqli_fetch_array($mhs, MYSQLI_ASSOC)) {
		array_push($response, $row);
	}
}

echo json_encode($response);
