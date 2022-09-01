    <section class="content">
    	<div class="container-fluid">
    		<div class="row">
    			<!-- left column -->
    			<div class="col-md-10 mt-3">

    				<!-- batas -->

    				<div class="card card-primary">
    					<div class="card-header">
    						<h3 class="card-title">Form Input Data Siswa</h3>
    					</div>
    					<!-- /.card-header -->
    					<!-- form start -->
    					<form action="" method="POST">
    						<div class="card-body">
    							<div class="form-group">
    								<label for="">NIS</label>
    								<input type="text" name="nis" class="form-control" id="" placeholder="Masukan NIS" required>
    							</div>
    							<div class="form-group">
    								<label for="">Nama Siswa</label>
    								<input type="text" name="nama" class="form-control" id="" placeholder="Masukan Nama Kelas" required>
    							</div>
    							<div class="form-group">
    								<label for="">Jenis Kelamin</label>
                                    <br>
    								<!-- <select class="form-control" name="jk">
    									<option value="">- Pilih -</option>
    									<option value="laki-laki">Laki-laki</option>
    									<option value="perempuan">Perempuan</option>
    								</select> -->

                                    <input type="radio" name="jk" value="laki-laki">Laki-laki
                                    <input type="radio" name="jk" value="perempuan">Perempuan
                                </div>
                                <div class="form-group">
                                    <label for="">Kode Kelas</label>
                                    <select class="form-control" name="kd_kelas">
                                       <option value="">- Pilih -</option>
                                       <?php

                                       include 'koneksi.php';

                                       $sql = mysqli_query($koneksi, "SELECT * FROM `tb_kelas`");

                                       while ($data = mysqli_fetch_array($sql)) {

                                          ?>
                                          <option value="<?php echo $data['id_kelas']?>"><?php echo $data['kd_kelas']?></option>
                                      <?php } ?>
                                  </select>
                              </div>
                              <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" id="" placeholder="Masukan Email" required>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" id="" placeholder="Masukan Password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                                <a href="?module=file_siswa" class="btn btn-warning">Kembali</a>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>

                    <?php
                    include 'koneksi.php';

                    if (isset($_POST['save'])) {

                      $nis = $_POST['nis'];
                      $nama = $_POST['nama'];
                      $jk = $_POST['jk'];
                      $kd_kelas = $_POST['kd_kelas'];
                      $email = $_POST['email'];
                      $password = $_POST['password'];


    						// query
                      $query = mysqli_query($koneksi,"INSERT INTO `tb_siswa`(`nis`, `nama`, `jk`, `kd_kelas`, `email`, `password`) VALUES ('$nis','$nama','$jk','$kd_kelas','$email','$password')");


                      if ($query) {
                         echo "<script>
                         alert('Data Berhasil Disimpan!');
                         window.location='?module=file_siswa'
                         </script>";
                     }else{
                         echo "<script>
                         alert('Data Gagal Disimpan!');
                         window.location='?module=file_siswa'
                         </script>";
                     }


                     echo "<script>
                     window.location='?module=file_siswa';
                     </script>";

                 }


                 ?>



             </div>
         </div>
     </div>
 </section>