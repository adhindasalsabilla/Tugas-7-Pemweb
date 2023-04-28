<?php 
    require("koneksi.php");
    $data = mysqli_query($conn, "SELECT * FROM posisi");
?>

<!DOCTYPE html>
    <head>
        <title>Main Page Posisi</title>
    </head>
    <body>
        <div align="center">
            <h1>Data Posisi</h1>
            
            <table border="15px">
                <tr>
                    <th>ID</th>
                    <th>Nama Posisi</th>
                </tr>
                <?php while($row = mysqli_fetch_assoc($data)){ ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['nama_posisi']?></td>
                    <td>
                        <button>
                            <a style="text-decoration: none; color: darkmagenta;" href="edit.php?id=<?php echo $row['id']?>">Edit</a>
                        </button>
                        <button>
                            <a style="text-decoration: none; color: darkgreen;" href="hapus.php?id=<?php echo $row['id']?>">Hapus</a>
                        </button>
                    </td>
                </tr>
                <?php } 
                    mysqli_close($conn); 
                ?>
            </table>
            <br>
            <button>
                <a href="tambahdata.php">Tambah</a>
            </button>
            <button>
                <a href="departemen.php">Data Departemen</a>
            </button>
        </div>
    </body>
</html>