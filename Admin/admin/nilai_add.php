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
    								<input type="text" name="nama_siswa" class="form-control" id="" placeholder="Masukan Nama " required>
    							</div>

                               <div class="form-group">
                                    <label for="">Matpel</label>
                                    <input type="text" name="mata_pelajaran" class="form-control" id="" placeholder="Masukan Nama Matpel" required>
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
    					include 'koneksi.php';

    					if (isset($_POST['save'])) {

                            // variable
    						$nama_siswa = $_POST['nama_siswa'];
    						$mata_pelajaran = $_POST['mata_pelajaran'];
                            $kkm = $_POST['kkm'];
    						$nilai = $_POST['nilai'];
                            $sikap_minat = $_POST['sikap_minat'];


                           // query
    						$query = mysqli_query($koneksi,"INSERT INTO `tb_nilai`(`nama_siswa`, `mata_pelajaran`, `kkm`, `nilai`, `sikap_minat`) VALUES ('$nama_siswa','$mata_pelajaran','$kkm','$nilai','$sikap_minat')");

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