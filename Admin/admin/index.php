<?php include 'include/admin_header.php'?>
<?php include 'include/admin_sidebar.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<?php 

	

	if (isset($_GET['module'])) {
		if ($_GET['module'] == 'dashboard') {
			include "dashboard.php";
		}


		// tugas
		if ($_GET['module'] == 'file_tugas') {
			include "tugas.php";
		}

		if ($_GET['module'] == 'add_tugas') {
			include "tugas_add.php";
		}


		// UPLOAD TUGAS
		if ($_GET['module'] == 'upload_tgs') {
			include "upload_tugas.php";
		}

		// UPLOAD UJJIAN
		if ($_GET['module'] == 'upload_ujian') {
			include "upload_ujjian.php";
		}


		if ($_GET['module'] == 'absen') {
			include "absen.php";
		}
		if ($_GET['module'] == 'add_absen') {
			include "add_absen.php";
		}
		if ($_GET['module'] == 'edit_absen') {
			include "edit_absen.php";
		}
		if ($_GET['module'] == 'laporan_absen') {
			include "absen_laporan.php";
		}



		if ($_GET['module'] == 'file_ujian') {
			include "ujian.php";
		}
		if ($_GET['module'] == 'add_ujian') {
			include "ujian_add.php";
		}
		if ($_GET['module'] == 'edit_ujian') {
			include "ujian_edit.php";
		}

		// siswa
		if ($_GET['module'] == 'file_siswa') {
			include "siswa.php";
		}
		if ($_GET['module'] == 'add_siswa') {
			include "siswa_add.php";
		}
		if ($_GET['module'] == 'edit_siswa') {
			include "siswa_edit.php";
		}


		// guru
		if ($_GET['module'] == 'file_guru') {
			include "guru.php";
		}

		if ($_GET['module'] == 'add_guru') {
			include "guru_add.php";
		}

		if ($_GET['module'] == 'edit_guru') {
			include "guru_edit.php";
		}

       //materi
		if ($_GET['module'] == 'file_materi') {
			include "materi.php";
		}
		if ($_GET['module'] == 'materi_add') {
			include "materi_add.php";
		}
		if ($_GET['module'] == 'edit_materi') {
			include "materi_edit.php";
		}

		// mapel
		if ($_GET['module'] == 'mapel') {
			include "matpelajaran.php";
		}
		if ($_GET['module'] == 'add_mapel') {
			include "mapel_add.php";
		}
		if ($_GET['module'] == 'edit_mapel') {
			include "mapel_edit.php";
		}

// nilai
		if ($_GET['module'] == 'nilai') {
			include "nilai.php";
		}
		if ($_GET['module'] == 'add_nilai') {
			include "nilai_add.php";
		}
		if ($_GET['module'] == 'edit_nilai') {
			include "nilai_edit.php";
		}
		if ($_GET['module'] == 'laporan_nilai') {
			include "nilai_laporan.php";
		}


// raport
		if ($_GET['module'] == 'file_raport') {
			include "raport.php";
		}
		if ($_GET['module'] == 'add_raport') {
			include "raport_add.php";
		}
		if ($_GET['module'] == 'edit_raport') {
			include "raport_edit.php";
		}
		if ($_GET['module'] == 'laporan_raport') {
			include "raport_laporan.php";
		}



		// kelas
		if ($_GET['module'] == 'file_kelas') {
			include "kelas.php";
		}

		if ($_GET['module'] == 'add_kelas') {
			include "kelas_add.php";
		}

		if ($_GET['module'] == 'edit_kelas') {
			include "kelas_edit.php";
		}

// forum diskusi
		if ($_GET['module'] == 'forum') {
			include "forum.php";
		}

		if ($_GET['module'] == 'add_forum') {
			include "forum_add.php";
		}

		if ($_GET['module'] == 'edit_forum') {
			include "forum_edit.php";
		}

		// status 
		if ($_GET['module'] == 'status') {
			include  "status.php";
		}
		if ($_GET['module'] == 'add_status') {
			include "status_add.php";
		}
		if ($_GET['module'] == 'edit_status') {
			include "edit_status.php";
		}

		// jurusan
		if ($_GET['module'] == 'jurusan') {
			include "jurusan.php";
		}

		if ($_GET['module'] == 'edit_jurusan') {
			include "jurusan_edit.php";
		}

		if ($_GET['module'] == 'add_jurusan') {
			include "jurusan_add.php";
		}

		

	}



	?>

</div>

<?php include 'include/admin_footer.php'?>