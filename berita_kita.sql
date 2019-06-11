-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2019 at 03:43 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita_kita`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `user_admin` varchar(15) NOT NULL,
  `pass_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `user_admin`, `pass_admin`) VALUES
(17, 'admin', '$2y$10$1RSqhwQPzyqH.W3IzIzD4uoAXM6PNswBuv6ELRiq2ALQ4HR3kYBdC'),
(18, 'satrio', '$2y$10$lqckBuBlsgqU0mopnGFTp.rSbWZqsgxAGkPGmOSIG8cZtZwAtjbei');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id_alumni` int(5) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat_sekarang` varchar(50) NOT NULL,
  `nomer_telepon` int(50) NOT NULL,
  `alamat_perusahaan` varchar(50) NOT NULL,
  `jenjang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id_alumni`, `nama_lengkap`, `email`, `alamat_sekarang`, `nomer_telepon`, `alamat_perusahaan`, `jenjang`) VALUES
(3, 'Satrio Jati Wicaksono', 'satriotol69@gmail.com', 'Jl. Pandean Lamper 69 B', 2147483647, '-', '2017/S1'),
(4, 'Satrio Baru', 'sakdaodkaok', 'aoskdoakodak', 0, '', ''),
(5, 'Herman', 'asdas', 'asdasda', 0, '', ''),
(6, 'asdasd', 'asd', 'asd', 0, 'asd', ''),
(7, 'Satrio Jati Wicaksono', 'satriotol69@gmail.com', 'Jl. Pandean Lamper 69 B', 2147483647, '-', '2017/S1');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `tanggal_berita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `kategori`, `gambar`, `tanggal_berita`) VALUES
(57, ' PRESS RELEASE MANGROVE REPLANT #6 HMPTK 2019', '<p>Acara mangrove replant #6 telah dilaksanakan pada tanggal 6 April 2019 yang bertempat di Desa mangunharjo Mangkang Wetan, Semarang. Acara ini diikuti oleh peserta yang terdiri dari mahasiswa berbagai fakultas, delegasi, dan seluruh pengurus Himpunan Mahasiswa Profesi Teknik Kimia Universitas Negeri Semarang. Mangrove Replant ini merupakan acara tahunan HMPTK yang bertujuan untuk meningkatkan rasa kepedulian dan kesadaran tentang kondisi alam yang sangat memprihatinkan di daerah pesisir.</p><p>&nbsp;</p><p>Acara dimulai pukul 07.00 di lapangan E1 Fakultas Teknik Unnes, diawali dengan pembacaan doa, menyanyikan lagu Indonesia Raya, dilanjutkan laporan ketua panitia oleh saudari Rizkyah Fatikhatul Jannah, sambutan dari Ketua Umum HMPTK 2019 saudara Abdurrahman Kholish Faizi, dilanjutkan oleh Pembina HMPTK 2019 ibu Radenrara Dewi Artanti Putri, dan sambutan terakhir oleh bapak Wirawan Sumbodo selaku Wakil Dekan III Fakultas Teknik Universitas Negeri Semarang sekaligus membuka acara&nbsp;&nbsp;Mangrove replant #6 . Selanjutnya diadakan briefing peserta untuk persiapan perjalanan dan eksekusi kegiatan di tempat, lalu peserta melakukan perjalanan menggunakan truk menuju desa mangunharjo, Mangkang Wetan, Semarang. Setelah sampai peserta langsung berjalan berbaris menuju pesisir pantai dan dilanjutkan briefing penanaman mangrove oleh bapak Sururi selaku ketua petani mangrove di daerah mangunharjo. Selanjutnya peserta langsung melakukan penanaman mangrove sesuai arahan bapak Sururi. Acara berikutnya adalah foto bersama dan pemberian kenang-kenangan dari ketua panitia Mangrove Replant #6, saudara Rizkyah Fatikhatul Jannah kepada bapak Sururi selaku ketua petani dan pengelola mangrove di desa mangunharjo, Mangkang. Acara dilnjutkan perjalanan ke rumah bapak Sururi untuk bersih diri dan ishoma. Acara berikutnya foto bersama di depan rumah bapak Sururi dilanjutkan perjalanan pulang ke kampus Unnes. Tibalah di penghujung acara, selepas peserta sampai di lapangan E1 Fakultas Teknik Universitas Negeri Semarang, dilanjutkan acara penutupan oleh ketua panitia saudara Rizkyah Fatikhatul Jannah. Dengan diadakannya acara ini, diharapkan mampu meningkatkan rasa kepedulian kita terhadap lingkungan sekitar, menyadarkan kita untuk tidak membuang sampah sembarangan, serta lebih menjaga keseimbangan alam di lingkungan sekitar.</p>', 'Lain-Lain', '5cb9c62acf041.png', '2019-04-19'),
(58, ' Acara mangrove replant #6 telah dilaksanakan pada tanggal 6 April 2019 yang bertempat di Desa mangu', '<p>Himpunan Mahasiswa Profesi Teknik Kimia mengadakan UPGRADING pada Sabtu-Minggu, 11-12 Maret 2017 di Gedong Songo,Bandungan. Kegiatan tersebut diikuti oleh seluruh fungsionaris HMPTK 2017. UPGRADING merupakan kegiatan rutin yang diadakan setiap tahun &nbsp;untuk mengakrabkan, meningkatkan kualitas, mutu &nbsp;serta SDM seluruh fungsionaris HMPTK 2017.<br /><br />Pada hari pertama, kegiatan diisi dengan penyampaian materi mengenai keskretariatan oleh Mira Melina, kebendaharaan oleh Miftakhul Hidayah, kepanitiaan oleh Dio Bagus Pengestu &nbsp;dan sponsorship oleh Lutfi Nahar. Penyampaian materi tersebut bertujuan agar setiap fungsionaris lebih mendalami dasar-dasar dalam organisasi dan kepanitiaan. Sehingga setiap kegiatan HMPTK berjalan dengan lancar. Pada hari kedua, kegiatan meliputi senam pagi,games.<br /><br />Kegiatan ini berlangsung &nbsp;lancar hingga penutupan dan mendapat antusiasme dari seluruh fungsionaris. &nbsp;Semoga setiap fungsionaris memperoleh manfaaat dari kegiatan tersebut.<br /><br />Salam YES WES CAN!</p>', 'HRD', '5cb9c69b7052a.gif', '2019-04-19'),
(59, ' PRESS REALEASE Mahasiswa Teknik Kimia, Fakultas Teknik Universitas Negeri Semarang Berhasil Mendapa', '<p>Semarang (15/03/2019). Selamat dan sukses kepada Mahasiswa Teknik Kimia, Universitas Negeri Semarang yang telah melaksanakan Mawapres (Mahasiswa Berprestasi) di Fakultas Teknik Universitas Negeri Semarang. Selamat kepada Doni Saputra Yang telah mendapatkan Juara 2 Mawapres di Fakultas Teknik Universitas Negeri Semarang. Mahasiswa Teknik Kimia yang mengikuti Mawapres adalah:</p><ol><li>Doni Saputra (Teknik Kimia, 2016)</li><li>Hanifah (Teknik Kimia, 2016)</li></ol><p>Kegiatan Mawapres ini dilaksanakan pada tanggal 11-12 Maret 2019&nbsp; tepatnya di Dekanat lantai 3 Fakultas Teknik Universitas Negeri Semarang. Kegiatan ini dilaksanakan bertujuan sebagai Wadah Aspirasi Mahasiswa Berprestasi di Fakultas Teknik Universitas Negeri Semarang.</p><p>Keberhasilan kegiatan ini diraih berkat bantuan keluarga, kerabat, teman, dan seluruh dosen yang selalu mendukung dan mendoakan yang terbaik untuk kelancaran dan kesuksesan anak didiknya. Semoga keberhasilan ini bisa memotivasi Mahasiswa Teknik Kimia lainnya agar selalu semangat&nbsp; dan tidak berhenti berkarya.</p><p>&nbsp;</p><p>Salam Yes We Can !!!</p>', 'Lain-Lain', '5cb9ccab966d9.jpg', '2019-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `chemengfair`
--

CREATE TABLE `chemengfair` (
  `id_chemeng` int(11) NOT NULL,
  `nama_chemeng` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chemengfair`
