<div>
	<img src="assets/img/sma2.png" alt="" style="width:100%;height:250px;">
</div>

<div>
	<br>
	<h1 align="center">E-Learning SMAN 2 KOTO X1 TARUSAN</h1>
	<hr style="border-color: black;">
</div>


<div class="col-md-4">
	<h2>Sejarah </h2>
  <div>
    <img src="assets\sejarah.png">
  </div>
</div>

<div class="card border-dark mb-3" style="max-width: 30rem;margin-left: 10px;">
  <div class="card-body text-dark">
    <h5 class="card-title"></h5>
    <p class="card-text">Sejarah (bahasa Yunani: ἱστορία, historia (artinya "mengusut, pengetahuan yang diperoleh melalui penelitian"; bahasa Arab:اريخ, tārīkh; bahasa Jerman: geschichte) adalah kajian tentang masa lampau, khususnya bagaimana kaitannya dengan manusia. Dalam bahasa Indonesia, sejarah, babad, hikayat, riwayat, tarikh, tawarik, tambo, atau histori dapat diartikan sebagai kejadian dan peristiwa yang benar-benar terjadi pada masa lampau atau asal usul (keturunan) silsilah, terutama bagi raja-raja yang memerintah. Ini adalah istilah umum yang berhubungan dengan peristiwa masa lalu serta penemuan, koleksi, organisasi, dan penyajian informasi mengenai peristiwa ini. Istilah ini mencakup kosmik, geologi, dan sejarah makhluk hidup, tetapi sering kali secara umum diartikan sebagai sejarah manusia.</p>
  </div>
</div>
<a href="?module=add_absen" class="btn btn-rounded btn-primary w-20" style="border-radius: 2rem;">Absen</a>

<?php

include '../Admin/guru/koneksi.php';

$sql = mysqli_query($koneksi, "SELECT * FROM `tb_materi` WHERE kategori='SEJARAH'");

$data = mysqli_fetch_array($sql);

?>

<a href="<?php echo 'Admin/guru/file_materi/'.$data['materi'];?>"><h5>  <i class="fa fa-file-pdf" aria-hidden="true"></i>Materi Minggu 1</h5></a>
<div>
                  <img src="assets\sejarah1.png">
                </div>

<h5>

<?php

include '../Admin/guru/koneksi.php';


//$sql = mysqli_query($koneksi, "SELECT * FROM `tb_tugas` WHERE kode_kelas='$_SESSION[kelas]'");

$sql = mysqli_query($koneksi, "SELECT * FROM `tb_tugas` WHERE kode_kelas='$_SESSION[kelas]';");


$data = mysqli_fetch_array($sql);


?>


<a href="<?php echo '../Admin/guru/file_tugas/'.$data['soal'];?>"><h5> <i class="fa fa-folder-open" aria-hidden="true"></i></i>Tugas Sejarah</h5></a>

<div>
                  <img src="assets\sejarah1.png">
                </div>

  <h5>
<?php

include '../Admin/guru/koneksi.php';

$sql = mysqli_query($koneksi, "SELECT * FROM `tb_ujian` WHERE kategori='SEJARAH'");

$data = mysqli_fetch_array($sql);

?>


<a href="?module=ujjian_rah"><h5>  <i class="fa fa-file" aria-hidden="true"></i> Ujian</h5></a>
<div>
                  <img src="assets\sejarah1.png">
                </div>



</div>
</div>
<!-- /.col-md-6 -->
<div class="col-lg-7">
</div>

