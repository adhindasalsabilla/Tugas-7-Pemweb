<?php
    include("koneksi.php");
    
    if (isset($_POST['simpan'])) {
        $id = $_POST['id'];
        $nama_posisi = $_POST['nama_posisi'];

        $sql = "UPDATE posisi SET id = '$id', nama_posisi = '$nama_posisi' WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            header("Location: posisi.php");
        } else {
            echo "Gagal Mengedit Data";
        }
    }

    mysqli_close($conn);
?>