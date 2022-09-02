    <section class="content">
    	<div class="container-fluid">
    		<div class="row">
    			<!-- left column -->
    			<div class="col-md-10 mt-3">
    				<!-- batas -->

    				<div class="card card-primary">
    					<div class="card-header">
    						<h3 class="card-title">Form Input Data Nilai</h3>
    					</div>
    					<!-- /.card-header -->
    					<!-- form start -->
    					<form action="" method="POST">
    						<div class="card-body">
    							<div class="form-group">
    								<label for="">Nama Siswa</label>
									<select name="id_siswa" id="id_siswa" class="form-control">
									<?php
    									include 'koneksi.php';

										$query_tampil = mysqli_query($koneksi,"SELECT tb_siswa.*, tb_kelas.* FROM tb_siswa LEFT JOIN tb_kelas ON tb_siswa.`kd_kelas` = tb_kelas.`id_kelas` WHERE tb_kelas.id_kelas IN (SELECT tb_kelas_mapel.id_kelas FROM tb_kelas_mapel WHERE tb_kelas_mapel.id_guru='$_SESSION[id_guru]') ORDER BY tb_kelas.id_kelas ASC");
										while ($data = mysqli_fetch_array($query_tampil)) {
											echo '<option value="'.$data['id_siswa'].'">'.$data['nama'].' - Kls. '.$data['id_kelas'].'</option>';
										} 
									?>
									</select>
    								<!-- <input type="text" name="nama_siswa" class="form-control" id="" placeholder="Masukan Nama " required> -->
    							</div>
    							
    							<div class="form-group">
    								<label for="">KKM</label>
    								<input type="text" name="kkm" class="form-control" id="" placeholder="Masukan kkm" required>
    							</div>

                                <div class="form-group">
                                    <label for="">Nilai</label>
                                    <input type="text" name="nilai" class="form-control" id="" placeholder="Masukan Nilai" required>
                                </div>

                                  <div class="form-group">
                                    <label for="">Sikap/Minat</label>
                                    <input type="text" name="sikap_minat" class="form-control" id="" placeholder="Masukan " required>
                                </div>
                                
    							
    							<div class="form-group">
    								<button type="submit" name="save" class="btn btn-primary">Simpan</button>
    								<a href="?module=mapel" class="btn btn-warning">Kembali</a>
    							</div>
    						</div>
    						<!-- /.card-body -->
    					</form>

    					<?php
    					if (isset($_POST['save'])) {

                            // variable
    						$id_siswa = $_POST['id_siswa'];
    						// $mata_pelajaran = $_POST['mata_pelajaran'];
                            $kkm = $_POST['kkm'];
    						$nilai = $_POST['nilai'];
                            $sikap_minat = $_POST['sikap_minat'];

							// Get data siswa
							$query_siswa = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE id_siswa='$id_siswa'");
							$data_siswa = mysqli_fetch_assoc($query_siswa);

                            $query_kelas_mapel = mysqli_query($koneksi, "SELECT * FROM tb_kelas_mapel LEFT JOIN tb_mapel ON tb_mapel.id_mapel=tb_kelas_mapel.id_mapel WHERE id_kelas='$data_siswa[kd_kelas]' AND id_guru='$_SESSION[id_guru]' ORDER BY id ASC LIMIT 1");
                            $row_kelas_mapel = mysqli_num_rows($query_kelas_mapel);
                            $data_kelas_mapel = mysqli_fetch_assoc($query_kelas_mapel);
                            $id_kelas_mapel = ($row_kelas_mapel != 0)? $data_kelas_mapel['id'] : null;
                            $mata_pelajaran = ($row_kelas_mapel != 0)? $data_kelas_mapel['nama_mapel'] : "";

                           // query
    						$query = mysqli_query($koneksi,"INSERT INTO `tb_nilai`(`nama_siswa`, `mata_pelajaran`, `kkm`, `nilai`, `sikap_minat`, `id_kelas_mapel`) VALUES ('$data_siswa[nama]','$mata_pelajaran','$kkm','$nilai','$sikap_minat', '$id_kelas_mapel')");

                           // alert
    						if ($query) {
    							echo "<script>
    							alert('Data Berhasil Disimpan!');
    							window.location.href='?module=nilai'
    							</script>";
    						}else{
    							echo "<script>
    							alert('Data Gagal Disimpan!');
    							window.location.href='?module=nilai'
    							</script>";

    						}


    					}


    					?>



    				</div>
    			</div>
    		</div>
    	</section>