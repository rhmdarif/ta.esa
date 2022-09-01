<?php
include "koneksi.php";


$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM `tb_kelas` WHERE id_kelas='$id'");


echo "<script>
alert('Data Berhasil Dihapus');
window.location='index.php?module=file_kelas';
</script>";


?>