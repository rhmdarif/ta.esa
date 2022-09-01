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
					<th>NIS</th>
					<th>Nama Siswa</th>
					<th>Jenis Kelamin</th>
					<th>Kode Kelas</th>
					<th>Email</th>
					<th>Password</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>

				<?php
				include 'koneksi.php';
				$query_tampil = mysqli_query($koneksi,"SELECT tb_siswa.*, tb_kelas.* FROM tb_siswa LEFT JOIN tb_kelas ON tb_siswa.`kd_kelas` = tb_kelas.`id_kelas` ORDER BY nis ASC");
				$no = 1;
				while ($data = mysqli_fetch_array($query_tampil)) {

					?>
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $data['nis'] ?></td>
						<td><?php echo $data['nama'] ?></td>
						<td><?php echo $data['jk'] ?></td>
						<td><?php echo $data['kd_kelas'] ?></td>
						<td><?php echo $data['email'] ?></td>
						<td><?php echo $data['password'] ?></td>
						<td>
							<a href="?module=edit_siswa&id=<?php echo $data['id_siswa']?>" class="btn btn-warning"><i class="fa fa-pencil-alt"></i> Edit</a> |
							<a href="hapus_siswa.php?id=<?= $data['id_siswa']?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data ini?')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a> 
						</td>
					</tr>
				<?php } ?>

			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
</div>


