<div class="card">
  <div class="card-header">
    <h3 class="card-title">Form Data Upload Tugas
    </h3>
    <div class="d-flex justify-content-end mb-3">
      <!-- <button class="btn btn-primary" onclick="document.location.href='?module=add_tugas'"><i class="fa fa-plus"></i> Tambah Data</button> -->
    </div>
  </div>



  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No.</th>
          <th>Tanggal</th>
          <th>Nama Siswa</th>
          <th>Kelas</th>
          <th>Nama Tugas</th>
          <th>File Tugas</th>
        </tr>
      </thead>
      <tbody>

        <?php
        include 'koneksi.php';

        $query = mysqli_query($koneksi, "SELECT * FROM `upload_tugas` LEFT JOIN tb_siswa ON tb_siswa.id_siswa = upload_tugas.id_siswa LEFT JOIN tb_kelas_mapel ON tb_kelas_mapel.id = upload_tugas.id_kelas_mapel");
        $no = 1;
        while ($data = mysqli_fetch_array($query)) {

          ?>

          <tr>
            <td><?= $no++;?></td>
            <td><?= $data['tanggal']?></td>
            <td><?= $data['nama'] ?? "" ?></td>
            <td><?= $data['id_kelas'] ?? "" ?></td>
            <td><?= $data['nama_tugas']?></td>
            <td><a href="<?php echo '../../content/upload_tugas/'.$data['file_tugas'];?>" target="_blank"><?php echo $data['file_tugas']?></a></td>
          </tr>

        <?php } ?>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>


