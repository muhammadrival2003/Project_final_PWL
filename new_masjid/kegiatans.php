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
            <div class="col-lg-9">
                <div class="row ">
                    <!-- Modal Tambah Gambar-->
                    <div class="modal fade" id="ModalTambahKegiatan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kegiatan Baru</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_input_kegiatan.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control my-3" id="uploadFoto" placeholder="Your Name" name="foto" required>
                                                    <div class="invalid-feedback">
                                                        Masukkan File Foto
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nama Menu" name="nama_kegiatan" required>
                                                    <label for="floatingInput">Nama Kegiatan</label>
                                                    <div class="invalid-feedback">
                                                        Masukkan nama kegiatan
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nama Menu" name="keterangan" required>
                                                    <label for="floatingInput">Keterangan</label>
                                                    <div class="invalid-feedback">
                                                        Masukkan keterangan
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
                    <!-- Modal Tambah Gambar End -->

                    <?php
                    if (empty($result)) {
                    ?>
                        <h6><?php echo "Gambar kosong"; ?></h6>
                        <?php
                    } else {
                        foreach ($result as $row) {
                        ?>
                            <!-- Modal View Gambar-->
                            <div class="modal fade" id="ModalView<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-fullscreen-md-down">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $row['nama_kegiatan']; ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="needs-validation" novalidate action="proses/proses_input_menu.php" method="POST" enctype="multipart/form-data">
                                                <div class="row ">
                                                    <div class="col-lg-5">
                                                        <img class="img-thumbnail" style="width: 300px;" src="assets/img/<?php echo $row['foto']; ?>" alt="">
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <p><?php echo $row['keterangan']; ?></p>
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
                                            <form class="needs-validation" novalidate action="proses/proses_delete_menu.php" method="POST">
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

                        <div class="container">
                            <div class="row text-center">
                                <h1 class="bg-white py-2" style="font-family: 'Poppins'; border-radius: 10px; box-shadow: 0px 3px 5px #aaaaaa2f;">KEGIATAN</h1>
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
                                                <P class="mb-0 mt-2" style="font-size: 11px;"><?php echo $row['keterangan']; ?></P>
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#ModalView<?php echo $row['id']; ?>" class="btn btn-success mb-4 p-0 px-2 pb-1 mt-2" style="-radius: 2px; font-size: 12px;">Selengkapnya</button>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php }; ?>
                        </div>
                </div>
            </div>
            <?php include "rightbar.php" ?>
        </div>
    </div>
</div>

</html>