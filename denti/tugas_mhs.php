<!DOCTYPE html>
<html>
<head>
    <title>Tugas Mahasiswa</title>
    <!-- Memanggil Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2 style="text-align: center;">Tugas Mahasiswa</h2>
    <br/>
    <a href="mahasiswa.php" class="btn btn-primary">KEMBALI KE DASHBOARD</a>
    <br><br>

    <?php
    include 'koneksi.php';

    // Menampilkan daftar tugas
    $query = "SELECT * FROM upload";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<table class='table'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Tugas</th>";
        echo "<th>Deskripsi</th>";
        echo "<th>Actions</th>";
        echo "<th>Pengumpulan Tugas</th>"; 
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['judul'] . "</td>";
            echo "<td>" . $row['deskripsi'] . "</td>";
            echo "<td>";
            echo "<a href='download_tugas.php?id=" . $row['id'] . "' class='btn btn-success'>Download Tugas</a>";
            echo "</td>";
            echo "<td>";
            echo "<form action='pengumpulan_mhs.php' method='post' enctype='multipart/form-data'>";
            echo "<input type='submit' name='submit' value='Kumpulkan' class='btn btn-primary'>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<div class='alert alert-info'>Belum ada tugas yang tersedia.</div>";
    }
    ?>
</div>

</body>
</html>
