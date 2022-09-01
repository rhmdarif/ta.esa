<div class="card">
	<div class="card-header">
		<h3 class="card-title">Form Data Kelas
		</h3>
		<div class="d-flex justify-content-end mb-3">
			<button class="btn btn-primary" onclick="document.location.href='?module=add_kelas'"><i class="fa fa-plus"></i> Tambah Data</button>
		</div>
	</div>



	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No.</th>
					<th>Jurusan</th>
					<th>Kode Kelas</th>
					<th>Jumlah Murid</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>

				<?php
				include 'koneksi.php';
				$query_tampil = mysqli_query($koneksi, "SELECT *,(SELECT COUNT(*) FROM tb_siswa where tb_siswa.kd_kelas=tb_kelas.id_kelas) AS total_siswa FROM tb_kelas WHERE id_kelas IN (SELECT tb_kelas_mapel.id_kelas FROM tb_kelas_mapel WHERE tb_kelas_mapel.id_guru=(SELECT tb_guru.id_guru FROM tb_guru WHERE tb_guru.email='$_SESSION[email]' ORDER BY tb_guru.id_guru ASC LIMIT 1))");
				$no = 1;
				while ($data = mysqli_fetch_array($query_tampil)) {

					?>	
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $data['jurusan']?></td>
						<td><?php echo $data['kd_kelas']?></td>
						<td><?php echo $data['total_siswa']?></td>
						<td>
							<a href="?module=edit_kelas&id=<?php echo $data['id_kelas']?>" class="btn btn-warning"><i class="fa fa-pencil-alt"></i> Edit</a> | 
							<a href="hapus_kelas.php?id=<?= $data['id_kelas']?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data ini?')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a> 
						</td>
					</tr>
				<?php } ?>

			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
</div>


