<!-- untuk bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<!-- untuk bagian menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Data Jurusan</h1>
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
						<button type="button" class="btn btn-success btn-sm mb-1" data-toggle="modal" data-target="#mediumModal"><i class="fa fa-plus"></i>&nbsp; Jurusan</button>
					</div>
					<div class="card-body">

						<!-- untuk tampilan alerts -->
						<?php
						if (isset($_GET['tambah'])) {
							echo "
							<div class='alert alert-success alert-dismissible fade show' role='alert'>
							<strong>Berhasil!</strong> Jurusan berhasil ditambahkan.
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
							</div>
							";
						} else if (isset($_GET['gagal'])) {
							echo "
							<div class='alert alert-danger alert-dismissible fade show' role='alert'>
							<strong>Gagal!</strong> Jurusan gagal ditambahkan.
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
							</div>
							";
						} else if (isset($_GET['ubah'])) {
							echo "
							<div class='alert alert-success alert-dismissible fade show' role='alert'>
							<strong>Berhasil!</strong> Jurusan berhasil diubah.
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
							</div>
							";
						} else if (isset($_GET['hapus'])) {
							echo "
							<div class='alert alert-danger alert-dismissible fade show' role='alert'>
							<strong>Berhasil!</strong> Jurusan berhasil dihapus.
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
									<th>Kode Jurusan</th>
									<th>Jurusan</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no  = 1;
								$sql = "SELECT * FROM tb_jurusan ORDER BY kd_jurusan ASC";
								$qry = mysqli_query($koneksi, $sql);
								while ($tb_jurusan = mysqli_fetch_array($qry, MYSQLI_ASSOC)){
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $tb_jurusan['kd_jurusan']; ?></td>
										<td><?php echo $tb_jurusan['jurusan']; ?></td>
										<td>
											<a href="jurusanedit.php?id=<?php echo $tb_jurusan['kd_jurusan']; ?>" title="Ubah" class="btn btn-success btn-sm"> <i class="fa fa-edit"></i> </a>
											<a href="jurusanhapus.php?id=<?php echo $tb_jurusan['kd_jurusan']; ?>" title="Hapus" class="btn btn-danger btn-sm" onclick="return confirm('Yakin menghapus ?')"> <i class="fa fa-trash"></i> </a>
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

<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="mediumModalLabel">Tambah Jurusan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php
				$sql    = "SELECT kd_jurusan FROM tb_jurusan";
				$carkod = mysqli_query($koneksi, $sql);
				$datkod = mysqli_fetch_array($carkod, MYSQLI_ASSOC);
				$jumdat = mysqli_num_rows($carkod);
				if ($datkod) {
					$nilkod  = substr($jumdat[0], 1);
					$kode    = (int) $nilkod;
					$kode    = $jumdat + 1;
					$kodeoto = "ID_JURUSAN-".str_pad($kode, 2, "0", STR_PAD_LEFT);
				} else {
					$kodeoto = "ID_JURUSAN-01";
				}
				?>
				<form action="jurusan.php" method="post" class="form-horizontal">
					<div class="row form-group">
						<div class="col col-md-3">
							<label class="form-control-label">Kode Jurusan</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="text" type="text" name="kd_jurusan" value="<?php echo $kodeoto ?>" class="form-control" readonly="readonly">
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label class=" form-control-label">Jurusan</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="text" name="jurusan" placeholder="Jurusan" required="required" class="form-control">
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

	$kd_jurusan = $_POST['kd_jurusan'];
	$jurusan    = $_POST['jurusan'];

	$sql    = "INSERT INTO tb_jurusan (kd_jurusan, jurusan) VALUES ('$kd_jurusan', '$jurusan')";
	$tambah = mysqli_query($koneksi, $sql);

	if ($tambah) {
		echo "
		<script>
			document.location.href='jurusan.php?&tambah';
		</script>
		";
	} else {
		echo "
		<script>
			document.location.href='jurusan.php?&gagal';
		</script>
		";
	}

}
?>
