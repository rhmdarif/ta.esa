    <section class="content">
    	<div class="container-fluid">
    		<div class="row">
    			<!-- left column -->
    			<div class="col-md-10 mt-3">
    				<!-- batas -->

    				<div class="card card-primary">
    					<div class="card-header">
    						<h3 class="card-title">Form Input Data Matapelajaran</h3>
    					</div>
    					<!-- /.card-header -->
    					<!-- form start -->
    					<form action="" method="POST">
    						<div class="card-body">
    							<div class="form-group">
    								<label for="">Nama Matapelajaran</label>
    								<input type="text" name="nama_mapel" class="form-control" id="" placeholder="Masukan Nama Matapelajaran" required>
    							</div>


                                <!-- <div class="form-group">
                                    <label for="">Jurusan</label>
                                    <select class="form-control" name="jurusan" id="jurusan">
                                        <option value="">- Pilih -</option>
                                        <?php

                                        include 'koneksi.php';

                                        $sql = mysqli_query($koneksi, "SELECT * FROM `tb_jurusan`");

                                        while ($data = mysqli_fetch_array($sql)) {

                                            ?>
                                            <option value="<?php echo $data['id_jurusan']?>"><?php echo $data['jurusan']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            -->

                            <div class="form-group">
                                <label for="">Kode Kelas</label>
                                <select class="form-control" name="kd_kelas" id="kd_kelas">
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
                            <label for="">Nama Guru</label>
                            <input type="text" name="nama_guru" class="form-control" id="" placeholder="Masukan Nama Guru" required>
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
                  $nama_mapel = $_POST['nama_mapel'];
                  $kd_kelas = $_POST['kd_kelas'];
                  $nama_guru = $_POST['nama_guru'];



                           // query
                  $query = mysqli_query($koneksi,"INSERT INTO `tb_mapel`(`nama_mapel`, `kd_kelas`, `nama_guru`) VALUES ('$nama_mapel','$kd_kelas','$nama_guru')");

                           // alert
                  if ($query) {
                     echo "<script>
                     alert('Data Berhasil Disimpan!');
                     window.location='?module=mapel'
                     </script>";
                 }else{
                     echo "<script>
                     alert('Data Gagal Disimpan!');
                     window.location='?module=mapel'
                     </script>";

                 }


                 echo "<script>
                 window.location='?module=mapel';
                 </script>";

             }


             ?>



         </div>
     </div>
 </div>
</section>

