<!-- untuk bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<?php
// mengambil data berdasarkan id
$id  = 'SK-PEMBIMBING01';
$sql = "SELECT * FROM tb_surat WHERE id_surat = '$id'";
$qe  = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_array($qe, MYSQLI_ASSOC);
$tampil = json_decode($row['tahun'], true);
?>
<!-- untuk bagian menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Data Surat Keputusan Pembimbing
					</div>
					<div class="card-body">

            <?php
            if (isset($_GET['ubah'])) {
              echo "
              <div class='alert alert-success alert-dismissible fade show' role='alert'>
              <strong>Berhasil!</strong> Ubah Data berhasil ditambahkan.
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button>
              </div>
              ";
            } else if (isset($_GET['gagal'])) {
              echo "
              <div class='alert alert-danger alert-dismissible fade show' role='alert'>
              <strong>Gagal!</strong> Ubah Data gagal ditambahkan.
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button>
              </div>
              ";
            }
            ?>

						<form method="post">
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Ketua 1 Bidang Akademik</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" name="inpnamadosen" id="inpnamadosen" value="<?php echo $row['nama']; ?>" class="form-control" />
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class="form-control-label">Tahun Akademik</label>
								</div>
								<div class="col-12 col-md-4">
									<input type="text" name="inptahun1" class="form-control" value="<?php echo $tampil[0]['tahun1']; ?>" required="required" />
								</div>
                <b>-</b>
                <div class="col-12 col-md-4">
									<input type="text" name="inptahun2" class="form-control" value="<?php echo $tampil[0]['tahun2']; ?>" required="required" />
								</div>
							</div>

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

	$(document).ready(function(){

		$("#inpnamadosen").autocomplete({
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
								label:item.nama_dosen,
								nama_dosen:item.nama_dosen,
							};
						}));
					}
				});
			},
			select: function (event, ui) {
				$('#inpnamadosen').val(ui.item.nama_dosen);
			}
		});

	});

</script>

<?php
if (isset($_POST['edit'])) {

	$nmadosen = $_POST['inpnamadosen'];
	$tahun1   = $_POST['inptahun1'];
	$tahun2   = $_POST['inptahun2'];
  // untuk tahun akademik
  $hasil_tahun = array();
  $tahun = array(
    'tahun1' => $tahun1,
    'tahun2' => $tahun2
  );
  array_push($hasil_tahun, $tahun);
  $tahunakademik = json_encode($hasil_tahun);
  // untuk perintah masuk
	$sql  = "UPDATE tb_surat SET nama = '$nmadosen', tahun = '$tahunakademik' WHERE id_surat = '$id'";
	$edit = mysqli_query($koneksi, $sql);

	if ($edit) {
		echo "
			<script>
				document.location.href='skpembimbing.php?&ubah';
			</script>
		";
	} else {
		echo "
			<script>
				document.location.href='skpembimbing.php?&gagal';
			</script>
		";
	}

}
?>
