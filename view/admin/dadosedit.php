<!-- untuk bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<?php
// mengambil data berdasarkan id
$id           = $_GET['id'];
$sql          = "SELECT * FROM tb_datadosen WHERE nip='$id'";
$qe           = mysqli_query($koneksi, $sql);
$tb_datadosen = mysqli_fetch_array($qe, MYSQLI_ASSOC);
?>
<!-- untuk bagian menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Ubah Data Dosen
					</div>
					<div class="card-body">

						<form method="post">
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">NIDN</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="nip" value="<?php echo $tb_datadosen['nip'] ?>" class="form-control" readonly="readonly">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Nama Dosen</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="nama" value="<?php echo $tb_datadosen['nama_dosen'] ?>" class="form-control" required="required">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Golongan</label>
								</div>
								<div class="col-12 col-md-9">
									<select name="golongan" class="form-control" required="required">
										<option><?php echo $tb_datadosen['golongan'] ?></option>
										<?php

										$sql = mysqli_query($koneksi, "SELECT * FROM tb_golongan ORDER BY kd_golongan ASC");
										while ($row = mysqli_fetch_array($sql)) {
											echo '<option value="' .$row['jenis_golongan']. '">' .$row['jenis_golongan']. '</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Jabatan Fungsional</label>
								</div>
								<div class="col-12 col-md-9">
									<select name="jabatan_fungsional" class="form-control" required="required">
										<option><?php echo $tb_datadosen['jabatan_fungsional'] ?></option>
										<?php

										$sql = mysqli_query($koneksi, "SELECT * FROM tb_jafung ORDER BY id_jafung ASC");
										while ($row = mysqli_fetch_array($sql)) {
											echo '<option value="' .$row['jenis']. '">' .$row['jenis']. '</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Jabatan Struktural</label>
								</div>
								<div class="col-12 col-md-9">
									<select name="jabatan_struktural" class="form-control">
										<option><?php echo $tb_datadosen['jabatan_struktural'] ?></option>
										<?php

										$sql = mysqli_query($koneksi, "SELECT * FROM tb_jstruktural ORDER BY id_jstruktural ASC");
										while ($row = mysqli_fetch_array($sql)) {
											echo '<option value="' .$row['jenis']. '">' .$row['jenis']. '</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Bidang Ilmu</label>
								</div>
								<div class="col-12 col-md-9">
									<select name="bidangilmu1" class="form-control">
										<option><?php echo $tb_datadosen['bidang_ilmu1'] ?></option>
										<?php

										$sql = mysqli_query($koneksi, "SELECT * FROM tb_bidangilmu ORDER BY id_bidangilmu ASC");
										while ($row = mysqli_fetch_array($sql)) {
											echo '<option value="' .$row['bidang_ilmu']. '">' .$row['bidang_ilmu']. '</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">S2</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="s2" value="<?php echo $tb_datadosen['s2'] ?>" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Bidang Ilmu</label>
								</div>
								<div class="col-12 col-md-9">
									<select name="bidangilmu2" class="form-control">
										<option><?php echo $tb_datadosen['bidang_ilmu2'] ?></option>
										<?php

										$sql = mysqli_query($koneksi, "SELECT * FROM tb_bidangilmu ORDER BY id_bidangilmu ASC");
										while ($row = mysqli_fetch_array($sql)) {
											echo '<option value="' .$row['bidang_ilmu']. '">' .$row['bidang_ilmu']. '</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">S3</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="s3" value="<?php echo $tb_datadosen['s3'] ?>" readonly="readonly" class="form-control">
								</div>
							</div>

							<a href="dados.php" class="btn btn-danger btn-sm">Batal</a>
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

	$nip                = $_POST['nip'];
	$nama               = $_POST['nama'];
	$golongan           = $_POST['golongan'];
	$jabatan_fungsional = $_POST['jabatan_fungsional'];
	$jstruktural        = $_POST['jabatan_struktural'];
	$bidangi_lmu1       = $_POST['bidangilmu1'];
	$bidang_ilmu2       = $_POST['bidangilmu2'];

	$sql  = "UPDATE tb_datadosen SET nama_dosen='$nama', golongan='$golongan', jabatan_fungsional='$jabatan_fungsional', jabatan_struktural='$jstruktural', bidang_ilmu1='$bidangi_lmu1', bidang_ilmu2='$bidang_ilmu2' WHERE nip='$nip'";
	$edit = mysqli_query($koneksi, $sql);

	if ($edit) {
		echo "
			<script>
				document.location.href='dados.php?&ubah';
			</script>
		";
	}else {
		echo "
			<script>
				alert('Gagal mengedit data!');
				document.location.href='dados.php';
			</script>
		";
	}

}
?>
