<!-- untuk bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<!-- untuk bagian menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Data Mahasiswa</h1>
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
						<button type="button" class="btn btn-success btn-sm mb-1" data-toggle="modal" data-target="#modalTambah"><i class="fa fa-plus"></i>&nbsp; Data Mahasiswa</button>
					</div>
					<div class="card-body">

						<!-- untuk tampilan alerts -->
						<?php
						if (isset($_GET['tambah'])) {
							echo "
							<div class='alert alert-success alert-dismissible fade show' role='alert'>
							<strong>Berhasil!</strong> Data Mahasiswa berhasil ditambahkan.
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
							</div>
							";
						} else if (isset($_GET['gagal'])) {
							echo "
							<div class='alert alert-danger alert-dismissible fade show' role='alert'>
							<strong>Gagal!</strong> Data Mahasiswa gagal ditambahkan.
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
							</div>
							";
						} else if (isset($_GET['ubah'])) {
							echo "
							<div class='alert alert-success alert-dismissible fade show' role='alert'>
							<strong>Berhasil!</strong> Data Mahasiswa berhasil diubah.
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
							</div>
							";
						} else if (isset($_GET['hapus'])) {
							echo "
							<div class='alert alert-danger alert-dismissible fade show' role='alert'>
							<strong>Berhasil!</strong> Data Mahasiswa berhasil dihapus.
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
									<th>No.</th>
									<th>NPM</th>
									<th>Nama</th>
									<th>TLP</th>
									<th>Judul</th>
									<th>Jurusan</th>
									<th>Tempat Penelitian</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no  = 1;
								$sql = "SELECT * FROM tb_datamhs";
								$qry = mysqli_query($koneksi, $sql);
								while ($tb_datamhs = mysqli_fetch_array($qry, MYSQLI_ASSOC)){
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $tb_datamhs['npm']; ?></td>
										<td><?php echo $tb_datamhs['nama_mahasiswa']; ?></td>
										<td><?php echo $tb_datamhs['tlp']; ?></td>
										<td><?php echo $tb_datamhs['judul']; ?></td>
										<td><?php echo $tb_datamhs['jurusan']; ?></td>
										<td><?php echo $tb_datamhs['tempat_penelitian']; ?></td>
										<td align="center">
											<a href="dtmhsdetail.php?id=<?php echo $tb_datamhs['npm']; ?>" title="Detail" class="btn btn-primary btn-sm"> <i class="fa fa-archive"></i> </a>
											<a href="dtmhsedit.php?id=<?php echo $tb_datamhs['npm']; ?>" title="Ubah" class="btn btn-success btn-sm"> <i class="fa fa-edit"></i> </a>
											<a href="dtmhshapus.php?id=<?php echo $tb_datamhs['npm']; ?>" title="Hapus" class="btn btn-danger btn-sm" onclick="return confirm('Yakin menghapus ?')"> <i class="fa fa-trash"></i> </a>
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
				<h5 class="modal-title" id="mediumModalLabel">Tambah Data Mahasiswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" class="form-horizontal">
					<div class="row form-group">
						<div class="col col-md-3">
							<label class=" form-control-label">NPM</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="number" name="inpnpm" placeholder="NPM" class="form-control" required="required">
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label class=" form-control-label">Nama</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="text" name="inpnama" placeholder="Nama" class="form-control" required="required">
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label class=" form-control-label">Telepon</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="number" name="inptlp" placeholder="Telepon" class="form-control" required="required">
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label class=" form-control-label">Judul</label>
						</div>
						<div class="col-12 col-md-9">
							<textarea type="text" name="inpjudul" placeholder="Judul" class="form-control" required="required"></textarea>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label class=" form-control-label">Jurusan</label>
						</div>
						<div class="col-12 col-md-9">
							<select name="inpjurusan" class="form-control" required="required">
								<option value="">- Jurusan -</option>
								<?php

								$sql = mysqli_query($koneksi, "SELECT * FROM tb_jurusan ORDER BY kd_jurusan DESC");
								while ($row = mysqli_fetch_array($sql)) {
									echo '<option value="' .$row['jurusan']. '">' .$row['jurusan']. '</option>';
								}
								?>
							</select>
							<small class="help-block form-text"></small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label class=" form-control-label">Tempat Penelitian</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="text" name="inptempat_penelitian" placeholder="Tempat Penelitian" class="form-control" required="required">
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
	$npm               = $_POST['inpnpm'];
	$nama              = $_POST['inpnama'];
	$tlp               = $_POST['inptlp'];
	$judul             = $_POST['inpjudul'];
	$jurusan           = $_POST['inpjurusan'];
	$tempat_penelitian = $_POST['inptempat_penelitian'];

	$sql1    = "INSERT INTO tb_datamhs (npm, nama_mahasiswa, tlp, judul, jurusan, tempat_penelitian, hasil) VALUES ('$npm', '$nama', '$tlp', '$judul', '$jurusan', '$tempat_penelitian', '')";
	$tambah1 = mysqli_query($koneksi, $sql1);

	// untuk tambah ke tabel login
	$passname = substr($npm, 4);
	$password = password_hash($passname, PASSWORD_DEFAULT);
	$level 	  = "mahasiswa";

	$sql2   =	"INSERT INTO tb_login (npm, passname, password, level) VALUES ('$npm', '$passname', '$password', '$level')";
	$tambah2 = mysqli_query($koneksi, $sql2);

	if ($tambah1) {
		echo "
		<script>
			document.location.href='dtmhs.php?&tambah';
		</script>
		";
	} else {
		echo "
		<script>
			document.location.href='dtmhs.php?&gagal';
		</script>
		";
	}
}

?>
