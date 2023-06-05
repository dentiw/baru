<?php 
session_start();
// koneksi database
include '../koneksi.php';
// $uploadDir = 'img/';
// menangkap data yang di kirim dari form

if (isset($_POST['submit'])) {
	$judul= $_POST['judul'];
	$deskripsi = $_POST['deskripsi'];
	$file = $_FILES['data']['name'];

	// echo $namaFileBaru;;
	$query = "INSERT INTO materi values('','$judul','$deskripsi','$file')";
	$q = mysqli_query($koneksi,$query);
	// print_r($q);
	header('location: ../view/admin/materi.php');
}

?>