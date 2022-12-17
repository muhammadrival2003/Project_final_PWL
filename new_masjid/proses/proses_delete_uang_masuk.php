<?php
    include "connect.php";
    $id_masuk = (isset($_POST['id_masuk'])) ? htmlentities($_POST['id_masuk']) : "" ;
    
    if(!empty($_POST['input_uang_masuk_validate'])){
        $query = mysqli_query($conn, "DELETE FROM tb_masuk WHERE id_masuk = '$id_masuk'");
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