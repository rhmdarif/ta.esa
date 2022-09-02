<?php include "../include/atas.php"; ?>
<?php include "../component/header.php"?>

<?php
if (isset($_GET['module'])) {
  if ($_GET['module'] == 'elearning') {
    include "elearning.php";
  }

  if ($_GET['module'] == 'home') {
    include "home.php";
  }

  if ($_GET['module'] == 'forumdiskusi') {
    include "forumdiskusi.php";
  }

    // biologi
  if ($_GET['module'] == 'biologi') {
    include "biologi.php";
  }

      // kimia
  if ($_GET['module'] == 'kimia') {
    include "kimia.php";
  }

      // fisika
  if ($_GET['module'] == 'fisika') {
    include "fisika.php";
  }

  // pkn
  if ($_GET['module'] == 'pkn') {
    include "pkn.php";
  }

  if ($_GET['module'] == 'tugas_pkn') {
    include "isi_tugas_pkn.php";
  }

      // sosiologi
  // if ($_GET['module'] == 'sosiologi') {
  //   include "sosiologi.php";
  // }



      // geografi
  if ($_GET['module'] == 'geografi') {
    include "geografi.php";
  }

  if ($_GET['module'] == 'form_tugas') {
    include "isi_tugas.php";
  }

  if ($_GET['module'] == 'form_ujian') {
    include "ujian.php";
  }
}

if ($_GET['module'] == 'ujjian_indo') {
  include "ujjian_indo.php";
}

      // ekonomi
  // if ($_GET['module'] == 'ekonomi') {
  //   include "ekonomi.php";
  // }

   // tik
  if ($_GET['module'] == 'tik') {
    include "tik.php";
  }

  if ($_GET['module'] == 'tugas_tik') {
    include "isi_tugas_tik.php";
  }

    // mtk
  if ($_GET['module'] == 'Matematika') {
    include "Matematika.php";
  }
  if ($_GET['module'] == 'tugas_mtk') {
    include "isi_tugas_mtk.php";
  }

    // bhs indo
  if ($_GET['module'] == 'BahasaIndonesia') {
    include "BahasaIndonesia.php";
  }
  if ($_GET['module'] == 'tugas_bi') {
    include "isi_tugas_bi.php";
  }

    // sejarah
  if ($_GET['module'] == 'sejarah') {
    include "sejarah.php";
  }
    // bhs inggris
  if ($_GET['module'] == 'bhs.inggris') {
    include "bhs.inggris.php";
  }
    // Kursus Saya
  if ($_GET['module'] == 'kursus-saya') {
    include "kursus-saya.php";
  }
  if ($_GET['module'] == 'login') {
    include "login.php";
  }
  
  if ($_GET['module'] == 'logout') {
    include "logout.php";
  }
    // Absen
  if ($_GET['module'] == 'add_absen') {
   include "absen.php";
 }


else{
  include "home.php";
}
?>

<?php



?>
<?php include "../component/footer.php"?>

<?php include "../include/bawah.php"; ?>