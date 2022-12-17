<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_galeri");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/CSS/beranda.css">
</head>

<div class="col-lg-10 ">
    <div class="container mt-5">
        <div class="row">
            
            <?php
            if (empty($result)) {
            ?>
                <!-- <div class="row "> -->
                    <div class="col-lg-9">
                        <h6><?php echo "Gambar kosong"; ?></h6>
                    </div>
                    <?php include "rightbar.php" ?>            
                </div>                

                <?php
            } else {
                foreach ($result as $row) {
                ?>
                    <!-- Modal View Gambar-->
                    <div class="modal fade" id="ModalView<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $row['judul_foto']; ?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_input_menu.php" method="POST" enctype="multipart/form-data">
                                        <div class="row ">
                                            <img style="width: 500px;" src="assets/img/<?php echo $row['foto']; ?>" alt="">
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
                    <!-- End Modal View Gambar-->


                    <!-- Modal Edit Gambar-->
                    <div class="modal fade" id="ModalEdit<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Gambar</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_edit_foto.php" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control py-3" id="uploadFoto" placeholder="Your Name" name="foto" required>
                                                    <label class="input-group-text" for="uploadFoto">Upload Foto</label>
                                                    <div class="invalid-feedback">
                                                        Masukkan File Foto
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nama Menu" name="judul_foto" required>
                                                    <label for="floatingInput">Judul Foto</label>
                                                    <div class="invalid-feedback">
                                                        Masukkan judul foto
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="input_foto_validate" value="12345">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Edit Gambar End -->

                    <!-- Modal Delete-->
                    <div class="modal fade" id="ModalDelete<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data User</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_delete_foto.php" method="POST">
                                        <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                        <input type="hidden" value="<?php echo $row['foto'] ?>" name="foto">
                                        <div class="col-lg-12">
                                            Apakah anda ingin menghapus menu <b><?php echo $row['judul_foto'] ?></b>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger" name="input_user_validate" value="12345">Hapus</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal Delete-->

                <?php } ?>

                <!-- <div class="container ">
                    <div class="album py-5">
                        <div class="container "> -->
                            <div class="col-lg-9">
                                <div class="row border-bottom text-center">
                                    <h3>GALERI</h3>
                                </div>
                                <div class="album p-5">                                 
                                    <div class="row row-cols-1 row-cols-sm-2 g-3 ">
                                        <?php
                                        $no = 1;
                                        foreach ($result as $row) {
                                        ?>
                                            <div class="col">
                                                <div class="card shadow-sm">
                                                    <div class="row d-flex justify-content-center ">
                                                        <img style="width: 400px;" src="assets/img/<?php echo $row['foto']; ?>" alt="">
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row d-flex justify-content-between align-items-center">
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#ModalView<?php echo $row['id']; ?>">Lihat</button>
                                                                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#ModalEdit<?php echo $row['id']; ?>">Edit</button>
                                                                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#ModalDelete<?php echo $row['id']; ?>">Delete</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Righbar -->
                            <?php include "rightbar.php" ?>
                            <!-- Righbar End -->
                        </div>
                    </div>
                <?php }; ?>
                </div>
        </div>
    </div>
</div>


</html>