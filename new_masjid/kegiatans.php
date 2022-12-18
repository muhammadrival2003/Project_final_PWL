<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_kegiatan");
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
            <?php
            if (empty($result)) {
            ?>
                <div class="col-lg-9">
                    <h6><?php echo "Gambar kosong"; ?></h6>
                </div>
                <?php include "rightbar.php" ?>
                <?php
            } else {
                foreach ($result as $row) {
                ?>
                    <!-- Modal View Kegiatan-->
                    <div class="modal fade" id="ModalView<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_input_menu.php" method="POST" enctype="multipart/form-data">
                                        <!-- <div class="row text-center mb-3">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $row['nama_kegiatan']; ?></h1>
                                        </div> -->
                                        <div class="row mb-3">
                                            <div class="col-lg d-flex justify-content-center">
                                                <img class="img-thumbnail" style="width: 300px;" src="assets/img/<?php echo $row['foto']; ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg text-justify">
                                                <h1 class="modal-title fs-5 pb-1 px-3 border-bottom" id="exampleModalLabel"><?php echo $row['nama_kegiatan']; ?></h1>
                                                <p class="pt-2 px-3" style="text-align: justify;"><?php echo $row['keterangan']; ?></p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="input_menu_validate" value="12345">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal View Kegiatan-->

                <?php } ?>

                <div class="col-lg-9">
                    <div class="row text-center">
                        <h1 class="bg-white py-2" style="font-family: 'Poppins'; border-radius: 10px; box-shadow: 0px 3px 5px #aaaaaa2f;">Kegiatan</h1>
                    </div>
                    <div class="album">
                        <div class="container ">
                            <?php
                            $no = 1;
                            foreach ($result as $row) {
                            ?>
                                <hr>
                                <div class="row-lg d-flex flex-wrap justify-content-center my-3">
                                    <img src="assets/img/<?php echo $row['foto']; ?>" alt="" style="width: 200px; -radius: 5px;">
                                    <div class="col-lg text-lg-start text-center ms-4">
                                        <h4 class="mb-0" style="font-size: 25px; font-weight: bold;"><?php echo $row['nama_kegiatan']; ?></h4>
                                        <div class="row ">                                        
                                            <p class="mb-0 mt-2" style="font-size: 11px;color: black;height: 30px;overflow: auto;"><?php echo $row['keterangan']; ?></p>
                                        </div>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#ModalView<?php echo $row['id']; ?>" class="btn btn-success mb-4 p-0 px-2 pb-1 mt-2" style="-radius: 2px; font-size: 12px;">Selengkapnya</button>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php }; ?>
                </div>
                <!-- Righbar -->
                <?php include "rightbar.php" ?>
                <!-- Righbar End -->
        </div>
    </div>
</div>

</html>