<!DOCTYPE html>
<html>

<head>
	<title>EDIT DATA MAHASISWA</title>
</head>

<body>

	<br>
	<br>
	<style>
		.container {
  margin: auto;
  width: 40%;
  text-align: center;
  border: 1px solid #ccc;
  background-color: #f2f2f2;
  border-radius: 5px;
  padding: 20px;
}

.input-group label {
  display: block;
  width: 100%;
  max-width: 150px;
  font-weight: bold;
  margin-bottom: 5px;
}

.input-group input {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  width: 100%;
  margin-bottom: 10px;
  box-sizing: border-box;
}

.btn-submit {
  background-color: #90EE90;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 10px;
}

.back {
  color: #666;
  text-decoration: none;
  font-size: 14px;
  margin-bottom: 10px;
  display: inline-block;
}

.back:hover {
  color: #333;
}

</style>


	</head>

	<body>

		<div class="container">

			<h2 style="text-align: center;">EDIT DATA MAHASISWA</h2>
			<br />
			<a href="index.php" class="back">KEMBALI</a>
			<br><br>

			<?php
			include 'koneksi.php';
			$id = $_GET['id'];
			$data = mysqli_query($koneksi, "select * from data_mahasiswa where id = '$id'");
			while ($d = mysqli_fetch_array($data)) {
			?>
				<form method="post" action="update.php" enctype="multipart/form-data">
					<table>
						<tr>
							<td>NRP</td>
							<td>
								<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
								<input type="number" name="NRP" value="<?php echo $d['NRP']; ?>">
							</td>
						</tr>
						<tr>
							<td>Nama</td>
							<td><input type="text" name="Nama" value="<?php echo $d['Nama']; ?>"></td>
						</tr>
						<tr>
							<td>jenis kelamin</td>
							<td><input type="text" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>"></td>
						</tr>
						<tr>
							<td>jurusan</td>
							<td><input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>"></td>
						</tr>
						<tr>
							<td>email</td>
							<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
						</tr>
						<tr>
							<td>alamat</td>
							<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
						</tr>
						<tr>
							<td>no hp</td>
							<td><input type="text" name="no_hp" value="<?php echo $d['no_hp']; ?>"></td>
						</tr>
						<tr>
							<td>asal SMA</td>
							<td><input type="text" name="asal_SMA" value="<?php echo $d['asal_SMA']; ?>"></td>
						</tr>
						<tr>
							<td>matkul favorit</td>
							<td><input type="text" name="matkul_favorit" value="<?php echo $d['matkul_favorit']; ?>"></td>
						</tr>
						<tr>
							<td>Gambar</td>
							<td><input type="file" name="foto" value="<?php echo $d['foto']; ?>"></td>
						</tr>
						<tr>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="SIMPAN"></td>
						</tr>
						<tr>

					</table>
				</form>
			<?php
			}
			?>

	</body>

</html>