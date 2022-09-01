<div>
	<img src="../assets/img/sma2.png" alt="" style="width:100%;height:250px;">
</div>

<div>
	<br>
	<h1 align="center">Form Data Ujjian SMAN 2 KOTO X1 TARUSAN</h1>
	<hr style="border-color: black;">
</div>


<div>
	<h2><i class="fa fa-folder-open" aria-hidden="true"></i>Data Ujian MTK</h2>
	<hr style="border-color: black;">
</div>


<div>
	<h2>&nbsp;&nbsp;Daftar Soal Ujian</h2>
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama Soal</th>
					<th>Soal Ujian</th>
				</tr>
			</thead>
			<tbody>
				<?php 

        //$kategori = $_GET['kat'];

				include "../conf/koneksi.php";

				$query_tampil = mysqli_query($koneksi,"SELECT * FROM `tb_ujian` WHERE kode_kelas='$_SESSION[kelas]';");

				$no = 1;
				while ($data = mysqli_fetch_array($query_tampil)) {

					?>
					<tr>
						<form action="" method="POST">
							<td><?= $no++;?></td>
							<td><?php echo $data['judul']?></td>
							<td><a href="<?php echo '../Admin/guru/file_ujian/'.$data['soal'];?>" style="color:darkblue;" target="_blank" ><?php echo $data['soal']?></a></td>
							<!-- <td><?php echo $data['kategori']?></td> -->
						</form>
					</tr>

				<?php } ?>


			</tbody>
		</table>


	</div>

	<hr style="border-color: black;">


	<div class="container">
		<h2 style="text-align: center;">Kirim Data Ujian</h2>
		<form action="ujjian_act.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Tanggal :</label>
				<input type="date" name="tgl" class="form-control col-4">
			</div>
			<div class="form-group">
				<label>Nama Ujian :</label>
				<input type="text" name="nama_tugas" class="form-control col-4">
			</div>
			<div class="form-group">
				<label>Upload Ujian :</label>
				<input type="file" name="tugas"  class="form-control col-4" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .docx | .pdf</p>
			</div>      
			<!-- <input type="submit" name="" style="height: 5px;" value="Simpan" class="btn btn-primary"> -->
			<button type="submit" style="height: 5px;"  class="btn btn-primary">Simpan</button>
		</form>
	</div>






