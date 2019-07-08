<!-- untuk bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<?php
// mengambil data berdasarkan id
$id            = $_GET['id'];
$sql           = "SELECT * FROM tb_bidangilmu WHERE id_bidangilmu='$id'";
$qe            = mysqli_query($koneksi, $sql);
$tb_bidangilmu = mysqli_fetch_array($qe, MYSQLI_ASSOC);
?>
<!-- untuk bagian menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Ubah Bidang Ilmu
					</div>
					<div class="card-body">

						<form method="post">
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Id Bidang Ilmu</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="id_bidangilmu" value="<?php echo $tb_bidangilmu['id_bidangilmu'] ?>" class="form-control" readonly="readonly">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Bidang Ilmu</label>
								</div>
								<div class="col-12 col-md-9">
									<input name="bidang_ilmu" value="<?php echo $tb_bidangilmu['bidang_ilmu'] ?>" class="form-control" required="required">
								</div>
							</div>

							<a href="bidangilmu.php" class="btn btn-danger btn-sm">Batal</a>
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

	$idbidangilmu = $_POST['id_bidangilmu'];
	$bidang_ilmu  = $_POST['bidang_ilmu'];

	$sql  = "UPDATE tb_bidangilmu SET bidang_ilmu = '$bidang_ilmu' WHERE id_bidangilmu = '$idbidangilmu'";
	$edit = mysqli_query($koneksi, $sql);

	if ($edit) {
		echo "
		<script>
			document.location.href='bidangilmu.php?&ubah';
		</script>
		";
	} else {
		echo "
		<script>
			alert('Gagal mengedit data!');
			document.location.href='bidangilmu.php';
		</script>
		";
	}

}
?>
