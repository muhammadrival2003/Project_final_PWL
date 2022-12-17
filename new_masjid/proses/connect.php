<?php
    $conn = mysqli_connect("localhost","root","","db_masjid");
    if(!$conn){
        echo "Gagal Koneksi";
    }