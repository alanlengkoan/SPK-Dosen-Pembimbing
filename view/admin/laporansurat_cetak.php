<?php
ob_start();
include_once '../../database/koneksi.php';
$id     = $_GET['id'];
$sql    = "SELECT * FROM tb_suratlap WHERE id = '$id'";
$qry    = mysqli_query($koneksi, $sql);
$row    = mysqli_fetch_array($qry, MYSQLI_ASSOC);
$hasil  = $row['hasil'];
$tampil = json_decode($hasil, true);
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
<p style="text-align: center;">No: &nbsp;&nbsp;&nbsp; /STMIK-H/AK-4/<?php echo $tampil[0]['bulanromawi']; ?>/<?php echo $tampil[0]['tahun']; ?></p>
<br />
<h4 style="text-align: center;">
  TENTANG
  <br />
  PENGANKATAN TIM PEMBIMBING SKRIPSI & TUGAS AKHIR
  <br />
  STMIK HANDAYANI SEMESTER <?php echo $tampil[0]['semester']; ?> TAHUN AKADEMIK <?php echo $tampil[0]['tahun1']."-".$tampil[0]['tahun2']; ?>
</h4>

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
      Menunjuk Pembimbing I dan Pembimbing II sebagai Pembimbing skripsi saudara <b><?php echo $tampil[0]['nama']; ?>, NPM <?php echo $tampil[0]['npm']; ?></b> dengan judul skripsi <b><i><?php echo $tampil[0]['judul']; ?></i></b> dengan pembimbing masing-masing :
      <ul>
        <li> <b><?php echo $tampil[0]['nama_dosen']; ?></b> : Pembimbing 1 </li>
        <li> <b><?php echo $tampil[1]['nama_dosen']; ?></b> : Pembimbing 2 </li>
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
      <p>PADA TANGGAL&nbsp;&nbsp;: <?php echo $tampil[0]['tanggal']." ".$tampil[0]['bulanbiasa']." ".$tampil[0]['tahun'] ?></p>
      <br />
      <br />
      <br />
      <br />
      <p class="nama"><?php echo $tampil[0]['dosen']; ?></p>
      <p>Ketua. 1 Bidang Akademik</p>
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
$html2pdf->Output('SK Pembimbing.pdf');
?>
