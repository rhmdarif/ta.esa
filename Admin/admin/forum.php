<div class="card">
	<div class="card-header">
		<h3 class="card-title">Forum Diskusi
		</h3>
		<div class="d-flex justify-content-end mb-3">
			<!-- <button class="btn btn-primary" onclick="document.location.href='?module=add_forum'"><i class="fa fa-plus"></i> Tambah Data</button> -->
		</div>
	</div>



	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>

				<?php
				include 'koneksi.php';
				$query_tampil = mysqli_query($koneksi,"SELECT * FROM `tb_forum`");
				$no = 1;
				while ($data = mysqli_fetch_array($query_tampil)) {

					?>	
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $data['isi']?></td>
						<td>
							<!-- <a href="?module=edit_forum&id=<?php echo $data['id_forum']?>" class="btn btn-warning"><i class="fa fa-pencil-alt"></i> Edit</a> | --> 
							<a href="hapus_forum.php?id=<?= $data['id_forum']?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data ini?')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a> 
						</td>
					</tr>
				<?php } ?>

			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
</div>
