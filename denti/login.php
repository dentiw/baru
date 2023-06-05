<?php
session_start();
include 'koneksi.php';

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($koneksi, "SELECT * FROM `admin` WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $row['username'];
        $_SESSION['level'] = $row['level'];
    }
}
if (isset($_SESSION["login"])) {
    if ($_SESSION['level'] == "admin") {
        header("Location: admin.php");
        exit;
    } elseif ($_SESSION['level'] == "dosen") {
        header("Location: guru.php");
        exit;
    } elseif ($_SESSION['level'] == "mahasiswa") {
        header("Location: mahasiswa.php");
        exit;
    }
}


if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];
    $level    = $_POST["level"];

    $result = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' AND level = '$level' ");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // ...
        }
        $_SESSION["login"] = true;
        $_SESSION["username"] = $username;
        $_SESSION["level"] = $level;

        // cek remember me
        if (isset($_POST['remember'])) {
            // buat cookie
            setcookie('id', $row['id'], time() + 60);
            setcookie('key', hash('sha256', $row['username']), time() + 60);
        }

        if ($level == "admin") {
            header("Location: admin.php");
            exit;
        } elseif ($level == "dosen") {
            header("Location: guru.php");
            exit;
        } elseif ($level == "mahasiswa") {
            header("Location: mahasiswa.php");
            exit;
        }
    }
    $error = true;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login</title>
    <!-- Tambahkan link CSS untuk Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Tambahkan script untuk jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Tambahkan script untuk JavaScript Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* CSS code here */
        .container {
            margin-top: 150px;
            width: 50%;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f2f2f2;
            border-radius: 5px;
        }
        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: inline-block;
            width: 150px;
            font-weight: bold;
        }

        .input-group input {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            width: 100%;
            box-sizing: border-box;
        }

        .btn-submit {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h1 class="text-center">Halaman Login</h1>
                <?php if (isset($error)) : ?>
                    <div class="alert alert-danger">
                        Username atau Password salah!
                    </div>
                <?php endif; ?>
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="username">Username :</label>
                        <input type="text" class="form-control" name="username" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password :</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="form-group">
                        <label for="level">level :</label>
                        <select name="level" class="form-control">
                            <option value="admin">Admin</option>
                            <option value="dosen">Dosen</option>
                            <option value="mahasiswa">Mahasiswa</option>
                        </select>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" id="remember"> Remember me
                        </label>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary btn-block" value="">Login</button>
                </form>
                <div class="text-center">
                    <a href="registrasi.php">Registrasi</a> 
                </div>
            </div>
        </div>
    </div>

</body>

</html>