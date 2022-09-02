<?php
  include '../Admin/admin/koneksi.php';
  $query_siswa = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE email='$_SESSION[username]'");
  if(mysqli_num_rows($query_siswa) == 0) {
    header("location: ?module=logout");
    die();
  }
  $data_siswa = mysqli_fetch_assoc($query_siswa);


  if(!isset($_GET['id_mapel'])) {
    header('location: ?module=home');
    die();
  }

  $query_mapel = mysqli_query($koneksi, "SELECT * FROM tb_mapel WHERE id_mapel='$_GET[id_mapel]'");
  if(mysqli_num_rows($query_mapel) == 0) {
    header('location: ?module=home');
    die();
  }
  $data_mapel = mysqli_fetch_assoc($query_mapel);
  var_dump($_SESSION);
?>
<div>
	<img src="../assets/img/sma2.png" alt="" style="width:100%;height:250px;">
</div>


<div>
	<br>
	<h1 align="center">E-Learning SMAN 2 KOTO X1 TARUSAN</h1>
	<hr style="border-color: black;">
</div>


<div class="col-md-4">
	<h2><?= $data_mapel['nama_mapel'] ?></h2>
</div>

<?php
  switch (strtolower($data_mapel['nama_mapel'])) {
    case 'bahasaindonesia':
      $teks_mapel = "Bahasa Indonesia adalah bahasa nasional dan resmi di seluruh Indonesia. Ini merupakan bahasa komunikasi resmi, diajarkan di sekolah-sekolah dan digunakan untuk disiarkan di media elektronik dan digital.";
      break;
    case 'geografi':
      $teks_mapel = 'Geo berarti bumi (dan makna luas lainnya yang terkait), dan graphos yang berarti “untuk menuliskan tentang”. Secara harfiah maka pengertian geografi adalah “untuk menuliskan tentang bumi”. Geografi sering diketahui sebagai ilmu yang mempelajari tentang negara, tanah, dan masyarakat.';
      break;
    
    default:
      $teks_mapel = "";
      break;
  }
?>
<div class="card border-dark mb-3" style="max-width: 25rem;margin-left: 15px;">
  <div class="card-body text-dark">
    <h5 class="card-title"></h5>
    <p class="card-text"> <?= $teks_mapel ?> </p>
  </div>
</div>
<!-- <button class="btn btn-rounded btn-primary w-20" style="border-radius: 2rem;">Absen</button> -->

<a href="?module=add_absen" class="btn btn-rounded btn-primary w-20" style="border-radius: 2rem;">Absen</a>

<?php

$sql = mysqli_query($koneksi, 
"SELECT tb_materi.* FROM tb_materi LEFT JOIN tb_kelas_mapel ON tb_kelas_mapel.id=tb_materi.id_kelas_mapel WHERE tb_kelas_mapel.id_kelas = '$_SESSION[kelas]' AND tb_kelas_mapel.id_mapel='$data_mapel[id_mapel]'");
$list = "";
while ($materi = mysqli_fetch_assoc($sql)) {
  $list .= '<li class="list-group-item"><a href="../Admin/admin/file_materi/'.$materi['materi'].'" class="text-dark">'.$materi['tanggal'].' | '.$materi['judul'].'</a></li>';
}

?>

<h5>  <i class="fa fa-file-pdf" aria-hidden="true"></i>Materi Minggu 1</h5>
<ul class="list-group">
  <?= $list ?>
</ul>

<a href="?module=form_tugas&id_mapel=<?= $data_mapel['id_mapel']; ?>"><h5> <i class="fa fa-folder-open" aria-hidden="true"></i></i>Tugas</h5></a>

<a href="?module=form_ujian&id_mapel=<?= $data_mapel['id_mapel']; ?>"><h5>  <i class="fa fa-file" aria-hidden="true"></i> Ujian</h5></a>

<div>
  <img src="../assets/geografi1.png">
</div>
</div>
</div>
<!-- /.col-md-6 -->
<div class="col-lg-7">
</div>

