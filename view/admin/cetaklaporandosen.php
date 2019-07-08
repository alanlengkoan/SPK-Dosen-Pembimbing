<?php
ob_start();
// untuk koneksi ke databases
include_once '../../database/koneksi.php';
$tgl        = date("d");
$arr_bulan1 = array(1=>"I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII");
$arr_bulan2 = array(1=>"Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
$bulan1     = $arr_bulan1[date("n")];
$bulan2     = $arr_bulan2[date("n")];
$tahun      = date("Y");
?>

<!-- CSS -->
<style media="screen">

.judul {
  padding: 4mm;
  text-align: center;
}

.nama {
  text-decoration: underline;
  font-weight: bold;
}

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 5px;
}

p {
  margin: 0;
}

</style>
<!-- CSS -->

<div class="judul">
  <table align="center">
    <tr>
      <td>
        <img src="../../images/logo.png" alt="Logo STMIK Handayani Makassar" style="width: 70p; height: 70px;">
      </td>
      <td width="600" align="center">
        <h3>SEKOLAH TINGGI MANAJEMEN INFORMATIKA</h3>
        <h3>dan KOMPUTER - HANDAYANI</h3>
        <p>(Apapun cita-cita anda, Teknologi Informasi Komputer Jawabannya)</p>
      </td>
    </tr>
  </table>
  <hr>
</div>

<h4 style="text-align: center;">Data Dosen</h4>

<table border="1" align="center">
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
    $nip = 1;
    $qry = mysqli_query($koneksi,"SELECT * FROM tb_datadosen");
    while ($tb_datadosen=mysqli_fetch_array($qry, MYSQLI_ASSOC)) {
      ?>
      <tr>
        <td><?php echo $nip++; ?></td>
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

<br /><br />
<br /><br />

<table>
  <tr>
    <td width="500"></td>
    <td>
      <p>DITETAPKAN DI&nbsp;&nbsp;&nbsp;: MAKASSAR</p>
      <p>PADA TANGGAL&nbsp;&nbsp;: <?php echo $tgl." ".$bulan2." ".$tahun ?></p>
      <br />
      <br />
      <br />
      <br />
      <p class="nama">Dr. Nasrullah, M.Si</p>
      <p>Ketua. 1 Bidang Akademik</p>
    </td>
  </tr>
</table>

<?php
// proses untuk menampilkan file pdf
$content = ob_get_clean();
include_once "../../vendors/html2pdf/html2pdf.class.php";
$html2pdf = new HTML2PDF('L', 'A4', 'en', 'utf-8');
$html2pdf->WriteHTML($content);
$html2pdf->Output('Data Dosen.pdf');
?>
