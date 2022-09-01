<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN BARANG</h2>
		<h4>WWW.MALASNGODING.COM</h4>
 
	</center>
 

 
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
	</table>
 
	<script>
		window.print();
	</script>
</body>
</html>