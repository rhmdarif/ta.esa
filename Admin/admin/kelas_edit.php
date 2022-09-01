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

					$tampil = mysqli_query($koneksi, "SELECT * FROM `tb_kelas` WHERE id_kelas='$id'");
					$data = mysqli_fetch_array($tampil);

					?>

					<!-- form start -->
					<form action="" method="POST">
						<div class="card-body">
							<div class="form-group">
								<label for="">Kode Kelas</label>
								<input type="text" name="kd_kelas" class="form-control" id="" value="<?php echo $data['kd_kelas']?>">
							</div>
							<div class="form-group">
								<label for="">Jumlah Murid</label>
								<input type="varchar" name="jumlah_murid" class="form-control" id=""value="<?php echo $data['jumlah_murid']?>">
							</div>
							<div class="form-group">
								<button type="submit" name="save" class="btn btn-primary">Simpan</button>
								<a href="?module=file_kelas" class="btn btn-warning">Kembali</a>
							</div>
						</div>
						<!-- /.card-body -->
					</form>

					<?php
					include 'koneksi.php';

					if (isset($_POST['save'])) {

						$kd_kelas = $_POST['kd_kelas'];
						$jumlah_murid = $_POST['jumlah_murid'];


						$query = mysqli_query($koneksi,"UPDATE `tb_kelas` SET `kd_kelas`='$kd_kelas',`jumlah_murid`='$jumlah_murid' WHERE `id_kelas`='$id'");


						if ($query) {
							echo "<script>
							alert('Data Berhasil Diupdate!');
							window.location='?module=file_kelas'
							</script>";
						}else{
							echo "<script>
							alert('Data Gagal Diupdate!');
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