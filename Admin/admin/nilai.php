<div class="card">
	<div class="card-header">
		<h3 class="card-title">Form Data Nilai
		</h3>
		<div class="d-flex justify-content-end mb-3">
			<button class="btn btn-primary" onclick="document.location.href='?module=add_nilai'"><i class="fa fa-plus"></i> Tambah Data</button>
		</div>
	</div>
<div class="d-flex justify-content-start mb-3">
<a href="laporan_nilai.php" class="btn btn-primary" target="_blank"><i class="fa fa-print"></i> Cetak</a>
</div>
</div>


	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama Siswa</th>
					<th>Matpel</th>
					<th>KKM</th>
					<th>Nilai</th>
					<th>Sikap/Minat</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>

				<?php
				include 'koneksi.php';
				$query_tampil = mysqli_query($koneksi,"SELECT * FROM `tb_nilai`");
				$no = 1;
				while ($data = mysqli_fetch_array($query_tampil)) {

					?>	
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $data['nama_siswa']?></td>
						<td><?php echo $data['mata_pelajaran']?></td>
						<td><?php echo $data['kkm']?></td>
						<td><?php echo $data['nilai']?></td>
						<td><?php echo $data['sikap_minat']?></td>

						<td>
							<a href="?module=edit_nilait&id_nilai=<?php echo $data['id_nilai']?>" class="btn btn-warning"><i class="fa fa-pencil-alt"></i> Edit</a> | 
							<a href="hapus_nilai.php?id=<?= $data['id_nilai']?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data ini?')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a> 
						</td>
					</tr>
				<?php } ?>

 
			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
</div>


