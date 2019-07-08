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
            <a href="cetaklaporandosen.php" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-print"></i> Cetak</a>
          </div>
					<div class="card-body">

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

<?php include_once 'atribut/foot.php'; ?>
