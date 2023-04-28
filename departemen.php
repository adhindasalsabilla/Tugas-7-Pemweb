<?php 
    require("koneksi.php");
    $data = mysqli_query($conn, "SELECT * FROM departemen");
?>

<!DOCTYPE html>
    <head>
        <title>Main Page Departemen</title>
    </head>
    <body>
        <div align="center">
            <h1>Data Departemen</h1>
            
            <table border="15px">
                <tr>
                    <th>ID</th>
                    <th>Nama Departemen</th>
                </tr>
                <?php while($row = mysqli_fetch_assoc($data)){ ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['nama_departemen']?></td>
                </tr>
                <?php }  
                    mysqli_close($conn); 
                ?>
            </table>
            <br>
            <button>
                <a href="posisi.php">Data Posisi</a>
            </button>
        </div>
    </body>
</html>