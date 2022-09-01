 <header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html"><img src="../assets/img/logosma.png" alt=""></a>
                    </div>
                    <div>
                        <br>
                        <h2><b>SMAN 2 Koto</b> X1 Tarusan</h2>
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                        <nav>                                                
                            <ul id="navigation">  
                               <!--  <li><a href="?module=home">E-Learning</a></li> -->
                               <li><a href="?module=home">Home</a></li>
                               <li class=""><a href="#">Kursus Saya</a>
                                <ul class="submenu">
                                    <?php 
                                    $query_mapel = mysqli_query($koneksi, "Select * From tb_mapel INNER JOIN tb_siswa ON tb_siswa.kd_kelas=tb_mapel.kd_kelas  Where tb_siswa.email='$_SESSION[username]'");
                                    while ($data_mapel=mysqli_fetch_assoc($query_mapel)) {
                                        echo '<li><a href="?module='.$data_mapel['nama_mapel'].'">'.$data_mapel['nama_mapel'].'</a></li>';
                                    }
                                    ?>
                                    <!-- <li><a href="?module=tik">TIK</a></li>
                                    <li><a href="?module=biologi">Biologi</a></li>
                                    <li><a href="?module=mtk">Matematika</a></li>
                                    <li><a href="?module=bhs.indo">Bahasa.Indonesia</a></li>
                                    <li><a href="?module=bhs.inggris">Bahasa.Inggris</a></li>
                                    <li><a href="?module=sejarah">Sejarah</a></li>
                                    <li><a href="?module=sosiologi">Sosiologi</a></li>
                                    <li><a href="?module=geografi">Geografi</a></li>
                                    <li><a href="?module=kimia">Kimia</a></li>
                                    <li><a href="?module=fisika">Fisika</a></li>
                                    <li><a href="?module=pkn">PKN</a></li> -->
                                </ul>
                            </li>
                            <li><a href="?module=forumdiskusi">Forum Diskusi</a></li>


                        </nav>
                    </div>
                    <!-- Header Right -->
                    <div class="header-right">
                        <ul>
                            <li>
                                <div class="nav-search search-switch">

                                </div>
                            </li>
                            <li class="fas fa-user"></i> <?php echo $_SESSION['username']; ?>&nbsp;&nbsp;<a href="#"></a>
                                <ul class="submenu">
                                    <li><a href="?module=login"></a></li>

                                </ul>
                            </li>
                            <li class="fas fa-sign-out-alt"></i><a href="../logout.php" style="color: black;">Logout</a>
                                <ul class="submenu">
                                    <li><a href="?module=login"></a></li>

                                </ul>
                            </li>

                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