--

INSERT INTO `chemengfair` (`id_chemeng`, `nama_chemeng`) VALUES
(1, 'SEMINAR NASIONAL'),
(2, 'ISO TRAINING'),
(3, 'CESA'),
(4, 'SCC'),
(5, 'CEPTION'),
(6, 'CHEMENG AWARDS');

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id_dept` int(11) NOT NULL,
  `nama_dept` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id_dept`, `nama_dept`) VALUES
(1, 'GA'),
(2, 'HRD'),
(3, 'PRC'),
(4, 'SED'),
(5, 'RNT'),
(6, 'STD'),
(7, 'SOCDEV'),
(8, 'TECHNO');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(8, 'Beasiswa'),
(9, 'Seminar Nasional'),
(10, 'PRESS RELEASE'),
(11, 'Event'),
(12, 'CESA'),
(13, 'ISO'),
(14, 'SCC'),
(15, 'HRD'),
(16, 'PRC');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_pengirim`
--

CREATE TABLE `pesan_pengirim` (
  `id_pesan` int(11) NOT NULL,
  `nama_pengirim` varchar(30) NOT NULL,
  `email_pengirim` varchar(50) NOT NULL,
  `isi_pesan` longtext NOT NULL,
  `tanggal_pengirim` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan_pengirim`
