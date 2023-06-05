<!DOCTYPE html>
<html>
<head>
  <title>Halaman Input Nilai</title>
  <style>
    /* CSS untuk tampilan halaman */
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    label {
      display: block;
      margin-bottom: 10px;
    }
    input[type="text"] {
      width: 200px;
      padding: 5px;
    }
    input[type="submit"] {
      padding: 10px;
      background-color: #4CAF50;
      border: none;
      color: white;
      cursor: pointer;
    }
  </style>
  <script>
    // JavaScript untuk memproses pengiriman nilai
    function submitNilai() {
      // Ambil nilai dari input
      var namaMahasiswa = document.getElementById("nama").value;
      var nilaiMahasiswa = document.getElementById("nilai").value;

      // Lakukan validasi input di sini (misalnya, pastikan nilai valid)

      // Kirim data nilai ke server (misalnya, menggunakan AJAX)
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "proses_upload_nilai.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Tangani respons dari server
          var response = xhr.responseText;
          // Tampilkan pesan sukses atau error kepada pengguna
          alert(response);
        }
      };
      xhr.send("nama=" + encodeURIComponent(namaMahasiswa) + "&nilai=" + encodeURIComponent(nilaiMahasiswa));

      // Hentikan pengiriman form
      return false;
    }
  </script>
</head>
<body>
  <h2>Halaman Input Nilai</h2>
  <form onsubmit="return submitNilai()">
    <label for="nama">Nama Mahasiswa:</label>
    <input type="text" id="nama" name="nama" required>
    <label for="nilai">Nilai Mahasiswa:</label>
    <input type="text" id="nilai" name="nilai" required>
    <input type="submit" value="Submit">
  </form>
</body>
</html>
