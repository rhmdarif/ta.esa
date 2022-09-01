<?php
include "koneksi.php";


$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM `tb_mapel` WHERE id_mapel='$id'");


echo "<script>
alert('Data Berhasil Dihapus');
window.location='index.php?module=mapel';
</script>";


?>