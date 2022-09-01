<div class="card">
	<div class="card-header">
		<h3 class="card-title">Form Data Raport
		</h3>
		<div class="d-flex justify-content-end mb-3">
			<button class="btn btn-primary" onclick="document.location.href='?module=add_raport'"><i class="fa fa-plus"></i> Tambah Data</button>
		</div>
	</div>
<div class="d-flex justify-content-start mb-3">

<a href="laporan_raport.php" class="btn btn-primary" target="_blank"><i class="fa fa-print"></i> Cetak</a>
</div>



	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama</th>
					<th>Matpel</th>
					<th>Nilai Akhir</th>
					<th>Capaian Kompetensi</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>

				<?php
				include 'koneksi.php';
				$query_tampil = mysqli_query($koneksi,"SELECT * FROM `tb_raport`");
				$no = 1;
				while ($data = mysqli_fetch_array($query_tampil)) {

					?>	
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $data['nama']?></td>
						<td><?php echo $data['mapel']?></td>
						<td><?php echo $data['nilaiakhir']?></td>
						<td><?php echo $data['capaiankompetensi']?></td>
						<td>
							<a href="?module=edit_raport&id=<?php echo $data['id']?>" class="btn btn-warning"><i class="fa fa-pencil-alt"></i> Edit</a> | 
							<a href="hapus_raport.php?id=<?= $data['id']?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data ini?')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a> 
						</td>
					</tr>
				<?php } ?>

 
			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
</div>


