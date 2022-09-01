<div class="card">
	<div class="card-header">
		<h3 class="card-title">Form Data Siswa
		</h3>
		<div class="d-flex justify-content-end mb-3">
			<button class="btn btn-primary" onclick="document.location.href='?module=add_siswa'"><i class="fa fa-plus"></i> Tambah Data</button>
		</div>
	</div>



	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No.</th>
					<th>ID Guru</th>
					<th>ID Kelas</th>
					<th>ID Mapel</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>

				<?php
				include 'koneksi.php';
				$query_tampil = mysqli_query($koneksi,"SELECT * FROM `tb_kelas_mapel`");
				$no = 1;
				while ($data = mysqli_fetch_array($query_tampil)) {

					?>
					<tr>
						<td><?php echo $no++;?></td>
						<td>
							<select class="form-control" id="guru" name="guru" >
								<option value="">- Pilih -</option>
								<?php

								$sql = mysqli_query($koneksi, "SELECT * FROM `tb_guru`");

								while ($guru = mysqli_fetch_array($sql)) {

									?>
									<option value="<?php echo $guru['id_guru']?>"><?php echo $guru['nama']?></option>
								<?php } ?>
							</select>
						</td>
						<td>
							<select class="form-control" id="kelas" name="kelas" >
								<option value="">- Pilih -</option>
								<?php
								
								$sql = mysqli_query($koneksi, "SELECT * FROM `tb_kelas`");

								while ($kelas = mysqli_fetch_array($sql)) {

									?>
									<option value="<?php echo $kelas['id_kelas']?>"><?php echo $kelas['kd_kelas']?></option>
								<?php } ?>
							</select>
						</td>
						<td>
							<select class="form-control" id="mapel" name="mapel" >
								<option value="">- Pilih -</option>
								<?php
								$sql = mysqli_query($koneksi, "SELECT * FROM `tb_mapel`");

								while ($mapel = mysqli_fetch_array($sql)) {

									?>
									<option value="<?php echo $mapel['id_mapel']?>"><?php echo $mapel['nama_mapel']?></option>
								<?php } ?>
							</select>
						</td>
						<td>
							<a href="" onclick="return confirm('Apakah Anda Yakin Menghapus Data ini?')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a> 
						</td>
					</tr>
				<?php } ?>

			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
</div>


