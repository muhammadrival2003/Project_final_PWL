<?php
include "connect.php";
$id_keluar = (isset($_POST['id_keluar'])) ?  htmlentities($_POST['id_keluar']) : "";
$nama_kegiatan = (isset($_POST['nama_kegiatan'])) ? htmlentities($_POST['nama_kegiatan']) : "";
$uang_keluar = (isset($_POST['uang_keluar '])) ? htmlentities($_POST['uang_keluar ']) : "";
$keterangan = (isset($_POST['keterangan'])) ? htmlentities($_POST['keterangan']) : "";

if (!empty($_POST['input_uang_keluar_validate'])) {
    // $select = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
    // if (mysqli_num_rows($select) > 0) {
    //     $message = '<script>
    //         alert("Username yang diedit telah ada");
    //         window.location="../user"</script>
    //         </script>';
    // } else {
        $query = mysqli_query($conn, "UPDATE tb_keluar SET nama_kegiatan='$nama_kegiatan', uang_keluar='$uang_keluar', keterangan='$keterangan' WHERE id_keluar='$id_keluar'");
        if ($query) {
            $message = '<script>
            alert("Data berhasil di Update");
            window.location="../user"</script>
            </script>';
        } else {
            $message = '<script>alert("Data gagal di Update")</script>';
        }
    }
echo $message;
