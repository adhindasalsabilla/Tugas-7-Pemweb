<?php
    include("koneksi.php");
    
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $nama_posisi = $_POST['nama_posisi'];   

        $sql = "INSERT INTO posisi SET id='$id', nama_posisi='$nama_posisi'";
        if (mysqli_query($conn, $sql)) {
            header("Location: posisi.php");
        } else {
            echo "Gagal Menambahkan Data";
        }
    }

    mysqli_close($conn);
?>