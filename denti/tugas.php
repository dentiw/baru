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
    $query = "SELECT upload_tugas FROM upload WHERE id = $delete_id";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);

    // Periksa apakah ada file terkait
    if ($row['upload_tugas']) {
        $file_path = "file/" . $row['upload_tugas'];

        if (unlink($file_path)) { // Hapus file dari direktori
            $delete_query = "DELETE FROM upload WHERE id = $delete_id";
            mysqli_query($koneksi, $delete_query);
        }
    }
}


if (isset($_POST['proses'])) {
    $direktori = "file/";
    $file_name = $_FILES['tugas']['name'];
    $file_tmp = $_FILES['tugas']['tmp_name'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $upload_tugas = $_FILES['tugas']['name'];
    $deadline = $_POST['deadline'];

    move_uploaded_file($file_tmp, $direktori . $file_name);

    $query = "INSERT INTO upload (judul, deskripsi, upload_tugas, deadline) VALUES ('$judul', '$deskripsi', '$upload_tugas', '$deadline')";
    mysqli_query($koneksi, $query);
    header("Location: tugas.php"); 
    exit;
}

// Mengambil daftar materi yang sudah diupload dari database
$query = "SELECT * FROM upload";
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
                    <li><a href="materi.php">Materi</a></li>
                    <li class="active"><a href="tugas.php">Tugas</a></li>
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
                <label for="tugas">File tugas:</label>
                <input type="file" name="tugas" id="tugas" class="form-control">
            </div>
            <div class="form-group">
                <label for="deadline">Deadline:</label>
                <input type="datetime-local" name="deadline" id="deadline" class="form-control">
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
                    <th>Deadline</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($materi as $item) : ?>
                    <tr>
                        <td><?php echo $item['judul']; ?></td>
                        <td><?php echo $item['deskripsi']; ?></td>
                        <td><a href="file/<?php echo $item['upload_tugas']; ?>"><?php echo $item['upload_tugas']; ?></a></td>
                        <td><?php echo $item['deadline']; ?></td>
                        <td><a href="tugas.php?delete_id=<?php echo $item['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus tugas ini?')">Delete</a></td>
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
