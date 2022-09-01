<?php
include "koneksi.php";


$id_materi = $_GET['id_materi'];

mysqli_query($koneksi, "DELETE FROM `tb_materi` WHERE id='$id_materi'");


echo "<script>
alert('Data Berhasil Dihapus');
window.location='index.php?module=materi';
</script>";


?>