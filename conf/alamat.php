<?php

if(isset($_GET['page'])){
  $page = $_GET['page'];

  switch ($page) {
    // admin
    case 'forumdiskusi':
      include 'content/forumdiskusi.php';
    break;
    case 'tambah_user':
      include 'forumdiskusi/tambah_forumdiskusi.php';
    break;
    case 'edit_user':
      include 'user/edit_user.php';
    break;
    case 'hapus_user':
      include 'user/hapus_user.php';
    break;

    // =======================================


    //berita
    case 'berita':
      include 'berita/list_berita.php';
    break;
    case 'tambah_berita':
      include 'berita/tambah_berita.php';
    break;
    case 'edit_berita':
      include 'berita/edit_berita.php';
    break;
    case 'hapus_berita':
      include 'berita/hapus_berita.php';
    break;
    // =======================================


    //galery
    case 'galeri':
      include 'galeri/list_galeri.php';
    break;
    case 'tambah_galeri':
      include 'galeri/tambah_galeri.php';
    break;
    case 'edit_galeri':
      include 'galeri/edit_galeri.php';
    break;
    case 'hapus_galeri':
      include 'galeri/hapus_galeri.php';
    break;
    // =======================================


    //pengumuman
    case 'pengumuman':
      include 'pengumuman/list_pengumuman.php';
    break;
    case 'tambah_pengumuman':
      include 'pengumuman/tambah_pengumuman.php';
    break;
    case 'edit_pengumuman':
      include 'pengumuman/edit_pengumuman.php';
    break;
    case 'hapus_pengumuman':
      include 'pengumuman/hapus_pengumuman.php';
    break;
    // =======================================

    //kategori
    case 'kategori':
      include 'kategori/list_kategori.php';
    break;
    case 'tambah_kategori':
      include 'kategori/tambah_kategori.php';
    break;
    case 'edit_kategori':
      include 'kategori/edit_kategori.php';
    break;
    case 'hapus_kategori':
      include 'kategori/hapus_kategori.php';
    break;
    // =======================================


    //pimpinan
    case 'pimpinan':
      include 'pimpinan/list_pimpinan.php';
    break;
    case 'tambah_pimpinan':
      include 'pimpinan/tambah_pimpinan.php';
    break;
    case 'edit_pimpinan':
      include 'pimpinan/edit_pimpinan.php';
    break;
    case 'hapus_pimpinan':
      include 'pimpinan/hapus_pimpinan.php';
    break;
    // =======================================


    //visimisi
    case 'visimisi':
      include 'visimisi/list_visimisi.php';
    break;
    case 'tambah_visimisi':
      include 'visimisi/tambah_visimisi.php';
    break;
    case 'edit_visimisi':
      include 'visimisi/edit_visimisi.php';
    break;
    case 'hapus_visimisi':
      include 'visimisi/hapus_visimisi.php';
    break;
    // =======================================

    case 'logout':
      include 'logout.php';
    break;

  }

}else{
  include "dashboard.php";
}
?>