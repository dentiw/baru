<?php
include 'koneksi.php';

session_start();

if (!isset($_SESSION['login']) || $_SESSION['level'] !== 'dosen') {
    header("Location: login.php"); 
    exit;
}

$pesan = ''; // Variabel untuk menyimpan pesan sukses atau pesan error

if (isset($_POST['submit'])) {
    $tugas_id = $_POST['tugas_id'];
    $penilaian = $_POST['penilaian'];

    $update_query = "UPDATE tugas SET penilaian = '$penilaian' WHERE id = $tugas_id";
    if (mysqli_query($koneksi, $update_query)) {
        $pesan = 'Penilaian berhasil diperbarui.';
    } else {
        $pesan = 'Terjadi kesalahan saat memperbarui penilaian.';
    }
}

$query = "SELECT * FROM tugas";
$result = mysqli_query($koneksi, $query);
$tugas = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pengumpulan Tugas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #fff;
        }
        .navbar {
            background-color: #000;
            color: #fff;
        }
        .navbar-brand {
            color: #fff;
        }
        .navbar-nav li a {
            color: #fff !important;
        }
        .navbar-nav li a:hover {
            background-color: grey;
        }
        .container {
            margin-top: 50px;
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">E-Learning</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h2>Pengumpulan Tugas</h2>

        <p><?php echo $pesan; ?></p> 

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>File</th>
                    <th>Penilaian</th>
                    <th>Nilai</th> 
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tugas as $item) : ?>
                    <tr>
                        <td><?php echo $item['judul']; ?></td>
                        <td><?php echo $item['deskripsi']; ?></td>
                        <td><a href="file/<?php echo $item['upload_tugas']; ?>"><?php echo $item['upload_tugas']; ?></a></td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="tugas_id" value="<?php echo $item['id']; ?>">
                                <div class="form-group">
                                    <input type="number" name="penilaian" min="0" max="100" class="form-control" required>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </td>
                        <td><?php echo $item['penilaian']; ?></td> 
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="pengumpulan_mhs.php" class="btn btn-default">Kembali</a> 

    </div>

    <!-- Tambahkan link JavaScript untuk Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
