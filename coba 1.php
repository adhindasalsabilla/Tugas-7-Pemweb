<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buku Tamu</title>
</head>
<body>
      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buku_tamu";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// membuat tabel
$sql = "CREATE TABLE Buku_Tamu (
id_bt INT(10) NOT NULL AUTO_INCREMENT,
  Nama VARCHAR(200) NOT NULL,
  Email VARCHAR(50) NOT NULL,
  isi TEXT NOT NULL,
  PRIMARY KEY (id_bt)
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel buku_tamu berhasil dibuat";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// menutup koneksi ke database
mysqli_close($conn);
?>
</body>
</html>