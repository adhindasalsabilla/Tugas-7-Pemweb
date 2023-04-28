<?php
    require_once("koneksi.php");

    $id = $_GET['id'];
    $sql = "DELETE FROM posisi WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: posisi.php");
    } else {
        echo "Gagal Menghapus Data";
    }
?>