<?php
include "koneksi.php";


$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM `tb_tugas` WHERE id_tugas='$id'");


echo "<script>
alert('Data Berhasil Dihapus');
window.location='index.php?module=file_tugas';
</script>";


?>