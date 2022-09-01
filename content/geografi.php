<div>
	<img src="../assets/img/sma2.png" alt="" style="width:100%;height:250px;">
</div>


<div>
	<br>
	<h1 align="center">E-Learning SMAN 2 KOTO X1 TARUSAN</h1>
	<hr style="border-color: black;">
</div>


<div class="col-md-4">
	<h2>GEOGRAFI</h2>
  <div>
    <img src="../assets/geografi.png">
  </div>
</div>

<div class="card border-dark mb-3" style="max-width: 25rem;margin-left: 15px;">
  <div class="card-body text-dark">
    <h5 class="card-title"></h5>
    <p class="card-text"> Geo berarti bumi (dan makna luas lainnya yang terkait), dan graphos yang berarti “untuk menuliskan tentang”. Secara harfiah maka pengertian geografi adalah “untuk menuliskan tentang bumi”. Geografi sering diketahui sebagai ilmu yang mempelajari tentang negara, tanah, dan masyarakat.</p>
  </div>
</div>
<!-- <button class="btn btn-rounded btn-primary w-20" style="border-radius: 2rem;">Absen</button> -->

<a href="?module=add_absen" class="btn btn-rounded btn-primary w-20" style="border-radius: 2rem;">Absen</a>

<?php

include '../Admin/admin/koneksi.php';

$sql = mysqli_query($koneksi, "SELECT * FROM `tb_materi` WHERE kategori='GEOGRAFI'");

$data = mysqli_fetch_array($sql);

?>

<a href="<?php echo 'Admin/admin/file_materi/'.$data['materi'];?>"><h5>  <i class="fa fa-file-pdf" aria-hidden="true"></i>Materi Minggu 1</h5></a>
<div>
  <img src="../assets/geografi1.png">
</div>


<?php

include '../Admin/guru/koneksi.php';


//$sql = mysqli_query($koneksi, "SELECT * FROM `tb_tugas` WHERE kode_kelas='$_SESSION[kelas]'");

$sql = mysqli_query($koneksi, "SELECT * FROM `tb_tugas` WHERE kode_kelas='$_SESSION[kelas]';");


$data = mysqli_fetch_array($sql);


?>


<a href="?module=form_tugas"><h5> <i class="fa fa-folder-open" aria-hidden="true"></i></i>Tugas Geografi</h5></a>
<div>
                <img src="../assets/geografi1.png">
                </div>


<?php

include '../Admin/guru/koneksi.php';

$sql = mysqli_query($koneksi, "SELECT * FROM `tb_ujian` WHERE kategori='GEOGRAFI'");

$data = mysqli_fetch_array($sql);

?>


<a href="?module=ujjian_geo"><h5>  <i class="fa fa-file" aria-hidden="true"></i> Ujian</h5></a>

<div>
  <img src="../assets/geografi1.png">
</div>
</div>
</div>
<!-- /.col-md-6 -->
<div class="col-lg-7">
</div>

