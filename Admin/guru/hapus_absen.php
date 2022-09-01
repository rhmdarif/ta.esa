<?php
include "koneksi.php";


mysqli_query($koneksi, "DELETE FROM `tb_absen` WHERE id_absen='$id'");


echo "<script>
alert('Data Berhasil Dihapus');
window.location='index.php?module=absen';
</script>";


?>