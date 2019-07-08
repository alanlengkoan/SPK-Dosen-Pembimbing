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
						Detail Data Dosen
					</div>
					<div class="card-body">

						<div class="row form-group">
							<div class="col col-md-3">
								<label for="text-input" class=" form-control-label">NIDN</label>
							</div>
							<div class="col-12 col-md-9">
								<?php echo $tb_datadosen['nip'] ?>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="text-input" class=" form-control-label">Nama Dosen</label>
							</div>
							<div class="col-12 col-md-9">
								<?php echo $tb_datadosen['nama_dosen'] ?>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="text-input" class=" form-control-label">Golongan</label>
							</div>
							<div class="col-12 col-md-9">
								<?php echo $tb_datadosen['golongan'] ?>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="text-input" class=" form-control-label">Jabatan Fungsional</label>
							</div>
							<div class="col-12 col-md-9">
								<?php echo $tb_datadosen['jabatan_fungsional'] ?>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="text-input" class=" form-control-label">Jabatan Struktural</label>
							</div>
							<div class="col-12 col-md-9">
								<?php echo $tb_datadosen['jabatan_struktural'] ?>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="text-input" class=" form-control-label">Bidang Ilmu</label>
							</div>
							<div class="col-12 col-md-9">
								<?php echo $tb_datadosen['bidang_ilmu1'] ?>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="text-input" class=" form-control-label">S2</label>
							</div>
							<div class="col-12 col-md-9">
								<?php echo $tb_datadosen['s2'] ?>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="text-input" class=" form-control-label">Bidang Ilmu</label>
							</div>
							<div class="col-12 col-md-9">
								<?php echo $tb_datadosen['bidang_ilmu2'] ?>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="text-input" class=" form-control-label">S3</label>
							</div>
							<div class="col-12 col-md-9">
								<?php echo $tb_datadosen['s3'] ?>
							</div>
						</div>
						<a href="dados.php" class="btn btn-primary btn-sm">Kembali</a>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include_once 'atribut/foot.php'; ?>
