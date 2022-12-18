<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_kontak");
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
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <!-- Tombol Tambah Kontak -->
                    <div class="col d-flex justify-content-between">
                        <h5>Kelola Data Pengurus</h5>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahKontak">Tambah Kontak</button>
                    </div>
                    <!-- Tombol Tambah Kontak End -->
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Modal Tambah Kontak -->
                    <div class="modal fade" id="ModalTambahKontak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kontak</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_input_kontak.php" method="POST" enctype="multipart/form-data">
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
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nama Menu" name="nama" required>
                                                    <label for="floatingInput">Nama Kontak</label>
                                                    <div class="invalid-feedback">
                                                        Masukkan nama kontak
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nama Menu" name="jabatan" required>
                                                    <label for="floatingInput">Jabatan</label>
                                                    <div class="invalid-feedback">
                                                        Masukkan jabatan
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nama Menu" name="nohp" required>
                                                    <label for="floatingInput">No HP</label>
                                                    <div class="invalid-feedback">
                                                        Masukkan No HP
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="input_kontak_validate" value="12345">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Tambah Pengurus End -->

                    <?php
                    if (empty($result)) {
                    ?>

                        <h6><?php echo "Data Kontak Kosong"; ?></h6>

                        <?php
                    } else {
                        foreach ($result as $row) {
                        ?>
                            <!-- Modal View Pengurus-->
                            <div class="modal fade" id="ModalView<?php echo $row['id_kontak']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-fullscreen-md-down">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $row['nama']; ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="needs-validation" novalidate action="proses/proses_input_kontak.php" method="POST" enctype="multipart/form-data">
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
                            <!-- End Modal View Pengurus-->

                            <!-- Modal Edit Pengurus-->
                            <div class="modal fade" id="ModalEdit<?php echo $row['id_kontak']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-fullscreen-md-down">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Kontak</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="needs-validation" novalidate action="proses/proses_edit_kontak.php" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" value="<?php echo $row['id_kontak']; ?>" name="id">
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
                                                            <input type="text" class="form-control" id="floatingInput" placeholder="Nama Menu" name="nama" required>
                                                            <label for="floatingInput">Nama Kontak</label>
                                                            <div class="invalid-feedback">
                                                                Masukkan nama kontak
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="floatingInput" placeholder="Nama Menu" name="jabatan" required>
                                                            <label for="floatingInput">Jabatan</label>
                                                            <div class="invalid-feedback">
                                                                Masukkan jabatan
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="floatingInput" placeholder="Nama Menu" name="nohp" required>
                                                            <label for="floatingInput">No HP</label>
                                                            <div class="invalid-feedback">
                                                                Masukkan No HP
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="edit_kontak_validate" value="12345">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Edit Pengurus End -->

                            <!-- Modal Delete Pengurus -->
                            <div class="modal fade" id="ModalDelete<?php echo $row['id_kontak']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-md modal-fullscreen-md-down">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data Kontak</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="needs-validation" novalidate action="proses/proses_delete_kontak.php" method="POST">
                                                <input type="hidden" value="<?php echo $row['id_kontak'] ?>" name="id">
                                                <input type="hidden" value="<?php echo $row['foto'] ?>" name="foto">
                                                <div class="col-lg-12">
                                                    Apakah anda ingin menghapus kontak <b><?php echo $row['nama'] ?></b>
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
                            <!-- End Modal Delete Pengurus -->

                        <?php } ?>

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="text-nowrap">
                                        <th scope="col">No</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">No HP</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($result as $row) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $no++; ?></th>
                                            <td>
                                                <div style="width: 60px;">
                                                    <img src="assets/img/<?php echo $row['foto']; ?>" class="img-thumbnail" alt="...">
                                                </div>
                                            </td>
                                            <td>
                                                <?php echo $row['nama']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['jabatan']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['nohp']; ?>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView<?php echo $row['id_kontak']; ?>"><i class="bi bi-eye"></i></button>
                                                    <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit<?php echo $row['id_kontak']; ?>"><i class="bi bi-pencil-square"></i></i></button>
                                                    <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete<?php echo $row['id_kontak']; ?>"><i class="bi bi-trash"></i></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php }; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php }; ?>
                </div>
            </div>
        </div>
    </div>
</div>

</html>