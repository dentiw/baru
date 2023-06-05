-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2023 pada 16.22
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`) VALUES
(24, 'admin', '123', 'admin'),
(25, 'dosen', '1234', 'dosen'),
(26, 'mahasiswa', '12345', 'mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `id` int(11) NOT NULL,
  `NRP` varchar(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `asal_SMA` varchar(50) NOT NULL,
  `matkul_favorit` varchar(50) NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id`, `NRP`, `Nama`, `jenis_kelamin`, `jurusan`, `email`, `alamat`, `no_hp`, `asal_SMA`, `matkul_favorit`, `foto`) VALUES
(1, '3122500001', 'Ade Hafis Rabbani', 'Laki-laki', 'D3 Informatika ', 'hafis.gov@gmail.com', 'Jl Rodah Gebang ', '+6285830556', 'sma 1 cerme', 'WORSHOP DESAIN WEB', '1664867235_Hafis.png'),
(2, '3122500002', 'Nadila Aulya Salsabila Mirdianti ', 'perempuan', 'D3 Informatika', 'nadilla@gmai.com', 'Kos : Gebang Wetan ', '+62823359', 'SMAN 1 Patianrowo', 'WORSHOP DESAIN WEB', '1869434995_Nadila.png'),
(3, '3122500003', 'Denti widayati', 'perempuan', 'D3 Informatika', 'dentiwidayati21@gmail.com', 'sidoarjo, wedoro, wa', '08952330448', 'SMAN 3 TARUNA ANGKASA MADIUN', 'Wpw,OS', '588868836_denti.png'),
(4, '3122500004', 'ZAHROTUL HIDAYAH ', 'perempuan', 'D3 Informatika', 'zahrotulhidayah1703@gmail.com', 'gebang wetan', '+62857903', 'SMA NEGERI', 'ASD', '1120870712_jahro.png'),
(5, '3122500005', 'Gede Hari Ganteng', 'Laki-laki', 'D3 Informatika', 'ariyoga.ga@gmail.com', 'GEBANG', '08313536865', 'SMAN 1 Boyolangu', 'MATEMATIKA', '490590200_ari.png'),
(6, '3122500006', 'VIRGIAWAN IVADA RAKSI SEKAR WIBANA', 'Laki-laki', 'D3 Informatika', 'ivo.virgiawan.iv@gmail.com', 'Mojo IV no. 38', '+62 852-361', 'SMAN JATIROGO', 'ASD', '1547379976_ivo.png'),
(7, '3122500007', 'Irfan Akmal Ardianto', 'Laki-laki', 'D3 Informatika', 'akmal20031003@gmail.com', 'Palembang', '+62 877-031', 'SMA Plus Negeri 17 Palembang', 'ASD', '371896654_irfan.png'),
(8, '3122500008', 'Arsyita Devanaya Arianto', 'perempuan', 'D3 Informatika', 'arsyitadevanaya@gmail.com', 'gunung anyar ', '+62851716', 'SMAN 17 sby', 'ASD', '1149044465_arsyita.png'),
(9, '3122500009', 'Mirta Chadhirotin Nachlah', 'perempuan', 'D3 Informatika', 'mirtachadhirotin@gmail.com', 'GRESIK', '+62 896-034', 'SMAN 1 MANYAR', 'ASD', '1283943236_mirtha.png'),
(10, '3122500010', 'Leody Zelvon Herliansa', 'Laki-laki', 'D3 Informatika', 'leodyzelvon@gmail.com', 'TUBAN', '08133157133', 'SMAN 2 Tuban', 'WORSHOP DESAIN WEB', '1503759159_leo.png'),
(11, '3122500011', 'Ali Azhar Pradana Braveian', 'Laki-laki', 'D3 Informatika', 'aliazhar@gmail.com', 'surabaya', '+62 895-360', 'SMAN 12 Surabaya ', 'MATEMATIKA', '1945256456_ali.png'),
(12, '3122500012', 'Awal Raya', 'Laki-laki', 'D3 Informatika', 'awalraya4@gmail.com', 'Surabaya, gubeng', '+62 813-592', 'SMAN 1 Kediri', 'OS', '418092088_awal.png'),
(13, '3122500013', 'Mahendra Khibrah Rabbani Sayyid', 'Laki-laki', 'D3 Informatika', 'Mahen@gmail.com', 'Jl. Patua no 10', '+62 881-793', 'SMAN 5 Surabaya', 'MATEMATIKA', '636402811_mahendra.png'),
(14, '3122500014', 'Muhammad Iqbal Rahmatullah', 'Laki-laki', 'D3 Informatika', 'iqbalrahmmatullah01@gmail.com', 'sidoarjo', '+62 812-316', 'SMA Muhammadiyah 3 Tulangan ', 'ASD', '776399354_iqbal.png'),
(15, '3122500015', 'Mayada Azizah', 'perempuan', 'D3 Informatika', 'mayadaazizah27@gmail.com', 'Pasuruan', '+62 813-590', 'SMAN 1 Pandaan', 'WORSHOP DESAIN WEB', '360897389_mayada.png'),
(16, '3122500016', 'Gandi Rukmaning Ayu', 'perempuan', 'D3 Informatika', 'gandirayu@gmail.com', 'LUMAJANG', '+62 838-578', 'SMAN 3 LUMAJANG', 'ASD', '962444949_gandi.png'),
(17, '3122500017', 'Handaru Dwiki Yuntara', 'Laki-laki', 'D3 Informatika', 'handarudwiki@gmail.com', 'Trenggalek', '+62 838-961', 'SMA Negeri 1 Trenggalek', 'WORSHOP DESAIN WEB', '1990378813_handaru.png'),
(18, '3122500018', 'Adam Rasyid Nurmuhammad', 'Laki-laki', 'D3 Informatika', 'adamrasyid01@gmail.com ', 'surabaya', '+62 899-608', 'SMAN 1 SURABAYA', 'OS', '552496604_adam.png'),
(19, '3122500019', 'Akmal Zidani Fikri', 'Laki-laki', 'D3 Informatika', 'akmal20031003@gmail.com', 'SURABAYA', '+62 877-031', 'SMA Negeri 2 Surabaya', 'ASD', '1151948702_akmal.png'),
(20, '3122500020', 'Adinda Zahra Qariru', 'perempuan', 'D3 Informatika', 'adindazahraq@gmail.com', 'Malang', '+62 812-979', 'SMA Thursina IIBS', 'WORSHOP DESAIN WEB', '1385638406_dinda.png'),
(21, '3122500021', 'Mohammad Ilham Ramadani', 'Laki-laki', 'D3 Informatika', 'ilham@gmail.com', 'surabaya', '+62 896-996', 'SMAN 10 Surabaya', 'ASD', '1572092589_ilham.png'),
(22, '3122500022', 'Virginia Faiqoh ', 'perempuan', 'D3 Informatika', 'virginia24102003@gmail.com', 'sidoarjo', '+62 895-158', 'SMKN 2 Buduran Sidoarjo ', 'OS', '942297292_pira.png'),
(23, '3122500023', 'Masyitha Fahra Nabila', 'perempuan', 'D3 Informatika', 'masyitharala29@gmail.com', 'TUBAN', '+62 812-167', 'SMAN 1 Tuban', 'OS', '31397552_masita.png'),
(24, '3122500024', 'MUHAMAD REZA MUKTASIB', 'Laki-laki', 'D3 Informatika', 'rezamuktasib.pens@gmail.com', 'SURABAYA', '+62 856-499', 'SMAN 8 SURABAYA', 'ASD', '1978381505_reza.png'),
(25, '3122500025', 'Adira Callysta', 'perempuan', 'D3 Informatika', 'adiracallysta707@gmail.com', 'Mojokerto', '+62 857-160', 'SMAN 3 Mojokerto', 'OS', '931941834_adira.png'),
(26, '3122500026', 'Shofira Izza Nurrohmah ', 'perempuan', 'D3 Informatika', 'shofizza29@gmail.com', 'Ngawi', '+62 856-082', 'MAN 2 Kota Madiun ', 'ASD', '894358504_shopie.png'),
(27, '3122500027', 'Rifqi Rayita Dhiyaulhaq', 'Laki-laki', 'D3 Informatika', 'rifqirrd8@gmail.com', 'Ponorogo', '62 857-4633', 'SMAN 1 PONOROGO ', 'MATEMATIKA', '451617688_rifki.png'),
(28, '3122500028', 'Bagus Bimo Prakoso', 'Laki-laki', 'D3 Informatika', 'bagus.bimo007@gmail.com', 'Tulungagung', '+62 856-454', 'SMAN 1 Boyolangu', 'ASD', '906521846_bimo.png'),
(29, '3122500030', 'Muhammad Syahrul Ramdhan', 'Laki-Laki', 'D3 Informatika', 'sahrulramadhan684@gmail.com', 'Sidoarjo ', '0896034436', 'SMA Muhammadiyah 3 Tulangan ', 'WORSHOP DESAIN ', '1633214018_sahrul.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungan_materi_mahasiswa`
--

CREATE TABLE `hubungan_materi_mahasiswa` (
  `id` int(11) DEFAULT NULL,
  `id_materi` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungan_tugas_mahasiswa`
--

CREATE TABLE `hubungan_tugas_mahasiswa` (
  `id` int(11) DEFAULT NULL,
  `id_tugas` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `upload_materi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumpulan_tugas`
--

CREATE TABLE `pengumpulan_tugas` (
  `id` int(11) DEFAULT NULL,
  `id_tugas` int(11) DEFAULT NULL,
  `Nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `upload_tugas` varchar(100) NOT NULL,
  `penilaian` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id`, `judul`, `deskripsi`, `upload_tugas`, `penilaian`) VALUES
(19, 'matematika', '3122500003', '0s5.PNG', 90);

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `upload_tugas` varchar(255) DEFAULT NULL,
  `deadline` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `upload`
--

INSERT INTO `upload` (`id`, `dosen_id`, `judul`, `deskripsi`, `upload_tugas`, `deadline`) VALUES
(15, 0, 'matematika', 'di kumpulkan tgl: 12-06-2023', '0s4.PNG', '2023-06-12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
