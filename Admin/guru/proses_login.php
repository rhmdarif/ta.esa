<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = $_POST['password'];




// menyeleksi data user dengan email dan password yang sesuai
$login = mysqli_query($koneksi,"select * from tb_guru where email='$email' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// buat session login dan username
	$_SESSION['email'] = $email;
	$_SESSION['level'] = "guru";
	// alihkan ke halaman dashboard admin
	header("location:../guru/index.php?module=dashboard");

}else{
	header("location:login.php?pesan=gagal");
}

?>