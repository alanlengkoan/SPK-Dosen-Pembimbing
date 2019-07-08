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
						Laporan Surat Keputusan Pembimbing
					</div>
					<div class="card-body">

						<table id="bootstrap-data-table-export" class="table table-striped table-bordered table-sm">
							<thead>
								<tr>
									<th>No.</th>
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
								$sql = "SELECT * FROM tb_suratlap";
								$qry = mysqli_query($koneksi, $sql);
								while ($row = mysqli_fetch_array($qry, MYSQLI_ASSOC)) {
									$hasil  = $row['hasil'];
									$tampil = json_decode($hasil, true);
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $tampil[0]['npm']; ?></td>
										<td><?php echo $tampil[0]['nama']; ?></td>
										<td><?php echo $tampil[0]['nip'].", ".$tampil[1]['nip']; ?></td>
										<td><?php echo $tampil[0]['nama_dosen'].", ".$tampil[1]['nama_dosen']; ?></td>
										<td><?php echo $tampil[0]['dosen_pembimbing'].", ".$tampil[1]['dosen_pembimbing']; ?></td>
										<td>
                      <a class="btn btn-success btn-sm" href="laporansurat_cetak.php?id=<?php echo $row['id']; ?>" target="_blank"> <i class="fa fa-print"></i> Cetak SK </a>
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
