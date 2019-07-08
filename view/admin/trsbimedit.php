<!-- untuk bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<?php
// mengambil data berdasarkan id
$id      = $_GET['id'];
$sql     = "SELECT a.*, b.* FROM tb_trsbimbingan AS a INNER JOIN tb_datamhs AS b ON a.npm = b.npm WHERE a.kd_trsbimbingan = '$id'";
$qe      = mysqli_query($koneksi, $sql);
$data    = mysqli_fetch_array($qe, MYSQLI_ASSOC);
$dos_pem = $data['dosen_pembimbing'];
$dat_dos = json_decode($dos_pem, true);
?>
<!-- untuk bagian menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Ubah Transaksi Bimbingan
					</div>
					<div class="card-body">

						<form method="post" class="form-horizontal">
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Kode Transaksi Bimbingan</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="kd_trsbimbingan" value="<?php echo $data['kd_trsbimbingan']; ?>" readonly="readonly" required="required" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">NPM</label>
								</div>
								<div class="col-12 col-md-9">
									<select name="npm" id="npm" onchange="cek_datamhs()" class="form-control">
										<option><?php echo $data['npm'] ?></option>
										<?php

										$sql = mysqli_query($koneksi, "SELECT * FROM tb_datamhs ORDER BY npm DESC");
										while ($row = mysqli_fetch_array($sql)) {
											echo '<option value="' .$row['npm']. '">' .$row['npm']. '</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Nama Mahasiswa</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpnamamhs" id="outnamamhs" value="<?php echo $data['nama_mahasiswa']; ?>" required="required" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Telepon</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inptlp" id="outtlp" value="<?php echo $data['tlp']; ?>" required="required" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Jurusan</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpjurusan" id="outjurusan" value="<?php echo $data['jurusan']; ?>" required="required" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Judul</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpjudul" id="outjudul" value="<?php echo $data['judul']; ?>" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Tempat Penelitian</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inptempatpenelitian" id="outtempatpenelitian" value="<?php echo $data['tempat_penelitian']; ?>" required="required" readonly="readonly" class="form-control">
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
									<label class="form-control-label">NIDN</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpnidn[]" id="outnidn1" value="<?php echo $dat_dos[0]['nip']; ?>" required="required" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class="form-control-label">Nama</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpnamadosen[]" id="outnamadosen1" value="<?php echo $dat_dos[0]['nama_dosen']; ?>" required="required" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Golongan</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpgolongan[]" id="outgolongan1" value="<?php echo $dat_dos[0]['golongan']; ?>" required="required" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Jabatan Fungsional</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpjabfung[]" id="outfungsional1" value="<?php echo $dat_dos[0]['jabatan_fungsional']; ?>" required="required" readonly="readonly" class="form-control">
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

									<input type="text" name="inpketerangan[]" value="Pembimbing 1" readonly="readonly" required="required" class="form-control">
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
									<input type="text" name="inpnidn[]" id="outnidn2" value="<?php echo $dat_dos[1]['nip']; ?>" required="required" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Nama</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpnamadosen[]" id="outnamadosen2" value="<?php echo $dat_dos[1]['nama_dosen']; ?>" required="required" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Golongan</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpgolongan[]" id="outgolongan2" value="<?php echo $dat_dos[1]['golongan']; ?>" required="required" readonly="readonly" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label class=" form-control-label">Jabatan Fungsional</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpjabfung[]" id="outfungsional2" value="<?php echo $dat_dos[1]['jabatan_fungsional']; ?>" required="required" readonly="readonly" class="form-control">
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

									<input type="text" name="inpketerangan[]" value="Pembimbing 2" readonly="readonly" required="required" class="form-control">
								</div>
							</div>
							<a href="trsbim.php" class="btn btn-danger btn-sm">Batal</a>
							<input type="submit" name="edit" value="Edit" class="btn btn-success btn-sm">
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include_once 'atribut/foot.php'; ?>

<script type="text/javascript">

	function cek_datamhs(){
		var npm = $("#npm").val();
		$.ajax({
			method: 'GET',
			url: 'ajak_cek2.php',
			data:"npm="+npm,
			success: function (data) {
				var json = data;
				obj = JSON.parse(json);

				$('#outnamamhs').val(obj.nama_mahasiswa);
				$('#outtlp').val(obj.tlp);
				$('#outjurusan').val(obj.jurusan);
				$('#outjudul').val(obj.judul);
				$('#outtempatpenelitian').val(obj.tempat_penelitian);
			}
		})
	}

	$(document).ready(function(){

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
if (isset($_POST['edit'])) {

	$kd_trsbimbingan = $_POST['kd_trsbimbingan'];
	$npm             = $_POST['npm'];
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

	// membuat variabel array
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
	$hasil = json_encode($datadosen);
	$sql   = "UPDATE tb_trsbimbingan SET npm = '$npm', dosen_pembimbing = '$hasil' WHERE kd_trsbimbingan = '$kd_trsbimbingan'";
	$edit  = mysqli_query($koneksi, $sql);

	if ($edit) {
		echo "
		<script>
			document.location.href='trsbim.php?&ubah';
		</script>
		";
	} else {
		echo "
		<script>
			alert('Gagal mengedit data!');
			document.location.href='trsbim.php';
		</script>
		";
	}

}
?>
