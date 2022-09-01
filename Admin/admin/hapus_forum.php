<?php
include "koneksi.php";


$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM `tb_forum` WHERE id_forum='$id'");


echo "<script>
alert('Data Berhasil Dihapus');
window.location='index.php?module=forum';
</script>";


?>