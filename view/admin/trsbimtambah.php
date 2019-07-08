<!-- untuk bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<!-- untuk bagian menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Tambah Transaksi Bimbingan
					</div>
					<div class="card-body">

						<?php
						$sql    = "SELECT kd_trsbimbingan FROM tb_trsbimbingan";
						$carkod = mysqli_query($koneksi, $sql);
						$datkod = mysqli_fetch_array($carkod, MYSQLI_ASSOC);
						$jumdat = mysqli_num_rows($carkod);
						if ($datkod) {
							$nilkod  = substr($jumdat[0], 1);
							$kode    = (int) $nilkod;
							$kode    = $jumdat + 1;
							$kodeoto = "ID_TRANSAKSI-".str_pad($kode, 2, "0", STR_PAD_LEFT);
						} else {
							$kodeoto = "ID_TRANSAKSI-01";
						}
						?>

						<form method="post" class="form-horizontal">
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Kode Transaksi Bimbingan</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="kd_trsbimbingan" value="<?php echo $kodeoto ?>" readonly="readonly" required="required" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class="form-control-label">Nama / NPM</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" id="inpnpmnama" placeholder="Nama / NPM" required="required" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">NPM</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpnpm" id="outnpm" placeholder="NPM" required="required" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class="form-control-label">Nama Mahasiswa</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpnamamhs" id="outnamamhs" placeholder="Nama Mahasiswa" required="required" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Telepon</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inptlp" id="outtlp" placeholder="Telepon" required="required" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Jurusan</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpjurusan" id="outjurusan" placeholder="Jurusan" required="required" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Judul</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpjudul" id="outjudul" placeholder="Judul" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Tempat Penelitian</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inptempatpenelitian" id="outtempatpenelitian" placeholder="Tempat penelitian" required="required" readonly="readonly" class="form-control">
								</div>
							</div>

							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Nama / NIDN</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="" id="nidn1" placeholder="Nama / NIDN" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">NIDN</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpnidn[]" id="outnidn1" placeholder="NIDN" required="required" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Nama</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpnamadosen[]" id="outnamadosen1" placeholder="Nama" required="required" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Golongan</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpgolongan[]" id="outgolongan1" placeholder="Golongan" required="required" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Jabatan Fungsional</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpjabfung[]" id="outfungsional1" placeholder="Jabatan Fungsional" required="required" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Pembimbing</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="hidden" name="inpjabstruk[]" id="outjabstrukl1" required="required">
									<input type="hidden" name="inps2[]" id="outs2_1" required="required">
									<input type="hidden" name="inpbidangilmu1[]" id="outbidangilmu1_1" required="required">
									<input type="hidden" name="inps3[]" id="outs3_1" required="required">
									<input type="hidden" name="inpbidangilmu2[]" id="outbidangilmu2_1" required="required">

									<input type="text" name="inpketerangan[]" value="Pembimbing 1" readonly="readonly" required="required" readonly="readonly" class="form-control">
								</div>
							</div>

							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Nama / NIDN</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="" id="nidn2" placeholder="Nama / NIDN" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">NIDN</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpnidn[]" id="outnidn2" placeholder="NIDN" required="required" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Nama</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpnamadosen[]" id="outnamadosen2" placeholder="Nama" required="required" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Golongan</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpgolongan[]" id="outgolongan2" placeholder="Golongan" required="required" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Jabatan Fungsional</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpjabfung[]" id="outfungsional2" placeholder="Jabatan Fungsional" required="required" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Pembimbing</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="hidden" name="inpjabstruk[]" id="outjabstrukl2" required="required">
									<input type="hidden" name="inps2[]" id="outs2_2" required="required">
									<input type="hidden" name="inpbidangilmu1[]" id="outbidangilmu1_2" required="required">
									<input type="hidden" name="inps3[]" id="outs3_2" required="required">
									<input type="hidden" name="inpbidangilmu2[]" id="outbidangilmu2_2" required="required">

									<input type="text" name="inpketerangan[]" value="Pembimbing 2" readonly="readonly" required="required" readonly="readonly" class="form-control">
								</div>
							</div>
							<a href="trsbim.php" class="btn btn-danger btn-sm">Batal</a>
							<input type="submit" name="simpan" value="Simpan" class="btn btn-success btn-sm">
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include_once 'atribut/foot.php'; ?>

