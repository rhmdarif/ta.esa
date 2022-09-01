<section class="content">
	<div class="container-fluid">
		<div class="row">
			<!-- left column -->
			<div class="col-md-10 mt-3">

				<!-- batas -->

				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Form Update Data Guru</h3>
					</div>
					<?php
					include 'koneksi.php';

					$id = $_GET['id'];

					$tampil = mysqli_query($koneksi, "SELECT * FROM `tb_guru` WHERE id_guru='$id'");
					$data = mysqli_fetch_array($tampil);

					 // array jk
					$jenis = $data['jk'];

					?>

					<!-- form start -->
					<form action="" method="POST">
						<div class="card-body">
							<div class="form-group">
								<label for="">NIP</label>
								<input type="text" name="nip" class="form-control" id="" value="<?php echo $data['nip']?>">
							</div>
							<div class="form-group">
								<label for="">Nama Guru</label>
								<input type="text" name="nama" class="form-control" id=""  value="<?php echo $data['nama']?>">
							</div>
							<div class="form-group">
								<label for="">Jenis Kelamin</label>
								<br>
								<input type="radio" name="jk" value="laki-laki" <?php if($jenis=='laki-laki'){echo "checked";}?>>Laki-laki
								<input type="radio" name="jk" value="perempuan" <?php if($jenis=='perempuan'){echo "checked";}?>>Perempuan
							</div>
							<div class="form-group">
								<label for="">Username</label>
								<input type="text" name="username" class="form-control" id="" value="<?php echo $data['username']?>">
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" name="password" class="form-control" id="" value="<?php echo $data['password']?>">
							</div>
							<div class="form-group">
								<label for="">Email</label>
								<input type="text" name="email" class="form-control" id="" value="<?php echo $data['password']?>">
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

						$nip = $_POST['nip'];
						$nama = $_POST['nama'];
						$username = $_POST['username'];
						$jk = $_POST['jk'];
						$password = $_POST['password'];
						$email = $_POST['email'];

						
						// query update
						$query = mysqli_query($koneksi,"UPDATE `tb_guru` SET `nip`='$nip',`nama`='$nama', `username`='$username',`jk`='$jk',`password`='$password',`email`='$email' WHERE `id_guru`='$id'");


						if ($query) {
							echo "<script>
							alert('Data Berhasil Diupdate!');
							window.location='?module=file_guru'
							</script>";
						}else{
							echo "<script>
							alert('Data Gagal Diupdate!');
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