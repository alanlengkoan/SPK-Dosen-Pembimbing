<!-- untuk bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<?php
// mengambil data berdasarkan id
$id  = 'SK-PENGUJI01';
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
                        Data Surat Undangan Penguji
                    </div>
                    <div class="card-body">

                    <?php
					if (isset($_GET['ubah'])) {
					echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
					<strong>Berhasil!</strong> Ubah Data berhasil ditambahkan.
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
					</button>
					</div>";
					} else if (isset($_GET['gagal'])) {
					echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
					<strong>Gagal!</strong> Ubah Data gagal ditambahkan.
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
					</button>
					</div>";
					}
					?>

                        <form method="post">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Nama Dosen</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input
                                        type="text"
                                        name="inpnamadosen"
                                        id="inpnamadosen"
                                        value="<?php echo $row['nama']; ?>"
                                        class="form-control"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Ketua Jurusan</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="inpjurusan" class="form-control" required="required">
                                        <option value="<?php echo $tampil[0]['jurusan']; ?>"><?php echo $tampil[0]['jurusan']; ?></option>
                                        <?php

    								$sql = mysqli_query($koneksi, "SELECT * FROM tb_jurusan ORDER BY kd_jurusan DESC");
    								while ($row = mysqli_fetch_array($sql)) {
    									echo '<option value="' .$row['jurusan']. '">' .$row['jurusan']. '</option>';
    								}
    								?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Perihal</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" name="inpperihal" value="<?php echo $tampil[0]['perihal']; ?>" class="form-control"/>
                                </div>
                            </div>
							<div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class="form-control-label">Jenis Undangan</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="inpjenisudangan" class="form-control" required="required">
                                        <option><?php echo $tampil[0]['jenisundangan']; ?></option>
										<option value="Proposal">Proposal</option>
										<option value="Hasil">Hasil</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class="form-control-label">Jam Pelaksanaan</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input
                                        type="text"
                                        name="inpjam"
                                        class="form-control"
                                        value="<?php echo $tampil[0]['jam']; ?>"
                                        required="required"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class="form-control-label">Tanggal Pelaksanaan</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input
                                        type="date"
                                        name="inptgl"
                                        class="form-control"
                                        value="<?php echo $tampil[0]['tgl_pel']; ?>"
                                        required="required"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class="form-control-label">Tempat Pelaksanaan</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea name="inptempatpelakasanaan" class="form-control" rows="8" cols="80"><?php echo $tampil[0]['tempat']; ?></textarea>
                                </div>
                            </div>
                            <input type="submit" name="edit" value="Edit" class="btn btn-success btn-sm">
                            <a href="spenguji_cetak.php" class="btn btn-primary btn-sm" target="_blank">Cetak</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'atribut/foot.php'; ?>

<script type="text/javascript">

    $(document).ready(function () {

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
                            return {label: item.nama_dosen, nama_dosen: item.nama_dosen};
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

    $nmadosen  = $_POST['inpnamadosen'];
    $jurusan   = $_POST['inpjurusan'];
    $perihal   = $_POST['inpperihal'];
    $jneundgan = $_POST['inpjenisudangan'];
    $jam       = $_POST['inpjam'];
    $tanggal   = $_POST['inptgl'];
    $tempat    = $_POST['inptempatpelakasanaan'];

    $h_tgl     = date("d", strtotime($tanggal));
    $arr_bulan = array(
        1 => "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember"
    );
    $h_bln = $arr_bulan[date("n", strtotime($tanggal))];
    $h_thn = date("Y", strtotime($tanggal));

    $tglpelaksanaan = $h_tgl." ".$h_bln." ".$h_thn;

    $hasil = array();
    $waktu = array(
        'jurusan'       => $jurusan,
        'perihal'       => $perihal,
        'jenisundangan' => $jneundgan,
        'jam'           => $jam,
        'tgl_pel'       => $tanggal,
        'tanggal'       => $tglpelaksanaan,
        'tempat'        => $tempat
    );
    array_push($hasil, $waktu);
    $h_akhir = json_encode($hasil);
    // untuk perintah masuk
    $sql = "UPDATE tb_surat SET nama = '$nmadosen', tahun = '$h_akhir' WHERE id_surat = '$id'";
    $edit = mysqli_query($koneksi, $sql);

    if ($edit) {
        echo "<script> document.location.href = 'spenguji.php?&ubah';</script>";

    } else {
        echo "<script> document.location.href = 'spenguji.php?&gagal';</script>";

    }

}
?>