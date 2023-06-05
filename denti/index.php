<?php
$koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");

// Check connection
if (mysqli_connect_error()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>DATA MAHASISWA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h2 {
            text-align: center;
            margin-top: 50px;
        }

        table {
            border-collapse: inherit;
            margin: auto;
            margin-top: 10px;
            background-color: #ddd;
            box-shadow: burlywood;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 0, 5px solid #ddd;
        }

        tr:hover {
            background-color: antiquewhite;
        }

        th {
            background-color: #4CAF50;
            color: #fff;
        }

        a {
            display: inline-block;
            padding: 8px 16px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: burlywood;
        }

        form {
            margin: auto;
            margin-top: 10px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px;
            width: 50%;
        }

        input[type=text],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type=submit]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>

<body>
    <h2>DATA MAHASISWA</h2>
    <br />
    <a href="tambah.php">+ TAMBAH MAHASISWA</a>
    <a href="logout.php">Logout</a>
    <a href="admin.php">Dashboard admin</a>
	<a href="guru.php">Dashboard dosen</a>
    <a href="mahasiswa.php">Dashboard mahasiswa</a>
    <br />
    <br />
    <table border="1">
        <tr>
            <th>no</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>jenis kelamin</th>
            <th>jurusan</th>
            <th>email</th>
            <th>alamat</th>
            <th>no hp</th>
            <th>asal SMA</th>
            <th>matkul favorit</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        <?php
        // include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * from data_mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['NRP']; ?></td>
                <td><?php echo $d['Nama']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['jurusan']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['no_hp']; ?></td>
                <td><?php echo $d['asal_SMA']; ?></td>
                <td><?php echo $d['matkul_favorit']; ?></td>
                <td><img src="<?php echo "file/" . $d['foto']; ?>" width="80"></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                    <a href="donload.php?filename=<?php echo $d['foto']; ?>">donload</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>

</html>
