<?php 
session_start();

    // menghapus semua session
session_destroy();

    // mengalihkan halaman dan mengirim pesan logout
//header("location:index.php");
echo "<script>alert('Anda Sudah Logout!');
window.location.href='index.php';
</script>";

?>