<!-- untuk memanggil bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<?php
// mengambil file berdasarkan id
$id_dta = $_GET['id_data'];
$sql    = "SELECT * FROM tb_alternatif WHERE id_data = '$id_dta'";
$query  = mysqli_query($koneksi, $sql);
$row    = mysqli_fetch_array($query, MYSQLI_ASSOC);
$data   = json_decode($row['detail_dosen'], true);
?>
<!-- untuk memanggil menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="breadcrumbs">
  <div class="col-sm-4">
    <div class="page-header float-left">
      <div class="page-title">
        <h1>Ubah Data Alternatif</h1>
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

            <form method="post">
              <div class="row form-group">
                <div class="col col-md-3">
                  <label for="text-input" class=" form-control-label">ID Data</label>
                </div>
                <div class="col-12 col-md-9">
                  <input class="form-control" type="text" name="inpiddta" value="<?php echo $_GET['id_data']; ?>" readonly="readonly" required="required">
                </div>
              </div>
              <div class="row form-group">
                <div class="col col-md-3">
                  <label class=" form-control-label">Nama / NIDN</label>
                </div>
                <div class="col-12 col-md-9">
                  <input type="text" name="" id="nidn1" placeholder="Masukkan Nama / NIDN" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col col-md-3">
                  <label class=" form-control-label">NIDN</label>
                </div>
                <div class="col-12 col-md-9">
                  <input type="text" name="inpnidn" id="outnidn1" value="<?php echo $data[0]['nip']; ?>" required="required" readonly="readonly" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col col-md-3">
                  <label class=" form-control-label">Nama</label>
                </div>
                <div class="col-12 col-md-9">
                  <input type="text" name="inpnmalter" id="outnamadosen1" value="<?php echo $row['nama_alternatif']; ?>" required="required" readonly="readonly" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col col-md-3">
                  <label class=" form-control-label">Golongan</label>
                </div>
                <div class="col-12 col-md-9">
                  <input type="text" name="inpgolongan" id="outgolongan1" value="<?php echo $data[0]['golongan']; ?>" required="required" readonly="readonly" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col col-md-3">
                  <label class=" form-control-label">Jabatan Fungsional</label>
                </div>
                <div class="col-12 col-md-9">
                  <input type="text" name="inpjabfung" id="outfungsional1" value="<?php echo $data[0]['jabatan_fungsional']; ?>" required="required" readonly="readonly" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col col-md-3">
                  <label class=" form-control-label">Pembimbing</label>
                </div>
                <div class="col-12 col-md-9">
                  <input type="hidden" name="inpjabstruk" id="outjabstrukl1" value="<?php echo $data[0]['jabatan_struktural']; ?>" required="required">
                  <input type="hidden" name="inps2" id="outs2_1" value="<?php echo $data[0]['s2']; ?>" required="required">
                  <input type="hidden" name="inpbidangilmu1" id="outbidangilmu1_1" value="<?php echo $data[0]['bidang_ilmu1']; ?>" required="required">
                  <input type="hidden" name="inps3" id="outs3_1" value="<?php echo $data[0]['s3']; ?>" required="required">
                  <input type="hidden" name="inpbidangilmu2" id="outbidangilmu2_1" value="<?php echo $data[0]['bidang_ilmu2']; ?>" required="required">

                  <input type="text" name="inpketerangan" value="<?php echo $data[0]['dosen_pembimbing']; ?>" readonly="readonly" required="required" readonly="readonly" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <a href="alternatif.php" class="btn btn-danger btn-sm">Batal</a>
                <input class="btn btn-warning btn-sm" type="reset" name="" value="Kosongkan">
                <input class="btn btn-success btn-sm" type="submit" name="ubah" value="Ubah">
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- untuk memanggil bagian bawah -->
<?php include_once 'atribut/foot.php'; ?>

<script type="text/javascript">

	$(document).ready(function(){

		$("#nidn1").autocomplete({
			source: function (request, response) {
				$.ajax({
					method: 'get',
					url: '../ajak_cek.php',
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

	});

</script>

<?php
//proses ubah data
if (isset($_POST['ubah'])) {

  $id_data        = $_POST['inpiddta'];
  $nama_data      = $_POST['inpnmalter'];
	$nip            = $_POST['inpnidn'];
	$nm_dosen       = $_POST['inpnmalter'];
	$jb_fung        = $_POST['inpjabfung'];
	$jb_struk       = $_POST['inpjabstruk'];
	$s2             = $_POST['inps2'];
	$s3             = $_POST['inps3'];
	$bidangilmu1    = $_POST['inpbidangilmu1'];
	$bidangilmu2    = $_POST['inpbidangilmu2'];
	$golongan       = $_POST['inpgolongan'];
	$ket            = $_POST['inpketerangan'];

	// membuat var array
	$datadosen = array();
  $dados = array(
    'nip'                => $nip,
    'nama_dosen'         => $nm_dosen,
    'golongan'           => $golongan,
    'jabatan_fungsional' => $jb_fung,
    'jabatan_struktural' => $jb_struk,
    's2'                 => $s2,
    'bidang_ilmu1'       => $bidangilmu1,
    's3'                 => $s3,
    'bidang_ilmu2'       => $bidangilmu2,
    'dosen_pembimbing'   => $ket
  );
  array_push($datadosen, $dados);
	// memparsing data menjadi json
	$hasil = json_encode($datadosen);
  $sql   = "UPDATE tb_alternatif SET nama_alternatif = '$nama_data', detail_dosen = '$hasil' WHERE id_data = '$id_data'";
	$query = mysqli_query($koneksi, $sql);

  if ($query) {
    echo "
    <script>
      window.location=(href='alternatif.php?&ubah');
    </script>
    ";
  } else {
    echo "
    <script>
      alert('Maaf Tidak Dapat Mengubah Data !');
      window.location=(href='alternatif.php');
    </script>";
  }
}
?>
