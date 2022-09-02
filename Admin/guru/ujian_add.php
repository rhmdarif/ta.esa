    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10 mt-3">

            <!-- batas -->

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input Data Ujian</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="judul" class="form-control" id="" placeholder="Judul" required>
                  </div>

                  <div class="form-group">
                    <label for="">Kelas</label>
                    <select class="form-control" id="kelas" name="kelas" >
                      <option value="">- Pilih -</option>
                      <?php
                      include 'koneksi.php';
                      $sql = mysqli_query($koneksi, "SELECT * FROM `tb_kelas` WHERE id_kelas IN (SELECT id_kelas FROM tb_kelas_mapel WHERE id_guru='$_SESSION[id_guru]') ORDER BY id_kelas ASC");

                      while ($data = mysqli_fetch_array($sql)) {

                        ?>
                        <option value="<?php echo $data['id_kelas']?>"><?php echo $data['kd_kelas']?>
                      </option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Soal</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="soal" class="custom-file-input" id="exampleInputFile" required>
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="">Kategori</label>
                  <input type="text" name="kategori" class="form-control" id="" placeholder="Kategori" required>
                </div>


                <div class="form-group">
                  <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                  <a href="?module=materi" class="btn btn-warning">Kembali</a>
                </div>
              </div>
              <!-- /.card-body -->
            </form>
            <?php
            include 'koneksi.php';

            if (isset($_POST['save'])) {

              $judul = $_POST['judul'];
              $kategori =  $_POST['kategori'];
              $kd_kelas =  $_POST['kelas'];

              $query_kelas_mapel = mysqli_query($koneksi, "SELECT * FROM tb_kelas_mapel WHERE id_kelas='$kd_kelas' AND id_guru='$_SESSION[id_guru]' ORDER BY id ASC LIMIT 1");
              $row_kelas_mapel = mysqli_num_rows($query_kelas_mapel);
              $data_kelas_mapel = mysqli_fetch_assoc($query_kelas_mapel);
              $id_kelas_mapel = ($row_kelas_mapel != 0)? $data_kelas_mapel['id'] : null;

              $ekstensi_diperbolehkan    = array('pdf','docx');
              $nama    = $_FILES['soal']['name'];
              $x        = explode('.', $nama);
              $ekstensi    = strtolower(end($x));
              $ukuran        = $_FILES['soal']['size'];
              $file_tmp    = $_FILES['soal']['tmp_name']; 




              if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                if($ukuran < 1044070){ 
                  move_uploaded_file($file_tmp, 'file_ujian/'.$nama);
                  $query    = mysqli_query($koneksi, "INSERT INTO `tb_ujian`(`kode_kelas`, `judul`, `soal`, `kategori`, `id_kelas_mapel`) VALUES ('$kd_kelas','$judul','$nama','$kategori', '$id_kelas_mapel')");
                  if ($query) {
                                    //$_SESSION['success'] = 'Disimpan';
                    echo "<script>
                    alert('Data Berhasil Disimpan!');
                    window.location='?module=file_ujian'
                    </script>";

                  }else{

                                    //$_SESSION['error'] = 'Disimpan';
                   echo "<script>
                   alert('Data Gagal Disimpan!');
                   window.location='?module=file_ujian'
                   </script>";
                 }
               }
               else{
                echo 'UKURAN FILE TERLALU BESAR!';
              }
            }
            else{
              echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN!';
            }



          }


          ?>



        </div>
      </div>
    </div>
  </section>