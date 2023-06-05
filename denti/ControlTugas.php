<?php 
session_start();
// koneksi database
include '../koneksi.php';
// $uploadDir = 'img/';
// menangkap data yang di kirim dari form

if (isset($_POST['submit'])) {
	$dosen = $_SESSION['user_id'];
	$judul= $_POST['judul'];
	$deskripsi = $_POST['deskripsi'];

	// echo $namaFileBaru;;
	$query = "insert into tugas values('','$judul','$deskripsi','$dosen')";
	mysqli_query($koneksi,$query);
	header('location: ../view/admin/tugas.php');
}

?>