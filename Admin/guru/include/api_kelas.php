<?php
include "../koneksi.php";
if (isset($_POST['jurusan'])) {
	$jurusan = $_POST["jurusan"];

	$sql = "select * from `tb_kelas` where jurusan=$jurusan";
	$hasil = mysqli_query($koneksi, $sql);
	while ($data = mysqli_fetch_array($hasil)) {


		echo json_encode($data);

		?>
		<option value="<?php echo  $data['id_kelas']; ?>"><?php echo $data['kd_kelas']; ?></option>
		
	}
}

?>