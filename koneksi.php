<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pegawai";

    // Membuat koneksi
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Cek koneksi
    if (mysqli_connect_errno()) {
        echo "Koneksi Gagal : " . mysqli_connect_errno();
        exit();
    }
?>