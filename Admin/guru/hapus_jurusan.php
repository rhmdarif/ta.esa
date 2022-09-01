<?php
include "koneksi.php";


$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM `tb_jurusan` WHERE id_jurusan='$id'");


echo "<script>
alert('Data Berhasil Dihapus');
window.location='index.php?module=jurusan';
</script>";


?>