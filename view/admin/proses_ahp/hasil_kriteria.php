<?php error_reporting(E_ALL^(E_NOTICE|E_WARNING)); ?>
<!-- untuk memanggil bagian atas -->
<?php include_once 'atribut/head.php'; ?>
<!-- untuk memanggil menu -->
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
          <div class="card-body">

            <?php
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
            ?>

            <form action="hasil_kriteria_akhir.php" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body">
                      <table class="table table-striped table-bordered table-sm">
                        <thead>
                          <tr>
                            <th>Kriteria</th>
                            <th scope="col"><?php echo $b1['kriteria1']; ?></th>
                            <th scope="col"><?php echo $b2['kriteria1']; ?></th>
                            <th scope="col"><?php echo $b3['kriteria1']; ?></th>
                            <th scope="col"><?php echo $b4['kriteria1']; ?></th>
                            <th scope="col"><?php echo $b5['kriteria1']; ?></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th><?php echo $b1['kriteria1']; ?></th> <!-- Baris Umur -->
                            <td align="center"><?php echo $b1['nilai_banding']; ?></td>
                            <td>
                              <select class="form-control" name="nm_banding1" required="required">
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
                              <select class="form-control" name="nm_banding2" required="required">
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
                              <select class="form-control" name="nm_banding3" required="required">
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
                              <select class="form-control" name="nm_banding4" required="required">
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

                          <tr>
                            <th><?php echo $b2['kriteria1']; ?></th> <!-- Baris Umur -->
                            <td align="center"><font color="red">0</font></td>
                            <td align="center"><?php echo $b2['nilai_banding']; ?></td>
                            <td>
                              <select class="form-control" name="nm_banding5" required="required">
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
                              <select class="form-control" name="nm_banding6" required="required">
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
                              <select class="form-control" name="nm_banding7" required="required">
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

                          <tr>
                            <th><?php echo $b3['kriteria1']; ?></th> <!-- Baris IPK -->
                            <td align="center"><font color="red">0</font></td>
                            <td align="center"><font color="red">0</font></td>
                            <td align="center"><?php echo $b3['nilai_banding']; ?></td>
                            <td>
                              <select class="form-control" name="nm_banding8" required="required">
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
                              <select class="form-control" name="nm_banding9" required="required">
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

                          <tr>
                            <th><?php echo $b4['kriteria1']; ?></th> <!-- baris Penghasilan Orangtua -->
                            <td align="center"><font color="red">0</font></td>
                            <td align="center"><font color="red">0</font></td>
                            <td align="center"><font color="red">0</font></td>
                            <td align="center"><?php echo $b4['nilai_banding']; ?></td>
                            <td>
                              <select class="form-control" name="nm_banding10" required="required">
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

                          <tr>
                            <th><?php echo $b5['kriteria1']; ?></th> <!-- baris semester -->
                            <td align="center"><font color="red">0</font></td>
                            <td align="center"><font color="red">0</font></td>
                            <td align="center"><font color="red">0</font></td>
                            <td align="center"><font color="red">0</font></td>
                            <td colspan="3" align="center"><?php echo $b5['nilai_banding']; ?></td>
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
