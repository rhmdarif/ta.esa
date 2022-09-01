<!doctype html>
<html class="no-js" lang="zxx">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>E-Learning</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/logosma.png">

  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/flaticon.css">
  <link rel="stylesheet" href="assets/css/slicknav.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <!--? Preloader Start -->
  <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
      <div class="preloader-inner position-relative">
        <div class="preloader-circle"></div>
        <div class="preloader-img pere-text">
          <img src="assets/img/logosma.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="login-box">
    <div class="login-logo">
      <img src="assets/img/sma2.png" alt="" style="width:100%;height:250px;">
      <div>
       <br>
       <h1 align="center">E-Learning SMAN 2 KOTO X1 TARUSAN</h1>
       <hr style="border-color: black;">
     </div>

   </div>
   <!-- /.login-logo -->
   <div class="card">
    <div class="card-body login-card-body">
      <h1 class="login-box-msg" align="center">Login Untuk Memulai</h1>
      <hr>

      <?php 
      if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
          echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
          <strong>GAGAl!</strong> Login Silahkan Ulangi Kembali.
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
          </button>
          </div>";

        }

      }
      ?>

      <form action="proses_login.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-users"></span>
            </div>
          </div>
          <span class="error invalid-feedback"></span>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <span class="error invalid-feedback"></span>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <div class="form-group" style="float: right;">
              <input type="submit" name="save" class="btn btn-primary" value="Login">
            </div>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>


<footer>
  <div>
   <p align="center">&copy; E-Learning<a href="https://instagram.com/smandutaofficial?igshid=YmMyMTA2M2Y=" target="_blank" style="color: blue;" > SMAN 2 KOTO X1 TARUSAN</a></p>
 </div>

</footer>

<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->

<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>

<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="./assets/js/jquery.scrollUp.min.js"></script>
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>



<!-- Jquery Plugins, main Jquery -->  
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>
</html>