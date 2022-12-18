<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_isi_khutbah");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/CSS/beranda.css">
</head>

<div class="col-lg-10">
    <div class="container mt-5">
        <div class="row">
            <!-- Content -->
            <div class="col-lg-9">
                <div class="row ">
                    <!-- Banner -->
                    <div class="banner ">
                        <img class="img-banner " src="assets/img/Banner.jpg" alt="">
                    </div>
                    <!-- Banner End -->
                </div>

                <div class="row mt-4 ">
                    <!-- Kahtib -->
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title text-khatib">Khatib Jumat</h5>
                                <picture>
                                    <img src="assets/img/teacher.png" width="150" class="img-fluid rounded-circle" alt="...">
                                </picture>
                                <p class="card-text1 my-2">Ir. Zamzami, ST., M.Eng</p>
                                <p class="card-text2"> Wakil Direktur II</p>
                            </div>
                        </div>
                    </div>
                    <!-- Kahtib End -->

                    <!-- Download -->
                    <div class="col-lg-7">
                        <div class="container-lg download">
                            <h5 style="font-family: 'Poppins';">Download isi Khutbah</h5>
                            <ul>
                                <?php foreach ($result as $row) { ?>
                                <li class="d-flex flex-row flex-wrap">
                                    <img src="assets/img/Icon_pengajian.png" style="margin-left: 10px; width: 65px; height: 65px;" alt="">
                                    <div class="col-lg-6 text-download ">
                                        <h6><?php echo $row['materi'] ?></h6>
                                        <p>Tanggal : <?php echo $row['waktu'] ?></p>
                                    </div>
                                    <div class="d-grid align-items-center">
                                        <a class="btn btn-success" href="assets/img/<?php echo $row['file']; ?>" download="<?php echo $row['materi'] ?>.pdf">Download</a>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>                            
                        </div>
                    </div>
                    <!-- Download End -->
                </div>
            </div>
            <!-- Content End -->

            <!-- Rightbar -->
            <?php include "rightbar.php" ?>
            <!-- Rightbar End -->
        </div>
    </div>
</div>

</html>