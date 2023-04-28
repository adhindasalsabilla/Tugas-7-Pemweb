<!DOCTYPE html>
    <head>
        <title>Page Edit Data Posisi</title>
    </head>
    <body>
        <div align="center">
            <h2>Edit Data Posisi</h2>
            <form action="edit.php" method="POST">
                <table>
                    <?php
                        require("koneksi.php");
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM posisi WHERE id=$id";
                        $result = mysqli_query($conn, $sql);
                        $row=mysqli_fetch_row($result);
                        list($id,$nama_posisi)=$row;
                    ?>
                    <tr>
                        <td>ID : </td>
                        <td>
                            <input type="text" name="id" value="<?php echo $id?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Posisi : </td>
                        <td>
                            <input type="text" name="nama" value="<?php echo $nama?>">
                        </td>
                    </tr>
                </table>
                <br>
                <input type="submit" name="simpan" value="Simpan Data" >
                <input type=reset value=Reset>
                <button><a href="posisi.php" style="text-decoration: none; color: black;">Back</a></button>
            </form>
        </div>
    </body>
</html>