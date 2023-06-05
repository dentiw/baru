<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <!-- Tambahkan link CSS untuk Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to bottom, #f5f5f5, #ccc); /* Tambahkan latar belakang gradasi */
            padding-bottom: 50px; /* Tambahkan padding bawah */
        }
        .dashboard {
            background-color: #000;
            color: #fff;
            border-radius: 5px;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100vh;
            overflow-y: auto;
        }
        .card-body-icon {
            position: absolute;
            z-index: 0;
            top: 25px;
            right: 4px;
            opacity: 0.4;
            font-size: 90px;
        }

        .dashboard-nav-item {
            margin-bottom: 10px;
        }

        .dashboard-nav-link {
            color: #fff;
            text-decoration: none;
        }

        .dashboard-nav-link:hover {
            color: #ccc;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col-lg-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .card {
            background-color: #333;
            color: #fff;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            width: 100%;
        }

        /* Tambahkan style untuk card warna-warni */
        .card-color:nth-child(1) {
            background-color: cornflowerblue; /* Merah */
        }

        .card-color:nth-child(2) {
            background-color: #e91e63; /* Ungu */
        }

        .card-color:nth-child(3) {
            background-color: #9c27b0; /* Biru Muda */
        }
    </style>
</head>
<body>
    <!-- Tampilkan dasbor -->
    <div class="dashboard">
        <h3 class="dashboard-heading">Admin Dashboard</h3>
        <ul class="dashboard-nav">
            <li class="dashboard-nav-item">
                <a class="dashboard-nav-link" href="dashboard.php">Dashboard</a>
            </li>
            <li class="dashboard-nav-item">
                <a class="dashboard-nav-link" href="index.php">Data Mahasiswa</a>
            </li>
            <li class="dashboard-nav-item">
                <a class="dashboard-nav-link" href="users.php">Data Dosen</a>
            </li>
            <li class="dashboard-nav-item">
                <a class="dashboard-nav-link" href="users.php">Jadwal Kuliah</a>
            </li>
            <li class="dashboard-nav-item">
                <a class="dashboard-nav-link" href="users.php">Users</a>
            </li>
            <li class="dashboard-nav-item">
                <a class="dashboard-nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>

    <div class="container">
        <h1>Selamat datang di Halaman Admin</h1>

        <!-- Tampilkan data atau komponen dashboard admin -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Dashboard Admin</h3>
            </div>
            <div class="panel-body">
                <p>Ini adalah halaman dashboard admin.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <a href="halaman_mahasiswa.php" class="card-link">
                    <div class="card card-color">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Mahasiswa</h5>
                            <p class="card-text">30</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="halaman_dosen.php" class="card-link">
                    <div class="card card-color">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Dosen</h5>
                            <p class="card-text">30</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="halaman_matakuliah.php" class="card-link">
                    <div class="card card-color">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Mata Kuliah</h5>
                            <p class="card-text">30</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="halaman_kelas.php" class="card-link">
                    <div class="card card-color">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Kelas</h5>
                            <p class="card-text">10</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="halaman_matapelajaran.php" class="card-link">
                    <div class="card card-color">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Mata Pelajaran</h5>
                            <p class="card-text">20</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="halaman_user.php" class="card-link">
                    <div class="card card-color">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah User</h5>
                            <p class="card-text">50</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="halaman_jadwalkuliah.php" class="card-link">
                    <div class="card card-color">
                        <div class="card-body">
                            <h5 class="card-title">Jadwal Kuliah</h5>
                            <p class="card-text">50</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Tambahkan script JS untuk Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></script>
</body>
</html>