<script type="text/javascript">

	$(document).ready(function(){

		$("#inpnpmnama").autocomplete({
			source: function (request, response) {
				$.ajax({
					method: 'get',
					url: 'ajak_cek2.php',
					dataType: 'json',
					data: {
						term: request.term
					},
					success: function (data) {
						response($.map(data, function (item) {
							return {
								label:"NPM " + item.npm + ", Nama " + item.nama_mahasiswa,
								npm:item.npm,
								nama_mahasiswa:item.nama_mahasiswa,
								tlp:item.tlp,
								jurusan:item.jurusan,
								judul:item.judul,
								tempat_penelitian:item.tempat_penelitian
							};
						}));
					}
				});
			},
			select: function (event, ui) {
				$('#outnpm').val(ui.item.npm);
				$('#outnamamhs').val(ui.item.nama_mahasiswa);
				$('#outtlp').val(ui.item.tlp);
				$('#outjurusan').val(ui.item.jurusan);
				$('#outjudul').val(ui.item.judul);
				$('#outtempatpenelitian').val(ui.item.tempat_penelitian);
			}
		});

		$("#nidn1").autocomplete({
			source: function (request, response) {
				$.ajax({
					method: 'get',
					url: 'ajak_cek.php',
					dataType: 'json',
					data: {
						term: request.term
					},
					success: function (data) {
						response($.map(data, function (item) {
							return {
								label:"NIDN " + item.nip + ", Nama " + item.nama_dosen,
								nip:item.nip,
								nama_dosen:item.nama_dosen,
								golongan:item.golongan,
								jabatan_fungsional:item.jabatan_fungsional,
								jabatan_struktural:item.jabatan_struktural,
								s2:item.s2,
								bidang_ilmu1:item.bidang_ilmu1,
								s3:item.s3,
								bidang_ilmu2:item.bidang_ilmu2
							};
						}));
					}
				});
			},
			select: function (event, ui) {
				$('#outnidn1').val(ui.item.nip);
				$('#outnamadosen1').val(ui.item.nama_dosen);
				$('#outgolongan1').val(ui.item.golongan);
				$('#outfungsional1').val(ui.item.jabatan_fungsional);

				$('#outjabstrukl1').val(ui.item.jabatan_struktural);
				$('#outs2_1').val(ui.item.s2);
				$('#outbidangilmu1_1').val(ui.item.bidang_ilmu1);
				$('#outs3_1').val(ui.item.s3);
				$('#outbidangilmu2_1').val(ui.item.bidang_ilmu2);

			}
		});

		$("#nidn2").autocomplete({
			source: function (request, response) {
				$.ajax({
					method: 'get',
					url: 'ajak_cek.php',
					dataType: 'json',
					data: {
						term: request.term
					},
					success: function (data) {
						response($.map(data, function (item) {
							return {
								label:"NIDN " + item.nip + ", Nama " + item.nama_dosen,
								nip:item.nip,
								nama_dosen:item.nama_dosen,
								golongan:item.golongan,
								jabatan_fungsional:item.jabatan_fungsional,
								jabatan_struktural:item.jabatan_struktural,
								s2:item.s2,
								bidang_ilmu1:item.bidang_ilmu1,
								s3:item.s3,
								bidang_ilmu2:item.bidang_ilmu2
							};
						}));
					}
				});
			},
			select: function (event, ui) {
				$('#outnidn2').val(ui.item.nip);
				$('#outnamadosen2').val(ui.item.nama_dosen);
				$('#outgolongan2').val(ui.item.golongan);
				$('#outfungsional2').val(ui.item.jabatan_fungsional);

				$('#outjabstrukl2').val(ui.item.jabatan_struktural);
				$('#outs2_2').val(ui.item.s2);
				$('#outbidangilmu1_2').val(ui.item.bidang_ilmu1);
				$('#outs3_2').val(ui.item.s3);
				$('#outbidangilmu2_2').val(ui.item.bidang_ilmu2);
			}
		});

	});

</script>

