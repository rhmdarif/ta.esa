    <section class="content">
    	<div class="container-fluid">
    		<div class="row">
    			<!-- left column -->
    			<div class="col-md-10 mt-3">
    				<!-- batas -->

    				<div class="card card-primary">
    					<div class="card-header">
    						<h3 class="card-title">Form Input Data Status</h3>
    					</div>
    					<!-- /.card-header -->
    					<!-- form start -->
                        <form action="" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Nama Status</label>
                                    <input type="text" name="nama_status" class="form-control" id="" placeholder="Masukan Status" required>
                                </div>

    
                                <div class="form-group">
                                    <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                                    <a href="?module=status" class="btn btn-warning">Kembali</a>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </form>

                        <?php
                        include 'koneksi.php';

                        if (isset($_POST['save'])) {

                            // variable
                         
                         $nama_status = $_POST['nama_status'];
                       
                        
                           // query
                         $query = mysqli_query($koneksi,"INSERT INTO `tb_status`(`nama_status`) VALUES ('$nama_status')");

                           // alert
                         if ($query) {
                           echo "<script>
                           alert('Data Berhasil Disimpan!');
                            window.location.href='?module=status'
                           </script>";
                       }else{
                        echo "<script>
                        alert('Data Gagal Disimpan!');
                         window.location.href='?module=status'
                        </script>";

                    }


                 

                }


                ?>



            </div>
        </div>
    </div>
</section>