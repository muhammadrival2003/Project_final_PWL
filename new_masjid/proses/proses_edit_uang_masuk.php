<?php
include "connect.php";
$id_masuk = (isset($_POST['id_masuk'])) ?  htmlentities($_POST['id_masuk']) : "";
$nama_kegiatan = (isset($_POST['nama_kegiatan'])) ? htmlentities($_POST['nama_kegiatan']) : "";
$uang_masuk = (isset($_POST['uang_masuk'])) ? htmlentities($_POST['uang_masuk']) : "";
$keterangan = (isset($_POST['keterangan'])) ? htmlentities($_POST['keterangan']) : "";

if (!empty($_POST['input_uang_masuk_validate'])) {
    // $select = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
    // if (mysqli_num_rows($select) > 0) {
    //     $message = '<script>
    //         alert("Username yang diedit telah ada");
    //         window.location="../user"</script>
    //         </script>';
    // } else {
        $query = mysqli_query($conn, "UPDATE tb_masuk SET nama_kegiatan='$nama_kegiatan', uang_masuk='$uang_masuk', keterangan='$keterangan' WHERE id_masuk='$id_masuk'");
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
