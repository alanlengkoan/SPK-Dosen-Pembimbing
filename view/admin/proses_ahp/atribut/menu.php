<aside id="left-panel" class="left-panel">
  <nav class="navbar navbar-expand-sm navbar-default">

    <div class="navbar-header">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand" href="./"><img src="../../../images/logo.png" class="logo-stmikhd"></a>
    </div>

    <div id="main-menu" class="main-menu collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li>
          <a href="../index.php"><i class="menu-icon fa fa-dashboard"></i> Beranda</a>
        </li>
        <li class="menu-item-has-children dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-folder-open-o"></i>Data Dosen</a>
          <ul class="sub-menu children dropdown-menu">
            <li>
              <i class="menu-icon fa fa-group"></i><a href="../dados.php">Dosen</a>
            </li>
            <li>
              <i class="menu-icon fa fa-male"></i><a href="../jafung.php">Jabatan Fungsional</a>
            </li>
            <li>
              <i class="menu-icon fa fa-male"></i><a href="../jstruktural.php">Jabatan Struktural</a>
            </li>
            <li>
              <i class="menu-icon fa fa-book"></i><a href="../bidangilmu.php">Bidang Ilmu</a>
            </li>
            <li>
              <i class="menu-icon fa fa-th"></i><a href="../golongan.php">Golongan</a>
            </li>
          </ul>
        </li>

        <li class="menu-item-has-children dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-folder-open-o"></i>Data Mahasiswa</a>
          <ul class="sub-menu children dropdown-menu">
            <li>
              <i class="menu-icon fa fa-users"></i><a href="../dtmhs.php">Mahasiswa</a>
            </li>
            <li>
              <i class="menu-icon fa fa-graduation-cap"></i><a href="../jurusan.php">Jurusan</a>
            </li>
          </ul>
        </li>

        <li class="menu-item-has-children dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-refresh"></i>Proses AHP</a>
          <ul class="sub-menu children dropdown-menu">
            <li>
              <i class="menu-icon fa fa-file-text"></i><a href="kriteria.php">Kriteria</a>
            </li>
            <li>
              <i class="menu-icon fa fa-file-text-o"></i><a href="alternatif.php">Alternatif</a>
            </li>
            <li>
              <i class="menu-icon fa fa-gear"></i><a href="analisa_kriteria.php">Analisa Kriteria</a>
            </li>
            <li>
              <i class="menu-icon fa fa-gear"></i><a href="analisa_alternatif.php">Analisa Alternatif</a>
            </li>
            <li>
              <i class="menu-icon fa fa-gears"></i><a href="hasil_kriteria.php">Hasil Kriteria</a>
            </li>
            <li>
              <i class="menu-icon fa fa-gears"></i><a href="hasil_alternatif.php">Hasil Alternatif</a>
            </li>
          </ul>
        </li>

        <li>
          <a href="../trsbim.php"><i class="menu-icon fa fa-tags"></i> Transaksi Bimbingan</a>
        </li>

        <li class="menu-item-has-children dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-print"></i> Surat</a>
          <ul class="sub-menu children dropdown-menu">
            <li>
              <i class="menu-icon fa fa-file-text"></i><a href="../skpembimbing.php">Surat Keputusan</a>
            </li>
            <li>
              <i class="menu-icon fa fa-file-text"></i><a href="../spenguji.php">Undangan Penguji</a>
            </li>
          </ul>
        </li>

        <li class="menu-item-has-children dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-print"></i> Laporan</a>
          <ul class="sub-menu children dropdown-menu">
            <li>
              <i class="menu-icon fa fa-file-text"></i><a href="../laporandosen.php">Data Dosen</a>
            </li>
            <li>
              <i class="menu-icon fa fa-file-text"></i><a href="../laporanmahasiswa.php">Data Mahasiswa</a>
            </li>
            <li>
              <i class="menu-icon fa fa-file-text"></i><a href="../laporansurat.php">Data Surat Pembimbing</a>
            </li>
          </ul>
        </li>

      </ul>
    </div>
  </nav>
</aside>

<!-- bagian kanan -->
<div id="right-panel" class="right-panel">
  <header id="header" class="header">
    <div class="header-menu">

      <div class="col-sm-7">
        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
      </div>

      <div class="col-sm-5">
        <div class="user-area dropdown float-right">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user user-avatar"></i> <?php echo $_SESSION["inpnpm"]; ?>
          </a>

          <div class="user-menu dropdown-menu">
            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>
            <a class="nav-link" href="../../logout.php"><i class="fa fa-power-off"></i> Logout</a>
          </div>
        </div>

      </div>
    </div>
  </header>
