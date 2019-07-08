<!-- untuk bagian head -->
<?php include_once 'atribut/head.php'; ?>
<?php
// mengambil data berdasarkan id
$qe = mysqli_query($koneksi, "SELECT * FROM tb_datamhs WHERE npm = '$_SESSION[inpnpm]'");
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
						Profil Mahasiswa
					</div>
					<div class="card-body">

						<form method="post">
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">NPM</label>
								</div>
								<div class="col-12 col-md-9">
                  <?php echo $tb_datamhs['npm'] ?>
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Nama</label>
								</div>
								<div class="col-12 col-md-9">
                  <?php echo $tb_datamhs['nama_mahasiswa'] ?>
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Telepon</label>
								</div>
								<div class="col-12 col-md-9">
                  <?php echo $tb_datamhs['tlp'] ?>
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Judul</label>
								</div>
								<div class="col-12 col-md-9">
                  <?php echo $tb_datamhs['judul'] ?>
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Jurusan</label>
								</div>
								<div class="col-12 col-md-9">
                  <?php echo $tb_datamhs['jurusan'] ?>
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Tempat Penelitian</label>
								</div>
								<div class="col-12 col-md-9">
                  <?php echo $tb_datamhs['tempat_penelitian'] ?>
								</div>
							</div>

							<a href="mahasiswa_ubah.php" class="btn btn-success btn-sm"> Ubah </a>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include_once 'atribut/foot.php'; ?>
