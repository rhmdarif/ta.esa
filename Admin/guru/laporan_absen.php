
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laporan Absen</title>
</head>
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
<link rel="stylesheet" href="asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<link rel="stylesheet" href="asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="asset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="asset/dist/css/adminlte.min.css">
<body>


	<div class="card">
	<div class="card-header">
		<h2 align="center">Laporan Data Absen</h2>
		<p align="center">Tanggal <?php echo date('d-m-Y');?></p>
		<div class="d-flex justify-content-end mb-3">
		</div>
	</div>
<!-- <div class="d-flex justify-content-start mb-3">
<button class="btn btn-primary"a href="raport.php" target="_blank">CETAK</button></a>
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
				</tr>
			</thead>
			<tbody>

				<?php
				include 'koneksi.php';
				$query_tampil = mysqli_query($koneksi,"SELECT * FROM `tb_absen`");
				$no = 1;
				while ($data = mysqli_fetch_array($query_tampil)) {

					?>	
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $data['nama']?></td>
						<td><?php echo $data['tanggal']?></td>
						<td><?php echo $data['status']?></td>
						<td><?php echo $data['keterangan']?></td>
					</tr>
				<?php } ?>

			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
</div>


<script>
	window.print()
</script>

</body>
</html>



