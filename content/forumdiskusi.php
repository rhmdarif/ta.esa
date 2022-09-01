<div>
  <img src="../assets/img/sma2.png" alt="" style="width:100%;height:250px;">
</div>

<div>
  <br>
  <h1 align="center">E-Learning SMAN 2 KOTO X1 TARUSAN</h1>
  <hr style="border-color: black;">
</div>


<div class="col-md-4">
  <p>Forum Diskusi </p>
</div>
<div class="mt-3 pl-4">
  <h5>
    <i class="fa fa-user"></i>
  </h5>
</div>

<div class="card border-dark mb-3" style="max-width: 25rem;margin-left: 15px;">
  <div class="card-body text-dark">
    <h5 class="card-title"></h5>
    <p class="card-text">
      <form action="" method="POST">
        <div class="form-group">
          <label>Isi Diskusi</label>
          <br>
          <input type="text" class="form-control" name="isi" placeholder="sihlakan di isi!"></p>
        </div>
      </div>
    </div>
  </div>
  <button type="submit" name="save" class="btn btn-rounded btn-primary w-20" style="border-radius: 2rem;margin-left: 11px;">Kirim</button>
</form>


<?php

if(isset($_POST["save"])){
  include "conf/koneksi.php";


  $isi = $_POST['isi'];

  $sql = mysqli_query($koneksi, "INSERT INTO `tb_forum`(`isi`) VALUES ('$isi')");
  
       // alert
  if ($sql) {
    echo "<script>
    alert('Data Berhasil Disimpan!');
    window.location.href='?module=forumdiskusi'
    </script>";
  }else{
    echo "<script>
    alert('Data Gagal Disimpan!');
    window.location.href='?module=forumdiskusi'
    </script>";
  }


}

?>

