<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['level'] !== 'mahasiswa') {
    header("Location: login.php"); // Redirect ke halaman login jika belum login
    exit;
}

$username = $_SESSION['username'];

// Koneksi ke database MySQL
$host = 'localhost'; // Ganti sesuai dengan host database Anda
$dbUsername = 'username'; // Ganti sesuai dengan username database Anda
$dbPassword = 'password'; // Ganti sesuai dengan password database Anda
$dbName = 'nama_database'; // Ganti sesuai dengan nama database Anda

$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

// Cek koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Query untuk mengambil data mahasiswa
$sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <!-- Tambahkan link CSS untuk Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Tambahkan link CSS untuk Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* ... CSS lainnya ... */
    </style>
</head>
<body>
    <!-- Tampilkan navbar -->
    <nav class="navbar navbar-default">
        <!-- ... Isi navbar ... -->
    </nav>

    <!-- Tampilkan data mahasiswa -->
    <div class="container">
        <h2>Data Mahasiswa</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <!-- Tambahkan kolom lain sesuai dengan data mahasiswa yang ingin ditampilkan -->
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['nim'] . "</td>";
                    // Tambahkan kolom lain sesuai dengan data mahasiswa yang ingin ditampilkan
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Tambahkan link JavaScript untuk Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php
// Tutup koneksi database
mysqli_close($conn);
?>
