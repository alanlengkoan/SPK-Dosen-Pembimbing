<?php
ob_start();
// untuk koneksi ke databases
include_once '../../database/koneksi.php';
// mengambil data berdasarkan id
$npm     = $_GET["npm"];
$sql     = "SELECT a.*, b.* FROM tb_trsbimbingan AS a INNER JOIN tb_datamhs AS b ON a.npm = b.npm WHERE a.npm = '$npm'";
$qe      = mysqli_query($koneksi, $sql);
$data    = mysqli_fetch_array($qe, MYSQLI_ASSOC);
$dos_pem = $data['dosen_pembimbing'];
$dat_dos = json_decode($dos_pem, true);
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

<h4 style="text-align: center;">SURAT KEPUTUSAN</h4>
<p style="text-align: center;">No: &nbsp;&nbsp;&nbsp; /STMIK-H/AK-4/<?php echo $bulan1; ?>/<?php echo $tahun; ?></p>
<br />
<p style="text-align: center;">
  TENTANG
  <br />
  PENGANKATAN TIM PEMBIMBING SKRIPSI & TUGAS AKHIR
  <br />
  STMIK HANDAYANI SEMESTER <?php echo $semester; ?> TAHUN AKADEMIK <?php echo $tampil[0]['tahun1']."-".$tampil[0]['tahun2']; ?>
</p>

<br />
<table align="center">
  <tr>
    <td width="600" align="justify">
      <h4>Pimpinan Sekolah Tinggi Manjemen Informatika & Komputer (STMIK) Handayani Makassar</h4>
    </td>
  </tr>
</table>
<br />
<table align="center">
  <tr>
    <td width="70" valign="top"> <br />Menimbang </td>
    <td valign="top"><br />:</td>
    <td width="500" align="justify">
      <ol>
        <li>
          Bahwa untuk kelancaran pelaksanaan Skripsi & Tugas Akhir mahasiswa STMIK Handayani <b> <u>Tahun Akademik 2018-2019.</u> </b> maka dirasa perlu untuk mengangkat Tim Pembimbing untuk memberikan bimbingan dan konsultasi dalam Penyusunan SKRIPSI / Tugas Akhir
        </li>
        <li>
          Bahwa Saudara yang namanya tercantum dalam Surat Keputusan ini dinilai mampu untuk menjalankan tugas sebagai Tim Pembimbing SKRIPSI/Tugas Akhir.
        </li>
      </ol>
    </td>
  </tr>
  <tr>
    <td width="70" valign="top"> <br />Mengingat</td>
    <td valign="top"><br />:</td>
    <td width="500" align="justify">
      <ol>
        <li>
          Peraturan Pemerintah Nomor 60 Tahun 1999 tentang Pendidikan Tinggi.
        </li>
        <li>
          Surat Keputusan Menteri Pendidikan Nasional R.I. Nomor : 184/U/2001, tentang Pengewasan, pengendalian dan pembinaan Program Diploma, Sarjana dan Pascasarjana.
        </li>
        <li>
          Statuta STMIK Handayani Makassar.
        </li>
      </ol>
    </td>
  </tr>
</table>

<h4 style="text-align: center; margin-bottom: 10px;">MEMUTUSKAN</h4>

<table align="center">
  <tr>
    <td width="70" valign="top">Pertama</td>
    <td valign="top">:</td>
    <td width="500" align="justify">
      Menunjuk Pembimbing I dan Pembimbing II sebagai Pembimbing skripsi saudara <b style="text-transform: uppercase;"><?php echo $data['nama_mahasiswa']; ?>, NPM <?php echo $data['npm']; ?></b> dengan judul skripsi <b><i><?php echo $data['judul']; ?></i></b> dengan pembimbing masing-masing :
      <ul>
        <li> <b><?php echo $dat_dos[0]['nama_dosen']; ?></b> Sebagai Pembimbing I </li>
        <li> <b><?php echo $dat_dos[1]['nama_dosen']; ?></b> Sebagai Pembimbing II </li>
      </ul>
    </td>
  </tr>
  <tr>
    <td width="70" valign="top">Kedua</td>
    <td valign="top">:</td>
    <td width="500" align="justify">
      Bahwa segala sesuatu yang berkaitan dengan honor/panggajian ditentukan berdasarkan peraturan yang berlaku pada STMIK Handayani Makassar.
    </td>
  </tr>
  <tr>
    <td width="70">Ketiga</td>
    <td>:</td>
    <td width="500" align="justify">
      Surat Keputusan ini berlaku sejak tanggal diterapkannya dan apabila ternyata dikemudian hari terdapat kekeliruan dalam Surat Keputusan ini, akan diadakan perbaikan sebagaimana mestinya.
    </td>
  </tr>
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
      <p class="nama"><?php echo $row['nama']; ?></p>
      <p>Ketua. I Bidang Akademik</p>
    </td>
  </tr>
</table>

<br /><br />
<br /><br />

<p>Tembusan kepada Yth :</p>
<ol>
  <li>Ketua Badan Pengurus Yayasan Pendidikan Handayani</li>
  <li>Arsip</li>
</ol>

<?php
// proses untuk menampilkan file pdf
$content = ob_get_clean();
include_once "../../vendors/html2pdf/html2pdf.class.php";
$html2pdf = new HTML2PDF('P', 'A4', 'en', 'utf-8');
$html2pdf->WriteHTML($content);
$html2pdf->Output('Laporan Data Penyakit.pdf');
?>
