<?php
include "koneksi.php";


$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM `tb_siswa` WHERE id_siswa='$id'");


echo "<script>
alert('Data Berhasil Dihapus');
window.location='index.php?module=file_siswa';
</script>";


?>