--

INSERT INTO `pesan_pengirim` (`id_pesan`, `nama_pengirim`, `email_pengirim`, `isi_pesan`, `tanggal_pengirim`) VALUES
(29, 'asd', 'a', 'aa', ''),
(30, '21', '21', '21', '2019/03/21.11:33:12pm'),
(31, '23', '23', '23', '2019/03/21.11:33:47pm'),
(32, '11', '11', 'aaaa', '2019/03/24.08:47:03am'),
(33, 'Aziz', 'aziz@gmail.com', 'Webnya sangat bagus', '2019/03/25.12:10:54pm'),
(34, 'SAtrio', 'satriotol69@gmail.com', 'webnya bagus bangsat\r\n', '2019/03/26.01:07:37pm'),
(35, 'Satrio', 'satriotol69@gmail.com', 'webnya sangat bagus bangsat, buatnya dimana ya ?', '2019/04/01.08:02:27pm'),
(36, 'asep', 'cvvvvvvvvvvvvvvvvvvv', 'eeeeeeeeeeeeeeeeeeeeee', '2019/04/03.02:53:03pm'),
(37, 'Hai', 'JEMbut', 'jembut', '2019/04/19.09:17:09pm');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(255) NOT NULL,
  `main_judul` varchar(255) NOT NULL,
  `sub_judul` varchar(255) NOT NULL,
  `slide_gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_slide`, `main_judul`, `sub_judul`, `slide_gambar`) VALUES
(1, 'Selamat Datang', 'Himpunan Mahasiswa Profesi Teknik Kimia', '5c983b0a41eaf.jpg'),
(3, '', 'PRESS RELEASE MTMTK 2018', '5c76acf338dd2.jpg'),
(6, '1', '', '5c85fc638aac9.jpg'),
(7, '', '', '5cb9d822023b9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subberita`
--

CREATE TABLE `subberita` (
  `id_subberita` int(11) NOT NULL,
  `judul_sub` varchar(100) NOT NULL,
  `subjudul_sub` varchar(100) NOT NULL,
  `link_sub` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subberita`
--

INSERT INTO `subberita` (`id_subberita`, `judul_sub`, `subjudul_sub`, `link_sub`) VALUES
(15, 'BUKU PANDUAN MAHASISWA TEKNIK KIMIA 2017', 'BUKU PANDUAN MAHASISWA TEKNIK KIMIA 2017', 'https://drive.google.com/file/d/0B-pW1rU-kU36MHBpMlI3UWszVEE/view'),
(20, 'KABINET PRESTASI HMPTK UNNES 2018', 'Logo Kabinet Inovasi HMPTK UNNES 2018 Filosofi Logo Kabinet Prestasi HMPTK UNNES 2018 1      1.     ', 'http://www.himprotekkimunnes.com/2018/03/kabinet-prestasi-hmptk-unnes-2018.html'),
(21, 'BUKU PANDUAN MAHASISWA TEKNIK KIMIA 2017', 'BUKU PANDUAN MAHASISWA TEKNIK KIMIA 2017', 'https://drive.google.com/file/d/0B-pW1rU-kU36MHBpMlI3UWszVEE/view');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `nama_video` varchar(50) NOT NULL,
  `link_video` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `nama_video`, `link_video`) VALUES
(13, '1643', 'https://www.youtube.com/embed/IAAgbPqZ-ME'),
(15, 'unnes', 'https://www.youtube.com/embed/9FzIEJNcQaA'),
(21, 'https://www.youtube.com/embed/tgbNymZ7vqY', 'https://www.youtube.com/embed/tgbNymZ7vqY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`kategori`);

--
-- Indexes for table `chemengfair`
--
ALTER TABLE `chemengfair`
  ADD PRIMARY KEY (`id_chemeng`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_dept`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pesan_pengirim`
--
ALTER TABLE `pesan_pengirim`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `subberita`
--
ALTER TABLE `subberita`
  ADD PRIMARY KEY (`id_subberita`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumni` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `chemengfair`
--
ALTER TABLE `chemengfair`
  MODIFY `id_chemeng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id_dept` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pesan_pengirim`
--
ALTER TABLE `pesan_pengirim`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subberita`
--
ALTER TABLE `subberita`
  MODIFY `id_subberita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
