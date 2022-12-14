<div class="card">
  <div class="card-header">
    <h3 class="card-title">Form Data Materi
    </h3>
    <div class="d-flex justify-content-end mb-3">
      <button class="btn btn-primary" onclick="document.location.href='?module=materi_add'"><i class="fa fa-plus"></i> Tambah Data</button>
    </div>
  </div>



  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No.</th>
          <th>Tanggal</th>
          <th>Judul</th>
          <th>Materi</th>
          <th>Kategori</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>

        <?php
        include 'koneksi.php';
        $query_tampil = mysqli_query($koneksi,"SELECT * FROM `tb_materi`");
        $no = 1;
        while ($data = mysqli_fetch_array($query_tampil)) {

          ?>
          <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $data['tanggal']?></td>
             <td><?php echo $data['judul']?></td> 
           <td><a href="<?php echo 'file_materi/'.$data['materi'];?>" target="_blank"><?php echo $data['materi']?></a></td>
            <td><?php echo $data['kategori']?></td>
            <td>
              <!-- <a href="" class="btn btn-warning"><i class="fa fa-pencil-alt"></i> Edit</a> | -->
              <a href="hapus_materi.php?id=<?= $data['id_materi']?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data ini?')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a> 
            </td>
          </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>


