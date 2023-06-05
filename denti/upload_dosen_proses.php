<?php
include 'koneksi.php';

$nama_tugas = $_POST['nama_tugas'];
$deskripsi = $_POST['deskripsi'];
$file_tugas = $_FILES['file_tugas'];

// Mendapatkan informasi file
$nama_file = $file_tugas['name'];
$tmp_file = $file_tugas['tmp_name'];
$ukuran_file = $file_tugas['size'];

// Memindahkan file ke direktori tujuan
$tujuan = 'folder_tugas/' . $nama_file;
move_uploaded_file($tmp_file, $tujuan);

// Menyimpan informasi tugas ke database
$query = "INSERT INTO tugas (nama_tugas, deskripsi, file_tugas) VALUES ('$nama_tugas', '$deskripsi', '$tujuan')";
mysqli_query($koneksi, $query);

header('Location: dashboard_dosen.php');
exit();
?>
