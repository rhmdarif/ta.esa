<?php
include "koneksi.php";


$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM `tb_guru` WHERE id_guru='$id'");


echo "<script>
alert('Data Berhasil Dihapus');
window.location='index.php?module=file_guru';
</script>";


?>