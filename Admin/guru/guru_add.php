    <section class="content">
    	<div class="container-fluid">
    		<div class="row">
    			<!-- left column -->
    			<div class="col-md-10 mt-3">
    				<!-- batas -->

    				<div class="card card-primary">
    					<div class="card-header">
    						<h3 class="card-title">Form Input Data Guru</h3>
    					</div>
    					<!-- /.card-header -->
    					<!-- form start -->
                        <form action="" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">NIP</label>
                                    <input type="text" name="nip" class="form-control" id="" placeholder="Masukan Kode Guru" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Nama Guru</label>
                                    <input type="text" name="nama" class="form-control" id="" placeholder="Masukan Nama Guru" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <br>
                                    <input type="radio" name="jk" value="laki-laki">Laki-laki
                                    <input type="radio" name="jk" value="perempuan">Perempuan
                                </div>
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" name="username" class="form-control" id="" placeholder="Masukan Nama Username" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control" id="" placeholder="Masukan Nama Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="email" class="form-control" id="" placeholder="Masukan Nama Email" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                                    <a href="?module=file_guru" class="btn btn-warning">Kembali</a>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </form>

                        <?php
                        include 'koneksi.php';

                        if (isset($_POST['save'])) {

                            // variable
                         $nip = $_POST['nip'];
                         $nama = $_POST['nama'];
                         $username = $_POST['username'];
                         $jk = $_POST['jk'];
                         $password = $_POST['password'];
                         $email = $_POST['email'];

                           // query
                         $query = mysqli_query($koneksi,"INSERT INTO `tb_guru`(`nip`, `nama`, `username`, `jk`, `password`, `email`) VALUES ('$nip','$nama', '$username','$jk','$password','$email')");

                           // alert
                         if ($query) {
                           echo "<script>
                           alert('Data Berhasil Disimpan!');
                           window.location='?module=file_guru'
                           </script>";
                       }else{
                        echo "<script>
                        alert('Data Gagal Disimpan!');
                        window.location='?module=file_guru'
                        </script>";

                    }


                    echo "<script>
                    window.location='?module=file_guru';
                    </script>";

                }


                ?>



            </div>
        </div>
    </div>
</section>