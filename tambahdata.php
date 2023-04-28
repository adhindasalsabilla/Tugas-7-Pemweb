<!DOCTYPE html>
    <head>
        <title>Page Tambah Data Posisi</title>
    </head>
    <body>
        <div align="center">
            <h2>Tambah Data Posisi</h2>
            <form action="tambah.php" method="POST">
                <table>
                    <tr>
                        <td>ID : </td>
                        <td>
                            <input type="text" name="id">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Posisi : </td>
                        <td>
                            <input type="text" name="nama_posisi">
                        </td>
                </table>
                <br>
                <input type="submit" name="submit" value="Tambah Data">
                <button><a href="posisi.php" style="text-decoration: none; color: black;">Back</a></button>
            </form>
        </div>
    </body>
</html>