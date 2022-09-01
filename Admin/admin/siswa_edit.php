    <section class="content">
    	<div class="container-fluid">
    		<div class="row">
    			<!-- left column -->
    			<div class="col-md-10 mt-3">

    				<!-- batas -->

    				<div class="card card-primary">
    					<div class="card-header">
    						<h3 class="card-title">Form Edit Data Siswa</h3>
    					</div>
    					
                        <?php
                        include 'koneksi.php';

                        $id = $_GET['id'];

                        $tampil = mysqli_query($koneksi, "SELECT * FROM `tb_siswa` WHERE id_siswa='$id'");
                        $data = mysqli_fetch_array($tampil);

                        // array jk
                        $jenis = $data['jk'];


                        ?>

                        <form action="" method="POST">
                          <div class="card-body">
                             <div class="form-group">
                                <label for="">NIS</label>
                                <input type="text" name="nis" class="form-control" id="" value="<?php echo $data['nis']?>">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Siswa</label>
                                <input type="text" name="nama" class="form-control" id="" value="<?php echo $data['nama']?>">
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <br>
                            <!-- <select class="form-control" name="jk">
                             <option value="">- Pilih -</option>
                             <option value="laki-laki">Laki-laki</option>
                             <option value="perempuan">Perempuan</option>
                         </select> -->
                         <input type="radio" name="jk" value="laki-laki" <?php if($jenis=='laki-laki'){echo "checked";}?> >Laki-laki
                         <input type="radio" name="jk" value="perempuan" <?php if($jenis=='perempuan'){echo "checked";}?> >Perempuan

                     </div>
                     <div class="form-group">
                        <label for="">Kode Kelas</label>
                        <select class="form-control" name="kd_kelas">
                           <option value="">- Pilih -</option>
                           <?php
                           include 'koneksi.php';
                           $sql = mysqli_query($koneksi, "SELECT * FROM `tb_kelas`");

                           while ($row = mysqli_fetch_array($sql)) {

                              ?>
                              <option value="<?php echo $row['id_kelas']?>"><?php echo $row['kd_kelas']?></option>
                          <?php } ?>
                      </select>
                      <script>
                        document.getElementsByName('kd_kelas')[0].value = "<?= $data['kd_kelas']?>"
                    </script>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" id="" value="<?php echo $data['email']?>">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" name="password" class="form-control" id="" value="<?php echo $data['password']?>">
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
          $query = mysqli_query($koneksi,"UPDATE `tb_siswa` SET `nis`='$nis',`nama`='$nama',`jk`='$jk',`kd_kelas`='$kd_kelas',`email`='$email',`password`='$password' WHERE id_siswa='$id'");


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