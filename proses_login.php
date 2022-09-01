<?php 
session_start();
include 'conf/koneksi.php';

    // menangkap data yang dikirim dari form login
$username = $_POST['email'];
$password = $_POST['password'];

    // menyeleksi data pada tabel admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "SELECT * FROM `tb_siswa` WHERE email='$username' and password='$password'");

$row = mysqli_fetch_array($data);

    // menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);


if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['kelas'] = $row['kd_kelas'];
	$_SESSION['status'] = "login";
	//header("location:content/index.php?module=home");
	// echo "<script>alert('Berhasil')</script>";
	echo "<script>alert('Anda Berhasil Login!');
	window.location.href='content/index.php?module=home';
	</script>";
}else{
	header("location:login.php?pesan=gagal");
}
?>