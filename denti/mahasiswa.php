<?php
session_start();

// Periksa apakah pengguna sudah login dengan level mahasiswa
if (!isset($_SESSION['login']) || $_SESSION['level'] !== 'mahasiswa') {
    header("Location: login.php"); // Redirect ke halaman login jika belum login
    exit;
}

// Ambil informasi mahasiswa dari session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Mahasiswa</title>
    <!-- Tambahkan link CSS untuk Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .sidebar {
            background-color: #f8f8f8;
            padding: 15px;
        }
        .dashboard-container {
            display: flex;
        }
        .sidebar-left {
            flex-basis: 25%;
            margin-right: 20px;
        }
        .main-content {
            flex-basis: 75%;
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
        <div class="dashboard-container">
            <div class="sidebar-left">
                <div class="sidebar">
                    <h3>Selamat datang, <?php echo $username; ?></h3>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="halaman_mahasiswa.php">Beranda</a></li>
                        <li><a href="data_pribadi.php">Data Pribadi</a></li>
                        <li><a href="tugas_mhs.php">Tugas</a></li>
                        <li><a href="materi.php">Materi</a></li> <!-- Tambahkan menu Materi -->
                    </ul>
                </div>
            </div>
            <div class="main-content">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Dashboard Mahasiswa</h3>
                    </div>
                    <div class="panel-body">
                        <h4>Konten Beranda</h4>
                        <p>Isi konten beranda di sini.</p>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><a href="data_pribadi.php">Data Pribadi</a></h3>
                                    </div>
                                    <div class="panel-body">
                                        <p>Isi card data pribadi di sini.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><a href="tugas_mhs.php">Tugas</a></h3>
                                    </div>
                                    <div class="panel-body">
                                        <p>Isi card tugas di sini.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><a href="materi_mhs.php">Materi</a></h3>
                                    </div>
                                    <div class="panel-body">
                                        <p>Isi card materi di sini.</p>
                                    </div>
                                </div>
                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan script JavaScript atau file eksternal lainnya -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
