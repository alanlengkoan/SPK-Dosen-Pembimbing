<!-- untuk bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<?php
// mengambil data berdasarkan id
$id         = $_GET['id'];
$sql        = "SELECT * FROM tb_jurusan WHERE kd_jurusan='$id'";
$qe         = mysqli_query($koneksi, $sql);
$tb_jurusan = mysqli_fetch_array($qe, MYSQLI_ASSOC);
?>
<!-- untuk bagian menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Ubah Jurusan
					</div>
					<div class="card-body">

						<form method="post">
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Kd Jurusan</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="kd_jurusan" value="<?php echo $tb_jurusan['kd_jurusan'] ?>" class="form-control" readonly="readonly">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Jurusan</label>
								</div>
								<div class="col-12 col-md-9">
									<input name="jurusan" value="<?php echo $tb_jurusan['jurusan'] ?>" class="form-control" required="required">
								</div>
							</div>

							<a href="jurusan.php" class="btn btn-danger btn-sm">Batal</a>
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

	$kd_jurusan = $_POST['kd_jurusan'];
	$jurusan    = $_POST['jurusan'];

	$sql  = "UPDATE tb_jurusan SET jurusan = '$jurusan' WHERE kd_jurusan = '$kd_jurusan'";
	$edit = mysqli_query($koneksi, $sql);

	if ($edit) {
		echo "
			<script>
				document.location.href='jurusan.php?&ubah';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Gagal mengedit data!')
				document.location.href='jurusan.php';
			</script>
		";
	}

}
?>
