<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/CSS/rightbar.css">
</head>

<div class="col-lg-3 ">

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRightbar" aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
                <div class="offcanvas-header">                
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body-lg d-flex flex-column justify-content-between">
                    <div class="d-flex flex-column flex-shrink-0 ">
                        <div class="row m-0">
                            <div class="dropdown d-flex justify-content-center ">                                
                                <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="assets/img/teacher.png" alt="" width="42" height="42" class="rounded-circle me-4">
                                    <strong>
                                        <?php if (isset($_SESSION['level_decafe'])) {
                                            echo $hasil['nama'];
                                        }else{
                                            ?> <h6>Login</h6>  <?php
                                        }
                                        ?>                                            
                                    </strong>
                                </a>                                
                                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                    <li><a class="dropdown-item" href="login.php">Login</a></li>
                                    <li><a class="dropdown-item" href="#">Sign-up</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="proses/proses_logout.php">Sign out</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row sholat m-0 mt-5">
                            <h6 class="text-ws">Waktu Sholat</h6>
                            <ul>
                                <li class="d-flex justify-content-between">
                                    <span><i class="bi bi-alarm mx-2"></i>Shubuh</span>
                                    <span class="me-3">5 : 30</span>
                                </li>
                                <li class="d-flex justify-content-between mt-3">
                                    <span><i class="bi bi-alarm mx-2"></i>Dzuhur</span>
                                    <span class="me-3">5 : 30</span>
                                </li>
                                <li class="d-flex justify-content-between mt-3">
                                    <span><i class="bi bi-alarm mx-2"></i>Ashar</span>
                                    <span class="me-3">5 : 30</span>
                                </li>
                                <li class="d-flex justify-content-between mt-3">
                                    <span><i class="bi bi-alarm mx-2"></i>Magrib</span>
                                    <span class="me-3">5 : 30</span>
                                </li>
                                <li class="d-flex justify-content-between mt-3">
                                    <span><i class="bi bi-alarm mx-2"></i>Isya</span>
                                    <span class="me-3">5 : 30</span>
                                </li>
                            </ul>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </nav>

</html>