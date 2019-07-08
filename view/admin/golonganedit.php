<!-- untuk bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<?php
// mengambil data berdasarkan id
$id          = $_GET['id'];
$sql         = "SELECT * FROM tb_golongan WHERE kd_golongan = '$id'";
$qe          = mysqli_query($koneksi, $sql);
$tb_golongan = mysqli_fetch_array($qe, MYSQLI_ASSOC);
?>
<!-- untuk bagian menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Ubah Golongan
					</div>
					<div class="card-body">

						<form method="post">
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Id Golongan</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="kd_golongan" value="<?php echo $tb_golongan['kd_golongan'] ?>" class="form-control" readonly="readonly">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Bidang Ilmu</label>
								</div>
								<div class="col-12 col-md-9">
									<input name="jenis_golongan" value="<?php echo $tb_golongan['jenis_golongan'] ?>" class="form-control" required="required">
								</div>
							</div>

							<a href="golongan.php" class="btn btn-danger btn-sm">Batal</a>
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

	$kd    = $_POST['kd_golongan'];
	$jenis = $_POST['jenis_golongan'];

	$sql  = "UPDATE tb_golongan SET jenis_golongan = '$jenis' WHERE kd_golongan = '$kd'";
	$edit = mysqli_query($koneksi, $sql);

	if ($edit) {
		echo "
		<script>
			document.location.href='golongan.php?&ubah';
		</script>
		";
	}else {
		echo "
		<script>
			alert('Gagal megedit data!');
			document.location.href='golongan.php';
		</script>
		";
	}

}
?>
