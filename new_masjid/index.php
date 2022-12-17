<?php
    session_start();
    if (isset($_GET['x']) && $_GET['x'] == 'beranda') {
        $page = "beranda.php";
        include "main.php";
    } elseif (isset($_GET['x']) && $_GET['x'] == 'kegiatans') {
        $page = "kegiatans.php";
        include "main.php";
    }elseif (isset($_GET['x']) && $_GET['x'] == 'galeri') {
        $page = "galeri.php";
        include "main.php";
    }elseif (isset($_GET['x']) && $_GET['x'] == 'kontak') {
        $page = "kontak.php";
        include "main.php";
    }elseif (isset($_GET['x']) && $_GET['x'] == 'kelolaKegiatan') {
        $page = "kelolaKegiatan.php";
        include "main.php";
    }elseif (isset($_GET['x']) && $_GET['x'] == 'kelolaGaleri') {
        $page = "kelolaGaleri.php";
        include "main.php";
    }elseif (isset($_GET['x']) && $_GET['x'] == 'kelolaPengurus') {
        $page = "kelolaPengurus.php";
        include "main.php";
    }elseif (isset($_GET['x']) && $_GET['x'] == 'masuk') {
        $page = "masuk.php";
        include "main.php";
    }elseif (isset($_GET['x']) && $_GET['x'] == 'keluar') {
        $page = "keluar.php";
        include "main.php";
    }elseif (isset($_GET['x']) && $_GET['x'] == 'rekapitulasi') {
        $page = "rekapitulasi.php";
        include "main.php";
    }elseif (isset($_GET['x']) && $_GET['x'] == 'kepengurusan') {
        $page = "kepengurusan.php";
        include "main.php";
    }elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
        $page = "login.php";        
    }else {
        $page = "beranda.php";
        header('location:beranda');
        include "main.php";
    }
?>