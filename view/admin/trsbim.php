<!-- untuk bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<!-- untuk bagian menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Data Transaksi Bimbingan</h1>
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
						<a href="trsbimtambah.php" class="btn btn-success btn-sm mb-1"><i class="fa fa-plus"></i>&nbsp; Transaksi Bimbingan</a>
					</div>
					<div class="card-body">

						<!-- untuk tampilan alerts -->
						<?php
						if (isset($_GET['tambah'])) {
							echo "
							<div class='alert alert-success alert-dismissible fade show' role='alert'>
							<strong>Berhasil!</strong> Transaksi Bimbingan berhasil ditambahkan.
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
							</div>
							";
						} else if (isset($_GET['gagal'])) {
							echo "
							<div class='alert alert-danger alert-dismissible fade show' role='alert'>
							<strong>Gagal!</strong> Transaksi Bimbingan gagal ditambahkan.
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
							</div>
							";
						} else if (isset($_GET['ubah'])) {
							echo "
							<div class='alert alert-success alert-dismissible fade show' role='alert'>
							<strong>Berhasil!</strong> Transaksi Bimbingan berhasil diubah.
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
							</div>
							";
						} else if (isset($_GET['hapus'])) {
							echo "
							<div class='alert alert-danger alert-dismissible fade show' role='alert'>
							<strong>Berhasil!</strong> Transaksi Bimbingan berhasil dihapus.
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
									<th>Kode Transaksi</th>
									<th>NPM</th>
									<th>Mahasiswa</th>
									<th>NIDN</th>
									<th>Dosen</th>
									<th>Keterangan</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no  = 1;
								$sql = "SELECT a.*, b.nama_mahasiswa FROM tb_trsbimbingan AS a INNER JOIN tb_datamhs AS b ON a.npm = b.npm";
								$qry = mysqli_query($koneksi, $sql);
								while ($row = mysqli_fetch_array($qry, MYSQLI_ASSOC)) {
									$dos_pem = $row['dosen_pembimbing'];
									$dat_dos = json_decode($dos_pem, true);
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $row['kd_trsbimbingan']; ?></td>
										<td><?php echo $row['npm']; ?></td>
										<td><?php echo $row['nama_mahasiswa']; ?></td>
										<td><?php echo $dat_dos[0]['nip'].", ".$dat_dos[1]['nip']; ?></td>
										<td><?php echo $dat_dos[0]['nama_dosen'].", ".$dat_dos[1]['nama_dosen']; ?></td>
										<td><?php echo $dat_dos[0]['dosen_pembimbing'].", ".$dat_dos[1]['dosen_pembimbing']; ?></td>
										<td>
											<div class="btn-group dropleft">
                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                          Pilih
                        </button>
                        <div class="dropdown-menu">
													<a class="dropdown-item" href="trsbimcetak.php?id=<?php echo $row['kd_trsbimbingan']; ?>" target="_blank"> <i class="fa fa-print"></i> Cetak SK </a>
													<a class="dropdown-item" href="trsbimdetail.php?id=<?php echo $row['kd_trsbimbingan']; ?>"> <i class="fa fa-archive"></i> Detail </a>
													<a class="dropdown-item" href="trsbimedit.php?id=<?php echo $row['kd_trsbimbingan']; ?>"> <i class="fa fa-edit"></i> Edit</a>
													<a class="dropdown-item" href="trsbimhapus.php?id=<?php echo $row['kd_trsbimbingan']; ?>" onclick="return confirm('Yakin menghapus ?')"> <i class="fa fa-trash"></i> Hapus</a>
                        </div>
                      </div>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include_once 'atribut/foot.php'; ?>
