<?php
session_start();

// Periksa apakah pengguna sudah login dengan level dosen
if (!isset($_SESSION['login']) || $_SESSION['level'] !== 'dosen') {
    header("Location: login.php"); // Redirect ke halaman login jika belum login
    exit;
}

// Ambil informasi dosen dari session
$username = $_SESSION['username'];
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
        .nav-link:hover {
            background-color: grey;
        }
        .display-4 {
            font-weight: bold;
        }
        .card-body-icon {
            position: absolute;
            z-index: 0;
            top: 25px;
            right: 4px;
            opacity: 0.4;
            font-size: 90px;
        }
        body{
            background-color: darkgrey;
        }
        .navbar{
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
            background-color: grey; /* Mengubah warna latar belakang menu navbar saat dihover */
        }
         .sidebar {
        
            position: fixed;
            left: 0;
            top: 0;
        }

        .content {
            margin-left: 200px;
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
                    <li><a href="tugas.php">Tugas</a></li>
                    <li><a href="materi.php">Materi</a></li>
                    <li><a href="pengumpulan_tugas.php">Pengumpulan</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Tampilkan konten halaman dosen -->
    <div class="container">
        <h1>Selamat datang, <?php echo $username; ?></h1>
        <!-- Tambahkan konten atau komponen lainnya sesuai kebutuhan -->
    
        
        <!-- Tampilkan data atau komponen dashboard dosen -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Dashboard dosen</h3>
            </div>
           
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">
                                <p class="card-text">Jumlah Mahasiswa</p>
                                <h2 class="card-title">100</h2>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="#" class="card-text text-white">Lihat Detail <i class="fas fa-angle-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">
                                <p class="card-text">Materi</p>
                                <h2 class="card-title">30</h2>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="materi.php" class="card-text text-white">Lihat Detail <i class="fas fa-angle-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">
                                <p class="card-text">Tugas</p>
                                <h2 class="card-title">30</h2>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="tugas.php" class="card-text text-white">Lihat Detail <i class="fas fa-angle-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-info text-white mb-4">
                            <div class="card-body">
                                <p class="card-text">Pengumpulan Tugas</p>
                                <h2 class="card-title">20</h2>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="pengumpulan_tugas.php" class="card-text text-white">Lihat Detail <i class="fas fa-angle-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan link JavaScript untuk Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
