<div class="card">
	<div class="card-header">
		<h3 class="card-title">Form Penetapan Guru - Kelas
		</h3>
	</div>



	<!-- /.card-header -->
	<div class="card-body">
		<?php
			include "koneksi.php";

			if(isset($_POST['guru'])) {
				if(isset($_POST['guru']) || isset($_POST['mapel'])) {
					$query_mapel = mysqli_query($koneksi, "SELECT * FROM tb_mapel WHERE id_mapel='$_POST[mapel]'");
					$data_mapel = mysqli_fetch_assoc($query_mapel);

					$simpan = mysqli_query($koneksi, "INSERT INTO tb_kelas_mapel (id_guru, id_kelas, id_mapel) VALUES ('$_POST[guru]', '$data_mapel[kd_kelas]', '$_POST[mapel]')");
					if($simpan) {
						echo "Guru telah ditetapkan";
					} else {
						echo "Gagal";
					}
				} else {
					echo "Permintaan ditolak";
				}
			}

		?>
		<form  method="post">
			<div class="form-group">
				<label for="id_guru">ID Guru</label>
				<select class="form-control" id="guru" name="guru">
					<option value="">- Pilih -</option>
					<?php
					$sql = mysqli_query($koneksi, "SELECT * FROM `tb_guru`");
					while ($guru = mysqli_fetch_array($sql)) { ?>
						<option value="<?php echo $guru['id_guru'] ?>"><?php echo $guru['nama'] ?></option>
					<?php } ?>
				</select>
			</div>
			<!-- <div class="form-group">
				<label for="id_kelas">ID Kelas</label>
				<select class="form-control" id="id_kelas" name="kelas">
					<option value="">- Pilih -</option>
					<?php
					$sql = mysqli_query($koneksi, "SELECT * FROM `tb_kelas`");
					while ($kelas = mysqli_fetch_array($sql)) {
					?>
						<option value="<?php echo $kelas['id_kelas'] ?>"><?php echo $kelas['kd_kelas'] ?><?php echo $kelas['kd_kelas'] ?></option>
					<?php } ?>
				</select>
			</div> -->
			<div class="form-group">
				<label for="id_mapel">Kelas - Mapel</label>
				<select class="form-control" id="id_mapel" name="mapel">
					<option value="">- Pilih -</option>
					<?php
					$sql = mysqli_query($koneksi, "SELECT * FROM `tb_mapel`");
					while ($mapel = mysqli_fetch_array($sql)) {
					?>
						<option value="<?php echo $mapel['id_mapel'] ?>">Kls. <?php echo $mapel['kd_kelas'] ?> - <?php echo $mapel['nama_mapel'] ?></option>
					<?php } ?>
				</select>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Simpan</button>
		</form>

	</div>
	<!-- /.card-body -->
</div>