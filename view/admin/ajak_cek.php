<?php
include_once "../../database/koneksi.php";
$nip = $_GET['term'];
$sql = "SELECT * from tb_datadosen WHERE nama_dosen LIKE '%".$nip."%' OR nip LIKE '%".$nip."%' ORDER BY nip ASC";
$query = mysqli_query($koneksi, $sql);

$response = array();
if($query->num_rows > 0){
	while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
		array_push($response, $row);
	}
}

echo json_encode($response);
