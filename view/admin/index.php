<!-- untuk bagian head -->
<?php include_once 'atribut/head.php'; ?>
<!-- untuk bagian menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Beranda</h1>
			</div>
		</div>
	</div>
</div>

<div class="content mt-3">

	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">

						<h4>Apa itu AHP?</h4>
						<p style="text-align: justify;">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>Analitycal Hierarchy Process</i> (AHP) adalah metode untuk memecahkan suatu situasi yang komplek tidak terstruktur kedalam beberapa komponen dalam susunan yang hirarki, dengan memberi nilai subjektif tentang pentingnya setiap variabel secara relatif, dan menetapkan variabel mana yang memiliki prioritas paling tinggi guna mempengaruhi hasil pada situasi tersebut.
							<br />
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Proses pengambilan keputusan pada dasarnya adalah memilih suatu alternatif yang terbaik. Seperti melakukan penstrukturan persoalan, penentuan alternatif-alternatif, penenetapan nilai kemungkinan untuk variabel aleatori, penetap nilai, persyaratan preferensi terhadap waktu, dan spesifikasi atas resiko. Betapapun melebarnya alternatif yang dapat ditetapkan maupun terperincinya penjajagan nilai kemungkinan, keterbatasan yang tetap melingkupi adalah dasar pembandingan berbentuk suatu kriteria yang tunggal.
							<br />
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peralatan utama Analitycal Hierarchy Process (AHP) adalah memiliki sebuah hirarki fungsional dengan input utamanya persepsi manusia. Dengan hirarki, suatu masalah kompleks dan tidak terstruktur dipecahkan ke dalam kelomok-kelompoknya dan diatur menjadi suatu bentuk hirarki.
						</p>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-12 mb-4">
		<div class="card-group">
			<div class="card col-lg-6 col-md-6 no-padding bg-flat-color-1">
				<div class="card-body">
					<div class="h1 text-muted text-right mb-4">
						<i class="fa fa-users text-light"></i>
					</div>
					<div class="h4 mb-0 text-light">
						<?php
						$sql    = "SELECT * FROM tb_datadosen";
						$query  = mysqli_query($koneksi, $sql);
						$result = mysqli_num_rows($query);
						?>
						<span class="count"><?php echo $result; ?></span>
					</div>
					<small class="text-uppercase font-weight-bold text-light">Dosen</small>
					<div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
				</div>
			</div>
			<div class="card col-lg-6 col-md-6 no-padding no-shadow">
				<div class="card-body bg-flat-color-2">
					<div class="h1 text-muted text-right mb-4">
						<i class="fa fa-users text-light"></i>
					</div>
					<div class="h4 mb-0 text-light">
						<?php
						$sql    = "SELECT * FROM tb_datamhs";
						$query  = mysqli_query($koneksi, $sql);
						$result = mysqli_num_rows($query);
						?>
						<span class="count"><?php echo $result; ?></span>
					</div>
					<small class="text-uppercase font-weight-bold text-light">Mahasiswa</small>
					<div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
				</div>
			</div>
		</div>
	</div>

</div>

<?php include_once 'atribut/foot.php'; ?>
