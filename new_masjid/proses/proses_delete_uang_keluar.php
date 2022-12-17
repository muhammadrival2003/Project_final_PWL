<?php
    include "connect.php";
    $id_keluar = (isset($_POST['id_keluar'])) ? htmlentities($_POST['id_keluar']) : "" ;
    
    if(!empty($_POST['input_uang_keluar_validate'])){
        $query = mysqli_query($conn, "DELETE FROM tb_keluar WHERE id_keluar = '$id_keluar'");
        if($query){
            $message = '<script>
            alert("Data berhasil dihapus");
            window.location="../masuk"</script>';
        }else{
            $message = '<script>alert("Data gagal di dihapus");
            window.location="../masuk"</script>';
        }
    }echo $message;
?>