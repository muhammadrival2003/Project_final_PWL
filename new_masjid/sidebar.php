<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/CSS/sidebar.css">
</head>

<div class="col-lg-2 ">

    <nav class="navbar navbar-expand-lg bg-white p-0 ">
        <!-- Tombol offcanvas sidebar -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Tombol offcanvas sidebar End -->

        <!-- Tombol offcanvas rightbar -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Tombol offcanvas rightbar End -->

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body-lg d-flex flex-column justify-content-between ">
                <div class="d-flex flex-column flex-shrink-0 ">
                    <div class="row text-center mt-5 m-2 ">
                        <h4 class="text-albayaan ">AL-BAYAAN</h4>
                    </div>
                    <ul class="nav nav-pills flex-column mb-auto ">
                        <li class="nav-item">
                            <a href="beranda" class="nav-link " aria-current="page">
                                <h6 class="text-sidebar <?php echo ((isset($_GET['x']) && $_GET['x'] == 'beranda') || !isset($_GET['x'])) ? 'active' : 'none'; ?>"><i class="bi bi-house-door-fill me-3"></i>Beranda</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="kegiatans" class="nav-link " aria-current="page">
                                <h6 class="text-sidebar <?php echo ((isset($_GET['x']) && $_GET['x'] == 'kegiatans') || !isset($_GET['x'])) ? 'active' : 'none'; ?>"><i class="bi bi-activity me-3"></i></i>Kegiatan</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="galeri" class="nav-link " aria-current="page">
                                <h6 class="text-sidebar  <?php echo ((isset($_GET['x']) && $_GET['x'] == 'galeri') || !isset($_GET['x'])) ? 'active' : 'none'; ?>"><i class="bi bi-images me-3"></i>Galeri</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="kepengurusan" class="nav-link " aria-current="page">
                                <h6 class="text-sidebar <?php echo ((isset($_GET['x']) && $_GET['x'] == 'kepengurusan') || !isset($_GET['x'])) ? 'active' : 'none'; ?>"><i class="bi bi-person-lines-fill me-3"></i>Pengurus</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="kontak" class="nav-link " aria-current="page">
                                <h6 class="text-sidebar <?php echo ((isset($_GET['x']) && $_GET['x'] == 'kontak') || !isset($_GET['x'])) ? 'active' : 'none'; ?>"><i class="bi bi-person-lines-fill me-3"></i>Kontak</h6>
                            </a>
                        </li>
                        <?php
                        // $level = $_SESSION['level_decafe'];
                        if (isset($_SESSION['level_decafe'])) {
                            $level = $_SESSION['level_decafe'];
                            if ($level == 1) { ?>
                                <li class="nav-item">
                                    <a href="#collapseExample" class="nav-link py-0" aria-current="page" data-bs-toggle="collapse">
                                        <h6 class="text-sidebar mb-0"><i class="bi bi-pencil-square me-3"></i>Kelola</h6>
                                    </a>
                                    <div class="collapse" id="collapseExample">
                                        <div class="kelola-collapse d-flex justify-content-center-bottom">
                                            <ul>
                                                <hr>
                                                <li class="mt-1 mb-1">
                                                    <a href="#">Dashboard</a>
                                                </li>
                                                <li class="nav-item mb-1">
                                                    <a href="kelolaKegiatan" class="nav-link p-0" aria-current="page">
                                                        <h6 class="<?php echo ((isset($_GET['x']) && $_GET['x'] == 'kelolaKegiatan') || !isset($_GET['x'])) ? 'live' : 'none'; ?>"></i>Kegiatan</h6>
                                                    </a>
                                                </li>
                                                <li class="mb-1">
                                                    <a href="kelolaGaleri" class="nav-link p-0" aria-current="page">
                                                        <h6 class="<?php echo ((isset($_GET['x']) && $_GET['x'] == 'kelolaGaleri') || !isset($_GET['x'])) ? 'live' : 'none'; ?>"></i>Galeri</h6>
                                                    </a>
                                                </li>
                                                <li class="mb-1">
                                                    <a href="#">Kontak</a>
                                                </li>
                                                <li class="mb-1">
                                                    <a href="masuk" class="nav-link p-0" aria-current="page">
                                                        <h6 class="<?php echo ((isset($_GET['x']) && $_GET['x'] == 'masuk') || !isset($_GET['x'])) ? 'live' : 'none'; ?>"></i>Uang Masuk</h6>
                                                    </a>
                                                </li>
                                                <li class="mb-1">
                                                    <a href="keluar" class="nav-link p-0" aria-current="page">
                                                        <h6 class="<?php echo ((isset($_GET['x']) && $_GET['x'] == 'keluar') || !isset($_GET['x'])) ? 'live' : 'none'; ?>"></i>Uang Keluar</h6>
                                                    </a>
                                                </li>
                                                <li class="mb-1">
                                                    <a href="kelolaPengurus" class="nav-link p-0" aria-current="page">
                                                        <h6 class="<?php echo ((isset($_GET['x']) && $_GET['x'] == 'kelolaPengurus') || !isset($_GET['x'])) ? 'live' : 'none'; ?>"></i>Pengurus</h6>
                                                    </a>
                                                </li>
                                                <hr>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                        <?php }
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>

</html>