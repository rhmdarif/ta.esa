    <section class="content">
    	<div class="container-fluid">
    		<div class="row">
    			<!-- left column -->
    			<div class="col-md-10 mt-3">
    				<!-- batas -->

    				<div class="card card-primary">
    					<div class="card-header">
    						<h3 class="card-title">Form Input Data Jurusan</h3>
    					</div>
    					<!-- /.card-header -->
    					<!-- form start -->
                        <form action="" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Nama Jurusan</label>
                                    <input type="text" name="jurusan" class="form-control" id="" placeholder="Masukan Nama Jurusan" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                                    <a href="?module=jurusan" class="btn btn-warning">Kembali</a>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </form>

                        <?php
                        include 'koneksi.php';

                        if (isset($_POST['save'])) {

                            $jurusan = $_POST['jurusan'];



                            $query = mysqli_query($koneksi,"INSERT INTO `tb_jurusan`( `jurusan`) VALUES ('$jurusan')");


                            if ($query) {
                             echo "<script>
                             alert('Data Berhasil Disimpan!');
                             window.location='?module=jurusan'
                             </script>";
                         }else{
                            echo "<script>
                            alert('Data Gagal Disimpan!');
                            window.location='?module=jurusan'
                            </script>";

                        }


                        echo "<script>
                        window.location='?module=jurusan';
                        </script>";

                    }


                    ?>



                </div>
            </div>
        </div>
    </section>