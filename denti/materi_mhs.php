<!DOCTYPE html>
<html>
<head>
	<title>Materi Mahasiswa</title>
	<!-- Memanggil Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<h2 style="text-align: center;">Materi Mahasiswa</h2>
	<br/>
	<a href="mahasiswa.php" class="btn btn-primary">KEMBALI KE DASHBOARD</a>
	<br><br>

	<?php
	include 'koneksi.php';

	// Menampilkan daftar materi
	$query = "SELECT * FROM materi";
	$result = mysqli_query($koneksi, $query);

	if (mysqli_num_rows($result) > 0) {
		echo "<table class='table'>";
		echo "<thead>";
		echo "<tr>";
		echo "<th>Nama Materi</th>";
		echo "<th>Deskripsi</th>";
		echo "<th>Actions</th>";
		echo "</tr>";
		echo "</thead>";
		echo "<tbody>";

		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>" . $row['judul'] . "</td>"; // Fix: Changed 'nama_materi' to 'judul'
			echo "<td>" . $row['deskripsi'] . "</td>";
			echo "<td>";
			echo "<a href='download_materi.php?id=" . $row['id'] . "' class='btn btn-success'>Download Materi</a>";
			echo "</td>";
			echo "</tr>";
		}

		echo "</tbody>";
		echo "</table>";
	} else {
		echo "<div class='alert alert-info'>Belum ada materi yang tersedia.</div>";
	}
	?>
</div>

</body>
</html>
