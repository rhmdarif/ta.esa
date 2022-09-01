<section class="content">
	<div class="container-fluid">
		<div class="row">
			<!-- left column -->
			<div class="col-md-10 mt-3">

				<!-- batas -->

				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Form Update Status</h3>
					</div>
					<?php
					include 'koneksi.php';

					$id = $_GET['id'];

					$tampil = mysqli_query($koneksi, "SELECT * FROM `tb_status` WHERE id_status='$id'");
					$data = mysqli_fetch_array($tampil);

					?>

					<!-- form start -->
					<form action=""method="POST">
							<div class="form-group">
								<label for="">Nama Status</label>
								<input type="text" name="nama_status" class="form-control" id=""value="<?php echo $data['nama_status']?>">
						
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

						$nama_status = $_POST['nama_status'];
                 

						$query = mysqli_query($koneksi,"UPDATE `tb_status` SET `nama_status`='$nama_status' WHERE `id_status`='$id'");


						if ($query) {
							echo "<script>
							alert('Data Berhasil Diupdate!');
							window.location='?module=status'
							</script>";
						}else{
							echo "<script>
							alert('Data Gagal Diupdate!');
							window.location='?module=status'
							</script>";

						}


					}


					?>



				</div>
			</div>
		</div>
	</section>