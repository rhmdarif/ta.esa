<div class="card">
  <div class="card-header">
    <h3 class="card-title">Form Data Upload Ujian
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
          <th>Nama ujian</th>
          <th>File ujian</th>
        </tr>
      </thead>
      <tbody>

        <?php
        include 'koneksi.php';

        $query = mysqli_query($koneksi, "SELECT * FROM `upload_ujjian`");
        $no = 1;
        while ($data = mysqli_fetch_array($query)) {

          ?>

          <tr>
            <td><?= $no++;?></td>
            <td><?= $data['tanggal']?></td>
            <td><?= $data['nama_ujjian']?></td>
            <td><a href="<?php echo '../../content/upload_tugas/'.$data['file_ujjian'];?>" target="_blank"><?php echo $data['file_ujjian']?></a></td>
          </tr>

        <?php } ?>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>


