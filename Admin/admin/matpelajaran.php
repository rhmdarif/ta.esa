<div class="card">
	<div class="card-header">
		<h3 class="card-title">Form Data MataPelajaran
		</h3>
		<div class="d-flex justify-content-end mb-3">
			<button class="btn btn-primary" onclick="document.location.href='?module=add_mapel'"><i class="fa fa-plus"></i> Tambah Data</button>
		</div>
	</div>


	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama Matapelajaran</th>
					<th>Kode Kelas</th>
					<th>Nama Guru</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>

				<?php
				include 'koneksi.php';
				$query_tampil = mysqli_query($koneksi,"SELECT tb_mapel.*, tb_kelas.* FROM tb_mapel LEFT JOIN tb_kelas ON tb_mapel.`kd_kelas` = tb_kelas.`id_kelas`");
				$no = 1;
				while ($data = mysqli_fetch_array($query_tampil)) {

					?>
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $data['nama_mapel'] ?></td>
						<td><?php echo $data['kd_kelas'] ?></td>
						<td><?php echo $data['nama_guru'] ?></td>
						<td>
							<a href="?module=edit_mapel&id=<?php echo $data['id_mapel']?>" class="btn btn-warning"><i class="fa fa-pencil-alt"></i> Edit</a> |
							<a href="hapus_mapel.php?id=<?php echo $data['id_mapel']?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data ini?')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a> 
						</td>
					</tr>
				<?php } ?>

			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
</div>


