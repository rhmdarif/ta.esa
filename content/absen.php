<div>
	<img src="../assets/img/sma2.png" alt="" style="width:100%;height:250px;">
</div>

<div>
	<br>
	<h1 align="center">Absensi E-Learning SMAN 2 KOTO X1 TARUSAN</h1>
	<hr style="border-color: black;">
</div>



<!-- /.card-header -->
<div class="card-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama&Tanggal</th>
        <th>Status</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
      </tr>
      
    </thead>
    <tbody>
     <?php 

     include "../conf/koneksi.php";

     $query_tampil = mysqli_query($koneksi,"SELECT * FROM `tb_absen`");
     
     $no = 1;
     while ($data = mysqli_fetch_array($query_tampil)) {

       ?>
       
       <tr>
        <td><?= $no++;?></td>
        <form action="" method="POST">
          <td>
            <textarea class="form-control" name="nama"></textarea>
            <!-- <input type="text" class="form-control" name="nama"> -->
            <input type="hidden" name="id" value="<?= $data['id_absen']?>">
            <input type="date" class="form-control" name="tgl" value="<?= $data['tanggal']?>">
          </td>
          
          <td>

          	<select name="status" class="form-control" id="status">
          		<option value="">- Pilih -</option>
          		<?php
              $query = mysqli_query($koneksi, "SELECT * FROM `tb_status`");

              while ($data = mysqli_fetch_array($query)) {

                ?>

                <option value="<?php echo $data['id_status']?>"><?php echo $data['nama_status']?></option>

              <?php } ?>
            </select>
          </td>
          <td>

            <textarea class="form-control" name="deskripsi"></textarea>
            <!-- <input type="text" class="form-control" name="deskripsi"> -->
          </td>
          
          <td>
            <input type="submit" name="save" class="btn btn-primary" style="width: 120px;height: 60px;" value="Simpan">
          </td>
        </form>
      </tr>
      
    <?php } ?>
    

    <?php

    if(isset($_POST["save"])){
      include "../conf/koneksi.php";

      $id = $_POST['id'];
      $nama = $_POST['nama'];
      $tgl = $_POST['tgl'];
      $status = $_POST['status'];
      $deskripsi = $_POST['deskripsi'];


      
      $sql = mysqli_query($koneksi, "UPDATE `tb_absen` SET `tanggal`='$tgl',`status`='$status',`keterangan`='$deskripsi',`nama`='$nama' WHERE id_absen='$id'");
      
       // alert
      if ($query) {
        echo "<script>
        alert('Data Berhasil Disimpan!');
        window.location.href='?module=add_absen'
        </script>";
      }else{
        echo "<script>
        alert('Data Gagal Disimpan!');
        window.location.href='?module=add_absen'
        </script>";
      }

    }

    ?>
  </tbody>
</table>
</div>

