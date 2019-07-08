<?php
ob_start();
// untuk koneksi ke databases
include_once '../../../database/koneksi.php';
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
        <img src="../../../images/logo.png" alt="Logo STMIK Handayani Makassar" style="width: 70p; height: 70px;">
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

<table>
  <tr>
    <td width="150">NPM</td>
    <td>:</td>
    <td><?php echo $_POST['npm']; ?></td>
  </tr>
  <tr>
    <td width="150">Nama Mahasiswa</td>
    <td>:</td>
    <td><?php echo $_POST['inpnamamhs']; ?></td>
  </tr>
  <tr>
    <td width="150">Telepon</td>
    <td>:</td>
    <td><?php echo $_POST['inptlp']; ?></td>
  </tr>
  <tr>
    <td width="150">Jurusan</td>
    <td>:</td>
    <td><?php echo $_POST['inpjurusan']; ?></td>
  </tr>
  <tr>
    <td width="150">Judul</td>
    <td>:</td>
    <td><?php echo $_POST['inpjudul']; ?></td>
  </tr>
  <tr>
    <td width="150">Tempat Penelitian</td>
    <td>:</td>
    <td><?php echo $_POST['inptempatpenelitian']; ?></td>
  </tr>
</table>

<?php
$query1 = mysqli_query($koneksi, "SELECT * FROM tb_perb_alternatif where id_alternatif='A01'");
$query2 = mysqli_query($koneksi, "SELECT * FROM tb_perb_alternatif where id_alternatif='A02'");
$query3 = mysqli_query($koneksi, "SELECT * FROM tb_perb_alternatif where id_alternatif='A03'");
$query4 = mysqli_query($koneksi, "SELECT * FROM tb_perb_alternatif where id_alternatif='A04'");
$query5 = mysqli_query($koneksi, "SELECT * FROM tb_perb_alternatif where id_alternatif='A05'");
$b1 = mysqli_fetch_array($query1);
$b2 = mysqli_fetch_array($query2);
$b3 = mysqli_fetch_array($query3);
$b4 = mysqli_fetch_array($query4);
$b5 = mysqli_fetch_array($query5);
$qk1 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B01'");
$qk2 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B02'");
$qk3 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B03'");
$qk4 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B04'");
$qk5 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B05'");
$bk1 = mysqli_fetch_array($qk1);
$bk2 = mysqli_fetch_array($qk2);
$bk3 = mysqli_fetch_array($qk3);
$bk4 = mysqli_fetch_array($qk4);
$bk5 = mysqli_fetch_array($qk5);

$query = mysqli_query($koneksi, "SELECT * FROM pw_kriteria ORDER BY id DESC LIMIT 1");
$q_pw  = mysqli_fetch_array($query);
?>
<br />
<table border="1" align="center">
  <thead>
    <tr>
      <th rowspan="2"></th>
      <th colspan="5">ATRIBUTE</th>
      <th rowspan="3">Alt. Weight Evaluation</th>
    </tr>
    <tr align="center">
      <th><?php echo $bk1['kriteria1']; ?></th>
      <th><?php echo $bk2['kriteria1']; ?></th>
      <th><?php echo $bk3['kriteria1']; ?></th>
      <th><?php echo $bk4['kriteria1']; ?></th>
      <th><?php echo $bk5['kriteria1']; ?></th>
    </tr>
    <tr align="center">
      <th>Atribute Weight</th>
      <td><?php echo $q_pw['pw1']; ?></td>
      <td><?php echo $q_pw['pw2']; ?></td>
      <td><?php echo $q_pw['pw3']; ?></td>
      <td><?php echo $q_pw['pw4']; ?></td>
      <td><?php echo $q_pw['pw5']; ?></td>
    </tr>
    <tr>
      <th>Alternatif</th>
      <th colspan="5"></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php

    $sql   = "SELECT * FROM tb_datamhs WHERE npm = '$_POST[npm]'";
    $query = mysqli_query($koneksi, $sql);

    while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
      $hasil_akhir = $result['hasil'];
      $data = json_decode($hasil_akhir, true);

      foreach ($data as $key => $value) {
        echo "<tr>";
        echo "<td>".$value['alternatif']."</td>";
        echo "<td>".$value[0]."</td>";
        echo "<td>".$value[1]."</td>";
        echo "<td>".$value[2]."</td>";
        echo "<td>".$value[3]."</td>";
        echo "<td>".$value[4]."</td>";
        echo "<td>".$value['evaluasi']."</td>";
        echo "</tr>";
      }

    }

     ?>
  </tbody>
</table>

<?php
// proses untuk menampilkan file pdf
$content = ob_get_clean();
include_once "../../../vendors/html2pdf/html2pdf.class.php";
$html2pdf = new HTML2PDF('L', 'A4', 'en', 'utf-8');
$html2pdf->WriteHTML($content);
$html2pdf->Output('Hasil Saran Pembimbing.pdf');
?>
