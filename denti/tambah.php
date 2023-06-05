<!DOCTYPE html>
<html>

<head>
	<title>DATA MAHASISWA</title>
	<style>
		/* CSS code here */
		.container {
			margin: auto;
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
		<h2 class="title">DATA MAHASISWA</h2>
		<a href="index.php">KEMBALI</a>
		<h3 class="subtitle">TAMBAH DATA MAHASISWA</h3>

		<form method="post" action="tambah_aksi.php" enctype="multipart/form-data">

			<div class="input-group">
				<label for="NRP">NRP</label>
				<input type="text" name="NRP" id="NRP">
			</div>
			<div class="input-group">
				<label for="Nama">Nama</label>
				<input type="text" name="Nama" id="Nama">
			</div>
			<div class="input-group">
				<label for="jenis_kelamin">jenis kelamin</label>
				<input type="text" name="jenis_kelamin" id="jenis_kelamin">
			</div>
			<div class="input-group">
				<label for="jurusan">jurusan</label>
				<input type="text" name="jurusan" id="jurusan">
			</div>
			<div class="input-group">
				<label for="email">email</label>
				<input type="text" name="email" id="email">
			</div>
			<div class="input-group">
				<label for="no_hp">no_hp</label>
				<input type="text" name="no_hp" id="no_hp">
			</div>
			<div class="input-group">
				<label for="asal_SMA">asal_SMA</label>
				<input type="text" name="asal_SMA" id="asal_SMA">
			</div>
			<div class="input-group">
				<label for="matkul_favorit">matkul_favorit</label>
				<input type="text" name="matkul_favorit" id="matkul_favorit">
			</div>
			<div class="input-group">
				<label for="alamat">alamat</label>
				<input type="text" name="alamat" id="alamat">
			</div>
			<div class="input-group">
				<label for="Gambar">Gambar</label>
				<input type="file" name="foto" id="Gambar">
			</div>
			<div class="input-group">
				<input type="submit" value="SIMPAN" class="btn-submit" name="submit">
			</div>
		</form>
	</div>
</body>

</html>