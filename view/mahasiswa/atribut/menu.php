<aside id="left-panel" class="left-panel">
  <nav class="navbar navbar-expand-sm navbar-default">

    <div class="navbar-header">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand" href="./"><img src="../../images/logo.png" class="logo-stmikhd"></a>
    </div>

    <div id="main-menu" class="main-menu collapse navbar-collapse">
      <ul class="nav navbar-nav">

        <li>
          <a href="index.php"><i class="menu-icon fa fa-dashboard"></i> Beranda</a>
        </li>
        <li>
          <a href="mahasiswa_profil.php"><i class="menu-icon fa fa-user"></i> Profil Mahasiswa</a>
        </li>
        <li>
          <a href="skpembimbing.php"><i class="menu-icon fa fa-print"></i> SK Pembimbing</a>
        </li>

      </ul>
    </div>
  </nav>
</aside>

<!-- untuk menu bagian atas -->
<div id="right-panel" class="right-panel">
  <header id="header" class="header">
    <div class="header-menu">

      <div class="col-sm-7">
        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
      </div>

      <div class="col-sm-5">
        <div class="user-area dropdown float-right">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user user-avatar"></i> <?php echo $result['nama_mahasiswa'] ?>
          </a>

          <div class="user-menu dropdown-menu">
            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>
            <a class="nav-link" href="../logout.php"><i class="fa fa-power-off"></i> Logout</a>
          </div>
        </div>

      </div>

    </div>
  </header>
  <!-- untuk menu bagian atas -->
