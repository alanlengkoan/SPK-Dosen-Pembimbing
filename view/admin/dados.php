<!-- untuk bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<!-- untuk bagian menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Data Dosen</h1>
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
						<button type="button" class="btn btn-success btn-sm mb-1" data-toggle="modal" data-target="#modalTambah"><i class="fa fa-plus"></i>&nbsp; Data Dosen</button>
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

						<table id="bootstrap-data-table-export" class="table table-striped table-bordered table-sm">
							<thead>
								<tr>
									<th rowspan="2">No.</th>
									<th rowspan="2">NIDN</th>
									<th rowspan="2">Nama</th>
									<th rowspan="2">Golongan</th>
									<th rowspan="2">Jabatan Fungsional</th>
									<th rowspan="2">Jabatan Struktural</th>
									<th colspan="2">Bidang Ilmu</th>
									<th rowspan="2">Opsi</th>
								</tr>
								<tr>
									<th>S2</th>
									<th>S3</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no  = 1;
								$sql = "SELECT * FROM tb_datadosen";
								$qry = mysqli_query($koneksi, $sql);
								while ($tb_datadosen = mysqli_fetch_array($qry, MYSQLI_ASSOC)){
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $tb_datadosen['nip']; ?></td>
										<td><?php echo $tb_datadosen['nama_dosen']; ?></td>
										<td><?php echo $tb_datadosen['golongan']; ?></td>
										<td><?php echo $tb_datadosen['jabatan_fungsional']; ?></td>
										<td><?php echo $tb_datadosen['jabatan_struktural']; ?></td>
										<td><?php echo $tb_datadosen['bidang_ilmu1']; ?></td>
										<td><?php echo $tb_datadosen['bidang_ilmu2']; ?></td>
										<td>
											<div class="btn-group dropleft">
                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                          Pilih
                        </button>
                        <div class="dropdown-menu">
													<a href="dadosdetail.php?id=<?php echo $tb_datadosen['nip']; ?>" class="dropdown-item"><i class="fa fa-archive"></i> Detail</a>
													<a href="dadosedit.php?id=<?php echo $tb_datadosen['nip']; ?>" class="dropdown-item"><i class="fa fa-edit"></i> Ubah</a>
													<a href="dadosmhs.php?id=<?php echo $tb_datadosen['nip']; ?>" class="dropdown-item"><i class="fa fa-users"></i> Mahasiswa Bimbingan</a>
													<a href="dadoshapus.php?id=<?php echo $tb_datadosen['nip']; ?>" class="dropdown-item" onclick="return confirm('Yakin menghapus ?')"><i class="fa fa-trash"></i> Hapus</a>
                        </div>
                      </div>
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
				<h5 class="modal-title" id="mediumModalLabel">Tambah Data Dosen</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="dados.php" method="post" class="form-horizontal">
					<div class="row form-group">
						<div class="col col-md-3">
							<label for="text-input" class=" form-control-label">NIDN</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="number" name="nip" placeholder="NIDN" class="form-control" required="required">
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label for="email-input" class=" form-control-label">Nama</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="text" name="nama_dosen" placeholder="Nama" class="form-control" required="required">
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label for="password-input" class=" form-control-label">Golongan</label>
						</div>
						<div class="col-12 col-md-9">
							<select name="golongan" class="form-control" required="required">
								<option value="">- Golongan -</option>
								<?php

								$sql = mysqli_query($koneksi, "SELECT * FROM tb_golongan ORDER BY kd_golongan ASC");
								while ($row = mysqli_fetch_array($sql)) {
									echo '<option value="' .$row['jenis_golongan']. '">' .$row['jenis_golongan']. '</option>';
								}
								?>
							</select>
							<small class="help-block form-text"></small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label for="password-input" class=" form-control-label">Jabatan Fungsional</label>
						</div>
						<div class="col-12 col-md-9">
							<select name="jabatan_fungsional" class="form-control" required="required">
								<option value="">- Jabatan Fungsional -</option>
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
							<label for="password-input" class=" form-control-label">Jabatan Struktural</label>
						</div>
						<div class="col-12 col-md-9">
							<select name="jabatan_struktural" class="form-control" required="required">
								<option value="">- Jabatan Struktural -</option>
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
							<label for="text-input" class=" form-control-label">S2</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="text" name="s2" value="S2" readonly="readonly" class="form-control">
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label for="password-input" class=" form-control-label" readonly="readonly">Bidang Ilmu</label>
						</div>
						<div class="col-12 col-md-9">
							<select name="bidangilmu1" class="form-control" required="required">
								<option value="">- Bidang Ilmu -</option>
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
							<input type="text" name="s3" value="S3" readonly="readonly" class="form-control">
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label for="password-input" class=" form-control-label" readonly="readonly">Bidang Ilmu</label>
						</div>
						<div class="col-12 col-md-9">
							<select name="bidangilmu2" class="form-control" required="required">
								<option value="">- Bidang Ilmu -</option>
								<?php

								$sql = mysqli_query($koneksi, "SELECT * FROM tb_bidangilmu ORDER BY id_bidangilmu ASC");
								while ($row = mysqli_fetch_array($sql)) {
									echo '<option value="' .$row['bidang_ilmu']. '">' .$row['bidang_ilmu']. '</option>';
								}
								?>
							</select>
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

	$nip        = $_POST['nip'];
	$nama_dosen = $_POST['nama_dosen'];
	$golongan   = $_POST['golongan'];
	$ja_fung    = $_POST['jabatan_fungsional'];
	$ja_struk   = $_POST['jabatan_struktural'];
	$s2         = $_POST['s2'];
	$bid_ilmu1  = $_POST['bidangilmu1'];
	$s3         = $_POST['s3'];
	$bid_ilmu2  = $_POST['bidangilmu2'];

	$sql    = "INSERT INTO tb_datadosen (nip, nama_dosen, golongan, jabatan_fungsional, jabatan_struktural, s2, bidang_ilmu1, s3, bidang_ilmu2) VALUES ('$nip', '$nama_dosen', '$golongan', '$ja_fung', '$ja_struk', '$s2', '$bid_ilmu1', '$s3', '$bid_ilmu2')";
	$tambah = mysqli_query($koneksi, $sql);

	if ($tambah) {
		echo "
		<script>
			window.location=(href='dados.php?&tambah')
		</script>
		";
	}else {
		echo "
		<script>
			window.location=(href='dados.php?&gagal')
		</script>
		";
	}
}
?>
