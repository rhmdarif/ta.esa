<section class="content">
	<div class="container-fluid">
		<div class="row">
			<!-- left column -->
			<div class="col-md-10 mt-3">

				<!-- batas -->

				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Form Update Data Nilai</h3>
					</div>
					<?php
					include 'koneksi.php';

					$id = $_GET['id'];

					$tampil = mysqli_query($koneksi, "SELECT * FROM `tb_nilai` WHERE id_='$id_nilai'");
					$data = mysqli_fetch_array($tampil);

					?>

					<!-- form start -->
					<form action="" method="POST">
						<div class="card-body">
							<div class="form-group">
								<label for="">Nama Siswa</label>
								<input type="varchar" name="nama_siswa" class="form-control" id="" value="<?php echo $data['nama_siswa']?>">
							</div>
							<div class="form-group">
								<label for="">Matpel</label>
								<input type="varchar" name="mata_pelajaran" class="form-control" id=""value="<?php echo $data['mata_pelajaran']?>">
							</div>
                              <div class="form-group">
						<label for="">KKM</label>
						<input type="varchar" name="kkm" class="form-control" id=""value="<?php echo $data['kkm']?>">
							</div>

							<div class="form-group">
								<label for="">Nilai</label>
								<input type="varchar" name="nilai" class="form-control" id=""value="<?php echo $data['nilai']?>">
							</div>
							<div class="form-group">
								<label for="">Sikap/Minat</label>
								<input type="text" name="sikap_minat" class="form-control" id=""value="<?php echo $data['sikap_minat']?>">
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

						$nama_siswa = $_POST['nama_siswa'];
						$mata_pelajaran = $_POST['mata_pelajaran'];
	                    $kkm = $_POST['kkm'];
	                     $nilai = $_POST['nilai'];
	                    $sikap_minat = $_POST['sikap_minat'];

                       $query = mysqli_query($koneksi,"UPDATE `tb_nilai` SET `nama_siswa`='$nama_siswa',`mata_pelajaran`='$mata_pelajaran',`kkm`='$kkm',`nilai`='$nilai',`sikap_minat`='$sikap_minat' WHERE `id_nilai`='$id'");

						if ($query) {
							echo "<script>
							alert('Data Berhasil Diupdate!');
							window.location.href='?module=file_nilai'
							</script>";
						}else{
							echo "<script>
							alert('Data Gagal Diupdate!');
							window.location.href='?module=file_nilai'
							</script>";

						}


					


					}


					?>



				</div>
			</div>
		</div>
	</section>