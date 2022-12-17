<?php
    include "connect.php";
    $id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "" ;
    $foto = (isset($_POST['foto'])) ? htmlentities($_POST['foto']) : "" ;
    
    if(!empty($_POST['input_user_validate'])){        
        $query = mysqli_query($conn, "DELETE FROM tb_kegiatan WHERE id = '$id'");
        if($query){
            unlink("../assets/img/$foto");
            $message = '<script>
            alert("Data berhasil dihapus");
            window.location="../kelolaKegiatan"</script>';
        }else{
            $message = '<script>alert("Data gagal di Hapus");
            window.location="../kelolaKegiatan"</script>';
        }
    }echo $message;
?>