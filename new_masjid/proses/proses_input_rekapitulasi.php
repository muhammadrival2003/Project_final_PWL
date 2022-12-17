<?php
include "connect.php";
// $id_masuk = (isset($_POST['id_masuk'])) ?  htmlentities($_POST['id_masuk']) : "";
$uang_masuk = (isset($_POST['uang_masuk'])) ? htmlentities($_POST['uang_masuk']) : "";
$uang_keluar = (isset($_POST['uang_keluar'])) ? htmlentities($_POST['uang_keluar']) : "";
$hasil_rekap = (isset($_POST['hasil_rekap'])) ? htmlentities($_POST['hasil_rekap']) : "";
// $alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";
// $password = md5('password');

if (!empty($_POST['input_rekapitulasi_validate'])) {
    // $message = "Please enter";
    // echo $message;
    // exit();
    // $select = mysqli_query($conn, "SELECT * FROM tb_uang_masuk");
    // if (mysqli_num_rows($select) > 0) {
    //     $message = '<script>
    //         alert("Username Yang Dimasukkan telah Ada");
    //         window.location="../user"</script>';
    // } else {
        $query = mysqli_query($conn, "INSERT INTO tb_rekapitulasi (uang_masuk, uang_keluar, hasil_rekap) values ('$uang_masuk', '$uang_keluar', '$hasil_rekap ')");
        if ($query) {
            $message = '<script>
            alert("Data berhasil di Masukkan");
            window.location="../user"</script>';
        } else {
            $message = '<script>alert("Data gagal di Masukkan")</script>';
        }
    }
echo $message;
