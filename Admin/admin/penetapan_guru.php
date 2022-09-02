<div class="card">
	<div class="card-header">
		<h3 class="card-title">Penetapan Guru
		</h3>
		<div class="d-flex justify-content-end mb-3">
			<button class="btn btn-primary" onclick="document.location.href='?module=add_penetapan'"><i class="fa fa-plus"></i> Tambah Data</button>
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
				$query_tampil = mysqli_query($koneksi,"SELECT *  FROM `tb_kelas_mapel` 
																LEFT JOIN tb_guru ON tb_guru.id_guru=tb_kelas_mapel.id_guru 
																LEFT JOIN tb_mapel ON tb_mapel.id_mapel=tb_kelas_mapel.id_mapel
																ORDER BY id DESC");
				$no = 1;
				while ($data = mysqli_fetch_array($query_tampil)) {

					?>
					<tr>
						<td><?php echo $no++;?></td>
						<td>
							<?php echo $data['nama']; ?>
						</td>
						<td>
							<?php echo $data['id_kelas']; ?>
						</td>
						<td>
							<?php echo $data['nama_mapel']; ?>
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


