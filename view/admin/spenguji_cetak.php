<?php
ob_start();
// untuk koneksi ke databases
include_once '../../database/koneksi.php';
// untuk nama dan tahun akademik
$id  = 'SK-PENGUJI01';
$sql = "SELECT * FROM tb_surat WHERE id_surat = '$id'";
$qe  = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_array($qe, MYSQLI_ASSOC);
$tampil    = json_decode($row['tahun'], true);
$tanggal   = $tampil[0]['tgl_pel'];
$hari      = date('D', strtotime($tanggal));
$hari_list = array(
  'Sun' => 'Minggu',
  'Mon' => 'Senin',
  'Tue' => 'Selasa',
  'Wed' => 'Rabu',
  'Thu' => 'Kamis',
  'Fri' => 'Jumat',
  'Sat' => 'Sabtu'
);
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

h3 {
  font-family: times;
}

p {
  font-family: times;
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
  <p>Terakreditasi Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT)</p>
</div>

<table align="center" style="font-family: times">
  <tr>
    <td>Nomor</td>
    <td>: &nbsp;&nbsp;&nbsp;/STMIK-H/AK-4/<?php echo $bulan1; ?>/<?php echo $tahun; ?></td>
    <td width="340"></td>
  </tr>
  <tr>
    <td>Lamp.</td>
    <td>: 2 (dua) lembar</td>
    <td width="340"></td>
  </tr>
  <tr>
    <td>Hal</td>
    <td>: <b><u><?php echo $tampil[0]['perihal']; ?></u> </b></td>
    <td width="340"></td>
  </tr>
</table>

<br /><br />

<table align="center">
  <tr>
    <td>
      <p>Kepada. Yth</p>
      <p>Bapak/Ibu:............................................................</p>
      <p>di - </p>
      &nbsp;&nbsp;&nbsp;T e m p a t
    </td>
  </tr>
  <tr>
    <td height="20"></td>
  </tr>
  <tr>
    <td width="600" align="justify">
      Dengan hormat,
      <p>
        Dalam rangka penyelesaian tugas akhir Mahasiswa Program Studi Strata Satu (S.1) Sekolah Tinggi Manajemen Informatika dan Komputer (STMIK) Handayani Makassar, kami mengundang bapak/ibu untuk menguji pada <b>Ujian <?php echo $tampil[0]['jenisundangan']; ?> </b> Mahasiswa yang Insya Allah akan dilaksanakan pada:
      </p>
    </td>
  </tr>
</table>
<br />
<table align="center" style="font-family: times">
  <tr>
    <td>Hari/Tanggal</td>
    <td>: <?php echo $hari_list[$hari].", ".$tampil[0]['tanggal']; ?></td>
  </tr>
  <tr>
    <td>Jam</td>
    <td>: <?php echo $tampil[0]['jam'].".00 sampai selesai (jadwal terlampir)"; ?></td>
  </tr>
  <tr>
    <td>Tempat</td>
    <td>: <?php echo $tampil[0]['tempat']; ?></td>
  </tr>
</table>
<br />
<table align="center">
  <tr>
    <td width="600" align="justify">
      <p>
        Bersama undangan ini terlampir Jadwal Ujian serta salinan <?php echo $tampil[0]['jenisundangan']; ?> untuk dipelajari demi kelancaran Ujian <?php echo $tampil[0]['jenisundangan']; ?>.
      </p>
    </td>
  </tr>
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td width="600" align="justify">
      <p>
        Demikian undangan ini kami sampaikan, atas kehadirannya diucapkan terima kasih.
      </p>
    </td>
  </tr>
</table>

<br /><br />
<br /><br />

<table>
  <tr>
    <td width="450"></td>
    <td>
      <p>Makassar, <?php echo $tgl." ".$bulan2." ".$tahun ?></p>
      <p>STMIK Handayani Makassar<br/>Ketua Jurusan <?php echo $tampil[0]['jurusan']; ?></p>
      <br />
      <br />
      <br />
      <br />
      <p class="nama"><?php echo $row['nama']; ?></p>
    </td>
  </tr>
</table>

<?php

// proses untuk menampilkan file pdf
$content = ob_get_clean();
include_once "../../vendors/html2pdf/html2pdf.class.php";
$html2pdf = new HTML2PDF('P', 'A4', 'en', 'utf-8');
$html2pdf->WriteHTML($content);
$html2pdf->Output('SK Pembimbing.pdf');

?>
