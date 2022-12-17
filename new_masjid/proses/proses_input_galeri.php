<?php
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";
$judul_foto = (isset($_POST['judul_foto'])) ? htmlentities($_POST['judul_foto']) : "";

$kode_rand = rand(10000, 99999) . "-";
$target_dir = "../assets/img/" . $kode_rand;
$target_file = $target_dir . basename($_FILES['foto']['name']);
$imageType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (!empty($_POST['input_foto_validate'])) {
    // Cek apakah gambar atau bukan
    $cek = getimagesize($_FILES['foto']['tmp_name']);
    if ($cek === false) {
        $message = "Ini bukan file gambar";
        $statusUpload = 0;
    } else {
        $statusUpload = 1;
        if (file_exists($target_file)) {
            $message = "Maaf, Fila yang dimasukkan Telah ada";
            $statusUpload = 0;
        } else {
            if ($_FILES['foto']['size'] > 500000) { // 500k
                $message = "File foto yang diupload terlalu besar";
                $statusUpload = 0;
            } else {
                if ($imageType != "jpg" && $imageType != "png" && $imageType != "jpeg" && $imageType != "gif") {
                    $message = "Maaf, hanya diperbolehkan gambar yang memiliki format JPG, JPEG, PNG dan GIF";
                    $statusUpload = 0;
                }
            }
        }
    }

    if ($statusUpload == 0) {
        $message = '<script>alert("' . $message . ',  Gambar tidak dapat diUpload");
                window.location="../kelolaGaleri"</script>';
    } else {        
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
                $query = mysqli_query($conn, "INSERT INTO tb_galeri (foto, judul_foto) values ('" . $kode_rand . $_FILES['foto']['name'] . "', '$judul_foto')");                
                if ($query) {
                    $message = '<script>alert("Gambar berhasil di Masukkan");
                window.location="../kelolaGaleri"</script>';
                } else {
                    $message = '<script>alert("Gambar gagal dimasukkan");
                window.location="../kelolaGaleri"</script>';
                }
            } else {
                $message = '<script>alert("Maaf, terjadi kesalahan file tidak dapat di Upload");
                window.location="../kelolaGaleri"</script>';
            }        
    }
}
echo $message;
