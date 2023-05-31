-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 02:47 AM
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
(14, 23, 'Jejak Cinta di Bawah Pohon Sakura', 'Cantik-Itu-Luka-Cover1.jpeg', 'Di sebuah kota kecil yang terletak di tepi sebuah danau, hiduplah seorang pemuda bernama Hiroshi. Ia adalah seorang seniman yang penuh bakat dan memiliki kecintaan yang mendalam pada alam. Setiap harinya, Hiroshi berjalan-jalan di taman yang dikelilingi oleh pohon-pohon sakura yang indah.\r\n\r\nSuatu hari, Hiroshi bertemu dengan seorang wanita misterius bernama Sakura. Wajahnya yang cantik dipenuhi dengan keanggunan yang sama seperti bunga sakura yang mekar di sekelilingnya. Mata mereka bertemu, dan pada saat itu, Hiroshi merasa ada sesuatu yang istimewa dalam pertemuan mereka.\r\n\r\nSakura adalah seorang penyair yang mencurahkan segala emosi dan perasaannya melalui puisi-puisi indah yang ditulisnya. Ia menggambarkan keindahan alam dan cinta yang terpancar melalui kata-kata yang ia susun dengan begitu indah. Hiroshi terpesona oleh bakat dan kepekaan Sakura dalam mengamati dunia di sekitarnya.\r\n\r\nMereka berdua mulai menghabiskan waktu bersama, berjalan-jalan di bawah pohon sakura yang mekar di taman, saling berbagi tentang mimpi dan harapan mereka. Hiroshi mengajak Sakura melihat-lihat karyanya yang dipamerkan di sebuah galeri seni lokal, sementara Sakura membacakan puisi-puisinya kepada Hiroshi di bawah langit malam yang penuh bintang.\r\n\r\nSetiap harinya, cinta di antara Hiroshi dan Sakura semakin dalam. Mereka menikmati momen-momen kecil bersama, seperti berbagi senyum, menggenggam tangan, dan berbicara tanpa kata-kata. Mereka merasakan keajaiban cinta yang tumbuh seperti bunga sakura yang mekar di musim semi.\r\n\r\nNamun, seperti musim sakura yang hanya berlangsung sesaat, kebahagiaan mereka terusir oleh kenyataan. Hiroshi mendapatkan kesempatan untuk melanjutkan studi seni di kota besar yang jauh dari kota kecil mereka. Sakura, dengan hati berat, menyadari bahwa Hiroshi harus mengejar mimpinya.\r\n\r\nMereka berdua menghadapi situasi yang sulit. Cinta mereka yang berkembang semakin dalam, namun juga terhalang oleh jarak dan waktu. Namun, Hiroshi dan Sakura memutuskan untuk tetap berjuang dan mempertahankan hubungan mereka.\r\n\r\nHiroshi berjanji akan menggambar setiap bunga sakura yang ia temui di perjalanan ke kota baru. Setiap kali ia menggambar, ia mengingat kecantikan Sakura dan cinta yang mereka bagikan. Sementara itu, Sakura menulis puisi-puisi yang indah tentang cinta yang tak tergoyahkan di antara mereka.\r\n\r\nBulan-bulan berlalu, dan akhirnya Hiroshi kembali ke kota kecil mereka. Di bawah pohon sakura yang sama tempat mereka pertama kali bertemu, Hiroshi dan Sakura berkumpul kembali. Keduanya tahu bahwa takdir telah menguji cinta mereka, tetapi mereka melihat bahwa cinta sejati mampu melewati segala rintangan.\r\n\r\nDi bawah sinar matahari yang memancar, Hiroshi dan Sakura berpegangan tangan dan berjalan melewati taman yang dipenuhi bunga sakura. Mereka menemukan kembali kebahagiaan mereka dan melanjutkan perjalanan bersama dalam cinta yang abadi.\r\n\r\nCerita \"Jejak Cinta di Bawah Pohon Sakura\" mengisahkan tentang cinta sejati yang mampu melewati jarak dan waktu. Meskipun terpisah, Hiroshi dan Sakura tetap menjaga hubungan mereka dengan cinta yang tak tergoyahkan. Kisah mereka mengajarkan kita bahwa cinta yang tulus dan dedikasi dapat mengatasi segala rintangan yang ada di depan kita.', '2023-05-29', 3, 0.0),
(15, 24, 'Pertarungan di Benua Terlarang', 't1.jpg', 'Di sebuah dunia yang dipenuhi dengan keajaiban dan bahaya, terdapat sebuah benua yang dianggap terlarang oleh penduduk setempat. Benua ini penuh dengan misteri dan legenda tentang harta karun yang tak terbayangkan dan makhluk-makhluk yang mematikan. Namun, hanya segelintir pemberani yang berani memasuki benua tersebut untuk menguak rahasia yang tersembunyi di dalamnya.\r\n\r\nSalah satu pemberani yang tak tergoyahkan adalah Ethan, seorang petualang berani yang terkenal karena keberaniannya. Dia memiliki keahlian bertarung yang luar biasa dan tidak pernah takut menghadapi bahaya apa pun. Ketika kabar tentang harta karun tersembunyi di Benua Terlarang mencapai telinganya, Ethan tahu bahwa ini adalah kesempatan besar baginya untuk membuktikan kemampuannya.\r\n\r\nDitemani oleh sahabat setianya, seorang penyihir jenius bernama Evelyn, Ethan memasuki Benua Terlarang. Mereka menghadapi medan yang keras dan penuh bahaya, melintasi hutan-hutan gelap yang dihuni oleh makhluk-makhluk buas dan menyeberangi sungai-sungai berbahaya yang mengancam nyawa mereka.\r\n\r\nNamun, petualangan mereka baru saja dimulai. Di tengah perjalanan, mereka menemukan bahwa Benua Terlarang tidak hanya dipenuhi dengan harta karun, tetapi juga dikuasai oleh sekelompok penjahat yang kejam dan haus kekuasaan. Kelompok ini dipimpin oleh seorang panglima perang yang kejam bernama Viktor.\r\n\r\nEthan dan Evelyn mengetahui bahwa mereka harus menghadapi Viktor dan para pengikutnya jika mereka ingin melanjutkan pencarian mereka. Mereka menghadapi pertempuran sengit, menggunakan keahlian bertarung dan sihir mereka untuk melawan musuh-musuh yang tangguh. Dalam setiap pertarungan, Ethan dan Evelyn menunjukkan keberanian dan ketangguhan mereka.\r\n\r\nPertempuran demi pertempuran berlalu, dan akhirnya, Ethan dan Evelyn berhasil mencapai tempat persembunyian Viktor. Di dalam ruang bawah tanah yang gelap, mereka berhadapan dengan Viktor dalam pertarungan pamungkas. Serangkaian pukulan dan sihir saling bertukar, mengguncangkan tempat itu.\r\n\r\nEthan, dengan kekuatan dan ketangguhannya, berhasil mengalahkan Viktor. Namun, kemenangan ini tidak datang tanpa pengorbanan. Evelyn terluka parah dalam pertarungan itu. Dalam momen yang menyentuh, Ethan menghampiri sahabatnya dan mengucapkan terima kasih atas keberanian dan dukungannya.\r\n\r\nDengan harta karun yang mereka temukan dan kemenangan yang mereka raih, Ethan dan Evelyn kembali ke kota mereka sebagai pahlawan. Mereka diberi penghargaan atas keberanian dan dedikasi mereka dalam menjelajahi Benua Terlarang. Namun, yang lebih penting, mereka menemukan ikatan persahabatan dan kekuatan yang tak ternilai dari petualangan mereka.\r\n\r\nCerita \"Pertarungan di Benua Terlarang\" mengisahkan tentang petualangan pemberani yang menghadapi bahaya dan musuh-musuh yang kuat. Melalui keberanian, keahlian bertarung, dan kekuatan persahabatan, Ethan dan Evelyn berhasil mengalahkan musuh-musuh mereka dan membuktikan kemampuan mereka. Cerita ini mengajarkan kita tentang pentingnya berani menghadapi tantangan dan melawan ketakutan untuk mencapai tujuan yang kita inginkan.', '2023-05-31', 2, 0.0),
(16, 25, 'Kecantikan dalam Luka', 'Cantik-Itu-Luka-Cover2.jpeg', 'Di sebuah desa kecil yang damai, hiduplah seorang gadis muda bernama Amelia. Ia adalah sosok yang penuh keceriaan, dengan senyum yang tak pernah lepas dari wajahnya. Meskipun begitu, di balik keceriaannya, Amelia menyembunyikan luka yang dalam di hatinya.\r\n\r\nKetika masih kecil, Amelia mengalami kecelakaan yang serius yang meninggalkan bekas luka di wajahnya. Bekas luka itu membuatnya sering menjadi objek perundungan dan cemoohan dari teman-teman sebayanya. Ia sering merasa tersisih dan kesepian karena penampilannya yang berbeda.\r\n\r\nNamun, Amelia memiliki jiwa yang tangguh. Ia menolak untuk membiarkan luka fisiknya menghancurkan semangatnya. Alih-alih meratapi nasibnya, Amelia menggunakan luka itu sebagai sumber inspirasi dan kekuatan untuk mencapai impian-impian dalam hidupnya.\r\n\r\nMeskipun ia sering kali disakiti oleh kata-kata pedas orang lain, Amelia belajar untuk mengasihi dirinya sendiri. Ia mulai menemukan kecantikan yang terpancar dari dalam dirinya, melampaui penilaian orang lain yang hanya melihat luka di wajahnya. Amelia menemukan keberanian untuk menghadapi dunia dengan kepala tegak dan hati yang penuh kasih.\r\n\r\nMelalui kesulitan dan rintangan yang ia hadapi, Amelia bertekad untuk membantu orang lain yang juga mengalami luka emosional. Ia menjadi pendengar yang baik dan memberikan dukungan kepada mereka yang merasa terpinggirkan dan tidak dihargai. Kecantikan dalam luka Amelia menyentuh hati banyak orang di sekitarnya, membawa harapan dan inspirasi.\r\n\r\nSeiring berjalannya waktu, Amelia tumbuh menjadi wanita yang bijaksana dan kuat. Luka di wajahnya menjadi tanda perjalanan hidup yang penuh tantangan dan ketabahan. Ia belajar menerima dirinya apa adanya dan memancarkan keindahan yang sejati.\r\n\r\nKetika Amelia tiba di usia dewasa, ia menemukan cinta sejati dalam sosok pria yang mampu melihat kecantikan dalam luka-lukanya. Pasangan itu saling mendukung dan membangun satu sama lain, menjadikan luka-luka dalam hidup mereka sebagai alat untuk tumbuh dan berkembang.\r\n\r\nCerita \"Kecantikan dalam Luka\" mengajarkan kita tentang kekuatan dalam menerima diri sendiri dan menghadapi luka-luka dalam hidup. Amelia menginspirasi kita untuk melihat melewati penilaian luar dan menemukan kecantikan yang sejati dalam hati dan jiwa kita. Luka bukanlah akhir dari cerita kita, melainkan bagian dari perjalanan yang membentuk kita menjadi pribadi yang kuat dan berharga.', '2023-05-31', 5, 0.0),
(17, 26, 'Eksodus Dari Planet X-39', 'gears-of-war-keyart-2000x2000-5e55a66060eb41.jpg', 'Pada tahun 2150, umat manusia telah berhasil menjelajah ke bintang-bintang di luar tata surya. Di tengah perjalanan eksplorasi antariksa yang luas, sebuah tim peneliti menemukan sebuah planet yang sangat mirip dengan Bumi, yang diberi nama Planet X-39. Planet ini menawarkan potensi untuk menjadi rumah baru bagi manusia yang ingin melarikan diri dari perubahan iklim yang merusak di Bumi.\r\n\r\nTim peneliti terdiri dari para ilmuwan terkemuka, termasuk Dr. Sarah Mitchell, seorang ahli biologi yang berbakat. Mereka menemukan bahwa Planet X-39 memiliki atmosfer yang mendukung kehidupan dan sumber daya alam yang melimpah. Namun, penelitian lebih lanjut mengungkapkan bahwa planet ini memiliki suatu rahasia yang mengejutkan.\r\n\r\nPlanet X-39 ternyata dihuni oleh makhluk-makhluk cerdas yang disebut Xenotians. Mereka adalah spesies alien yang sangat maju secara teknologi dan memiliki pemahaman yang mendalam tentang alam semesta. Driven oleh rasa ingin tahu, tim peneliti berusaha menjalin hubungan dengan Xenotians dan mempelajari kehidupan mereka.\r\n\r\nNamun, semakin dalam penelitian mereka, semakin jelas bahwa Xenotians menghadapi bencana besar. Planet mereka terancam oleh krisis ekologis yang disebabkan oleh perubahan iklim yang tak terkendali. Xenotians sadar bahwa mereka tidak dapat bertahan di Planet X-39 dan memutuskan untuk melakukan eksodus ke planet lain.\r\n\r\nDr. Sarah Mitchell dan tim peneliti merasa terpanggil untuk membantu Xenotians dalam pencarian mereka untuk menemukan planet baru yang dapat mereka huni. Dengan pengetahuan dan keahlian mereka dalam teknologi antariksa, mereka bekerja sama dengan Xenotians untuk merancang dan membangun kapal luar angkasa yang dapat mengangkut ribuan Xenotians menuju sistem bintang lain.\r\n\r\nPerjalanan mereka menuju planet baru bukan tanpa hambatan. Mereka harus mengatasi tantangan teknis, ancaman dari asteroid dan fenomena kosmik, serta konflik internal yang timbul di antara mereka. Namun, tekad mereka untuk menyelamatkan Xenotians dan mencari rumah baru bersama membawa semangat yang tak tergoyahkan.\r\n\r\nSetelah perjalanan yang panjang dan penuh liku, kapal luar angkasa akhirnya tiba di sebuah planet yang cocok untuk menjadi rumah baru bagi Xenotians. Dalam momen kegembiraan, Dr. Sarah Mitchell dan timnya menyaksikan Xenotians memulai eksodus mereka dari kapal dan menapaki tanah yang baru.\r\n\r\nSebagai tanda terima kasih, Xenotians berbagi pengetahuan mereka tentang teknologi dan sains yang canggih dengan manusia. Kolaborasi antara manusia dan Xenotians menciptakan kehidupan yang lebih maju di planet baru tersebut.\r\n\r\nCerita \"Eksodus Dari Planet X-39\" menggambarkan petualangan yang melampaui batas-batas manusia dan memperlihatkan keajaiban eksplorasi antariksa. Di dalamnya terdapat pesan tentang kerjasama antarspesies, kesadaran akan perubahan iklim, serta pentingnya menjaga lingkungan alam semesta yang kita temui.', '2023-05-31', 1, 0.0),
(18, 27, 'Harapan yang Terlupakan', 'dream11.jpg', 'Di sebuah desa kecil yang terletak di tepi pantai, hiduplah seorang wanita bernama Maya. Dia adalah seorang ibu tunggal yang gigih dan penuh pengorbanan, mengurus putrinya, Sophie, yang mengidap penyakit langka yang mengancam nyawanya.\r\n\r\nSophie adalah seorang gadis ceria dengan bakat musik yang luar biasa. Meskipun terbatas oleh kondisinya, dia bermain piano dengan penuh semangat dan memancarkan keceriaan melalui musiknya. Maya, sebagai ibu yang penuh cinta, berusaha sekuat tenaga untuk memberikan Sophie kehidupan yang terbaik dan mewujudkan mimpinya sebagai seorang musisi.\r\n\r\nNamun, hidup Maya dan Sophie berubah drastis ketika mereka menerima berita yang mengejutkan dari dokter. Kondisi Sophie semakin memburuk, dan harapan untuk penyembuhan semakin tipis. Maya merasakan keputusasaan merayap ke dalam dirinya, tetapi dia berusaha keras untuk tetap tegar demi putrinya.\r\n\r\nSementara itu, di seberang desa, terdapat seorang pemuda bernama Daniel. Dia adalah seorang pemain biola berbakat dengan masa lalu yang penuh dengan rasa bersalah dan penyesalan. Suatu hari, Daniel secara kebetulan mendengar Sophie bermain piano dan terpesona oleh keindahan musiknya. Dia merasa bahwa musik Sophie memiliki keajaiban yang mampu menyentuh jiwa.\r\n\r\nDaniel bertekad untuk memperkenalkan Sophie kepada dunia musik yang lebih luas. Dia mengajak Maya dan Sophie ke sebuah konser amal yang akan diadakan di kota terdekat. Meskipun ragu, Maya melihat kesempatan ini sebagai harapan terakhir untuk menghadirkan kebahagiaan dan memenuhi impian Sophie.\r\n\r\nPada malam konser, Sophie duduk di atas panggung dengan piano di depannya, berdebar-debar namun penuh semangat. Daniel bersiap dengan biolanya, siap untuk memainkan duet yang indah dengan Sophie. Ketika mereka mulai memainkan musik, ruangan itu terpenuhi dengan harmoni yang memukau, dan penonton terpesona oleh keajaiban musik yang tercipta.\r\n\r\nSaat melihat Sophie mengalami kebahagiaan dan kepuasan sejati melalui musik, Maya menyadari bahwa meskipun hidupnya penuh dengan tantangan dan penderitaan, dia telah mampu memberikan kebahagiaan sejati kepada putrinya. Dan dalam momen itu, Maya menemukan ketenangan dan damai dalam menghadapi takdir yang tak dapat diubah.\r\n\r\nSetelah konser, Sophie menjadi inspirasi bagi banyak orang dengan bakat musiknya dan keberanian yang tak tergoyahkan. Meskipun hidupnya singkat, dia meninggalkan jejak yang tak terlupakan dalam hati orang-orang yang mengenalnya.\r\n\r\nCerita \"Harapan yang Terlupakan\" mengisahkan tentang cinta seorang ibu yang tak terbatas dan keajaiban musik yang mampu mengubah kehidupan. Melalui ketabahan dan keberanian, Maya dan Sophie mampu menemukan kebahagiaan dalam cobaan hidup mereka. Cerita ini mengajarkan kita tentang arti sejati dari keluarga, kekuatan musik dalam menghadapi keterbatasan, dan bagaimana harapan dapat hidup abadi meskipun dalam keadaan yang sulit.', '2023-05-31', 4, 0.0),
(19, 23, 'Malam di Vila Angker', 'jaill1.jpg', 'Di tepi sebuah danau yang sunyi terdapat sebuah vila tua yang ditinggalkan. Bangunan itu dipenuhi dengan aura kegelapan dan misteri yang menakutkan. Legenda yang beredar di desa sekitarnya mengatakan bahwa vila itu dihuni oleh hantu-hantu yang haus akan darah dan jiwa manusia.\r\n\r\nSeorang penulis bernama Rebecca, yang selalu mencari inspirasi untuk karya horornya, mendengar tentang vila angker ini. Tertarik oleh cerita-cerita menyeramkan yang mengitari tempat itu, Rebecca memutuskan untuk menghabiskan malam di vila tersebut untuk merasakan ketegangan yang sebenarnya.\r\n\r\nSaat matahari terbenam dan langit menjadi gelap, Rebecca memasuki vila angker dengan perasaan campur aduk. Suasana vila itu terasa mencekam dan dingin. Langkahnya bergema di lorong-lorong yang sunyi. Dia mendengar suara-suara aneh dan bisikan-bisikan samar di belakangnya, tetapi dia terus maju dengan keberanian yang ia usahakan.\r\n\r\nSetelah memasuki salah satu kamar di lantai atas, Rebecca merasakan kehadiran yang gelap dan jahat di sekelilingnya. Lampu-lampu redup dan kesan keberadaan sesuatu yang tidak kasat mata semakin kuat. Dia memutuskan untuk melakukan penyelidikan lebih lanjut dan memasuki ruangan terlarang yang tersembunyi di balik pintu terkunci.\r\n\r\nKetika pintu terbuka, terungkaplah ruangan gelap yang penuh dengan benda-benda mistis dan simbol-simbol terlarang. Ruangan itu terasa dipenuhi oleh kehadiran jahat yang membuat bulu kuduk Rebecca merinding. Ia terpaku ketika dia melihat sosok bayangan muncul dari sudut ruangan.\r\n\r\nSosok itu mulai mendekat, dan Rebecca merasakan kepanikan yang tak terlukiskan. Dia mencoba melarikan diri, tetapi pintu yang tadinya terbuka tiba-tiba terkunci dengan sendirinya. Dia terperangkap di dalam ruangan gelap dengan sosok yang semakin mendekat.\r\n\r\nDalam keputusasaan, Rebecca mengingatkan dirinya bahwa ini hanya imajinasinya yang liar. Dengan keberanian yang ia kumpulkan, dia berbalik menghadapi sosok itu. Namun, yang dia lihat bukanlah hantu yang menakutkan, melainkan seorang wanita yang tampak sedih dan terikat dengan masa lalu yang kelam.\r\n\r\nWanita itu mengungkapkan kisahnya yang tragis dan menyedihkan. Dia terjebak di vila tersebut karena sebuah kutukan yang menjeratnya. Rebecca merasa iba dan berempati terhadap wanita itu. Dia menyadari bahwa untuk membebaskan wanita itu, dia harus mengungkap kebenaran di balik kutukan yang menghantui vila itu.\r\n\r\nDengan keberanian dan kecerdasannya, Rebecca berhasil mengungkap misteri yang tersembunyi di balik vila angker tersebut. Dia menemukan artefak kuno yang terkait dengan kutukan dan berhasil mematahkan mantra jahat yang mengurung wanita itu selama bertahun-tahun.\r\n\r\nSetelah kutukan terlepas, wanita itu berterima kasih kepada Rebecca dan lenyap ke dalam kegelapan. Vila itu menjadi sunyi dan damai kembali. Rebecca merasa lega karena berhasil membantu wanita itu menemukan kedamaian.\r\n\r\nRebecca keluar dari vila dengan perasaan kemenangan dan lega. Dia mengetahui bahwa cerita horor sejati bukan hanya tentang ketakutan dan teror, tetapi juga tentang belas kasihan dan keberanian untuk menghadapi masa lalu yang kelam. Cerita malam di vila angker akan selalu menghantui pikiran Rebecca, tetapi dia juga mendapat pengalaman yang tak terlupakan dan inspirasi yang mendalam untuk karya-karyanya yang akan datang.', '2023-05-31', 6, 0.0),
(20, 23, 'The Enchanted Pocket Watch', 'dream12.jpg', 'Di sebuah toko barang antik yang tersembunyi di sudut kota, seorang wanita muda bernama Amelia menemukan sebuah jam saku yang sangat indah. Jam saku itu memiliki desain yang begitu memikat, dengan lapisan emas yang terukir indah dan angka-angka Romawi yang terpahat dengan detail yang luar biasa. Tanpa ragu, Amelia memutuskan untuk membeli jam saku tersebut.\r\n\r\nTidak lama setelah Amelia membawa pulang jam saku itu, sesuatu yang ajaib mulai terjadi. Setiap kali dia membuka tutup jam saku, dia merasa seperti dia terhisap ke dalam dunia lain. Dia menemukan dirinya berada di era Victorian yang misterius, dengan pakaian klasik dan suasana yang begitu berbeda.\r\n\r\nAmelia menyadari bahwa jam saku itu memiliki kekuatan ajaib untuk membawanya ke masa lalu. Dia memutuskan untuk menjelajahi dunia Victoria yang indah dan misterius ini. Dia bertemu dengan orang-orang menarik, seperti seorang penjaga toko yang ramah dan seorang pria tampan yang menjadi kekasihnya.\r\n\r\nNamun, Amelia juga menemui tantangan dan bahaya dalam perjalanannya. Dia menemukan konspirasi yang tersembunyi di balik kerumunan aristokrat, dan dia harus menggunakan kecerdasan dan keberaniannya untuk mengungkap kebenaran dan melindungi orang-orang yang dia cintai.\r\n\r\nSaat Amelia semakin terlibat dalam petualangan ini, dia menyadari bahwa jam saku itu adalah lebih dari sekadar alat transportasi waktu. Jam saku itu memiliki kekuatan untuk mengubah takdir dan menghubungkan masa lalu dengan masa depan. Dalam perjalanan mencari kebenaran, Amelia belajar tentang cinta, pengorbanan, dan kekuatan diri.\r\n\r\nAkhirnya, setelah menghadapi rintangan yang sulit, Amelia menemukan kekuatan dalam dirinya untuk mengatasi konspirasi yang mengancam kedamaian dunia Victorian. Dengan bantuan orang-orang yang dia temui dalam perjalanan waktu ini, dia mengubah takdir dan menghadirkan keadilan.\r\n\r\nKetika Amelia kembali ke masa kini dengan jam saku ajaib itu, dia membawa cerita dan pengalaman yang tak terlupakan. Dia menyadari bahwa petualangan di masa lalu telah membantu membentuk dirinya menjadi pribadi yang lebih kuat dan bijaksana. Dan sementara dia meninggalkan dunia Victoria, dia akan selalu menyimpan kenangan tentang cinta dan petualangan yang ia temui di dalam hatinya.\r\n\r\nCerita \"The Enchanted Pocket Watch\" mengisahkan tentang petualangan seorang wanita yang menemukan sebuah jam saku ajaib yang membawanya ke masa lalu. Cerita ini menyelami tema waktu, petualangan, cinta, dan kekuatan diri. Ia mengajarkan kita tentang arti perjalanan pribadi, penemuan diri, dan kekuatan untuk mengubah takdir.', '2023-05-31', 1, 0.0),
(21, 27, 'The Melody of Love', 'test.jpg', 'Di sebuah kota kecil yang dikelilingi oleh indahnya pegunungan, hiduplah seorang pemuda bernama Ethan. Dia adalah seorang pemain piano berbakat dengan hati yang lembut dan jiwa yang penuh dengan impian. Setiap hari, Ethan akan duduk di depan piano tua miliknya dan memainkan melodi indah yang terdengar bagaikan nyanyian cinta.\r\n\r\nDi suatu hari, saat Ethan sedang memainkan melodi favoritnya di sebuah taman, melodi itu menarik perhatian seorang wanita muda bernama Evelyn. Matanya terpesona oleh keindahan musik yang melambungkan perasaan cinta dan keindahan dalam dirinya. Evelyn, seorang seniman dengan jiwa yang sensitif, merasa terhubung dengan musik yang dimainkan oleh Ethan.\r\n\r\nEthan dan Evelyn berpapasan di taman itu, dan tanpa kata-kata, mata mereka saling bertemu dan menyatu dalam keheningan yang indah. Mereka merasakan getaran cinta yang tumbuh di antara mereka, seolah-olah melodi yang dimainkan oleh Ethan telah menghubungkan hati mereka.\r\n\r\nSejak pertemuan itu, Ethan dan Evelyn tidak dapat lepas satu sama lain. Mereka mulai menjelajahi dunia bersama, menikmati keindahan alam, dan berbagi impian serta harapan mereka. Cinta mereka tumbuh semakin kuat setiap hari, seperti melodi yang mengalun dalam setiap sentuhan dan tatapan mereka.\r\n\r\nNamun, seperti dalam setiap cerita cinta, rintangan pun muncul. Evelyn harus meninggalkan kota kecil itu untuk mengejar mimpinya sebagai seorang pelukis di kota besar. Keduanya dihadapkan pada pilihan sulit antara mempertahankan cinta mereka atau mengikuti panggilan takdir masing-masing.\r\n\r\nNamun, melalui kekuatan cinta mereka yang mendalam, Ethan dan Evelyn memutuskan untuk menghadapi tantangan bersama. Mereka berkomitmen untuk mendukung satu sama lain dalam perjuangan dan impian mereka. Ethan menjelajahi dunia sebagai pemain piano yang menginspirasi, sementara Evelyn mengejar karir seni yang sukses. Di dalam perjalanan mereka, mereka terus mengukir kisah cinta yang indah.\r\n\r\nBeberapa tahun kemudian, ketika impian mereka sudah terwujud, Ethan dan Evelyn kembali ke kota kecil tempat mereka bertemu. Di tempat itu, Ethan mengatur sebuah konser khusus di taman yang menjadi saksi pertemuan mereka. Ketika Ethan memainkan melodi yang pernah menyatukan hati mereka, Evelyn datang dengan sebuah lukisan yang menggambarkan perjalanan cinta mereka.\r\n\r\nDi bawah langit berbintang, Ethan dan Evelyn menyadari bahwa melodi cinta mereka tidak pernah berhenti memainkan irama yang manis dalam kehidupan mereka. Mereka bersatu dalam cinta yang tak tergoyahkan, dengan piano dan lukisan menjadi simbol keindahan yang mereka ciptakan bersama.\r\n\r\nCerita \"The Melody of Love\" mengisahkan tentang pertemuan dua jiwa yang terhubung melalui melodi cinta. Melalui perjuangan, impian, dan komitmen, Ethan dan Evelyn menemukan cinta sejati yang mengisi hidup mereka dengan kebahagiaan dan inspirasi. Kisah ini mengajarkan kita tentang kekuatan cinta yang mampu mengatasi rintangan dan membawa keindahan dalam kehidupan kita.', '2023-05-31', 3, 0.0);

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
(5, 'Inspirasi'),
(6, 'Horror');

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

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`id_review`, `id_cerita`, `id_user`, `rating`, `review`, `tanggal`) VALUES
(9, 14, 28, 5, 'I can\'t say enough about Jejak Cinta di Bawah Pohon Sakur. Jejak Cinta di Bawah Pohon Sakur has really helped our mood.', '2023-05-31'),
(10, 15, 28, 5, 'I would recommend Pertarungan di Benua Terlarang for anyone trying to get the word out about their sories. It has saved me so much time!', '2023-05-31'),
(11, 16, 28, 5, 'I would recommend Kecantikan dalam Luka for anyone trying to get the word out about their business. It has saved me so much time!', '2023-05-31'),
(12, 17, 28, 4, 'I would recommend for anyone trying to get the word out about this stories. It has saved me so much time!', '2023-05-31'),
(13, 18, 28, 3, 'I would recommend for anyone trying to get the word out about this stories. It has saved me so much time!', '2023-05-31'),
(14, 19, 28, 4, 'I would recommend for anyone trying to get the word out about this stories. It has saved me so much time!', '2023-05-31'),
(15, 20, 28, 2, 'I would recommend for anyone trying to get the word out about this stories. It has saved me so much time!', '2023-05-31'),
(16, 21, 28, 1, 'I would recommend for anyone trying to get the word out about this stories. It has saved me so much time!', '2023-05-31'),
(17, 14, 29, 4, 'This stories has really helped our mood. Definitely worth the our mood. Thank you!', '2023-05-31'),
(18, 15, 29, 2, 'This stories has really helped our mood. Definitely worth the our mood. Thank you!', '2023-05-31'),
(19, 16, 29, 5, 'This stories has really helped our mood. Definitely worth the our mood. Thank you!', '2023-05-31'),
(20, 17, 29, 5, 'This stories has really helped our mood. Definitely worth the our mood. Thank you!', '2023-05-31'),
(21, 18, 29, 4, 'This stories has really helped our mood. Definitely worth the our mood. Thank you!', '2023-05-31'),
(22, 19, 29, 1, 'This stories has really helped our mood. Definitely worth the our mood. Thank you!', '2023-05-31'),
(23, 20, 29, 5, 'This stories has really helped our mood. Definitely worth the our mood. Thank you!', '2023-05-31'),
(24, 21, 29, 5, 'This stories has really helped our mood. Definitely worth the our mood. Thank you!', '2023-05-31'),
(25, 14, 30, 3, 'I highly recommend this stories. It has been so important for us as we continue to grow our stories.', '2023-05-31'),
(26, 15, 30, 4, 'I highly recommend this stories. It has been so important for us as we continue to grow our stories.', '2023-05-31'),
(27, 16, 30, 4, 'I highly recommend this stories. It has been so important for us as we continue to grow our stories.', '2023-05-31'),
(28, 17, 30, 4, 'I highly recommend this stories. It has been so important for us as we continue to grow our stories.', '2023-05-31'),
(29, 21, 30, 4, 'I highly recommend this stories. It has been so important for us as we continue to grow our stories.', '2023-05-31');

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
(23, 'Dede Kurniawan', 'dede@mail.com', '123', '2'),
(24, 'M Rizqy', 'rizqy@mail.com', '123', '2'),
(25, 'Fadly Abay', 'fadly@mail.com', '123', '2'),
(26, 'Agung Bachri', 'agung@mail.com', '123', '2'),
(27, 'Hani Nuraini', 'hani@mail.com', '123', '2'),
(28, 'Akhdan Fauzy S', 'akhdan@mail.com', '123', '3'),
(29, 'Novan Ramdhan', 'novan@mail.com', '123', '3'),
(30, 'Dimas Nurhakim', 'dimas@mail.com', '123', '3');

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
  MODIFY `id_cerita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
