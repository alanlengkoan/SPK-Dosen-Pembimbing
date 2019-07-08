<?php
// untuk koneksi ke database
include_once 'database/koneksi.php';
session_start();

if(isset($_POST["login"])) {

	$inpnpm    = $_POST['inpnpm'];
	$password  = $_POST['password'];

	$sql    = "SELECT * FROM tb_login WHERE npm = '$inpnpm'";
	$result = mysqli_query($koneksi, $sql);
	// cek username
	if (mysqli_num_rows($result) > 0) {

		// cek password
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		// untuk mengecek username
		if ($row['npm'] == $inpnpm) {

			// untuk mengecek password
			if (password_verify($password, $row["password"])) {

				// untuk mengecek level user
				if ($row['level'] == 'admin') {

				  // set session
				  $_SESSION["inpnpm"] = $inpnpm;
				  $_SESSION["level"]  = 'admin';
				  header("location: view/admin/index.php");
				  exit;

				} else if ($row['level'] == 'mahasiswa') {

				  // set session
				  $_SESSION["inpnpm"] = $inpnpm;
				  $_SESSION["level"]  = 'mahasiswa';
				  header("location: view/mahasiswa/index.php");
				  exit;

				}

			} else {
			  $inppassword = true;
			}

		}

	} else {
		$inpuserornpm = true;
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sistem Pendukung Keputusan</title>
	<meta name="description" content="Sufee Admin - HTML5 Admin Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body style="background-color: #281a6c">

	<div class="sufee-login d-flex align-content-center flex-wrap">
		<div class="container">
			<div class="login-content">
				<div class="login-logo">
					<a href="index.html">
						<img src="images/logo.png" style="width: 200px; height: 200px;">
					</a>
				</div>
				<div class="login-form">
					<h3 style="text-align: center; text-transform: uppercase; padding-bottom: 10px;">Silahkan Masuk</h3>
					<?php
					
					if(isset($inpuserornpm)) {
						echo '
						<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
						<span class="badge badge-pill badge-danger">Gagal</span>
						Username atau NPM yang Anda masukkan tidak terdaftar!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>
						';
					} else if(isset($inppassword)) {
						echo '
						<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
						<span class="badge badge-pill badge-danger">Gagal</span>
						Password yang Anda masukkan salah!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>
						';
					} else if (isset($_GET['masuk'])) {
						echo '
						<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
						<span class="badge badge-pill badge-danger">Gagal</span>
						untuk mengakses Anda harus login terlebih dahulu.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>
						';
					} else if (isset($_GET['admin'])) {
						echo '
						<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
						<span class="badge badge-pill badge-danger">Gagal</span>
						untuk mengakses Anda harus login terlebih dahulu.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>
						';
					} else if (isset($_GET['mahasiswa'])) {
						echo '
						<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
						<span class="badge badge-pill badge-danger">Gagal</span>
						Maaf Data yang Anda masukkan bukan Mahasiswa kami.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>
						';
					}

					?>

					<form method="post">
						<div class="form-group">
							<label></label>
							<input type="text" name="inpnpm" id="username" class="form-control" placeholder="Username" required="required">
						</div>
						<div class="form-group">
							<label></label>
							<input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required">
						</div>
						<button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="login">Masuk</button>
					</form>

				</div>
			</div>
		</div>
	</div>

	<script src="vendors/jquery/dist/jquery.min.js"></script>
	<script src="vendors/popper.js/dist/umd/popper.min.js"></script>
	<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>
