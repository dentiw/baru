<!DOCTYPE html>
<html>
<head>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<style>
		label {
			display: block;
			margin-top: 20px;
			font-weight: bold;
			
		}
		input[type=text], input[type=password] {
			padding: 5px;
			border-radius: 3px;
			border: 1px solid #ccc;
			width: 100%;
			box-sizing: border-box;
			margin-bottom: 20px;
			
		}
		button[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 3px;
			cursor: pointer;
		}
		button[type=submit]:hover {
			background-color: 	#696969;
		}
		ul {
			list-style: none;
			padding: 0;
			margin: 0;
		}
		h1 {
			text-align: center;
			margin-bottom: 20px;
		}
		form {
			max-width: 400px;
			margin: 0 auto;
			border: 1px solid #ccc;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px #ccc;
			background-color: #F0F8FF;
		}
	</style>
</head>
<body>

	<title>Halaman Registrasi</title>
	<style>
		label {
			display: block;
		}
	</style>
</head>
<body>

<h1>Halaman Registrasi</h1>

<form action="" method="post">
    <ul>
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <label for="password2">Konfirmasi Password :</label>
            <input type="password" name="password2" id="password2">
        </li>
        <li>
            <label for="level">Level :</label>
            <select name="level" id="level">
                <option value="admin">Admin</option>
                <option value="mahasiswa">Mahasiswa</option>
                <option value="dosen">Dosen</option>
            </select>
        </li>
        <br>
        <li>
            <button type="submit" name="register">Register!</button>
        </li>
    </ul>
	<div class="text-center">
    <a href="login.php">Sudah memiliki akun? Login</a>
</div>
</form>



<?php
function registrasi($data)
{
    global $koneksi;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);
    $level = mysqli_real_escape_string($koneksi, $data["level"]);

    // Cek username sudah ada atau belum
    $result = mysqli_query($koneksi, "SELECT username FROM admin WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('Username sudah terdaftar!')</script>";
        return false;
    }

    // Cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>alert('Konfirmasi password tidak sesuai!')</script>";
        return false;
    }

    // Enkripsi password
	$password = $_POST["password"];

    // Tambahkan user baru ke database
    mysqli_query($koneksi, "INSERT INTO admin (username, password, level) VALUES ('$username', '$password', '$level')");

    return mysqli_affected_rows($koneksi);
}


?>
</body>
</html>


<?php 
require 'koneksi.php';

if( isset($_POST["register"]) ) {

	if( registrasi($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
			  </script>";
	} else {
		echo mysqli_error($koneksi);
	}

}

?>