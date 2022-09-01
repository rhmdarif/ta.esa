<div class="card">
	<div class="card-header">
		<h3 class="card-title">Form Data Guru/Pengajar
		</h3>
		<div class="d-flex justify-content-end mb-3">
			<button class="btn btn-primary" onclick="document.location.href='?module=add_guru'"><i class="fa fa-plus"></i> Tambah Data</button>
		</div>
	</div>


	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No.</th>
					<th>NIP</th>
					<th>Nama Guru</th>
					<th>Username</th>
					<th>Jenis Kelamin</th>
					<th>Password</th>
					<th>Email</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>

				<?php
				include 'koneksi.php';
				$query_tampil = mysqli_query($koneksi,"SELECT * FROM tb_guru");
				$no = 1;
				while ($data = mysqli_fetch_array($query_tampil)) {

					?>
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $data['nip'] ?></td>
						<td><?php echo $data['nama'] ?></td>
						<td><?php echo $data['nama'] ?></td>
						<td><?php echo $data['jk'] ?></td>
						<td><?php echo $data['password'] ?></td>
						<td><?php echo $data['email'] ?></td>
						<td>
							<a href="?module=edit_guru&id=<?php echo $data['id_guru']?>" class="btn btn-warning"><i class="fa fa-pencil-alt"></i> Edit</a> |
							<a href="hapus_guru.php?id=<?php echo $data['id_guru']?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data ini?')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a> 
						</td>
					</tr>
				<?php } ?>

			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
</div>


