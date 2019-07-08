<!-- untuk bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<?php
// mengambil data berdasarkan id
$id         = $_GET['id'];
$sql        = "SELECT * FROM tb_datamhs WHERE npm='$id'";
$qe         = mysqli_query($koneksi, $sql);
$tb_datamhs = mysqli_fetch_array($qe, MYSQLI_ASSOC);
?>
<!-- untuk bagian menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Ubah Data Mahasiswa
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
									<label for="text-input" class=" form-control-label">Judul</label>
								</div>
								<div class="col-12 col-md-9">
									<textarea type="text" name="judul" placeholder="Judul" class="form-control"><?php echo $tb_datamhs['judul'] ?></textarea>
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Jurusan</label>
								</div>
								<div class="col-12 col-md-9">
									<select name="jurusan" class="form-control">
										<option><?php echo $tb_datamhs['jurusan'] ?></option>
										<?php

										$sql = mysqli_query($koneksi, "SELECT * FROM tb_jurusan ORDER BY kd_jurusan DESC");
										while ($row = mysqli_fetch_array($sql)) {
											echo '<option value="' .$row['jurusan']. '">' .$row['jurusan']. '</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Tempat Penelitian</label>
								</div>
								<div class="col-12 col-md-9">
									<input name="tempat_penelitian" value="<?php echo $tb_datamhs['tempat_penelitian'] ?>" class="form-control" required="required">
								</div>
							</div>

							<a href="dtmhs.php" class="btn btn-danger btn-sm">Batal</a>
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

	$npm               = $_POST['npm'];
	$nama              = $_POST['nama_mahasiswa'];
	$tlp               = $_POST['tlp'];
	$judul             = $_POST['judul'];
	$jurusan           = $_POST['jurusan'];
	$tempat_penelitian = $_POST['tempat_penelitian'];

	$sql  = "UPDATE tb_datamhs SET nama_mahasiswa = '$nama', tlp = '$tlp', judul = '$judul', jurusan = '$jurusan', tempat_penelitian = '$tempat_penelitian' WHERE npm = '$npm'";
	$edit = mysqli_query($koneksi, $sql);

	if ($edit) {
		echo "
			<script>
				document.location.href='dtmhs.php?&ubah';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Gagal mengedit data!')
				document.location.href='dtmhs.php?&ubah';
			</script>
		";
	}

}
?>
