<?php
include 'koneksi.php';

session_start();

if (!isset($_SESSION['login']) || $_SESSION['level'] !== 'dosen') {
    header("Location: login.php"); 
    exit;
}

// Proses penghapusan materi
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $query = "SELECT upload_materi FROM materi WHERE id = $delete_id";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);

    // Periksa apakah ada file terkait
    if ($row['upload_materi']) {
        $file_path = "file/" . $row['upload_materi'];

        if (unlink($file_path)) { // Hapus file dari direktori
            $delete_query = "DELETE FROM materi WHERE id = $delete_id";
            mysqli_query($koneksi, $delete_query);
        }
    }
}


if (isset($_POST['proses'])) {
    $direktori = "file/";
    $file_name = $_FILES['materi']['name'];
    $file_tmp = $_FILES['materi']['tmp_name'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $upload_materi = $_FILES['materi']['name'];

    move_uploaded_file($file_tmp, $direktori . $file_name);

    $query = "INSERT INTO materi (judul, deskripsi, upload_materi) VALUES ('$judul', '$deskripsi', '$upload_materi')";
    mysqli_query($koneksi, $query);
    header("Location: materi.php"); 
    exit;
}

// Mengambil daftar materi yang sudah diupload dari database
$query = "SELECT * FROM materi";
$result = mysqli_query($koneksi, $query);
$materi = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload materi</title>
    <!-- Tambahkan link CSS untuk Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: darkgrey;
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
    </style>
</head>
<body>
    <!-- Tampilkan navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">E-Learning</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Data Mahasiswa</a></li>
                    <li class="active"><a href="materi.php">Materi</a></li>
                    <li><a href="tugas.php">Tugas</a></li>
                    <li><a href="penilaian.php">Penilaian</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2>Upload Materi</h2>

        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" name="judul" id="judul" class="form-control">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="materi">File materi:</label>
                <input type="file" name="materi" id="materi" class="form-control">
            </div>
            <button type="submit" name="proses" class="btn btn-primary">Upload</button>
        </form>

        <hr>

        <h3>Materi yang sudah diupload:</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>File</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($materi as $item) : ?>
                    <tr>
                        <td><?php echo $item['judul']; ?></td>
                        <td><?php echo $item['deskripsi']; ?></td>
                        <td><a href="file/<?php echo $item['upload_materi']; ?>"><?php echo $item['upload_materi']; ?></a></td>
                        <td><a href="materi.php?delete_id=<?php echo $item['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus materi ini?')">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="guru.php" class="btn btn-default">Kembali</a> <!-- Tombol Kembali -->

    </div>

    <!-- Tambahkan link JavaScript untuk Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
