<?php
include "connect.php";
// $id_masuk = (isset($_POST['id_masuk'])) ?  htmlentities($_POST['id_masuk']) : "";
$nama_kegiatan = (isset($_POST['nama_kegiatan'])) ? htmlentities($_POST['nama_kegiatan']) : "";
$uang_masuk = (isset($_POST['uang_masuk'])) ? htmlentities($_POST['uang_masuk']) : "";
$keterangan = (isset($_POST['keterangan'])) ? htmlentities($_POST['keterangan']) : "";
// $alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";
// $password = md5('password');

if (!empty($_POST['input_uang_masuk_validate'])) {
    // $message = "Please enter";
    // echo $message;
    // exit();
    // $select = mysqli_query($conn, "SELECT * FROM tb_uang_masuk");
    // if (mysqli_num_rows($select) > 0) {
    //     $message = '<script>
    //         alert("Username Yang Dimasukkan telah Ada");
    //         window.location="../user"</script>';
    // } else {
        $query = mysqli_query($conn, "INSERT INTO tb_masuk (nama_kegiatan, uang_masuk, keterangan) values ('$nama_kegiatan', '$uang_masuk', '$keterangan ')");
        if ($query) {
            $message = '<script>
            alert("Data berhasil di Masukkan");
            window.location="../user"</script>';
        } else {
            $message = '<script>alert("Data gagal di Masukkan")</script>';
        }
    }
echo $message;
