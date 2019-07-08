<!-- untuk bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<?php
// mengambil data berdasarkan id
$qe1 = mysqli_query($koneksi, "SELECT * FROM tb_datamhs WHERE npm = '$_SESSION[inpnpm]'");
$qe2 = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE npm = '$_SESSION[inpnpm]'");
$tb_datamhs = mysqli_fetch_array($qe1, MYSQLI_ASSOC);
$tb_login   = mysqli_fetch_array($qe2, MYSQLI_ASSOC);
?>
<!-- untuk bagian menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Ubah Profil Saya
					</div>
					<div class="card-body">

						<form method="post">
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">NPM</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="npm" value="<?php echo $tb_datamhs['npm'] ?>" class="form-control" readonly="readonly">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Nama</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="nama_mahasiswa" value="<?php echo $tb_datamhs['nama_mahasiswa'] ?>" class="form-control" required="required">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Telepon</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="tlp" value="<?php echo $tb_datamhs['tlp'] ?>" class="form-control" required="required">
								</div>
							</div>
              <div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Password</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inppassname" value="<?php echo $tb_login['passname'] ?>" class="form-control" required="required">
								</div>
							</div>

							<a href="mahasiswa_profil.php" class="btn btn-danger btn-sm">Batal</a>
							<input type="submit" name="edit" value="Edit" class="btn btn-success btn-sm">
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include_once 'atribut/foot.php'; ?>

<?php
if (isset($_POST['edit'])) {

	$npm      = $_POST['npm'];
	$nama     = $_POST['nama_mahasiswa'];
	$tlp      = $_POST['tlp'];
  $pass     = $_POST['inppassname'];
  $passhash = password_hash($pass, PASSWORD_DEFAULT);

	$sql1  = "UPDATE tb_datamhs SET nama_mahasiswa = '$nama', tlp = '$tlp' WHERE npm = '$npm'";
  $sql2  = "UPDATE tb_login SET passname = '$pass', password = '$passhash' WHERE npm = '$npm'";
	$edit1  = mysqli_query($koneksi, $sql1);
  $edit2  = mysqli_query($koneksi, $sql2);

	if ($edit2) {
		echo "
			<script>
        alert('Data berhasil di ubah!');
				document.location.href='mahasiswa_profil.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Gagal mengubah data!')
				document.location.href='mahasiswa_profil.php';
			</script>
		";
	}

}
?>
