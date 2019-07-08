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
            <a href="cetaklaporanmahasiswa.php" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-print"></i> Cetak</a>
          </div>
					<div class="card-body">

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
