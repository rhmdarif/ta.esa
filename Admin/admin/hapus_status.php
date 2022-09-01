<?php
include "koneksi.php";


$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM `tb_status` WHERE id_status='$id'");


echo "<script>
alert('Data Berhasil Dihapus');
window.location='index.php?module=status';
</script>";


?>