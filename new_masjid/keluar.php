<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_keluar");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}

// $select_kat_menu = mysqli_query($conn, "SELECT id_kat_menu,kategori_menu from tb_kategori_menu");
?>

<div class="col-lg-9  mt-2">
    <div class="card">
        <div class="card-header">
            Daftar Uang Keluar
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-success " data-bs-toggle="modal" data-bs-target="#ModalTambahUser">Tambah Kas Keluar</button>
                </div>
            </div>
            <!-- Modal Tambah Menu Baru-->
            <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Dana Keluar Masjid Al-Bayaan</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_input_uang_keluar.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="namakegiatan" name="nama_kegiatan" required>
                                            <label for="floatingInput">Nama Kegiatan</label>
                                        </div>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="UangKeluar" name="uang_keluar">
                                            <label for="floatingInput">Uang Keluar</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Default select example" name="kat_menu" required>
                                                <option selected hidden value="">Pilih Kategori Menu</option>
                                            
                                            </select>
                                            <label for="floatingInput">Kategori Makanan Dan Minuman</label>
                                            <div class="invalid-feedback">
                                                Pilih Kategori Makanan atau Minuman
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="keterangan" name="keterangan" required>
                                            <label for="floatingInput">Keterangan</label>
                                            <div class="invalid-feedback">

                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder="Stok" name="stok" required>
                                            <label for="floatingInput">Stok</label>
                                            <div class="invalid-feedback">
                                                Masukkan Stok
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="row">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success" name="input_uang_keluar_validate" value="12345">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal Tambah Menu Baru-->
            <?php
            if (empty($result)) {
                echo "Tidak data Uang Keluar";
            } else {
                foreach ($result as $row) {
            ?>
                    <!-- Modal View-->
                    <div class="modal fade" id="ModalView<?php echo $row['id_keluar'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Lihat Kas Keluar</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_input_uang_keluar.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="namakegiatan" name="nama_kegiatan" value="<?php echo $row['nama_kegiatan'] ?>" required>
                                                    <label for="floatingInput">Nama Kegiatan</label>
                                                </div>
                                                <div class="invalid-feedback">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="UangKeluar" value="<?php echo $row['uang_keluar'] ?>" name="uang_keluar">
                                                    <label for="floatingInput">Uang Keluar</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Default select example" name="kat_menu" required>
                                                <option selected hidden value="">Pilih Kategori Menu</option>
                                            
                                            </select>
                                            <label for="floatingInput">Kategori Makanan Dan Minuman</label>
                                            <div class="invalid-feedback">
                                                Pilih Kategori Makanan atau Minuman
                                            </div>
                                        </div>
                                    </div> -->
                                            <div class="col-lg-12">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="keterangan" name="keterangan" value="<?php echo $row['keterangan'] ?>" required>
                                                    <label for="floatingInput">Keterangan</label>
                                                    <div class="invalid-feedback">

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder="Stok" name="stok" required>
                                            <label for="floatingInput">Stok</label>
                                            <div class="invalid-feedback">
                                                Masukkan Stok
                                            </div>
                                        </div>
                                    </div> -->
                                        </div>
                                        <div class="row">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success" name="input_uang_keluar_validate" value="12345">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal View-->
                    <!-- Modal Edit-->
                    <div class="modal fade" id="ModalEdit<?php echo $row['id_keluar'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Uang Keluar</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_edit_uang_keluar.php" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" value="<?php echo $row['id_keluar'] ?>" name="id_keluar">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="namakegiatan" name="nama_kegiatan" required value="<?php echo $row['nama_kegiatan'] ?>">
                                                    <label for="floatingInput">Nama Kegiatan</label>
                                                    <div class="invalid-feedback">
                                                        Masukkan Nama Kegiatan
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingInput" placeholder="uangkeluar" name="uang_keluar" required value="<?php echo $row['uang_keluar'] ?>">
                                                        <label for="floatingInput">Uang Keluar</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Uang Keluar
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="floatingInput" placeholder="Keterangan" name="keterangan" value="<?php echo $row['keterangan'] ?>">
                                                            <label for="floatingInput">Keterangan</label>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success" name="input_uang_keluar_validate" value="12345">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal Edit-->
                    <!-- Modal Hapus  -->
                    <div class="modal fade" id="ModalDelete<?php echo $row['id_keluar']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Kas Uang Keluar</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="col-lg-12">
                                    Apakah Anda Ingin Menghapus Kas Masuk <b><?php echo $row['nama_kegiatan'] ?></b>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_delete_uang_keluar.php" method="POST">
                                        <input type="hidden" value="<?php echo $row['id_keluar'] ?>" name="id_keluar">
                                        <input type="hidden" value="<?php echo $row['uang_keluar'] ?>" name="uang_keluar">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger" name="input_uang_keluar_validate" value="12345">Hapus</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Modal Hapus -->

                <?php
                }

                ?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="text-nowrap">
                                <th scope="col">No</th>
                                <th scope="col">Nama Kegiatan</th>
                                <th scope="col">Uang Keluar</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($result as $row) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no++ ?></th>                                    
                                    <td><?php echo $row['nama_kegiatan'] ?></td>
                                    <td><?php echo $row['uang_keluar'] ?></td>
                                    <td><?php echo $row['keterangan'] ?></td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-info btn-sm margin me-1" data-bs-toggle="modal" data-bs-target="#ModalView<?php echo $row['id_keluar'] ?>"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-warning btn-sm margin me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit<?php echo $row['id_keluar'] ?>"><i class="bi bi-pencil-square"></i></i></button>
                                            <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete<?php echo $row['id_keluar'] ?>"><i class="bi bi-trash-fill"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>