<?php 
include "../conf/koneksi.php";

$tanggal   = $_POST['tgl'];
$nama_tgs   = $_POST['nama_tugas'];
$ekstensi_diperbolehkan    = array('pdf','docx');
$nama    = $_FILES['tugas']['name'];
$x        = explode('.', $nama);
$ekstensi    = strtolower(end($x));
$ukuran        = $_FILES['tugas']['size'];
$file_tmp    = $_FILES['tugas']['tmp_name']; 



if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
	if($ukuran < 2044070){ 
		move_uploaded_file($file_tmp, 'upload_tugas/'.$nama);
		$query    = mysqli_query($koneksi, "INSERT INTO `upload_tugas`(`tanggal`, `nama_tugas`, `file_tugas`) VALUES ('$tanggal', '$nama_tgs', '$nama')");
		if($query){
			//echo 'FILE BERHASIL DI UPLOAD!';

			echo "<script>alert('FILE BERHASIL DI UPLOAD!');
			window.location.href='index.php?module=Matematika';
			</script>";

		}else{
			echo "<script>alert('FILE GAGAL DI UPLOAD!');
			window.location.href='index.php?module=Matematika';
			</script>";
		}
	}else{
		echo "<script>alert('UKURAN FILE TERLALU BESAR!');
		window.location.href='index.php?module=Matematika';
		</script>";
	}
}else{
	echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN!';
}

?> 