<?php
include "koneksi.php";


$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM `tb_ujian` WHERE id_ujian='$id'");


echo "<script>
alert('Data Berhasil Dihapus');
window.location='index.php?module=file_ujian';
</script>";


?>