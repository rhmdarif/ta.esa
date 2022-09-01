<?php
include "koneksi.php";


$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM `tb_raport` WHERE id_raport='$id'");


echo "<script>
alert('Data Berhasil Dihapus');
window.location='index.php?module=raport';
</script>";


?>