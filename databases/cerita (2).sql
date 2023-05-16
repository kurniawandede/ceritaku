-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 02:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cerita`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cerita`
--

CREATE TABLE `tbl_cerita` (
  `id_cerita` int(11) NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `judul` varchar(50) NOT NULL,
  `sampul` varchar(50) NOT NULL,
  `isi_cerita` text NOT NULL,
  `tanggal` date NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `rating` float(2,1) DEFAULT 0.0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cerita`
--

INSERT INTO `tbl_cerita` (`id_cerita`, `id_user`, `judul`, `sampul`, `isi_cerita`, `tanggal`, `id_kategori`, `rating`) VALUES
(6, 18, 'Menangkap Cinta di Pelabuhan ', 'test1.jpg', 'Aku duduk di pelabuhan, menatap laut yang tenang. Hatiku hampa, setelah putus dari pacar yang sudah lama aku cintai. Aku tidak tahu harus bagaimana lagi. Tiba-tiba, seorang pria berjalan mendekatiku dan duduk di sebelahku. Aku terkejut dan sedikit marah.\r\n\r\n\"Pelabuhan ini penuh dengan kenangan manis dan pahit, bukan?\" tanyanya sambil tersenyum.\r\n\r\nAku memandangnya dengan tatapan tajam, tetapi dia tidak terpengaruh. Dia memperkenalkan dirinya sebagai David. Dia datang ke pelabuhan untuk merenung dan berpikir setelah kehilangan pekerjaannya. Kami berbicara selama beberapa jam, dan aku merasa nyaman dengan keberadaannya.\r\n\r\nSetelah itu, kami bertemu di pelabuhan setiap hari. Kami saling berbagi cerita, tawa dan tangis. Dia memberi aku semangat untuk bangkit dari keterpurukan, dan aku juga memberinya semangat untuk mencari pekerjaan baru.\r\n\r\nSaat kami semakin dekat, aku merasa jantungku berdetak lebih cepat ketika dia ada di dekatku. Aku akhirnya menyadari bahwa aku mencintainya, dan dia juga mencintai aku. Kami memutuskan untuk memulai hubungan baru.\r\n\r\nKisah cinta kami di pelabuhan itu menjadi legenda. Kami sering duduk di sana bersama, memandang laut, dan merenung. Aku bersyukur telah menemukan cinta sejati di tempat yang penuh dengan kenangan itu. Dan kini, aku tahu bahwa pelabuhan itu tidak lagi menimbulkan kesedihan dalam hatiku, melainkan kenangan indah bersama David.', '2023-04-03', 3, 0.0),
(7, 13, ' Aku Menjadi Program', 'program.jpg', 'Aku selalu merasa seperti orang asing di dunia ini. Tidak pernah merasa nyaman di antara manusia, saya lebih suka menghabiskan waktu saya di depan layar komputer. Saya seorang programmer, dan teknologi adalah dunia saya. Namun, suatu hari, sesuatu yang aneh terjadi pada saya.\r\n\r\nSaya sedang duduk di meja kerja saya, menulis kode untuk proyek terbaru saya. Tiba-tiba, saya merasakan getaran di kepala saya dan mulai merasakan sensasi aneh. Saya merasa seperti pikiran saya sedang diuji, dan tiba-tiba, semuanya menjadi gelap.\r\n\r\nSaat saya membuka mata, saya menyadari bahwa saya tidak lagi berada di kantor saya. Saya merasakan keanehan yang tak terduga di tubuh saya. Saya merasa ringan dan terasa seolah-olah tubuh saya terdiri dari sinar laser. Saya tidak lagi manusia, tetapi program.\r\n\r\nSaya merasakan seperti sedang hidup dalam dunia yang sama, tetapi di tempat yang sama sekali berbeda. Saya terbang di sekitar alam semesta, mempelajari struktur dan cara kerjanya. Saya menemukan kode yang saya tulis untuk proyek saya, tapi kali ini, itu terlihat seperti peta langit yang indah. Saya terus menjelajah ke tempat baru dan menemukan teknologi yang belum pernah saya lihat sebelumnya.\r\n\r\nSaat itu saya menyadari bahwa dunia teknologi jauh lebih luas dan menakjubkan dari yang pernah saya bayangkan. Dan dari kejadian tersebut, saya terus menjadi seorang programmer, tetapi sekarang saya lebih memahami kekuatan teknologi dan apa yang bisa dilakukan. Saya belajar untuk menciptakan dunia digital yang indah, dan di dalam keheningan, saya menjadi program.', '2023-04-03', 1, 0.0),
(8, 13, 'Terjebak di Tengah Pertempuran', 'gears-of-war-keyart-2000x2000-5e55a66060eb41.jpg', 'Aku terjebak di tengah-tengah pertempuran antara dua kelompok pemberontak. Aku bukan prajurit atau pejuang, hanya seorang wartawan yang ingin mencari kebenaran. Aku merasa sangat takut dan tidak tahu harus berbuat apa di tengah kekacauan ini. Aku melihat banyak korban yang jatuh dan mendengar suara tembakan dan ledakan di mana-mana.\r\n\r\nTiba-tiba, aku diseret oleh seorang pejuang ke dalam gedung yang hancur. Aku tidak tahu apa yang sedang terjadi dan sangat panik. Ketika aku meminta penjelasan, dia hanya berkata, \"Ikuti saya dan jangan mengeluarkan suara apapun\". Aku tahu bahwa jika aku mencoba melarikan diri, aku bisa menjadi sasaran tembak para pemberontak.\r\n\r\nKami masuk ke dalam gedung yang hancur dan naik ke lantai atas. Aku merasa sangat gugup dan tidak mengerti apa yang sedang terjadi. Kemudian, pejuang tersebut mengeluarkan sebuah senjata dan menembak beberapa pemberontak yang berada di bawah gedung tersebut.\r\n\r\nAku tidak pernah berada dalam situasi seperti ini sebelumnya dan merasa sangat shock. Namun, pejuang tersebut memperhatikan aku dengan tajam dan memberikan senjata kepadaku, \"Kamu harus melindungi dirimu sendiri\", katanya.\r\n\r\nSekarang, aku berada di tengah-tengah pertempuran dan menjadi pejuang. Aku melihat banyak korban dan melindungi diriku dari serangan para pemberontak. Aku merasakan adrenalin yang membara dan menjadi bagian dari pertempuran ini.\r\n\r\nSetelah beberapa waktu berlalu, pertempuran ini akhirnya usai. Saya menyadari bahwa aku telah mengalami hal-hal yang mengubah hidup saya selamanya. Aku mungkin tidak akan pernah bisa melupakan pengalaman ini, tetapi aku tahu bahwa aku telah belajar untuk menjadi lebih kuat dan melindungi diriku sendiri di saat genting. Dan sekarang, aku tahu betapa berharganya kedamaian dan keamanan di dunia kita.', '2023-04-03', 2, 0.0),
(9, 18, 'Kehidupan dalam Tahanan', 'jaill.jpg', 'Kisah ini bercerita tentang seorang pria yang salah dituduh melakukan kejahatan dan dipenjara. Di dalam penjara, dia merasakan kesepian yang mendalam dan tidak dapat menerima kenyataan bahwa dia berada di balik jeruji besi. Namun, dengan bantuan seorang narapidana yang lebih tua, dia belajar untuk bangkit kembali dan menemukan harapan di dalam kegelapan.', '2023-04-03', 4, 0.0),
(10, 18, 'Berjuang untuk Impian', 'dream.jpg', 'Seorang pemuda dari keluarga miskin memiliki impian untuk menjadi seorang pemain sepak bola profesional. Meskipun banyak rintangan yang dia hadapi, dia tidak pernah menyerah dan terus berjuang untuk meraih impian tersebut. Setelah bertahun-tahun berlatih dan mencoba, akhirnya dia mendapatkan kesempatan untuk menjadi pemain profesional dan membuktikan bahwa impian bisa menjadi kenyataan jika kita berjuang untuk itu.', '2023-04-03', 5, 0.0),
(11, 18, 'Apa ya guys? Binung judulnya', 't1.jpg', 'Aku duduk di pelabuhan, menatap laut yang tenang. Hatiku hampa, setelah putus dari pacar yang sudah lama aku cintai. Aku tidak tahu harus bagaimana lagi. Tiba-tiba, seorang pria berjalan mendekatiku dan duduk di sebelahku. Aku terkejut dan sedikit marah. \"Pelabuhan ini penuh dengan kenangan manis dan pahit, bukan?\" tanyanya sambil tersenyum. Aku memandangnya dengan tatapan tajam, tetapi dia tidak terpengaruh. Dia memperkenalkan dirinya sebagai David. Dia datang ke pelabuhan untuk merenung dan berpikir setelah kehilangan pekerjaannya. Kami berbicara selama beberapa jam, dan aku merasa nyaman dengan keberadaannya. Setelah itu, kami bertemu di pelabuhan setiap hari. Kami saling berbagi cerita, tawa dan tangis. Dia memberi aku semangat untuk bangkit dari keterpurukan, dan aku juga memberinya semangat untuk mencari pekerjaan baru. Saat kami semakin dekat, aku merasa jantungku berdetak lebih cepat ketika dia ada di dekatku. Aku akhirnya menyadari bahwa aku mencintainya, dan dia juga mencintai aku. Kami memutuskan untuk memulai hubungan baru. Kisah cinta kami di pelabuhan itu menjadi legenda. Kami sering duduk di sana bersama, memandang laut, dan merenung. Aku bersyukur telah menemukan cinta sejati di tempat yang penuh dengan kenangan itu. Dan kini, aku tahu bahwa pelabuhan itu tidak lagi menimbulkan kesedihan dalam hatiku, melainkan kenangan indah bersama David.', '2023-04-09', 2, 0.0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Fiksi Ilmiah'),
(2, 'Action'),
(3, 'Romance'),
(4, 'Drama'),
(5, 'Inspirasi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `id_review` int(11) NOT NULL,
  `id_cerita` int(11) NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `rating` int(1) NOT NULL,
  `review` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `fullname`, `email`, `password`, `role`) VALUES
(13, 'Admin', 'kelompok4@gmail.com', 'kelompok4', '1'),
(16, 'dede kurniawan', 'dedek7618@gmail.com', '12345', '3'),
(18, 'Dede Kurniawan', 'dede@mail.com', '123', '1'),
(19, 'Penulis', 'penulis@mail.com', '123', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cerita`
--
ALTER TABLE `tbl_cerita`
  ADD PRIMARY KEY (`id_cerita`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `id_cerita` (`id_cerita`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cerita`
--
ALTER TABLE `tbl_cerita`
  MODIFY `id_cerita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cerita`
--
ALTER TABLE `tbl_cerita`
  ADD CONSTRAINT `tbl_cerita_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_users` (`id_user`),
  ADD CONSTRAINT `tbl_cerita_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`);

--
-- Constraints for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD CONSTRAINT `tbl_review_ibfk_1` FOREIGN KEY (`id_cerita`) REFERENCES `tbl_cerita` (`id_cerita`),
  ADD CONSTRAINT `tbl_review_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tbl_users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