<?php
if (isset($_POST['simpan'])) {

	$kd_trsbimbingan = $_POST['kd_trsbimbingan'];
	$npm             = $_POST['inpnpm'];
	$nama            = $_POST['inpnamamhs'];
	$judul           = $_POST['inpjudul'];
	$nip             = $_POST['inpnidn'];
	$nm_dosen        = $_POST['inpnamadosen'];
	$jb_fung         = $_POST['inpjabfung'];
	$jb_struk        = $_POST['inpjabstruk'];
	$s2              = $_POST['inps2'];
	$s3              = $_POST['inps3'];
	$bidangilmu1     = $_POST['inpbidangilmu1'];
	$bidangilmu2     = $_POST['inpbidangilmu2'];
	$golongan        = $_POST['inpgolongan'];
	$ket             = $_POST['inpketerangan'];
	$jumlah_dipilih  = count($nip);

	// membuat var array
	$datadosen = array();
	for($i = 0; $i < $jumlah_dipilih; $i++) {
		$dados = array(
			'nip'                => $nip[$i],
			'nama_dosen'         => $nm_dosen[$i],
			'golongan'           => $golongan[$i],
			'jabatan_fungsional' => $jb_fung[$i],
			'jabatan_struktural' => $jb_struk[$i],
			's2'                 => $s2[$i],
			'bidang_ilmu1'       => $bidangilmu1[$i],
			's3'                 => $s3[$i],
			'bidang_ilmu2'       => $bidangilmu2[$i],
			'dosen_pembimbing'   => $ket[$i]
		);
		array_push($datadosen, $dados);
	}
	// memparsing data menjadi json
	$hasil  = json_encode($datadosen);
	$sql    = "INSERT INTO tb_trsbimbingan (kd_trsbimbingan, npm, dosen_pembimbing) VALUES ('$kd_trsbimbingan','$npm','$hasil')";
	$tambah = mysqli_query($koneksi, $sql);

	// untuk laporan surat
	// untuk nama dan tahun akademik
	$id_surat = 'SK-PEMBIMBING01';
	$sql      = "SELECT * FROM tb_surat WHERE id_surat = '$id_surat'";
	$qe       = mysqli_query($koneksi, $sql);
	$row      = mysqli_fetch_array($qe, MYSQLI_ASSOC);
	$tampil   = json_decode($row['tahun'], true);
	// untuk tanggal, bulan, tahun
	$tgl        = date("d");
	$arr_bulan1 = array(1=>"I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII");
	$arr_bulan2 = array(1=>"Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
	$bulan1     = $arr_bulan1[date("n")];
	$bulan2     = $arr_bulan2[date("n")];
	$tahun      = date("Y");
	// untuk bilangan ganjil
	if ($tahun % 2 == 0) {
	  $semester = "GENAP";
	}else {
	  $semester = "GANJIL";
	}
	$datasurat = array();
	for($i = 0; $i < $jumlah_dipilih; $i++) {
		$data = array(
			'npm'                => $npm,
			'nama'               => $nama,
			'judul'              => $judul,
			'tanggal'            => $tgl,
			'bulanromawi'        => $bulan1,
			'bulanbiasa'         => $bulan2,
			'tahun'              => $tahun,
			'tahun1'             => $tampil[0]['tahun1'],
			'tahun2'             => $tampil[0]['tahun2'],
			'semester'           => $semester,
			'dosen'              => $row['nama'],
			'nip'                => $nip[$i],
			'nama_dosen'         => $nm_dosen[$i],
			'golongan'           => $golongan[$i],
			'jabatan_fungsional' => $jb_fung[$i],
			'jabatan_struktural' => $jb_struk[$i],
			's2'                 => $s2[$i],
			'bidang_ilmu1'       => $bidangilmu1[$i],
			's3'                 => $s3[$i],
			'bidang_ilmu2'       => $bidangilmu2[$i],
			'dosen_pembimbing'   => $ket[$i]
		);
		array_push($datasurat, $data);
	}
	// memparsing data menjadi json
	$hasil2  = json_encode($datasurat);
	$sql2    = "INSERT INTO tb_suratlap (hasil) VALUES ('$hasil2')";
	$tambah2 = mysqli_query($koneksi, $sql2);

	if ($tambah) {
		echo "
			<script>
				document.location.href='trsbim.php?&tambah';
			</script>
		";
	} else {
		echo "
			<script>
				document.location.href='trsbim.php?&gagal';
			</script>
		";
	}

}
?>
