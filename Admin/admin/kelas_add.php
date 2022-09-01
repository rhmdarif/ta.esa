    <section class="content">
    	<div class="container-fluid">
    		<div class="row">
    			<!-- left column -->
    			<div class="col-md-10 mt-3">
    				<!-- batas -->

    				<div class="card card-primary">
    					<div class="card-header">
    						<h3 class="card-title">Form Input Data Kelas</h3>
    					</div>
    					<!-- /.card-header -->
    					<!-- form start -->
                        <form action="" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Jurusan</label>
                                    <select class="form-control" id="jurusan" name="jurusan" >
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
                                <div class="form-group">
                                    <label for="">Kode Kelas</label>
                                    <input type="text" name="kd_kelas" class="form-control" id="" placeholder="Masukan Kode Kelas" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah Murid</label>
                                    <input type="text" name="jumlah_murid" class="form-control" id="" placeholder="Masukan Jumlah Murid" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                                    <a href="?module=file_tugas" class="btn btn-warning">Kembali</a>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </form>

                        <?php
                        include 'koneksi.php';

                        if (isset($_POST['save'])) {

                         $kd_kelas = $_POST['kd_kelas'];
                         $jumlah_murid = $_POST['jumlah_murid'];
                         $jurusan = $_POST['jurusan'];




                         $query = mysqli_query($koneksi,"INSERT INTO `tb_kelas`(`jurusan`, `kd_kelas`, `jumlah_murid`) VALUES ('$jurusan', '$kd_kelas','$jumlah_murid')");


                         if ($query) {
                           echo "<script>
                           alert('Data Berhasil Disimpan!');
                           window.location='?module=file_kelas'
                           </script>";
                       }else{
                        echo "<script>
                        alert('Data Gagal Disimpan!');
                        window.location='?module=file_kelas'
                        </script>";

                    }


                    echo "<script>
                    window.location='?module=file_kelas';
                    </script>";

                }


                ?>



            </div>
        </div>
    </div>
</section>