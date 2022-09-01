<div class="card">
	<div class="card-header">
		<h3 class="card-title">Form Data Absen
		</h3>
		<div class="d-flex justify-content-end mb-3">
			<a href="?module=absen" class="btn btn-primary"><i class="fa fa-recycle"></i> Refresh</a>&nbsp;&nbsp;&nbsp;
			<button class="btn btn-primary" onclick="document.location.href='?module=add_absen'"><i class="fa fa-plus"></i> Tambah Data</button>&nbsp;&nbsp;&nbsp;
		
			<a href="laporan_absen.php" class="btn btn-primary" target="_blank"><i class="fa fa-print"></i> Cetak</a>
		</div>
	</div>

<!-- <div class="d-flex justify-content-start mb-3">

</div> -->

	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama</th>
					<th>Tanggal/Hari</th>
					<th>Status</th>
					<th>Keterangan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>

				<?php
				include 'koneksi.php';
				$query_tampil = mysqli_query($koneksi,"SELECT * FROM tb_status INNER JOIN tb_absen ON tb_status.id_status = tb_absen.status");
				$no = 1;
				while ($data = mysqli_fetch_array($query_tampil)) {

					?>	
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $data['nama']?></td>
						<td><?php echo $data['tanggal']?></td>
						<td><?php echo $data['nama_status']?></td>
						<td><?php echo $data['keterangan']?></td>
						<td>
							<a href="?module=edit_absen&id=<?php echo $data['id_absen']?>" class="btn btn-warning"><i class="fa fa-pencil-alt"></i> Edit</a> | 
							<a href="hapus_absen.php?id=<?= $data['id_absen']?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data ini?')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a> 
						</td>
					</tr>
				<?php } ?>

			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
</div>


