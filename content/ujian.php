<div>
	<img src="../assets/img/sma2.png" alt="" style="width:100%;height:250px;">
</div>

<div>
	<br>
	<h1 align="center">Form Data Ujjian SMAN 2 KOTO X1 TARUSAN</h1>
	<hr style="border-color: black;">
</div>


<div>
	<h2><i class="fa fa-folder-open" aria-hidden="true"></i>Data Ujian</h2>
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
							<td><a href="<?php echo '../Admin/admin/file_ujian/'.$data['soal'];?>" style="color:darkblue;" target="_blank" ><?php echo $data['soal']?></a></td>
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
		<?php
    if (isset($_POST['kirim_tugas'])) {
      $tanggal   = $_POST['tgl'];
      $nama_tgs   = $_POST['nama_tugas'];
      $ekstensi_diperbolehkan    = array('pdf', 'docx');
      $nama    = $_FILES['tugas']['name'];
      $x        = explode('.', $nama);
      $ekstensi    = strtolower(end($x));
      $ukuran        = $_FILES['tugas']['size'];
      $file_tmp    = $_FILES['tugas']['tmp_name'];

    
      $query_siswa = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE email='$_SESSION[username]'");
      if(mysqli_num_rows($query_siswa) == 0) {
        header("location: ?module=logout");
        die();
      }
      $data_siswa = mysqli_fetch_assoc($query_siswa);

      $query_kelas_mapel = mysqli_query($koneksi, "SELECT * FROM tb_kelas_mapel WHERE id_kelas='$_SESSION[kelas]' AND id_mapel='$_GET[id_mapel]' ORDER BY id ASC LIMIT 1");
      $data_kelas_mapel = mysqli_fetch_assoc($query_kelas_mapel);


      if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 2044070) {
          move_uploaded_file($file_tmp, 'upload_ujian/' . $nama);
          $query    = mysqli_query($koneksi, "INSERT INTO `upload_ujjian`(`tanggal`, `nama_ujjian`, `file_ujjian`, `id_siswa`, `id_kelas_mapel`) VALUES ('$tanggal', '$nama_tgs', '$nama', '$data_siswa[id_siswa]', '$data_kelas_mapel[id]')");
          if ($query) {
            //echo 'FILE BERHASIL DI UPLOAD!';

            echo "<script>alert('FILE BERHASIL DI UPLOAD!');</script>";
          } else {


            echo "<script>alert('FILE GAGAL DI UPLOAD!');</script>";
          }
        } else {

          echo "<script>alert('UKURAN FILE TERLALU BESAR!');</script>";
        }
      } else {
        echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN!') </script>";
      }
    }
    ?>
		<form method="POST" enctype="multipart/form-data">
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
			<button type="submit" name="kirim_tugas" style="height: 5px;"  class="btn btn-primary">Simpan</button>
		</form>
	</div>






