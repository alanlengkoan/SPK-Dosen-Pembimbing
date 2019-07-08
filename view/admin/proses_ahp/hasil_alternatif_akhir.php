 <!-- untuk memanggil bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<!-- untuk memanggil menu -->
<?php include_once 'atribut/menu.php'; ?>

<div class="breadcrumbs">
  <div class="col-sm-4">
    <div class="page-header float-left">
      <div class="page-title">
        <h1>Tabel Perhitungan Hasil Alternatif</h1>
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

            <?php
              error_reporting(E_ALL^(E_NOTICE|E_WARNING));
              $query1 = mysqli_query($koneksi, "SELECT * FROM tb_perb_alternatif where id_alternatif='A01'");
              $query2 = mysqli_query($koneksi, "SELECT * FROM tb_perb_alternatif where id_alternatif='A02'");
              $query3 = mysqli_query($koneksi, "SELECT * FROM tb_perb_alternatif where id_alternatif='A03'");
              $query4 = mysqli_query($koneksi, "SELECT * FROM tb_perb_alternatif where id_alternatif='A04'");
              $query5 = mysqli_query($koneksi, "SELECT * FROM tb_perb_alternatif where id_alternatif='A05'");
              $b1     = mysqli_fetch_array($query1);
              $b2     = mysqli_fetch_array($query2);
              $b3     = mysqli_fetch_array($query3);
              $b4     = mysqli_fetch_array($query4);
              $b5     = mysqli_fetch_array($query5);
              $qk1    = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B01'");
              $qk2    = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B02'");
              $qk3    = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B03'");
              $qk4    = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B04'");
              $qk5    = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B05'");
              $bk1    = mysqli_fetch_array($qk1);
              $bk2    = mysqli_fetch_array($qk2);
              $bk3    = mysqli_fetch_array($qk3);
              $bk4    = mysqli_fetch_array($qk4);
              $bk5    = mysqli_fetch_array($qk5);

              // menghitung jumlah data pada table mhs untuk menentukan RC
        			$data = mysqli_query($koneksi, "SELECT * FROM tb_alternatif ORDER BY id_data");
        			$jml_data = mysqli_num_rows($data); //menentukan jumlah data yg ada pada tabel tbl_mhs
        			if ($jml_data==1) {
        				$rc = 0.00;
        			}elseif ($jml_data==2) {
        				$rc = 0.00;
        			}elseif ($jml_data==3) {
        				$rc = 0.58;
        			}elseif ($jml_data==4) {
        				$rc = 0.90;
        			}elseif ($jml_data==5) {
        				$rc = 1.12;
        			}elseif ($jml_data==6) {
        				$rc = 1.24;
        			}elseif ($jml_data==7) {
        				$rc = 1.32;
        			}elseif ($jml_data==8) {
        				$rc = 1.41;
        			} elseif ($jml_data==9) {
        				$rc = 1.45;
        			} elseif ($jml_data==10) {
        				$rc = 1.49;
        			} elseif ($jml_data==11) {
        				$rc = 1.51;
        			}

              if (isset($_POST['simpan'])) {
              // nilai banding kriteria 1
              $nb1 = $_POST['nb1'];
              $nb2 = $_POST['nb2'];
              $nb3 = $_POST['nb3'];
              $nb4 = $_POST['nb4'];
              $nb5 = $_POST['nb5'];
              $nb6 = $_POST['nb6'];
              $nb7 = $_POST['nb7'];
              $nb8 = $_POST['nb8'];
              $nb9 = $_POST['nb9'];
              $nb10 = $_POST['nb10'];
              // nilai banding kriteria 2
              $nb11 = $_POST['nb11'];
              $nb12 = $_POST['nb12'];
              $nb13 = $_POST['nb13'];
              $nb14 = $_POST['nb14'];
              $nb15 = $_POST['nb15'];
              $nb16 = $_POST['nb16'];
              $nb17 = $_POST['nb17'];
              $nb18 = $_POST['nb18'];
              $nb19 = $_POST['nb19'];
              $nb20 = $_POST['nb20'];
              // nilai banding kriteria 3
              $nb21 = $_POST['nb21'];
              $nb22 = $_POST['nb22'];
              $nb23 = $_POST['nb23'];
              $nb24 = $_POST['nb24'];
              $nb25 = $_POST['nb25'];
              $nb26 = $_POST['nb26'];
              $nb27 = $_POST['nb27'];
              $nb28 = $_POST['nb28'];
              $nb29 = $_POST['nb29'];
              $nb30 = $_POST['nb30'];
              // nilai banding kriteria 4
              $nb31 = $_POST['nb31'];
              $nb32 = $_POST['nb32'];
              $nb33 = $_POST['nb33'];
              $nb34 = $_POST['nb34'];
              $nb35 = $_POST['nb35'];
              $nb36 = $_POST['nb36'];
              $nb37 = $_POST['nb37'];
              $nb38 = $_POST['nb38'];
              $nb39 = $_POST['nb39'];
              $nb40 = $_POST['nb40'];
              // nilai banding kriteria 5
              $nb41 = $_POST['nb41'];
              $nb42 = $_POST['nb42'];
              $nb43 = $_POST['nb43'];
              $nb44 = $_POST['nb44'];
              $nb45 = $_POST['nb45'];
              $nb46 = $_POST['nb46'];
              $nb47 = $_POST['nb47'];
              $nb48 = $_POST['nb48'];
              $nb49 = $_POST['nb49'];
              $nb50 = $_POST['nb50'];
              }

              /*************************
              *          AWAL          *
              * PERHITUNGAN ALTERNATIF *
              *************************/
              $ti11 = $b1['nb_db'];$ti12 = $nb1;$ti13 = $nb2;$ti14 = $nb3;$ti15 = $nb4;
              // baris ke dua tabel ipk
              $ti21 = round($b2['nb_db']/$ti12,3);$ti22 = $b2['nb_db'];$ti23 = $nb5;$ti24 = $nb6;$ti25 = $nb7;
              // baris ke tiga table ipk
              $ti31 = round($b3['nb_db']/$ti13,3);$ti32 = round($b3['nb_db']/$ti23,3);$ti33 = $b3['nb_db'];$ti34 = $nb8;$ti35 = $nb9;
              // baris ke empat table ipk
              $ti41 = round($b4['nb_db']/$ti14,3);$ti42 = round($b4['nb_db']/$ti24,3);$ti43 = round($b4['nb_db']/$ti34,3);$ti44 = $b4['nb_db'];$ti45 = $nb10;
              // baris ke lima table ipk
              $ti51 = round($b5['nb_db']/$ti15,3);$ti52 = round($b5['nb_db']/$ti25,3);$ti53 = round($b5['nb_db']/$ti35,3);$ti54 = round($b5['nb_db']/$ti45,3);$ti55 = $b5['nb_db'];

              // penJumlahan kolom ipk
              $jki61 = $ti11+$ti21+$ti31+$ti41+$ti51; // kolom aribut pertma
              $jki62 = $ti12+$ti22+$ti32+$ti42+$ti52; // kolom aribut kedua
              $jki63 = $ti13+$ti23+$ti33+$ti43+$ti53; // kolom aribut ketiga
              $jki64 = $ti14+$ti24+$ti34+$ti44+$ti54; // kolom aribut keempat
              $jki65 = $ti15+$ti25+$ti35+$ti45+$ti55; // kolom aribut ke lima

              // Matrik pembobotan hirarki untik semua Atribut ipk pembbotanKriteriaIpk
              $pibk11 = round($ti11/$jki61,3);$pibk12 = round($ti12/$jki62,3);$pibk13 = round($ti13/$jki63,3);$pibk14 = round($ti14/$jki64,3);$pibk15 = round($ti15/$jki65,3);
              // baris ke dua
              $pibk21 = round($ti21/$jki61,3);$pibk22 = round($ti22/$jki62,3);$pibk23 = round($ti23/$jki63,3);$pibk24 = round($ti24/$jki64,3);$pibk25 = round($ti25/$jki65,3);
              // baris ke 3
              $pibk31 = round($ti31/$jki61,3);$pibk32 = round($ti32/$jki62,3);$pibk33 = round($ti33/$jki63,3);$pibk34 = round($ti34/$jki64,3);$pibk35 = round($ti35/$jki65,3);
              // baris ke4
              $pibk41 = round($ti41/$jki61,3);$pibk42 = round($ti42/$jki62,3);$pibk43 = round($ti43/$jki63,3);$pibk44 = round($ti44/$jki64,3);$pibk45 = round($ti45/$jki65,3);
              // baris ke5
              $pibk51 = round($ti51/$jki61,3);$pibk52 = round($ti52/$jki62,3);$pibk53 = round($ti53/$jki63,3);$pibk54 = round($ti54/$jki64,3);$pibk55 = round($ti55/$jki65,3);

              // menghitinga jumlah baris
              $jbi16 = $pibk11+$pibk12+$pibk13+$pibk14+$pibk15; // baris ke 1 kolom ke 6
              $jbi26 = $pibk21+$pibk22+$pibk23+$pibk24+$pibk25; // baris ke 2 kolom ke 6
              $jbi36 = $pibk31+$pibk32+$pibk33+$pibk34+$pibk35; // baris ke 3 kolom ke 6
              $jbi46 = $pibk41+$pibk42+$pibk43+$pibk44+$pibk45; // baris ke 4 kolom ke 6
              $jbi56 = $pibk51+$pibk52+$pibk53+$pibk54+$pibk55; // baris ke 5 kolom ke 6

              // menghiting pw Ipk membagi jumlah di bagi kolom
              $pwi16 = round($jbi16/$jml_data,3);
              $pwi26 = round($jbi26/$jml_data,3);
              $pwi36 = round($jbi36/$jml_data,3);
              $pwi46 = round($jbi46/$jml_data,3);
              $pwi56 = round($jbi56/$jml_data,3);

              // menghiting nilai maksimum
              // jumlah kolom di kali Prioritas Kriteria/ Priority Weight
              $imaks = round(($jki61*$pwi16)+($jki62*$pwi26)+($jki63*$pwi36)+($jki64*$pwi46)+($jki65*$pwi56),3);
              $ici   = round(($imaks-$jml_data)/($jml_data-1),3);
              $icr   = round($ici/$rc,3);
              /*************************
              *          AKHIR         *
              * PERHITUNGAN ALTERNATIF *
              *************************/

              // kriteria 2
              $tp11 = $b1['nb_db'];$tp12 = $nb11;$tp13 = $nb12;$tp14 = $nb13;$tp15 = $nb14;
              $tp21 = round($b2['nb_db']/$tp12,3);$tp22 = $b2['nb_db'];$tp23 = $nb15;$tp24 = $nb16;$tp25 = $nb17;
              $tp31 = round($b3['nb_db']/$tp13,3);$tp32 = round($b3['nb_db']/$tp23,3);$tp33 = $b3['nb_db'];$tp34 = $nb18;$tp35 = $nb19;
              $tp41 = round($b4['nb_db']/$tp14,3);$tp42 = round($b4['nb_db']/$tp24,3);$tp43 = round($b4['nb_db']/$tp34,3);$tp44 = $b4['nb_db'];$tp45 = $nb20;
              $tp51 = round($b5['nb_db']/$tp15,3);$tp52 = round($b5['nb_db']/$tp25,3);$tp53 = round($b5['nb_db']/$tp35,3);$tp54 = round($b5['nb_db']/$tp45,3);$tp55 = $b5['nb_db'];

              // penJumlahan kolom peng ortu
              $jkp61 = $tp11+$tp21+$tp31+$tp41+$tp51;
              $jkp62 = $tp12+$tp22+$tp32+$tp42+$tp52;
              $jkp63 = $tp13+$tp23+$tp33+$tp43+$tp53;
              $jkp64 = $tp14+$tp24+$tp34+$tp44+$tp54;
              $jkp65 = $tp15+$tp25+$tp35+$tp45+$tp55;

              // Matrik pembobotan hirarki untpk semua Atribut peng ortu pembbotanKriteriapeng ortu
              $ppbk11 = round($tp11/$jkp61,3);$ppbk12 = round($tp12/$jkp62,3);$ppbk13 = round($tp13/$jkp63,3);$ppbk14 = round($tp14/$jkp64,3);$ppbk15 = round($tp15/$jkp65,3);
              $ppbk21 = round($tp21/$jkp61,3);$ppbk22 = round($tp22/$jkp62,3);$ppbk23 = round($tp23/$jkp63,3);$ppbk24 = round($tp24/$jkp64,3);$ppbk25 = round($tp25/$jkp65,3);
              $ppbk31 = round($tp31/$jkp61,3);$ppbk32 = round($tp32/$jkp62,3);$ppbk33 = round($tp33/$jkp63,3);$ppbk34 = round($tp34/$jkp64,3);$ppbk35 = round($tp35/$jkp65,3);
              $ppbk41 = round($tp41/$jkp61,3);$ppbk42 = round($tp42/$jkp62,3);$ppbk43 = round($tp43/$jkp63,3);$ppbk44 = round($tp44/$jkp64,3);$ppbk45 = round($tp45/$jkp65,3);
              $ppbk51 = round($tp51/$jkp61,3);$ppbk52 = round($tp52/$jkp62,3);$ppbk53 = round($tp53/$jkp63,3);$ppbk54 = round($tp54/$jkp64,3);$ppbk55 = round($tp55/$jkp65,3);

              // menghitung jumlah baris
              $jbp16 = $ppbk11+$ppbk12+$ppbk13+$ppbk14+$ppbk15;
              $jbp26 = $ppbk21+$ppbk22+$ppbk23+$ppbk24+$ppbk25;
              $jbp36 = $ppbk31+$ppbk32+$ppbk33+$ppbk34+$ppbk35;
              $jbp46 = $ppbk41+$ppbk42+$ppbk43+$ppbk44+$ppbk45;
              $jbp56 = $ppbk51+$ppbk52+$ppbk53+$ppbk54+$ppbk55;

              // menghitpng pw peng ortu membagi jumlah baris di bagi jumlah data kolom alternatif pd database
              $pwp16 = round($jbp16/$jml_data,3);
              $pwp26 = round($jbp26/$jml_data,3);
              $pwp36 = round($jbp36/$jml_data,3);
              $pwp46 = round($jbp46/$jml_data,3);
              $pwp56 = round($jbp56/$jml_data,3);
              // menghitpng nilai maksimum
              // jumlah kolom di kali Prioritas Kriteria/ Priority Weight
              $pmaks = round(($jkp61*$pwp16)+($jkp62*$pwp26)+($jkp63*$pwp36)+($jkp64*$pwp46)+($jkp65*$pwp56),3);
              $pci = round(($pmaks-$jml_data)/($jml_data-1),3);
              $pcr = round($pci/$rc,3);
              // kriteria 2

              // kriteria 3
              $tt11 = $b1['nb_db'];$tt12 = $nb21;$tt13 = $nb22;$tt14 = $nb23;$tt15 = $nb24;
              $tt21 = round($b2['nb_db']/$tt12,3);$tt22 = $b2['nb_db'];$tt23 = $nb25;$tt24 = $nb26;$tt25 = $nb27;
              $tt31 = round($b3['nb_db']/$tt13,3);$tt32 = round($b3['nb_db']/$tt23,3);$tt33 = $b3['nb_db'];$tt34 = $nb28;$tt35 = $nb29;
              $tt41 = round($b4['nb_db']/$tt14,3);$tt42 = round($b4['nb_db']/$tt24,3);$tt43 = round($b4['nb_db']/$tt34,3);$tt44 = $b4['nb_db'];$tt45 = $nb30;
              $tt51 = round($b5['nb_db']/$tt15,3);$tt52 = round($b5['nb_db']/$tt25,3);$tt53 = round($b5['nb_db']/$tt35,3);$tt54 = round($b5['nb_db']/$tt45,3);$tt55 = $b5['nb_db'];

              // penJumlahan kolom tanggungan
              $jkt61 = $tt11+$tt21+$tt31+$tt41+$tt51;
              $jkt62 = $tt12+$tt22+$tt32+$tt42+$tt52;
              $jkt63 = $tt13+$tt23+$tt33+$tt43+$tt53;
              $jkt64 = $tt14+$tt24+$tt34+$tt44+$tt54;
              $jkt65 = $tt15+$tt25+$tt35+$tt45+$tt55;

              // Matrik pembobotan hirarki untuk semua Atribut TANGGUNGAN pembbotanKriteriaUsia
              $ptbk11 = round($tt11/$jkt61,3);$ptbk12 = round($tt12/$jkt62,3);$ptbk13 = round($tt13/$jkt63,3);$ptbk14 = round($tt14/$jkt64,3);$ptbk15 = round($tt15/$jkt65,3);
              $ptbk21 = round($tt21/$jkt61,3);$ptbk22 = round($tt22/$jkt62,3);$ptbk23 = round($tt23/$jkt63,3);$ptbk24 = round($tt24/$jkt64,3);$ptbk25 = round($tt25/$jkt65,3);
              $ptbk31 = round($tt31/$jkt61,3);$ptbk32 = round($tt32/$jkt62,3);$ptbk33 = round($tt33/$jkt63,3);$ptbk34 = round($tt34/$jkt64,3);$ptbk35 = round($tt35/$jkt65,3);
              $ptbk41 = round($tt41/$jkt61,3);$ptbk42 = round($tt42/$jkt62,3);$ptbk43 = round($tt43/$jkt63,3);$ptbk44 = round($tt44/$jkt64,3);$ptbk45 = round($tt45/$jkt65,3);
              $ptbk51 = round($tt51/$jkt61,3);$ptbk52 = round($tt52/$jkt62,3);$ptbk53 = round($tt53/$jkt63,3);$ptbk54 = round($tt54/$jkt64,3);$ptbk55 = round($tt55/$jkt65,3);

              // menghitunga jumlah baris
              $jbt16 = $ptbk11+$ptbk12+$ptbk13+$ptbk14+$ptbk15;
              $jbt26 = $ptbk21+$ptbk22+$ptbk23+$ptbk24+$ptbk25;
              $jbt36 = $ptbk31+$ptbk32+$ptbk33+$ptbk34+$ptbk35;
              $jbt46 = $ptbk41+$ptbk42+$ptbk43+$ptbk44+$ptbk45;
              $jbt56 = $ptbk51+$ptbk52+$ptbk53+$ptbk54+$ptbk55;

              // menghitung pw tanggungan membagi jumlah di bagi kolom
              $pwt16 = round($jbt16/$jml_data,3);
              $pwt26 = round($jbt26/$jml_data,3);
              $pwt36 = round($jbt36/$jml_data,3);
              $pwt46 = round($jbt46/$jml_data,3);
              $pwt56 = round($jbt56/$jml_data,3);
              // menghitung nilai maksimum
              // jumlah kolom di kali Prioritas Kriteria/ Priority Weight
              $umaks = round(($jkt61*$pwt16)+($jkt62*$pwt26)+($jkt63*$pwt36)+($jkt64*$pwt46)+($jkt65*$pwt56),3);
              $uci = round(($umaks-$jml_data)/($jml_data-1),3);
              $ucr = round($uci/$rc,3);
              // kriteria 3

              // kriteria 4
              $ts11 = $b1['nb_db'];$ts12 = $nb31;$ts13 = $nb32;$ts14 = $nb33;$ts15 = $nb34;
              $ts21 = round($b2['nb_db']/$ts12,3);$ts22 = $b2['nb_db'];$ts23 = $nb35;$ts24 = $nb36;$ts25 = $nb37;
              $ts31 = round($b3['nb_db']/$ts13,3);$ts32 = round($b3['nb_db']/$ts23,3);$ts33 = $b3['nb_db'];$ts34 = $nb38;$ts35 = $nb39;
              $ts41 = round($b4['nb_db']/$ts14,3);$ts42 = round($b4['nb_db']/$ts24,3);$ts43 = round($b4['nb_db']/$ts34,3);$ts44 = $b4['nb_db'];$ts45 = $nb40;
              $ts51 = round($b5['nb_db']/$ts15,3);$ts52 = round($b5['nb_db']/$ts25,3);$ts53 = round($b5['nb_db']/$ts35,3);$ts54 = round($b5['nb_db']/$ts45,3);$ts55 = $b5['nb_db'];

              // penJumlahan kolom semester
              $jks61 = $ts11+$ts21+$ts31+$ts41+$ts51;
              $jks62 = $ts12+$ts22+$ts32+$ts42+$ts52;
              $jks63 = $ts13+$ts23+$ts33+$ts43+$ts53;
              $jks64 = $ts14+$ts24+$ts34+$ts44+$ts54;
              $jks65 = $ts15+$ts25+$ts35+$ts45+$ts55;

              // Matrik pembobotan hirarki untsk semua Atribut semester pembbotanKriteriasemester
              $psbk11 = round($ts11/$jks61,3);$psbk12 = round($ts12/$jks62,3);$psbk13 = round($ts13/$jks63,3);$psbk14 = round($ts14/$jks64,3);$psbk15 = round($ts15/$jks65,3);
              $psbk21 = round($ts21/$jks61,3);$psbk22 = round($ts22/$jks62,3);$psbk23 = round($ts23/$jks63,3);$psbk24 = round($ts24/$jks64,3);$psbk25 = round($ts25/$jks65,3);
              $psbk31 = round($ts31/$jks61,3);$psbk32 = round($ts32/$jks62,3);$psbk33 = round($ts33/$jks63,3);$psbk34 = round($ts34/$jks64,3);$psbk35 = round($ts35/$jks65,3);
              $psbk41 = round($ts41/$jks61,3);$psbk42 = round($ts42/$jks62,3);$psbk43 = round($ts43/$jks63,3);$psbk44 = round($ts44/$jks64,3);$psbk45 = round($ts45/$jks65,3);
              $psbk51 = round($ts51/$jks61,3);$psbk52 = round($ts52/$jks62,3);$psbk53 = round($ts53/$jks63,3);$psbk54 = round($ts54/$jks64,3);$psbk55 = round($ts55/$jks65,3);

              // menghitung jumlah baris semester
              $jbs16 = $psbk11+$psbk12+$psbk13+$psbk14+$psbk15;
              $jbs26 = $psbk21+$psbk22+$psbk23+$psbk24+$psbk25;
              $jbs36 = $psbk31+$psbk32+$psbk33+$psbk34+$psbk35;
              $jbs46 = $psbk41+$psbk42+$psbk43+$psbk44+$psbk45;
              $jbs56 = $psbk51+$psbk52+$psbk53+$psbk54+$psbk55;

              // menghitsng pw semester membagi jumlah di bagi kolom
              $pws16 = round($jbs16/$jml_data,3);
              $pws26 = round($jbs26/$jml_data,3);
              $pws36 = round($jbs36/$jml_data,3);
              $pws46 = round($jbs46/$jml_data,3);
              $pws56 = round($jbs56/$jml_data,3);
              // menghitsng nilai maksimum
              // jumlah kolom di kali Prioritas Kriteria Priority Weight
              $smaks = round(($jks61*$pws16)+($jks62*$pws26)+($jks63*$pws36)+($jks64*$pws46)+($jks65*$pws56),3);
              $sci = round(($smaks-$jml_data)/($jml_data-1),3);
              $scr = round($sci/$rc,3);
              // kriteria 4

              // kriteria 5
              $tj11 = $b1['nb_db'];$tj12 = $nb41;$tj13 = $nb42;$tj14 = $nb43;$tj15 = $nb44;
              $tj21 = round($b2['nb_db']/$tj12,3);$tj22 = $b2['nb_db'];$tj23 = $nb45;$tj24 = $nb46;$tj25 = $nb47;
              $tj31 = round($b3['nb_db']/$tj13,3);$tj32 = round($b3['nb_db']/$tj23,3);$tj33 = $b3['nb_db'];$tj34 = $nb48;$tj35 = $nb49;
              $tj41 = round($b4['nb_db']/$tj14,3);$tj42 = round($b4['nb_db']/$tj24,3);$tj43 = round($b4['nb_db']/$tj34,3);$tj44 = $b4['nb_db'];$tj45 = $nb50;
              $tj51 = round($b5['nb_db']/$tj15,3);$tj52 = round($b5['nb_db']/$tj25,3);$tj53 = round($b5['nb_db']/$tj35,3);$tj54 = round($b5['nb_db']/$tj45,3);$tj55 = $b5['nb_db'];

              // penJumlahan kolom semester
              $jku61 = $tj11+$tj21+$tj31+$tj41+$tj51;
              $jku62 = $tj12+$tj22+$tj32+$tj42+$tj52;
              $jku63 = $tj13+$tj23+$tj33+$tj43+$tj53;
              $jku64 = $tj14+$tj24+$tj34+$tj44+$tj54;
              $jku65 = $tj15+$tj25+$tj35+$tj45+$tj55;

              // Matrik pembobotan hirarki untsk semua Atribut semester pembbotanKriteriasemester
              $pubk11 = round($tj11/$jku61,3);$pubk12 = round($tj12/$jku62,3);$pubk13 = round($tj13/$jku63,3);$pubk14 = round($tj14/$jku64,3);$pubk15 = round($tj15/$jku65,3);
              $pubk21 = round($tj21/$jku61,3);$pubk22 = round($tj22/$jku62,3);$pubk23 = round($tj23/$jku63,3);$pubk24 = round($tj24/$jku64,3);$pubk25 = round($tj25/$jku65,3);
              $pubk31 = round($tj31/$jku61,3);$pubk32 = round($tj32/$jku62,3);$pubk33 = round($tj33/$jku63,3);$pubk34 = round($tj34/$jku64,3);$pubk35 = round($tj35/$jku65,3);
              $pubk41 = round($tj41/$jku61,3);$pubk42 = round($tj42/$jku62,3);$pubk43 = round($tj43/$jku63,3);$pubk44 = round($tj44/$jku64,3);$pubk45 = round($tj45/$jku65,3);
              $pubk51 = round($tj51/$jku61,3);$pubk52 = round($tj52/$jku62,3);$pubk53 = round($tj53/$jku63,3);$pubk54 = round($tj54/$jku64,3);$pubk55 = round($tj55/$jku65,3);

              // menghitung jumlah baris semester
              $jbu16 = $pubk11+$pubk12+$pubk13+$pubk14+$pubk15;
              $jbu26 = $pubk21+$pubk22+$pubk23+$pubk24+$pubk25;
              $jbu36 = $pubk31+$pubk32+$pubk33+$pubk34+$pubk35;
              $jbu46 = $pubk41+$pubk42+$pubk43+$pubk44+$pubk45;
              $jbu56 = $pubk51+$pubk52+$pubk53+$pubk54+$pubk55;

              // menghitsng pw semester membagi jumlah di bagi kolom
              $pwu16 = round($jbu16/$jml_data,3);
              $pwu26 = round($jbu26/$jml_data,3);
              $pwu36 = round($jbu36/$jml_data,3);
              $pwu46 = round($jbu46/$jml_data,3);
              $pwu56 = round($jbu56/$jml_data,3);
              // menghitsng nilai maksimum
              // jumlah kolom di kali Prioritas Kriteria Priority Weight
              $tmaks = round(($jku61*$pwu16)+($jku62*$pwu26)+($jku63*$pwu36)+($jku64*$pwu46)+($jku65*$pwu56),3);
              $tci = round(($tmaks-$jml_data)/($jml_data-1),3);
              $tcr = round($tci/$rc,3);
              // kriteria 5
            ?>

            <form action="cetakhasilahp.php" method="post" target="_blank">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      Nama Mahasiswa
                    </div>
                    <div class="card-body">

                      <div class="row form-group">
                        <div class="col col-md-3">
                          <label for="text-input" class=" form-control-label">NPM</label>
                        </div>
                        <div class="col-12 col-md-9">
                          <input type="text" name="npm" value="<?php echo $_POST['inpnpm']; ?>" class="form-control" readonly="readonly">
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-md-3">
                          <label class=" form-control-label">Nama Mahasiswa</label>
                        </div>
                        <div class="col-12 col-md-9">
                          <input type="text" name="inpnamamhs" value="<?php echo $_POST['inpnamamhs']; ?>" readonly="readonly" class="form-control">
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-md-3">
                          <label class="form-control-label">Telepon</label>
                        </div>
                        <div class="col-12 col-md-9">
                          <input type="text" name="inptlp" value="<?php echo $_POST['inptlp']; ?>" readonly="readonly" class="form-control">
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-md-3">
                          <label class=" form-control-label">Jurusan</label>
                        </div>
                        <div class="col-12 col-md-9">
                          <input type="text" name="inpjurusan" value="<?php echo $_POST['inpjurusan']; ?>" readonly="readonly" class="form-control">
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-md-3">
                          <label class=" form-control-label">Judul</label>
                        </div>
                        <div class="col-12 col-md-9">
                          <input type="text" name="inpjudul" value="<?php echo $_POST['inpjudul']; ?>" readonly="readonly" class="form-control">
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-md-3">
                          <label class=" form-control-label">Tempat Penelitian</label>
                        </div>
                        <div class="col-12 col-md-9">
                          <input type="text" name="inptempatpenelitian" value="<?php echo $_POST['inptempatpenelitian']; ?>" readonly="readonly" class="form-control">
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="card bg-light mb-3">
                    <div class="card-header">
                      Hasil Alternatif Fungsional
                    </div>
                    <div class="card-body">

                      <table class="table table-bordered table-striped table-sm">
                        <thead>
                          <tr align="center">
                            <th>FUNGSIONAL</th>
                            <td><?php echo $b1['alternatif1']; ?></td>
                            <td><?php echo $b2['alternatif1']; ?></td>
                            <td><?php echo $b3['alternatif1']; ?></td>
                            <td><?php echo $b4['alternatif1']; ?></td>
                            <td><?php echo $b5['alternatif1']; ?></td>
                            <th>P.Weight</th>
                            <th>CR</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo $b1['alternatif1']; ?></td>
                            <td><?php echo $ti11; ?></td>
                            <td><?php echo $ti12; ?></td>
                            <td><?php echo $ti13; ?></td>
                            <td><?php echo $ti14; ?></td>
                            <td><?php echo $ti15; ?></td>
                            <td><?php echo $pwi16; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $b2['alternatif1']; ?></td>
                            <td><?php echo $ti21; ?></td>
                            <td><?php echo $ti22; ?></td>
                            <td><?php echo $ti23; ?></td>
                            <td><?php echo $ti24; ?></td>
                            <td><?php echo $ti25; ?></td>
                            <td><?php echo $pwi26; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $b3['alternatif1']; ?></td>
                            <td><?php echo $ti31; ?></td>
                            <td><?php echo $ti32; ?></td>
                            <td><?php echo $ti33; ?></td>
                            <td><?php echo $ti34; ?></td>
                            <td><?php echo $ti35; ?></td>
                            <td><?php echo $pwi36; ?></td>
                            <th><font color="red"><?php echo $icr; ?></font></th>
                          </tr>
                          <tr>
                            <td><?php echo $b4['alternatif1']; ?></td>
                            <td><?php echo $ti41; ?></td>
                            <td><?php echo $ti42; ?></td>
                            <td><?php echo $ti43; ?></td>
                            <td><?php echo $ti44; ?></td>
                            <td><?php echo $ti45; ?></td>
                            <td><?php echo $pwi46; ?></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td><?php echo $b5['alternatif1']; ?></td>
                            <td><?php echo $ti51; ?></td>
                            <td><?php echo $ti52; ?></td>
                            <td><?php echo $ti53; ?></td>
                            <td><?php echo $ti54; ?></td>
                            <td><?php echo $ti55; ?></td>
                            <td><?php echo $pwi56; ?></td>
                          </tr>
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="card bg-light mb-3">
                    <div class="card-header">
                      Hasil Alternatif Struktural
                    </div>
                    <div class="card-body">

                      <table class="table table-bordered table-striped table-sm">
                        <thead>
                          <tr align="center">
                            <th>STRUKTURAL</th>
                            <th><?php echo $b1['alternatif1']; ?></th>
                            <th><?php echo $b2['alternatif1']; ?></th>
                            <th><?php echo $b3['alternatif1']; ?></th>
                            <th><?php echo $b4['alternatif1']; ?></th>
                            <th><?php echo $b5['alternatif1']; ?></th>
                            <th>P.Weight</th>
                            <th>CR</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo $b1['alternatif1']; ?></td>
                            <td><?php echo $tp11; ?></td>
                            <td><?php echo $tp12; ?></td>
                            <td><?php echo $tp13; ?></td>
                            <td><?php echo $tp14; ?></td>
                            <td><?php echo $tp15; ?></td>
                            <td><?php echo $pwp16; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $b2['alternatif1']; ?></td>
                            <td><?php echo $tp21; ?></td>
                            <td><?php echo $tp22; ?></td>
                            <td><?php echo $tp23; ?></td>
                            <td><?php echo $tp24; ?></td>
                            <td><?php echo $tp25; ?></td>
                            <td><?php echo $pwp26; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $b3['alternatif1']; ?></td>
                            <td><?php echo $tp31; ?></td>
                            <td><?php echo $tp32; ?></td>
                            <td><?php echo $tp33; ?></td>
                            <td><?php echo $tp34; ?></td>
                            <td><?php echo $tp35; ?></td>
                            <td><?php echo $pwp36; ?></td>
                            <th><font color="red"><?php echo $pcr; ?></font></th>
                          </tr>
                          <tr>
                            <td><?php echo $b4['alternatif1']; ?></td>
                            <td><?php echo $tp41; ?></td>
                            <td><?php echo $tp42; ?></td>
                            <td><?php echo $tp43; ?></td>
                            <td><?php echo $tp44; ?></td>
                            <td><?php echo $tp45; ?></td>
                            <td><?php echo $pwp46; ?></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td><?php echo $b5['alternatif1']; ?></td>
                            <td><?php echo $tp51; ?></td>
                            <td><?php echo $tp52; ?></td>
                            <td><?php echo $tp53; ?></td>
                            <td><?php echo $tp54; ?></td>
                            <td><?php echo $tp55; ?></td>
                            <td><?php echo $pwp56; ?></td>
                          </tr>
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="card bg-light mb-3">
                    <div class="card-header">
                      Hasil Bidang Ilmu
                    </div>
                    <div class="card-body">

                      <table class="table table-bordered table-striped table-sm">
                        <thead>
                          <tr align="center">
                            <th>BIDANG ILMU</th>
                            <th><?php echo $b1['alternatif1']; ?></th>
                            <th><?php echo $b2['alternatif1']; ?></th>
                            <th><?php echo $b3['alternatif1']; ?></th>
                            <th><?php echo $b4['alternatif1']; ?></th>
                            <th><?php echo $b5['alternatif1']; ?></th>
                            <th>P.Weight</th>
                            <th>CR</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo $b1['alternatif1']; ?></td>
                            <td><?php echo $tt11; ?></td>
                            <td><?php echo $tt12; ?></td>
                            <td><?php echo $tt13; ?></td>
                            <td><?php echo $tt14; ?></td>
                            <td><?php echo $tt15; ?></td>
                            <td><?php echo $pwt16; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $b2['alternatif1']; ?></td>
                            <td><?php echo $tt21; ?></td>
                            <td><?php echo $tt22; ?></td>
                            <td><?php echo $tt23; ?></td>
                            <td><?php echo $tt24; ?></td>
                            <td><?php echo $tt25; ?></td>
                            <td><?php echo $pwt26; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $b3['alternatif1']; ?></td>
                            <td><?php echo $tt31; ?></td>
                            <td><?php echo $tt32; ?></td>
                            <td><?php echo $tt33; ?></td>
                            <td><?php echo $tt34; ?></td>
                            <td><?php echo $tt35; ?></td>
                            <td><?php echo $pwt36; ?></td>
                            <th><font color="red"><?php echo $ucr; ?></font></th>
                          </tr>
                          <tr>
                            <td><?php echo $b4['alternatif1']; ?></td>
                            <td><?php echo $tt41; ?></td>
                            <td><?php echo $tt42; ?></td>
                            <td><?php echo $tt43; ?></td>
                            <td><?php echo $tt44; ?></td>
                            <td><?php echo $tt45; ?></td>
                            <td><?php echo $pwt46; ?></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td><?php echo $b5['alternatif1']; ?></td>
                            <td><?php echo $tt51; ?></td>
                            <td><?php echo $tt52; ?></td>
                            <td><?php echo $tt53; ?></td>
                            <td><?php echo $tt54; ?></td>
                            <td><?php echo $tt55; ?></td>
                            <td><?php echo $pwt56; ?></td>
                          </tr>
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="card bg-light mb-3">
                    <div class="card-header">
                      Hasil Alternatif Penelitian Dosen
                    </div>
                    <div class="card-body">

                      <table class="table table-bordered table-striped table-sm">
                        <thead>
                          <tr align="center">
                            <th>PENELITIAN DOSEN</th>
                            <th><?php echo $b1['alternatif1']; ?></th>
                            <th><?php echo $b2['alternatif1']; ?></th>
                            <th><?php echo $b3['alternatif1']; ?></th>
                            <th><?php echo $b4['alternatif1']; ?></th>
                            <th><?php echo $b5['alternatif1']; ?></th>
                            <th>P.Weight</th>
                            <th>CR</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo $b1['alternatif1']; ?></td>
                            <td><?php echo $ts11; ?></td>
                            <td><?php echo $ts12; ?></td>
                            <td><?php echo $ts13; ?></td>
                            <td><?php echo $ts14; ?></td>
                            <td><?php echo $ts15; ?></td>
                            <td><?php echo $pws16; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $b2['alternatif1']; ?></td>
                            <td><?php echo $ts21; ?></td>
                            <td><?php echo $ts22; ?></td>
                            <td><?php echo $ts23; ?></td>
                            <td><?php echo $ts24; ?></td>
                            <td><?php echo $ts25; ?></td>
                            <td><?php echo $pws26; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $b3['alternatif1']; ?></td>
                            <td><?php echo $ts31; ?></td>
                            <td><?php echo $ts32; ?></td>
                            <td><?php echo $ts33; ?></td>
                            <td><?php echo $ts34; ?></td>
                            <td><?php echo $ts35; ?></td>
                            <td><?php echo $pws36; ?></td>
                            <th><font color="red"><?php echo $scr; ?></font></th>
                          </tr>
                          <tr>
                            <td><?php echo $b4['alternatif1']; ?></td>
                            <td><?php echo $ts41; ?></td>
                            <td><?php echo $ts42; ?></td>
                            <td><?php echo $ts43; ?></td>
                            <td><?php echo $ts44; ?></td>
                            <td><?php echo $ts45; ?></td>
                            <td><?php echo $pws46; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $b5['alternatif1']; ?></td>
                            <td><?php echo $ts51; ?></td>
                            <td><?php echo $ts52; ?></td>
                            <td><?php echo $ts53; ?></td>
                            <td><?php echo $ts54; ?></td>
                            <td><?php echo $ts55; ?></td>
                            <td><?php echo $pws56; ?></td>
                          </tr>
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="card bg-light mb-3">
                    <div class="card-header">
                      Hasil Alternatif Mahasiswa yang pernah dibimbing
                    </div>
                    <div class="card-body">

                      <table class="table table-bordered table-striped table-sm">
                        <thead>
                          <tr align="center">
                            <th>MAHASISWA YANG PERNAH DIBIMBING</th>
                            <th><?php echo $b1['alternatif1']; ?></th>
                            <th><?php echo $b2['alternatif1']; ?></th>
                            <th><?php echo $b3['alternatif1']; ?></th>
                            <th><?php echo $b4['alternatif1']; ?></th>
                            <th><?php echo $b5['alternatif1']; ?></th>
                            <th>P.Weight</th>
                            <th>CR</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo $b1['alternatif1']; ?></td>
                            <td><?php echo $tj11; ?></td>
                            <td><?php echo $tj12; ?></td>
                            <td><?php echo $tj13; ?></td>
                            <td><?php echo $tj14; ?></td>
                            <td><?php echo $tj15; ?></td>
                            <td><?php echo $pwu16; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $b2['alternatif1']; ?></td>
                            <td><?php echo $tj21; ?></td>
                            <td><?php echo $tj22; ?></td>
                            <td><?php echo $tj23; ?></td>
                            <td><?php echo $tj24; ?></td>
                            <td><?php echo $tj25; ?></td>
                            <td><?php echo $pwu26; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $b3['alternatif1']; ?></td>
                            <td><?php echo $tj31; ?></td>
                            <td><?php echo $tj32; ?></td>
                            <td><?php echo $tj33; ?></td>
                            <td><?php echo $tj34; ?></td>
                            <td><?php echo $tj35; ?></td>
                            <td><?php echo $pwu36; ?></td>
                            <th><font color="red"><?php echo $tcr; ?></font></th>
                          </tr>
                          <tr>
                            <td><?php echo $b4['alternatif1']; ?></td>
                            <td><?php echo $tj41; ?></td>
                            <td><?php echo $tj42; ?></td>
                            <td><?php echo $tj43; ?></td>
                            <td><?php echo $tj44; ?></td>
                            <td><?php echo $tj45; ?></td>
                            <td><?php echo $pwu46; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $b5['alternatif1']; ?></td>
                            <td><?php echo $tj51; ?></td>
                            <td><?php echo $tj52; ?></td>
                            <td><?php echo $tj53; ?></td>
                            <td><?php echo $tj54; ?></td>
                            <td><?php echo $tj55; ?></td>
                            <td><?php echo $pwu56; ?></td>
                          </tr>
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="card bg-light mb-3">
                    <div class="card-header">
                      Atribut
                    </div>
                    <div class="card-body">

                      <?php
                      $query = mysqli_query($koneksi, "SELECT * FROM pw_kriteria ORDER BY id DESC LIMIT 1");
                      $q_pw  = mysqli_fetch_array($query);
                      ?>
                      <table class="table table-bordered table-striped table-sm">
                        <tbody>
                          <tr>
                            <th rowspan="2"></th>
                            <th colspan="5"><center>ATRIBUTE</center></th>
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
                            <th><center>Atribute Weight</center></th>
                            <td><?php echo $q_pw['pw1']; ?></td>
                            <td><?php echo $q_pw['pw2']; ?></td>
                            <td><?php echo $q_pw['pw3']; ?></td>
                            <td><?php echo $q_pw['pw4']; ?></td>
                            <td><?php echo $q_pw['pw5']; ?></td>
                          </tr>
                          <tr>
                            <th><center>Alternatif</center></th>
                            <th colspan="5"></th>
                            <th></th>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b1['alternatif1']; ?></td>
                            <td><?php echo $pwi16; ?></td>
                            <td><?php echo $pwp16; ?></td>
                            <td><?php echo $pwt16; ?></td>
                            <td><?php echo $pws16; ?></td>
                            <td><?php echo $pwu16; ?></td>
                            <td><?php echo round(($q_pw['pw1']*$pwi16)+($q_pw['pw2']*$pwp16)+($q_pw['pw3']*$pwt16)+($q_pw['pw4']*$pws16)+($q_pw['pw5']*$pwu16),3); ?></td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b2['alternatif1']; ?></td>
                            <td><?php echo $pwi26; ?></td>
                            <td><?php echo $pwp26; ?></td>
                            <td><?php echo $pwt26; ?></td>
                            <td><?php echo $pws26; ?></td>
                            <td><?php echo $pwu26; ?></td>
                            <td><?php echo round(($q_pw['pw1']*$pwi26)+($q_pw['pw2']*$pwp26)+($q_pw['pw3']*$pwt26)+($q_pw['pw4']*$pws26)+($q_pw['pw5']*$pwu26),3); ?></td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b3['alternatif1']; ?></td>
                            <td><?php echo $pwi36; ?></td>
                            <td><?php echo $pwp36; ?></td>
                            <td><?php echo $pwt36; ?></td>
                            <td><?php echo $pws36; ?></td>
                            <td><?php echo $pwu36; ?></td>
                            <td><?php echo round(($q_pw['pw1']*$pwi36)+($q_pw['pw2']*$pwp36)+($q_pw['pw3']*$pwt36)+($q_pw['pw4']*$pws36)+($q_pw['pw5']*$pwu36),3); ?></td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b4['alternatif1']; ?></td>
                            <td><?php echo $pwi46; ?></td>
                            <td><?php echo $pwp46; ?></td>
                            <td><?php echo $pwt46; ?></td>
                            <td><?php echo $pws46; ?></td>
                            <td><?php echo $pwu46; ?></td>
                            <td><?php echo round(($q_pw['pw1']*$pwi46)+($q_pw['pw2']*$pwp46)+($q_pw['pw3']*$pwt46)+($q_pw['pw4']*$pws46)+($q_pw['pw5']*$pwu46),3); ?></td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b5['alternatif1']; ?></td>
                            <td><?php echo $pwi56; ?></td>
                            <td><?php echo $pwp56; ?></td>
                            <td><?php echo $pwt56; ?></td>
                            <td><?php echo $pws56; ?></td>
                            <td><?php echo $pwu56; ?></td>
                            <td><?php echo round(($q_pw['pw1']*$pwi56)+($q_pw['pw2']*$pwp56)+($q_pw['pw3']*$pwt56)+($q_pw['pw4']*$pws56)+($q_pw['pw5']*$pwu56),3); ?></td>
                          </tr>
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
              </div>

              <?php
              $hasil = array(
                [
                  'alternatif' => $b1['alternatif1'],
                  $pwi16,
                  $pwp16,
                  $pwt16,
                  $pws16,
                  $pwu16,
                  'evaluasi' => round(($q_pw['pw1']*$pwi16)+($q_pw['pw2']*$pwp16)+($q_pw['pw3']*$pwt16)+($q_pw['pw4']*$pws16)+($q_pw['pw5']*$pwu16), 3)
                ],
                [
                  'alternatif' => $b2['alternatif1'],
                  $pwi26,
                  $pwp26,
                  $pwt26,
                  $pws26,
                  $pwu26,
                  'evaluasi' => round(($q_pw['pw1']*$pwi26)+($q_pw['pw2']*$pwp26)+($q_pw['pw3']*$pwt26)+($q_pw['pw4']*$pws26)+($q_pw['pw5']*$pwu26),3)
                ],
                [
                  'alternatif' => $b3['alternatif1'],
                  $pwi36,
                  $pwp36,
                  $pwt36,
                  $pws36,
                  $pwu36,
                  'evaluasi' => round(($q_pw['pw1']*$pwi36)+($q_pw['pw2']*$pwp36)+($q_pw['pw3']*$pwt36)+($q_pw['pw4']*$pws36)+($q_pw['pw5']*$pwu36),3)
                ],
                [
                  'alternatif' => $b4['alternatif1'],
                  $pwi46,
                  $pwp46,
                  $pwt46,
                  $pws46,
                  $pwu46,
                  'evaluasi' => round(($q_pw['pw1']*$pwi46)+($q_pw['pw2']*$pwp46)+($q_pw['pw3']*$pwt46)+($q_pw['pw4']*$pws46)+($q_pw['pw5']*$pwu46),3)
                ],
                [
                  'alternatif' => $b5['alternatif1'],
                  $pwi56,
                  $pwp56,
                  $pwt56,
                  $pws56,
                  $pwu56,
                  'evaluasi' => round(($q_pw['pw1']*$pwi56)+($q_pw['pw2']*$pwp56)+($q_pw['pw3']*$pwt56)+($q_pw['pw4']*$pws56)+($q_pw['pw5']*$pwu56),3)
                ]
              );
              if (isset($_POST['simpan'])) {
                $hasil_akhir = json_encode($hasil);
                $npm         = $_POST['inpnpm'];
                $sql         = "UPDATE tb_datamhs SET hasil = '$hasil_akhir' WHERE npm = '$npm'";
                $query       = mysqli_query($koneksi, $sql);

                if ($query) {
                  // berhasil
                  echo "
                  <script>
                    alert('Berhasil!')
                  </script>
                  ";
                } else {
                  // gagal
                  echo "
                  <script>
                    alert('Data dengan NPM = ".$npm." gagal diubah!')
                    window.location=(href='hasil_alternatif.php')
                  </script>
                  ";
                }
              }
              ?>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input class="btn btn-success" type="submit" name="cetak" value="Cetak">
                  </div>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once 'atribut/foot.php'; ?>
