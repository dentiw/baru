<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];
  $nilai = $_POST['nilai'];

  $query = "UPDATE tugas SET nilai = '$nilai' WHERE id = '$id'";
  $result = mysqli_query($koneksi, $query);

  if ($result) {
    echo "Nilai berhasil disimpan.";
    // Redirect or display success message
  } else {
    echo "Gagal menyimpan nilai.";
  }
}
?>
