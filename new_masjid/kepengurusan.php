<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_pengurus");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link rel="stylesheet" href="assets/CSS/beranda.css"> -->
</head>

<div class="col-lg-10 mb-4">
    <div class="container mt-5">
        <div class="row">            
            <!-- Content -->
            <div class="col-lg-9">
                <div class="row text-center d-flex justify-content-center">
                    <div class="col-lg-6">
                        <h2 class="bg-white py-2" style="font-family: 'Poppins'; border-radius: 10px; box-shadow: 0px 3px 5px #aaaaaa2f;">PENGURUS</h2>
                    </div>
                </div>                
                <div class="row mt-2 pt-3">
                    <!-- Kontak 1 -->
                    <?php foreach ($result as $row) { ?>
                    <div class="col-lg-4 d-flex justify-content-center">
                        <div class="row m-3 text-center">
                            <img src="assets/img/<?php echo $row['foto'] ?>" class="img-fluid rounded-circle" alt="">
                            <h5 class="card-title mt-3"><?php echo $row['nama'] ?></h5>
                            <p class="card-title"><?php echo $row['jabatan'] ?></p>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- Kontak 1 End-->

                    
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