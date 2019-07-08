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
            $b1 = mysqli_fetch_array($query1);
            $b2 = mysqli_fetch_array($query2);
            $b3 = mysqli_fetch_array($query3);
            $b4 = mysqli_fetch_array($query4);
            $b5 = mysqli_fetch_array($query5);
            ?>

            <form action="hasil_alternatif_akhir.php" method="post">

              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      Nama Mahasiswa
                    </div>
                    <div class="card-body">

                      <div class="row form-group">
        								<div class="col col-md-3">
        									<label class="form-control-label">Nama / NPM</label>
        								</div>
        								<div class="col-12 col-md-9">
        									<input type="text" id="inpnpmnama" placeholder="Nama / NPM" required="required" class="form-control">
        								</div>
        							</div>
        							<div class="row form-group">
        								<div class="col col-md-3">
        									<label class=" form-control-label">NPM</label>
        								</div>
        								<div class="col-12 col-md-9">
        									<input type="text" name="inpnpm" id="outnpm" placeholder="NPM" required="required" readonly="readonly" class="form-control">
        								</div>
        							</div>
        							<div class="row form-group">
        								<div class="col col-md-3">
        									<label class="form-control-label">Nama Mahasiswa</label>
        								</div>
        								<div class="col-12 col-md-9">
        									<input type="text" name="inpnamamhs" id="outnamamhs" placeholder="Nama Mahasiswa" required="required" readonly="readonly" class="form-control">
        								</div>
        							</div>
        							<div class="row form-group">
        								<div class="col col-md-3">
        									<label class=" form-control-label">Telepon</label>
        								</div>
        								<div class="col-12 col-md-9">
        									<input type="text" name="inptlp" id="outtlp" placeholder="Telepon" required="required" readonly="readonly" class="form-control">
        								</div>
        							</div>
        							<div class="row form-group">
        								<div class="col col-md-3">
        									<label class=" form-control-label">Jurusan</label>
        								</div>
        								<div class="col-12 col-md-9">
        									<input type="text" name="inpjurusan" id="outjurusan" placeholder="Jurusan" required="required" readonly="readonly" class="form-control">
        								</div>
        							</div>
        							<div class="row form-group">
        								<div class="col col-md-3">
        									<label class=" form-control-label">Judul</label>
        								</div>
        								<div class="col-12 col-md-9">
        									<input type="text" name="inpjudul" id="outjudul" placeholder="Judul" readonly="readonly" class="form-control">
        								</div>
        							</div>
        							<div class="row form-group">
        								<div class="col col-md-3">
        									<label class=" form-control-label">Tempat Penelitian</label>
        								</div>
        								<div class="col-12 col-md-9">
        									<input type="text" name="inptempatpenelitian" id="outtempatpenelitian" placeholder="Tempat penelitian" required="required" readonly="readonly" class="form-control">
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
                      Hitung Kriteria Fungsional
                    </div>
                    <div class="card-body">

                      <table class="table table-bordered table-striped table-sm">
                        <thead>
                          <tr align="center">
                            <th>Alt</th>
                            <td><?php echo $b1['alternatif1']; ?></td>
                            <td><?php echo $b2['alternatif1']; ?></td>
                            <td><?php echo $b3['alternatif1']; ?></td>
                            <td><?php echo $b4['alternatif1']; ?></td>
                            <td><?php echo $b5['alternatif1']; ?></td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr align="center">
                            <td><?php echo $b1['alternatif1']; ?></td>
                            <td><?php echo $b1['nb_db']; ?></td>
                            <td>
                              <select class="form-control" name="nb1" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb2" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb3" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb4" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b2['alternatif1']; ?></td>
                            <td><font color="red">0</font></td>
                            <td><?php echo $b2['nb_db']; ?></td>
                            <td>
                              <select class="form-control" name="nb5" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb6" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb7" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b3['alternatif1']; ?></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><?php echo $b3['nb_db']; ?></td>
                            <td>
                              <select class="form-control" name="nb8" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb9" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b4['alternatif1']; ?></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><?php echo $b3['nb_db']; ?></td>
                            <td>
                              <select class="form-control" name="nb10" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b5['alternatif1']; ?></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><?php echo $b3['nb_db']; ?></td>
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
                      Hitung Kriteria Struktural
                    </div>
                    <div class="card-body">

                      <table class="table table-bordered table-striped table-sm">
                        <thead>
                          <tr align="center">
                            <th scope="col">Alt</th>
                            <td scope="col"><?php echo $b1['alternatif1']; ?></td>
                            <td scope="col"><?php echo $b2['alternatif1']; ?></td>
                            <td scope="col"><?php echo $b3['alternatif1']; ?></td>
                            <td scope="col"><?php echo $b4['alternatif1']; ?></td>
                            <td scope="col"><?php echo $b5['alternatif1']; ?></td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr align="center">
                            <td><?php echo $b1['alternatif1']; ?></td>
                            <td><?php echo $b1['nb_db']; ?></td>
                            <td>
                              <select class="form-control" name="nb11" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb12" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb13" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb14" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b2['alternatif1']; ?></td>
                            <td><font color="red">0</font></td>
                            <td><?php echo $b2['nb_db']; ?></td>
                            <td>
                              <select class="form-control" name="nb15" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb16" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb17" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b3['alternatif1']; ?></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><?php echo $b3['nb_db']; ?></td>
                            <td>
                              <select class="form-control" name="nb18" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb19" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b4['alternatif1']; ?></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><?php echo $b3['nb_db']; ?></td>
                            <td>
                              <select class="form-control" name="nb20" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b5['alternatif1']; ?></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><?php echo $b3['nb_db']; ?></td>
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
                      Hitung Bidang Ilmu
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered table-striped table-sm">
                        <thead>
                          <tr align="center">
                            <th scope="col">Alt</th>
                            <td scope="col"><?php echo $b1['alternatif1']; ?></td>
                            <td scope="col"><?php echo $b2['alternatif1']; ?></td>
                            <td scope="col"><?php echo $b3['alternatif1']; ?></td>
                            <td scope="col"><?php echo $b4['alternatif1']; ?></td>
                            <td scope="col"><?php echo $b5['alternatif1']; ?></td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr align="center">
                            <td><?php echo $b1['alternatif1']; ?></td>
                            <td><?php echo $b1['nb_db']; ?></td>
                            <td>
                              <select class="form-control" name="nb21" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb22" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb23" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb24" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b2['alternatif1']; ?></td>
                            <td><font color="red">0</font></td>
                            <td><?php echo $b2['nb_db']; ?></td>
                            <td>
                              <select class="form-control" name="nb25" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb26" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb27" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b3['alternatif1']; ?></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><?php echo $b3['nb_db']; ?></td>
                            <td>
                              <select class="form-control" name="nb28" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb29" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b4['alternatif1']; ?></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><?php echo $b3['nb_db']; ?></td>
                            <td>
                              <select class="form-control" name="nb30" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b5['alternatif1']; ?></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><?php echo $b3['nb_db']; ?></td>
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
                      Hitung Alternatif Penelitian Dosen
                    </div>
                    <div class="card-body">

                      <table class="table table-bordered table-striped table-sm">
                        <thead>
                          <tr align="center">
                            <th scope="col">Alt</th>
                            <td scope="col"><?php echo $b1['alternatif1']; ?></td>
                            <td scope="col"><?php echo $b2['alternatif1']; ?></td>
                            <td scope="col"><?php echo $b3['alternatif1']; ?></td>
                            <td scope="col"><?php echo $b4['alternatif1']; ?></td>
                            <td scope="col"><?php echo $b5['alternatif1']; ?></td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr align="center">
                            <td><?php echo $b1['alternatif1']; ?></td>
                            <td><?php echo $b1['nb_db']; ?></td>
                            <td>
                              <select class="form-control" name="nb31" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb32" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb33" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb34" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b2['alternatif1']; ?></td>
                            <td><font color="red">0</font></td>
                            <td><?php echo $b2['nb_db']; ?></td>
                            <td>
                              <select class="form-control" name="nb35" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb36" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb37" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b3['alternatif1']; ?></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><?php echo $b3['nb_db']; ?></td>
                            <td>
                              <select class="form-control" name="nb38" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb39" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b4['alternatif1']; ?></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><?php echo $b3['nb_db']; ?></td>
                            <td>
                              <select class="form-control" name="nb40" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b5['alternatif1']; ?></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><?php echo $b3['nb_db']; ?></td>
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
                      Hitung Alternatif Mahasiswa yang pernah dibimbing
                    </div>
                    <div class="card-body">

                      <table class="table table-bordered table-striped table-sm">
                        <thead>
                          <tr align="center">
                            <th scope="col">Alt</th>
                            <td scope="col"><?php echo $b1['alternatif1']; ?></td>
                            <td scope="col"><?php echo $b2['alternatif1']; ?></td>
                            <td scope="col"><?php echo $b3['alternatif1']; ?></td>
                            <td scope="col"><?php echo $b4['alternatif1']; ?></td>
                            <td scope="col"><?php echo $b5['alternatif1']; ?></td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr align="center">
                            <td><?php echo $b1['alternatif1']; ?></td>
                            <td><?php echo $b1['nb_db']; ?></td>
                            <td>
                              <select class="form-control" name="nb41" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb42" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb43" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb44" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b2['alternatif1']; ?></td>
                            <td><font color="red">0</font></td>
                            <td><?php echo $b2['nb_db']; ?></td>
                            <td>
                              <select class="form-control" name="nb45" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb46" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb47" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b3['alternatif1']; ?></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><?php echo $b3['nb_db']; ?></td>
                            <td>
                              <select class="form-control" name="nb48" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="nb49" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b4['alternatif1']; ?></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><?php echo $b3['nb_db']; ?></td>
                            <td>
                              <select class="form-control" name="nb50" required="required">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                            </td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b5['alternatif1']; ?></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><font color="red">0</font></td>
                            <td><?php echo $b3['nb_db']; ?></td>
                          </tr>
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input class="btn btn-success" type="submit" name="simpan" value="Proses">
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

<script type="text/javascript">

  $(document).ready(function () {
    $("#inpnpmnama").autocomplete({
			source: function (request, response) {
				$.ajax({
					method: 'get',
					url: '../ajak_cek2.php',
					dataType: 'json',
					data: {
						term: request.term
					},
					success: function (data) {
						response($.map(data, function (item) {
							return {
								label:"NPM " + item.npm + ", Nama " + item.nama_mahasiswa,
								npm:item.npm,
								nama_mahasiswa:item.nama_mahasiswa,
								tlp:item.tlp,
								jurusan:item.jurusan,
								judul:item.judul,
								tempat_penelitian:item.tempat_penelitian
							};
						}));
					}
				});
			},
			select: function (event, ui) {
				$('#outnpm').val(ui.item.npm);
				$('#outnamamhs').val(ui.item.nama_mahasiswa);
				$('#outtlp').val(ui.item.tlp);
				$('#outjurusan').val(ui.item.jurusan);
				$('#outjudul').val(ui.item.judul);
				$('#outtempatpenelitian').val(ui.item.tempat_penelitian);
			}
		});
  });

</script>
