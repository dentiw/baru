<?php
include 'koneksi.php';

// Check connection
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}



// menangkap data yang di kirim dari form
$NRP = $_POST['NRP'];
$Nama = $_POST['Nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$asal_SMA = $_POST['asal_SMA'];
$matkul_favorit = $_POST['matkul_favorit'];

$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (in_array($ext, $ekstensi)) {
	$xx = $rand . '_' . $filename;
	move_uploaded_file($_FILES['foto']['tmp_name'], 'file/' . $rand . '_' . $filename);
	mysqli_query($koneksi, "insert into data_mahasiswa values('','$NRP','$Nama','$jenis_kelamin', '$jurusan', '$email', '$alamat', '$no_hp', '$asal_SMA', '$matkul_favorit','$xx')");
	header("location:index.php");
} else {
	header("location:tambah.php");
}
