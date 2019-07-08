<!-- untuk bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<?php
// mengambil data berdasarkan id
$id             = $_GET['id'];
$sql            = "SELECT * FROM tb_jstruktural WHERE id_jstruktural = '$id'";
$qe             = mysqli_query($koneksi, $sql);
$tb_jstruktural = mysqli_fetch_array($qe, MYSQLI_ASSOC);
?>
<!-- untuk bagian menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Ubah Jabatan Struktural
					</div>
					<div class="card-body">

						<form method="post">
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Id Struktural</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="id_jstruktural" value="<?php echo $tb_jstruktural['id_jstruktural'] ?>" class="form-control" readonly="readonly">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class="form-control-label">Jabatan Fungsional</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="jenis" value="<?php echo $tb_jstruktural['jenis'] ?>" class="form-control" required="required">
								</div>
							</div>

							<a href="jstruktural.php" class="btn btn-danger btn-sm">Batal</a>
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

	$idjstruktural = $_POST['id_jstruktural'];
	$jenis         = $_POST['jenis'];

	$sql  = "UPDATE tb_jstruktural SET jenis = '$jenis' WHERE id_jstruktural = '$idjstruktural'";
	$edit = mysqli_query($koneksi, $sql);

	if ($edit) {
		echo "
		<script>
			document.location.href='jstruktural.php?&ubah';
		</script>
		";
	}else {
		echo "
		<script>
			alert('Gagal mengedit data');
			document.location.href='jstruktural.php';
		</script>
		";
	}

}
?>
