    <section class="content">
    	<div class="container-fluid">
    		<div class="row">
    			<!-- left column -->
    			<div class="col-md-10 mt-3">
    				<!-- batas -->

    				<div class="card card-primary">
    					<div class="card-header">
    						<h3 class="card-title">Form Input Data Raport</h3>
    					</div>
    					<!-- /.card-header -->
    					<!-- form start -->
    					<form action="" method="POST">
    						<div class="card-body">
    							<div class="form-group">
    								<label for="">Nama </label>
    								<input type="varchar" name="nama" class="form-control" id="" placeholder="Masukan Nama " required>
    							</div>

                               <div class="form-group">
                                    <label for="">Matpel</label>
                                    <input type="text" name="matpel" class="form-control" id="" placeholder="Masukan Nama Matpel" required>
                                </div>
    							
    							<div class="form-group">
    								<label for="">Nilai Akhir</label>
    								<input type="varchar" name="nilaiakhir" class="form-control" id="" placeholder="Masukan Nilai Akhir" required>
    							</div>

                                <div class="form-group">
                                    <label for="">Capaian Kompetensi</label>
                                    <input type="text" name="capaiankompetensi" class="form-control" id="" placeholder="Masukan Capaian Kompetensi" required>
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
    						$nama = $_POST['nama'];
    						$mapel = $_POST['mapel'];
    						$nilaiakhir = $_POST['nilaiakhir'];
                            $capaiankompetensi = $_POST['capaiankompetensi'];


                           // query
    						$query = mysqli_query($koneksi,"INSERT INTO `tb_raport`(`nama`, `mapel`, `nilaiakhir`, `capaiankompetensi`) VALUES ('$nama','$mapel','$nilaiakhir','$capaiankompetensi')");

                           // alert
    						if ($query) {
    							echo "<script>
    							alert('Data Berhasil Disimpan!');
    							window.location.href='?module=raport'
    							</script>";
    						}else{
    							echo "<script>
    							alert('Data Gagal Disimpan!');
    							window.location.href='?module=raport'
    							</script>";

    						}


    					}


    					?>



    				</div>
    			</div>
    		</div>
    	</section>