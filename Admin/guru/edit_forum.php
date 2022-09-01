<section class="content">
	<div class="container-fluid">
		<div class="row">
			<!-- left column -->
			<div class="col-md-10 mt-3">

				<!-- batas -->

				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Form Update Forum</h3>
					</div>
					<?php
					include 'koneksi.php';

					$id = $_GET['id'];

					$tampil = mysqli_query($koneksi, "SELECT * FROM `tb_forum` WHERE id_='$id_forum'");
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
								<label for="">Matpel</label>
								<input type="text" name="mapel" class="form-control" id=""value="<?php echo $data['mapel']?>">
							</div>
							<div class="form-group">
								<label for="">Nilai Akhir</label>
								<input type="varchar" name="nilaiakhir" class="form-control" id=""value="<?php echo $data['nilaiakhir']?>">
							</div>
							<div class="form-group">
								<label for="">Capaian Kompetensi</label>
								<input type="text" name="capaiankompetensi" class="form-control" id=""value="<?php echo $data['capaiankompetensi']?>">
							</div>
							<div class="form-group">
								<button type="submit" name="save" class="btn btn-primary">Simpan</button>
								<a href="?module=raport" class="btn btn-warning">Kembali</a>
							</div>
						</div>
						<!-- /.card-body -->
					</form>

					<?php
					include 'koneksi.php';

					if (isset($_POST['save'])) {

						$nama = $_POST['nama'];
						$mapel = $_POST['mapel'];
	                    $nilaiakhir = $_POST['nilaiakhir'];
	                    $capaiankompetensi = $_POST['capaiankompetensi'];

                       $query = mysqli_query($koneksi,"UPDATE `tb_raport` SET `nama`='$nama',`mapel`='$mapel',`nilaiakhir`='$nilaiakhir',`capaiankompetensi`='$capaiankompetensi' WHERE `id_raport`='$id'");

						if ($query) {
							echo "<script>
							alert('Data Berhasil Diupdate!');
							window.location.href='?module=raport'
							</script>";
						}else{
							echo "<script>
							alert('Data Gagal Diupdate!');
							window.location.href='?module=raport'
							</script>";

						}


					


					}


					?>



				</div>
			</div>
		</div>
	</section>