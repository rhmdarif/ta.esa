<div class="card">
  <div class="card-header">
    <h3 class="card-title">Form Data Ujian
    </h3>
    <div class="d-flex justify-content-end mb-3">
      <button class="btn btn-primary" onclick="document.location.href='?module=add_ujian'"><i class="fa fa-plus"></i> Tambah Data</button>
    </div>
  </div>



  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No.</th>
          <th>Kelas</th>
          <th>Judul</th>
          <th>Soal</th>
          <th>Kategori</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>

        <?php
        include 'koneksi.php';
        $query_tampil = mysqli_query($koneksi,
        "SELECT tb_ujian.* FROM tb_ujian WHERE tb_ujian.id_kelas_mapel IN (SELECT tb_kelas_mapel.id FROM tb_kelas_mapel WHERE tb_kelas_mapel.id_guru='$_SESSION[id_guru]')");
        $no = 1;
        while ($data = mysqli_fetch_array($query_tampil)) {

          ?>
          <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $data['kode_kelas']?></td>
            <td><?php echo $data['judul']?></td>
            <td><a href="<?php echo 'file_ujian/'.$data['soal'];?>" target="_blank"><?php echo $data['soal']?></a></td>
            <td><?php echo $data['kategori']?></td>
            <td>
              <!-- <a href="" class="btn btn-warning"><i class="fa fa-pencil-alt"></i> Edit</a> | -->
              <a href="hapus_ujian.php?id=<?= $data['id_ujian']?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data ini?')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a> 
            </td>
          </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>





