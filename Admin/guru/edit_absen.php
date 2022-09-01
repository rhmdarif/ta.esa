<section class="content">
	<div class="container-fluid">
		<div class="row">
			<!-- left column -->
			<div class="col-md-10 mt-3">

				<!-- batas -->

				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Form Update Data Kelas</h3>
					</div>
					<?php
					include 'koneksi.php';

					$id = $_GET['id'];

					$tampil = mysqli_query($koneksi, "SELECT * FROM `tb_absen` WHERE id_absen='$id'");
					$data = mysqli_fetch_array($tampil);

					?>

					<!-- form start -->
					<form action="" method="POST">
						<div class="card-body">
						<div class="form-group">
								<label for="">Nama</label>
								<input type="varchar" name="nama" class="form-control" id="" value="<?php echo $data['nama']?>">
							</div>

							<div class="form-group">
								<label for="">Tanggal</label>
								<input type="date" name="tanggal" class="form-control" id="" value="<?php echo $data['tanggal']?>">
							</div>

							<div class="form-group">
								<label for="">Status</label>
								<!-- <input type="varchar" name="status" class="form-control" id=""value="<?php echo $data['status']?>"> -->

								<select class="form-control" name="status" id="">
                                        <option value="">-Pilih-</option>
                                        
                                        <?php
                                        include "koneksi.php";

                                        $query = mysqli_query($koneksi, "SELECT * FROM `tb_status`");

                                        while ($row = mysqli_fetch_array($query)) {

                                        ?>

                                     <option value="<?php echo $row['id_status']?>"><?php echo $row['nama_status']?></option>

                                    <?php } ?>

                                </select>
                                <script>
                                	document.getElementsByName('status')[0].value = "<?php echo $data['status']?>"
                                </script>
							</div>
							<div class="form-group">
								<label for="">Keterangan</label>
								<input type="text" name="keterangan" class="form-control" id=""value="<?php echo $data['keterangan']?>">
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

						$nama = $_POST['nama'];
						$tanggal = $_POST['tanggal'];
						$status = $_POST['status'];
                        $keterangan = $_POST['keterangan'];

						$query = mysqli_query($koneksi,"UPDATE `tb_absen` SET `nama`='$nama',`tanggal`='$tanggal',`status`='$status',`keterangan`='$keterangan'  WHERE `id_absen`='$id'");


						if ($query) {
							echo "<script>
							alert('Data Berhasil Diupdate!');
							window.location='?module=absen'
							</script>";
						}else{
							echo "<script>
							alert('Data Gagal Diupdate!');
							window.location='?module=absen'
							</script>";

						}


					}


					?>



				</div>
			</div>
		</div>
	</section>