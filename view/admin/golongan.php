<!-- untuk bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<!-- untuk bagian menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Data Golongan</h1>
			</div>
		</div>
	</div>
</div>

<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<button type="button" class="btn btn-success btn-sm mb-1" data-toggle="modal" data-target="#modalTambah"><i class="fa fa-plus"></i>&nbsp; Golongan</button>
					</div>
					<div class="card-body">

						<!-- untuk tampilan alerts -->
						<?php
						if (isset($_GET['tambah'])) {
							echo "
							<div class='alert alert-success alert-dismissible fade show' role='alert'>
							<strong>Berhasil!</strong> Data Dosen berhasil ditambahkan.
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
							</div>
							";
						} else if (isset($_GET['gagal'])) {
							echo "
							<div class='alert alert-danger alert-dismissible fade show' role='alert'>
							<strong>Gagal!</strong> Data Dosen gagal ditambahkan.
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
							</div>
							";
						} else if (isset($_GET['ubah'])) {
							echo "
							<div class='alert alert-success alert-dismissible fade show' role='alert'>
							<strong>Berhasil!</strong> Data Dosen berhasil diubah.
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
							</div>
							";
						} else if (isset($_GET['hapus'])) {
							echo "
							<div class='alert alert-danger alert-dismissible fade show' role='alert'>
							<strong>Berhasil!</strong> Data Dosen berhasil dihapus.
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
							</div>
							";
						}
						?>

						<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>No.</th>
									<th>Kode Golongan</th>
									<th>Jenis Golongan</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no  = 1;
								$sql = "SELECT * FROM tb_golongan";
								$qry = mysqli_query($koneksi, $sql);
								while ($tb_golongan = mysqli_fetch_array($qry, MYSQLI_ASSOC)){
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $tb_golongan['kd_golongan']; ?></td>
										<td><?php echo $tb_golongan['jenis_golongan']; ?></td>
										<td>
											<a href="golonganedit.php?id=<?php echo $tb_golongan['kd_golongan']; ?>" title="Ubah" class="btn btn-success btn-sm"> <i class="fa fa-edit"></i> </a>
											<a href="golonganhapus.php?id=<?php echo $tb_golongan['kd_golongan']; ?>" title="Hapus" class="btn btn-danger btn-sm" onclick="return confirm('Yakin menghapus ?')"> <i class="fa fa-trash"></i> </a>
										</td>
									</tr>
								<?php }?>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="mediumModalLabel">Tambah Golongan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php
				$sql    = "SELECT kd_golongan FROM tb_golongan";
				$carkod = mysqli_query($koneksi, $sql);
				$datkod = mysqli_fetch_array($carkod, MYSQLI_ASSOC);
				$jumdat = mysqli_num_rows($carkod);
				if ($datkod) {
					$nilkod  = substr($jumdat[0], 1);
					$kode    = (int) $nilkod;
					$kode    = $jumdat + 1;
					$kodeoto = "ID_GOL-".str_pad($kode, 2, "0", STR_PAD_LEFT);
				} else {
					$kodeoto = "ID_GOL-01";
				}

				?>
				<form method="post" class="form-horizontal">
					<div class="row form-group">
						<div class="col col-md-3">
							<label class=" form-control-label">Kode Golongan</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="text" name="kd_golongan" value="<?php echo $kodeoto; ?>" readonly="readonly" class="form-control">
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label class=" form-control-label">Golongan</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="text" name="jenis_golongan" placeholder="Golongan" required="required" class="form-control">
						</div>
					</div>
					<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</button>
					<input type="submit" name="simpan" value="Simpan" class="btn btn-success btn-sm">
				</form>

			</div>
		</div>
	</div>
</div>

<?php include_once 'atribut/foot.php'; ?>

<?php
if (isset($_POST['simpan'])) {

	$kd    = $_POST['kd_golongan'];
	$jenis = $_POST['jenis_golongan'];

	$sql    = "INSERT INTO tb_golongan (kd_golongan, jenis_golongan) VALUES ('$kd', '$jenis')";
	$tambah = mysqli_query($koneksi, $sql);

	if ($tambah) {
		echo "
		<script>
			document.location.href='golongan.php?&tambah';
		</script>
		";
	} else {
		echo "
		<script>
			document.location.href='golongan.php?&gagal';
		</script>
		";
	}

}
?>
