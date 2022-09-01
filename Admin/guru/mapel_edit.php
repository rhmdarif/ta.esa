<section class="content">
	<div class="container-fluid">
		<div class="row">
			<!-- left column -->
			<div class="col-md-10 mt-3">

				<!-- batas -->

				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Form Update MataPelajaran</h3>
					</div>
					<?php
					include 'koneksi.php';

					$id = $_GET['id'];

					$tampil = mysqli_query($koneksi, "SELECT * FROM `tb_mapel` WHERE id_mapel='$id'");
					$data = mysqli_fetch_array($tampil);


					?>

					<!-- form start -->
					<form action="" method="POST">
						<div class="card-body">
							<div class="form-group">
								<label for="">Nama Matapelajaran</label>
								<input type="text" name="nama_mapel" class="form-control" id="" value="<?= $data['nama_mapel']?>">
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
								<label for="">Nama Guru</label>
								<input type="text" name="nama_guru" class="form-control" id="" value="<?= $data['nama_guru']?>">
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

						$nama_mapel = $_POST['nama_mapel'];
						$kd_kelas = $_POST['kd_kelas'];
						$nama_guru = $_POST['nama_guru'];


						
						// query update
						$query = mysqli_query($koneksi,"UPDATE `tb_mapel` SET `nama_mapel`='$nama_mapel',`kd_kelas`='$kd_kelas',`nama_guru`='$nama_guru' WHERE `id_mapel`='$id'");


						if ($query) {
							echo "<script>
							alert('Data Berhasil Diupdate!');
							window.location='?module=mapel'
							</script>";
						}else{
							echo "<script>
							alert('Data Gagal Diupdate!');
							window.location='?module=mapel'
							</script>";

						}


						echo "<script>
						window.location='?module=mapel';
						</script>";

					}


					?>



				</div>
			</div>
		</div>
	</section>