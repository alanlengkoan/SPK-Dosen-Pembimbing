<!-- untuk memanggil bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<!-- untuk memanggil menu dan pembagian uang kuliah -->
<?php include_once 'atribut/menu.php'; ?>

<div class="breadcrumbs">
  <div class="col-sm-4">
    <div class="page-header float-left">
      <div class="page-title">
        <h1>Tabel Perhitungan Hasil Kriteria</h1>
      </div>
    </div>
  </div>
</div>

<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Tabel Perhitungan Hasil Kriteria
          </div>
          <div class="card-body">

            <?php
            error_reporting(E_ALL^(E_NOTICE|E_WARNING));
            $query1 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B01'");
            $query2 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B02'");
            $query3 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B03'");
            $query4 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B04'");
            $query5 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B05'");
            $b1 = mysqli_fetch_array($query1);
            $b2 = mysqli_fetch_array($query2);
            $b3 = mysqli_fetch_array($query3);
            $b4 = mysqli_fetch_array($query4);
            $b5 = mysqli_fetch_array($query5);

            if (isset($_POST['simpan'])) {
              $nm_banding1 = $_POST['nm_banding1'];
              $nm_banding2 = $_POST['nm_banding2'];
              $nm_banding3 = $_POST['nm_banding3'];
              $nm_banding4 = $_POST['nm_banding4'];
              $nm_banding5 = $_POST['nm_banding5'];
              $nm_banding6 = $_POST['nm_banding6'];
              $nm_banding7 = $_POST['nm_banding7'];
              $nm_banding8 = $_POST['nm_banding8'];
              $nm_banding9 = $_POST['nm_banding9'];
              $nm_banding10 = $_POST['nm_banding10'];
            }

            // memasukan nilai banding dari database ke dalam variabel
              $k1 = $b1['nilai_banding'];
              $k2 = $b2['nilai_banding'];
              $k3 = $b3['nilai_banding'];
              $k4 = $b4['nilai_banding'];
              $k5 = $b5['nilai_banding'];

              // perhitungan baris dan kolom
              // baris Umur
              $bk11 = $k1;
              $bk12 = $nm_banding1;
              $bk13 = $nm_banding2;
              $bk14 = $nm_banding3;
              $bk15 = $nm_banding4;
              // baris ipk
              $bk21 = round($k2/$nm_banding1,2);
              $bk22 = $k2;
              $bk23 = $nm_banding5;
              $bk24 = $nm_banding6;
              $bk25 = $nm_banding7;
              // baris penghasilan ortu
              $bk31 = round($k3/$nm_banding2,2);
              $bk32 = round($k3/$nm_banding5,2);
              $bk33 = $k3;
              $bk34 = $nm_banding8;
              $bk35 = $nm_banding9;
              // baris semester
              $bk41 = round($k4/$nm_banding3,2);
              $bk42 = round($k4/$nm_banding6,2);
              $bk43 = round($k4/$nm_banding8,2);
              $bk44 = $k4;
              $bk45 = $nm_banding10;

              $bk51 = round($k4/$nm_banding4,2);
              $bk52 = round($k4/$nm_banding7,2);
              $bk53 = round($k4/$nm_banding9,2);
              $bk54 = round($k4/$nm_banding10,2);
              $bk55 = $k5;

              // perhitungan jumlah kolom
              $jk61 = $bk11+$bk21+$bk31+$bk41+$bk51;
              $jk62 = $bk12+$bk22+$bk32+$bk42+$bk52;
              $jk63 = $bk13+$bk23+$bk33+$bk43+$bk53;
              $jk64 = $bk14+$bk24+$bk34+$bk44+$bk54;
              $jk65 = $bk15+$bk25+$bk35+$bk45+$bk55;

              // perhitungan Priority Weight
              $pw11 = round($bk11/$jk61,2);
              $pw12 = round($bk12/$jk62,2);
              $pw13 = round($bk13/$jk63,2);
              $pw14 = round($bk14/$jk64,2);
              $pw15 = round($bk15/$jk65,2);

              $pw21 = round($bk21/$jk61,2);
              $pw22 = round($bk22/$jk62,2);
              $pw23 = round($bk23/$jk63,2);
              $pw24 = round($bk24/$jk64,2);
              $pw25 = round($bk25/$jk65,2);

              $pw31 = round($bk31/$jk61,2);
              $pw32 = round($bk32/$jk62,2);
              $pw33 = round($bk33/$jk63,2);
              $pw34 = round($bk34/$jk64,2);
              $pw35 = round($bk35/$jk65,2);

              $pw41 = round($bk41/$jk61,2);
              $pw42 = round($bk42/$jk62,2);
              $pw43 = round($bk43/$jk63,2);
              $pw44 = round($bk44/$jk64,2);
              $pw45 = round($bk45/$jk65,2);

              $pw51 = round($bk51/$jk61,2);
              $pw52 = round($bk52/$jk62,2);
              $pw53 = round($bk53/$jk63,2);
              $pw54 = round($bk54/$jk64,2);
              $pw55 = round($bk55/$jk65,2);

              // perhitungan jumlah baris PW
              $jb15 = $pw11+$pw12+$pw13+$pw14+$pw15;
              $jb25 = $pw21+$pw22+$pw23+$pw24+$pw25;
              $jb35 = $pw31+$pw32+$pw33+$pw34+$pw35;
              $jb45 = $pw41+$pw42+$pw43+$pw44+$pw45;
              $jb55 = $pw51+$pw52+$pw53+$pw54+$pw55;

              // jumlah baris di tambah kemudian dibagi sesuai jumlah kriteria
              $rata16 = round($jb15/5,2);
              $rata26 = round($jb25/5,2);
              $rata36 = round($jb35/5,2);
              $rata46 = round($jb45/5,2);
              $rata56 = round($jb55/5,2);

              // menghitung jumlah PW baris kolom
              $jpw51 = round($pw11+$pw21+$pw31+$pw41+$pw51);
              $jpw52 = round($pw12+$pw22+$pw32+$pw42+$pw52);
              $jpw53 = round($pw13+$pw23+$pw33+$pw43+$pw53);
              $jpw54 = round($pw14+$pw24+$pw34+$pw44+$pw54);
              $jpw55 = round($pw15+$pw25+$pw35+$pw45+$pw55);

              $jpw56 = $jb15+$jb25+$jb35+$jb45+$jb55;

              $jpw57 = round($rata16+$rata26+$rata36+$rata46+$rata56);

              $maks = round(($jk61*$rata16)+($jk62*$rata26)+($jk63*$rata36)+($jk64*$rata46)+($jk65*$rata56),3);
              // menentukan jumlah rows pada kriteria untuk Rasio Index

              $i = mysqli_query($koneksi, "SELECT * FROM tb_kriteria ORDER BY id_kriteria");
              $n = mysqli_num_rows($i);
              if ($n==1) {
                $rc = 0.00;
              }elseif ($n==2) {
                $rc = 0.00;
              }elseif ($n==3) {
                $rc = 0.58;
              }elseif ($n==4) {
                $rc = 0.90;
              }elseif ($n==5) {
                $rc = 1.12;
              }elseif ($n==6) {
                $rc = 1.24;
              }elseif ($n==7) {
                $rc = 1.32;
              }elseif ($n==8) {
                $rc = 1.41;
              } elseif ($n==9) {
                $rc = 1.45;
              } elseif ($n==10) {
                $rc = 1.49;
              } elseif ($n==11) {
                $rc = 1.51;
              }

              $ci    = round(($maks-$n)/($n-1),3);
              $cr    = round($ci/$rc,3);
              $sql   = "INSERT INTO pw_kriteria (id, pw1, pw2, pw3, pw4, pw5)
                        VALUES ('$id', '$rata16', '$rata26', '$rata36', '$rata46','$rata56')";
              $query = mysqli_query($koneksi, $sql) or die(mysqli_error());
            ?>

            <table class="table table-striped table-bordered">
              <thead>
                <thead>
                  <tr>
                    <th scope="col">Kriteria</th>
                    <th scope="col"><?php echo $b1['kriteria1']; ?></th>
                    <th scope="col"><?php echo $b2['kriteria1']; ?></th>
                    <th scope="col"><?php echo $b3['kriteria1']; ?></th>
                    <th scope="col"><?php echo $b4['kriteria1']; ?></th>
                    <th scope="col"><?php echo $b5['kriteria1']; ?></th>
                  </tr>
                </thead>
                <tbody>
                  <tr align="center">
                    <th><?php echo $b1['kriteria1']; ?></th>
                    <td><?php echo $bk11; ?></td>
                    <th><?php echo $bk12; ?></th>
                    <th><?php echo $bk13; ?></th>
                    <th><?php echo $bk14; ?></th>
                    <th><?php echo $bk15; ?></th>
                  </tr>
                  <tr align="center">
                    <th><?php echo $b2['kriteria1']; ?></th>
                    <td><?php echo $bk21; ?></td>
                    <td><?php echo $bk22; ?></td>
                    <td><?php echo $bk23; ?></td>
                    <td><?php echo $bk24; ?></td>
                    <td><?php echo $bk25; ?></td>
                  </tr>
                  <tr align="center">
                    <th><?php echo $b3['kriteria1']; ?></th>
                    <td><?php echo $bk31; ?></td>
                    <td><?php echo $bk32; ?></td>
                    <td><?php echo $bk33; ?></td>
                    <td><?php echo $bk34; ?></td>
                    <td><?php echo $bk35; ?></td>
                  </tr>
                  <tr align="center">
                    <th><?php echo $b4['kriteria1']; ?></th>
                    <td><?php echo $bk41; ?></td>
                    <td><?php echo $bk42; ?></td>
                    <td><?php echo $bk43; ?></td>
                    <td><?php echo $bk44; ?></td>
                    <td><?php echo $bk45; ?></td>
                  </tr>
                  <tr align="center">
                    <th><?php echo $b5['kriteria1']; ?></th>
                    <td><?php echo $bk51; ?></td>
                    <td><?php echo $bk52; ?></td>
                    <td><?php echo $bk53; ?></td>
                    <td><?php echo $bk54; ?></td>
                    <td><?php echo $bk55; ?></td>
                  </tr>
                  <tr align="center">
                    <th>Jumlah</th>
                    <th><?php echo $jk61; ?></th>
                    <th><?php echo $jk62; ?></th>
                    <th><?php echo $jk63; ?></th>
                    <th><?php echo $jk64; ?></th>
                    <th><?php echo $jk65; ?></th>
                  </tr>
                </tbody>
            </table>
            <br />
            <table class="table table-striped table-bordered">
              <thead>
                <thead>
                  <tr>
                    <th scope="col">Kriteria</th>
                    <th scope="col"><?php echo $b1['kriteria1']; ?></th>
                    <th scope="col"><?php echo $b2['kriteria1']; ?></th>
                    <th scope="col"><?php echo $b3['kriteria1']; ?></th>
                    <th scope="col"><?php echo $b4['kriteria1']; ?></th>
                    <th scope="col"><?php echo $b5['kriteria1']; ?></th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Prioritas Kriteria</th>
                  </tr>
                </thead>
                <tbody>
                  <tr align="center">
                    <th><?php echo $b1['kriteria1']; ?></th> <!-- baris Usia -->
                    <td><?php echo $pw11; ?></td>
                    <td><?php echo $pw12; ?></td>
                    <td><?php echo $pw13; ?></td>
                    <td><?php echo $pw14; ?></td>
                    <td><?php echo $pw15; ?></td>

                    <th><?php echo $jb15; ?></th>
                    <th><?php echo $rata16; ?></th>
                  </tr>
                  <tr align="center">
                    <th><?php echo $b2['kriteria1']; ?></th> <!-- baris ipk -->
                    <td><?php echo $pw21; ?></td>
                    <td><?php echo $pw22; ?></td>
                    <td><?php echo $pw23; ?></td>
                    <td><?php echo $pw24; ?></td>
                    <td><?php echo $pw25; ?></td>

                    <td><?php echo $jb25; ?></td>
                    <th><?php echo $rata26; ?></th>
                  </tr>
                  <tr align="center">
                    <th><?php echo $b3['kriteria1']; ?></th> <!-- baris peng ortu -->
                    <td><?php echo $pw31; ?></td>
                    <td><?php echo $pw32; ?></td>
                    <td><?php echo $pw33; ?></td>
                    <td><?php echo $pw34; ?></td>
                    <td><?php echo $pw35; ?></td>

                    <td><?php echo $jb35; ?></td>
                    <th><?php echo $rata36; ?></th>
                  </tr>
                  <tr align="center">
                    <th><?php echo $b4['kriteria1']; ?></th> <!-- baris semester -->
                    <td><?php echo $pw41; ?></td>
                    <td><?php echo $pw42; ?></td>
                    <td><?php echo $pw43; ?></td>
                    <td><?php echo $pw44; ?></td>
                    <td><?php echo $pw45; ?></td>

                    <td><?php echo $jb45; ?></td>
                    <td><?php echo $rata46; ?></td>
                  </tr>
                  <tr align="center">
                    <th><?php echo $b5['kriteria1']; ?></th> <!-- baris semester -->
                    <td><?php echo $pw51; ?></td>
                    <td><?php echo $pw52; ?></td>
                    <td><?php echo $pw53; ?></td>
                    <td><?php echo $pw54; ?></td>
                    <td><?php echo $pw55; ?></td>

                    <td><?php echo $jb55; ?></td>
                    <td><?php echo $rata56; ?></td>
                  </tr>
                  <tr align="center">
                    <th>Jumlah</th>
                    <td><?php echo $jpw51; ?></td>
                    <td><?php echo $jpw52; ?></td>
                    <td><?php echo $jpw53; ?></td>
                    <td><?php echo $jpw54; ?></td>
                    <td><?php echo $jpw55; ?></td>
                    <td><?php echo $jpw56; ?></td>
                  </tr>
                </tbody>
            </table>
            <br />
            <table class="table table-hover">
              <tbody>
                <tr>
                  <td><h4>&#955; Maks = <?php echo $maks; ?> </h4> </td>
                </tr>
                <tr>
                  <td><h4>CI = <?php echo $ci; ?> <= 0.1</h4></td>
                </tr>
                <tr>
                  <td><h4>CR = <?php echo $cr; ?></h4></td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once 'atribut/foot.php'; ?>
