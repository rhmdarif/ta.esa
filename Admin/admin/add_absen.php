    <section class="content">
    	<div class="container-fluid">
    		<div class="row">
    			<!-- left column -->
    			<div class="col-md-10 mt-3">
    				<!-- batas -->


    				<div class="card card-primary">
    					<div class="card-header">
    						<h3 class="card-title">Form Input Data Absen</h3>
    					</div>
    					<!-- /.card-header -->
    					<!-- form start -->
                        <form action="" method="POST">
                            <div class="card-body">
                            <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="" placeholder="Masukan Nama " readonly>
                                </div>

                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" id="" placeholder="Masukan Kode Tanggal" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Status</label>
                                    <!-- <input type="varchar" name="status" class="form-control" id="" placeholder="Masukan Nama Status" required> -->
                                    <select class="form-control" name="status" id="" disabled>
                                        <option value="">-Pilih-</option>
                                        
                                        <?php
                                        include "koneksi.php";

                                        $query = mysqli_query($koneksi, "SELECT * FROM `tb_status`");

                                        while ($data = mysqli_fetch_array($query)) {

                                        ?>

                                     <option value="<?php echo $data['id_status']?>"><?php echo $data['nama_status']?></option>

                                    <?php } ?>

                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="">Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control" id="" placeholder="Masukan Nama Keterangan" readonly>
                                </div>
                               
                                <div class="form-group">
                                    <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                                    <a href="?module=absen" class="btn btn-warning">Kembali</a>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </form>

                        <?php
                        include 'koneksi.php';

                        if (isset($_POST['save'])) {

                            // variable
                        $nama = $_POST['nama'];
                         $tanggal = $_POST['tanggal'];
                         $status = $_POST['status'];
                         $keterangan = $_POST['keterangan'];
                        
                           // query
                         $query = mysqli_query($koneksi,"INSERT INTO `tb_absen`(`nama`, `tanggal`, `status`, `keterangan`) VALUES ('$tanggal','$nama','$status','$keterangan')");

                           // alert
                         if ($query) {
                           echo "<script>
                           alert('Data Berhasil Disimpan!');
                            window.location.href='?module=absen'
                           </script>";
                       }else{
                        echo "<script>
                        alert('Data Gagal Disimpan!');
                         window.location.href='?module=absen'
                        </script>";

                    }


                 

                }


                ?>



            </div>
        </div>
    </div>
</section>