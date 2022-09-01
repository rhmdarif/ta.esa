<div class="card">
	<div class="card-header">
		<h3 class="card-title">Form Data Status
		</h3>
		<div class="d-flex justify-content-end mb-3">
			<button class="btn btn-primary" onclick="document.location.href='?module=add_status'"><i class="fa fa-plus"></i> Tambah Data</button>&nbsp;&nbsp;&nbsp;
			<!-- <button class="btn btn-primary"a >CETAK</button></a> -->
			
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
					<th>Nama Status</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>

				<?php
				include 'koneksi.php';
				$query_tampil = mysqli_query($koneksi,"SELECT * FROM `tb_status`");
				$no = 1;
				while ($data = mysqli_fetch_array($query_tampil)) {

					?>	
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $data['nama_status']?></td>
						<td>
							<a href="?module=edit_status&id=<?php echo $data['id_status']?>" class="btn btn-warning"><i class="fa fa-pencil-alt"></i> Edit</a> | 
							<a href="hapus_status.php?id=<?= $data['id_status']?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data ini?')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a> 
						</td>
					</tr>
				<?php } ?>

			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
</div>


