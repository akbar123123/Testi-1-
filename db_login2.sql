-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2019 pada 04.57
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_login2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `foto` text,
  `isi` text,
  `tanggal` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul`, `foto`, `isi`, `tanggal`) VALUES
(3, 'ARM Bakal Lanjutkan Kerja Sama Bersama Huwawei', '059797300_1539422448-Device_Laboratory_milik_Huawei_di_Beijing__Tiongkok_Andina_Librianty.jpeg', '<b>PortalBerita.com</b> - Perancang chip ARM akan melanjutkan kerja sama dengan Huawei. Tim legal ARM memutuskan, teknologi chip miliknya berasal dari Inggris dan tidak akan melanggar kebijakan Amerika Serikat (AS), sehingga bisa kembali bekerja sama dengan Huawei.<br><br>\r\n\r\nDilansir dari Reuters, Senin (28/10/2019), Huawei menggunakan cetak biru ARM untuk mendesain prosesor yang menyokong smartphone besutannya. Hubungan kedua perusahaan sempat terancam selama beberapa bulan lalu.<br><br>\r\n\r\nARM pada Mei lalu menghentikan hubungan bisnis dengan Huawei, setelah AS melarang perusahaan-perusahaan negaranya berbisnis dengan Huawei, termasuk menggunakan produk buatan AS. Kembalinya ARM akan mengurangi tekanan yang dihadapi Huawei.<br><br>\r\n\r\nHuawei sampai saat ini masih kesulitan menggunakan produk-produk AS, termasuk aplikasi buatan Google. Meski perusahaan mendapatkan penangguhan hukuman hingga November 2019, Huawei tetap kehilangan akses terhadap beberapa teknologi.<br><br>\r\n\r\nAdapun chip eksklusif Huawei seperti prosesor mobile Kirin 990, dan chipset AI Ascend 910 dibangun di atas arsitektur desain ARM.<br><br>\r\n\r\n\"v8 dan v9 milik ARM adalah teknologi yang berasal dari Inggris. ARM dapat memberikan dukungan kepada HiSilicon untuk arsitektur v8-A, serta generasi berikutnya dari arsitektur ini. Hal ini berdasarkan tinjauan komprehensif dari kedua arsitektur yang telah ditentukan berasal dari Inggris,\" ungkap juru bicara ARM kepada Reuters melalui surat elektronik.<br><br>\r\n\r\nSejauh ini belum jelas apakah larangan AS akan memengaruhi desain arsitektur chip ARM di luar generasi Arm v8-A.<br><br>\r\n\r\n\"ARM secara aktif berkomunikasi dengan pejabat departemen mengenai segala dukungan untuk mitra kami HiSilicon. Kami tetap yakin kami beroperasi dalam parameter pedoman,\" ujar juru bicara tersebut.<br><br>\r\n\r\nHuawei saat ini berada di tengah sengketa perang dagang antara AS dan Tiongkok. Pemerintah AS menuding Huawei mengancam keamanan nasional karena peralatanya dapat digunakan oleh pemerintah Tiongkok untuk memata-matai. Huawei telah berulang kali membantah produknya menimbulkan ancaman.<br><br>\r\n\r\nBisnis Huawei selama bebrapa bulan terakhir terganggu, tapi berdasarkan laporan yang dipublikasikan pada pekan lalu, pendapatan perusahaan tetap tangguh dalam menghadapi kebijakan pemblokiran AS. Pendapatan Huawei selama sembilan bulan 2019 tumbuh 24,4 persen menjadi 610,8 miliar yuan.', '2019-11-11 13:39:26'),
(4, 'Sambut Perayaan Halloween, NASA Unggah Foto Menyeramkan', '073943800_1572342382-matahari_senyum.jpg', '<b>PortalBerita.com</b> - Perayaan Halloween yang jatuh tiap tanggal 31 Oktober tak hanya dirayakan oleh penghuni Bumi. NASA pun ikut merayakan momen ini.<br><br>\r\n\r\nPada Minggu lalu, agensi antariksa Amerika Serikat NASA membagikan foto Matahari saat Halloween tahun 2014 ke akun media sosialnya.<br><br>\r\nMengutip laman The Independent, Selasa (29/10/2019), tampak ada kesamaan antara Matahari dengan sebuah labu.<br><br>\r\n\r\nTampak dalam foto tersebut terpampang Matahari menyeramkan menyerupai wajah labu Halloween.<br><br>\r\n\r\n@NASA\r\nNo, thatâ€™s not a fiery jack-oâ€™-lantern ðŸ”¥ðŸŽƒ. Itâ€™s the <b>Sun</b>! <br>\r\n\r\nOur @NASASun Solar Dynamics Observatory captured this ultraviolet image in 2014, showing active regions on our home star. #Halloween19.<br><br> \r\n\r\n\"Bahkan, bintang kita pun ikut merayakan Halloween. di daerah aktif, Matahari menciptakan wajah jack-o-lantern (wajah labu Halloween), sebagaimana dilihat oleh sinar ultraviolet pada satelit Solar Dynamic Observatory,\" kata NASA dalam keterangan fotonya.<br><br>\r\n\r\n\"Mereka adalah penanda dari serangkaian medan magnet yang intens dan kompleks yang melayang-layang di atmosfer matahari korona,\" kata NASA.<br><br>\r\n\r\nGambar matahari ini cocok untuk merayakan Halloween. Pasalnya, penampakan Matahari tampak menyatukan dua set gelombang ultraviolet ekstrim pada 171 dan 193 Angstroms.<br><br>\r\n\r\nBiasanya, tampilan ini mirip dengan labu Halloween dengan paduan warna emas dan kuning.<br><br>\r\n\r\nDibagikan Berulang Kali<br>\r\nKarena dianggap menarik, warganet pun berulang kali membagikan gambar Matahari yang tersenyum mirip labu Halloween itu. <br><br>\r\n\r\nDi akun Twitter NASA sendiri, cuitan ini dibagikan hingga lebih dari 2.000 kali. Sementara, unggahan ini telah disukai oleh lebih dari 8.000 pengguna Twitter. ', '2019-11-11 13:39:12'),
(5, 'Terinspirasi dari Studio Ghibli, 5 Kreasi Ukiran pada Labu Ini Bikin Takjub', 'karya.jpg', '<b>PortalBerita.com</b> - Perayaan Halloween selalu diadakan setiap akhir bulan Oktober. Berbagai acara untuk menyambut Halloween juga dilakukan. Meski di Indonesia sendiri perayaan Halloween bukanlah hal yang umum. Akan tetapi cukup banyak tempat-tempat yang dihias dengan tema ini. <br><br>\r\nBerbagai tema Halloween pun dihadirkan tiap tahun untuk menyemarakkan acara ini. Namun, yang tak pernah ketinggalan ialah hiasan yang dibentuk dari labu. Mulai dari bentuk wajah mengerikan hingga ukiran-ukiran yang justru membuat kamu gemas.<br><br>\r\nbeberapa ukiran buah labu untuk menyambut Halloween justru memiliki bentuk yang menggemaskan. Terinspirasi dari animasi yang ada pada Studio Ghibli, beberapa ukiran labu ini justru tak akan membuatmu ketakutan.<br>\r\nInilah 5 Buah Kreasi Ukiran Pada Labu<br><br><br>\r\n\r\n<b><h2>1. Hasil ukiran pada buah labu ini pun terlihat cukup nyata.</h2></b><br><img src=\"img/karya/karya1.jpg\" style=\"width: 100%;\"><br><br>\r\n\r\n<b><h2>2. Ukiran pada labu yang tak menyeramkan ini tentu saja cocok untuk hiasan halaman rumah saat menyambut Hallooween.</h2></b><br><img src=\"img/karya/karya2.jpg\" style=\"width: 100%;\"><br><br>\r\n\r\n<b><h2>3. Bukan hanya bisa diletakkan di halaman rumah saja, akan tetapi hiasan labu ini bisa juga berada di dalam rumah.</h2></b><br><img src=\"img/karya/karya3.jpg\" style=\"width: 100%;\"><br><br>\r\n\r\n<b><h2>4. Karya Labu Yang satu ini cukup menggemaskan ya.</h2></b><br><img src=\"img/karya/karya4.jpg\" style=\"width: 100%;\"><br><br>\r\n\r\n<b><h2>Terinspirasi dari tokoh animasi pada Studio Ghibli, tak ayal ukiran yang dihasilkan bisa bermacam-macam.</h2></b><br><img src=\"img/karya/karya5.jpg\" style=\"width: 100%;\"><br><br>\r\n\r\n', '2019-11-11 13:38:58'),
(6, 'Perayaan Halloween Taman Safari Indonesia, Cisarua, Bogor', 'pertunjukan.jpg', '<b>PortalBerita.com</b> - Perayaan Halloween selalu dihiasi ragam acara yang kian menambah keseruan malam yang panjang. Pesta digelar dengan menggunakan kostum seram, wajah menakutkan, hingga interior yang dibuat merinding..<br><br>\r\n\r\nDari mulai arwah, penyihir, zombie, dracula bahkan roh-roh jahat, mendengarnya saja sudah membuat jantung berdetak lebih cepat. Perayaan pesta Halloween di Taman Safari Indonesia, Cisarua, Bogor pun tak kalah menakutkan.<br><br>\r\n\r\nPertunjukan langsung dari hantu dan monster berkeliaran siap menambah keseruan. Saat masuk ke dalam area kebun binatang, terlihat berbagai macam pernak-pernik menyeramkan bernuansa batu nisan dan labu khas Halloween.<br><br>\r\n\r\nPara pengunjung akan dibikin ketakutan dan berkeringat karena suasana dibuat gelap gulita sambil dikejar-kejar oleh karakter-karakter film horor.<br><br>\r\n\r\nPengunjung juga akan dibawa berkeliling menggunakan kereta wisata ke area satwa buas selama 45 menit. Di sela-sela area safari journey, akan muncul sosok yang menyeramkan sebagai rangkaian dari program halloween di Safari Malam.<br><br>\r\n\r\nSelain itu, kereta wisata ini juga akan membawa pengunjung ke area perkampungan India, perkampungan Afrika dan beberapa obyek menarik lainnya.<br><br>\r\n\r\n\"Pada pengunjung pun akan mendapatkan topeng dan permen bertemakan Halloween,\" kata Direktur Taman Safari Indonesia, Jansen Manansang, Jumat (5/10/2019).<br><br><br>\r\n\r\n<b>Tarian Flashmob</b><br>\r\n<img src=\"img/pertunjukan2.jpg\" style=\"width: 100%;\"><br>\r\nPengunjung dapat melihat satwa dari dekat dengan suasana berbeda karena naik kereta wisata yang terbuka. <br><br>\r\nSebelum mengikuti program safari journey, pengunjung akan disuguhi dengan opening tarian flashmob bertemakan Halloween dibarengi iring-iringan berbagai jenis satwa, koleksi taman safari.<br><br>\r\n\r\nMenurut Jansen, even dengan tema Halloween ini dibuat sebagai daya tarik dan untuk menghibur para pengunjung yang mengikuti Safari Malan setiap akhir pekan di bulan Oktober.', '2019-11-11 13:38:48'),
(20, 'Ini Penyebab Mengapa Kadang-Kadang Kita Ingin Menggigit Atau Meremas Bayi Karena Gemas', 'bayi.jpg', '<b>PortalBerita.com</b> - Pernahkah kamu merasa sangat gemas dengan bayi yang kamu temui hingga ingin meremas atau menggigitnya? Walau terkesan aneh, namun hal tersebut ternyata tidak hanya kamu alami sendiri.<br><br>\r\n\r\nRasa gemas yang muncul ketika kamu melihat sesuatu yang menurutmu lucu atau menggemaskan ternyata bisa dijelaskan secara ilmiah. Dilansir dari Times of India, fenomena psikologis ini dikenal sebagai <b><i>cute agression</i></b>.<br><br>\r\n\r\n\r\nPengertian terkait <b><i>cute agression</i></b> ini sebenarnya cukup luas dan tidak hanya sebatas rasa gemas pada sesuatu yang lucu saja. Hal ini bisa juga terjadi ketika kamu ingin menggigit pasangan atau teman tanpa alasan yang jelas.<br><br>\r\n\r\nPerilaku ini bisa juga disebut sebagai \"social biting\" yang sudah dilakukan sejak lama oleh leluhur kita. Berdasar penelitian psikologikal dari Yale University, keinginan untuk pura-pura menggigit atau meremas sesuatu yang kita anggap imut sejatinya merupakan reaksi neurokimia.<br><br>\r\n\r\nBerdasar penelitian tersebut, hal ini disebut sebagai cara otak untuk mencegah kita terlalu terbawa perasaan dan terganggu. Hal ini membantu membatasi emosi positif yang dialami seseorang setelah melihat bayi yang imut dan lucu agar tidak terlalu terbawa perasaan.<br><br>\r\n\r\n\r\n<b>Agresi Sebagai Pengalihan</b><br>\r\nSederhananya, agresi yang kita tunjukkan pada bayi imut ini membantu kita untuk menghilangkan perasaan ingin merawat anak tersebut. Peneliti dari Yale, Oriana AragÃƒn menyebutnya sebagai perangkat untuk mengontrol ekspresi dimorfous.<br><br>\r\n\r\nHal ini bisa jadi cara untuk mengatur dan membatasi emosi ketika diri kewalahan mengatasi perasaan tersebut. Ketika kamu merespons secara kebalikan dari perasaanmu (seperti ingin menggigit bayi), maka emosimu menjadi kembali seimbang.<br><br>\r\n\r\nHal itu lah yang menjelaskan mengapa kamu ingin menggigit atau meremas anak yang lucu. Hal itu bukan jadi pertanda kamu orang agresif atau jahat namun cara tubuh untuk menyeimbangkan hormon di tubuh.<br><br>', '2019-11-15 09:53:07'),
(21, 'ColorOS 7 Meluncur, Ini Daftar Ponsel Oppo yang Kebagian', '5dd614a774683.jpg', '<b>PortalBerita.com</b> - Oppo resmi merilis software antarmuka ponsel ala pabrikan versi teranyar, ColorOS 7 di sebuah acara yang digelar di China, pekan ini.<br>\r\n Banyak hal yang diperbarui oleh Oppo di ColorOS 7, salah satunya adalah desain dari lapisan antarmuka itu sendiri. <br><br>\r\nSecara keseluruhan, jika dibandingkan dengan ColorOS 6, tampilan ikon di ColorOS 7 kini lebih enak dipandang. Ilustrasi tampilan ikon dan menu di ColorOS 7(Gizmochina) Nuansa ikon yang sebelumnya mengusung warna nyentrik kini tampak diperhalus. &nbsp; Tak hanya itu, jenis font ponsel juga kini tampil lebih minimalis.<br><br> Masih soal desain, Oppo turut memperbarui fitur mode gelap (dark mode) yang kini menyelimuti keseluruhan sistem ponsel. <br>Ada pula beragam wallpaper, suara notifikasi, serta animasi antarmuka anyar yang ditawarkan Oppo di ColorOS 7.<br><br>\r\n Selain mempercantik tampilan antarmuka, Oppo juga menambah beberapa fitur baru di sejumlah aplikasi besutan perusahaan. <br>\r\nBeberapa di antaranya mencakup fitur mode malam ekstrim dan opsi peredam getaran saat merekam video di aplikasi kamera.<br><br> Ada pula aplikasi bernama \"Soloop\" yang bisa pengguna manfaatkan untuk mengedit foto dan video dengan mudah. <br><br>Nah, Oppo sendiri rencananya bakal menggelontorkan pembaruan ColorOS 7 secara bertahap hingga 2020 nanti.&nbsp;\r\nNamun, vendor asal China ini sesumbar bahwa Oppo Reno 3 bakal menjadi ponsel Oppo pertama yang diluncurkan dengan sistem antarmuka ColorOS 7.<br> Ponsel tersebut disebut bakal hadir dengan fitur dual-mode 5G dan rencananya akan dikenalkan sekitar Desember mendatang. <br><br>Untuk selengkapnya, berikut sejumlah ponsel Oppo dan Realme yang bakal kebagian ColorOS 7 dalam beberapa waktu ke depan<br> <br><br>\r\n<b>Smartphone Oppo</b><br>\r\nTahap 1 (November 25, 2019) :<br>\r\n - Oppo Reno<br>\r\n - Reno 10x zoom<br>\r\n - Reno Ace<br>\r\n Tahap 2 (Desember 2019) :<br>\r\n - Oppo Reno 2<br>\r\n Tahap 3 (Q1, 2020) : <br>\r\n- Oppo Reno 2 Z <br>\r\n- Reno Z<br>\r\n - Oppo Find X<br>\r\n - Oppo R17<br>\r\n - Oppo R17 Pro<br>\r\n - Oppo K5<br>\r\n Tahap 4 (Q2, 2020) : <br>\r\n- Oppo R15 <br>\r\n- Oppo K3 <br>\r\n- Oppo A9<br>\r\n - Oppo A9x<br>\r\n - Oppo A11<br>\r\n - Oppo A9 (2020)<br><br>\r\n<b> Smartphone Realme</b><br>\r\n Tahap 1 (Februari, 2020) :<br>\r\n - Realme X<br>\r\n - Realme 3 Pro<br>\r\n Tahap 2 (Maret, 2020) :<br>\r\n - Realme Q<br>\r\n - Realme 5 Pro<br>\r\n Tahap 3 (April, 2020) :<br>\r\n - Realme X2<br>\r\n - Realme X2 Pro.\r\n', '2019-11-25 10:43:46'),
(22, 'Risiko Influenza Sangat Tinggi Saat Traveling, Ini Antisipasinya', 'flue.jpg', '<b>PortalBerita.com</b> - Seseorang sangat berisiko terjangkit atau tertular virus influenza saat melakukan perjalanan, terutama jika bersama dengan orang yang juga mengalami influenza. <br><br>\r\nKetua Indonesia Influenza Foundation (IIF), Prof dr Cissy B Kartasasmita SpA(K) PhD, mengatakan bahwa risiko penyebaran virus influenza terjadi saat seseroang mulai melakukan perjalanan, baik melalui transportasi udara (pesawat), laut (kapal laut), atau darat (bus atau kereta api) sekalipun. <br><br>\r\n\"Apalagi misalnya Anda merencanakan perjalanan waktu liburan tiba, pada waktu itu sejumlah bandara, stasiun, dan terminal pasti dipadati oleh banyak orang. Dan bisa jadi salah satu atau beberapa di antara mereka terkena influenza. Itu mudah sekali tertular karena bisa lewat udara juga,\" kata Cissy dalam acara Bebas Influenza Saat Travelling di Jakarta, Senin (25/11/2019).<br><br>\r\n Risiko penyebaran virus influenza selama liburan juga bergantung pada waktu keberangkatan dan daerah tujuan. <br><br>\r\n   Di belahan utara bumi, peningkatan risiko terjadi sekitar Oktober hingga April atau Mei, dan di belahan bumi selatan, sekitar April hingga September. Sementara di beberapa negara tropis, seperti Indonesia, penyebaran flu bisa terjadi sepanjang tahun. <br><br>\r\nUntuk mengantisipasinya, Organisasi Kesehatan Dunia (WHO) merekomendasikan vaksinasi influenza tahunan sebagai cara paling efektif untuk mencegah influenza. <br><br>\r\n\"Influenza adalah penyakit menular yang paling umum diderita para pelancong mancanegara dan bisa dicegah dengan vaksin. Vaksinasi influenza merupakan cara yang efektif untuk mencegah infeksi virus influenza,\" kata Cissy. <br><br>\r\nLakukan vaksinasi influenza setidaknya dua minggu sebelum melakukan perjalanan sebab vaksin influenza membutuhkan waktu kurang lebih dua minggu untuk membentuk antibodi. <br><br>\r\n Vaksin influenza bekerja untuk membantu kekebalan tubuh, namun hanya akan bertahan setidaknya satu tahu setelah pemberian vaksinasi influenza tersebut dilakukan. Hal itu dikarenakan virus penyebab influenza secara terus menerus melakukan mutasi gen. \r\n<br><br>\r\n\"Makanya kita butuh divaksin setiap tahun, untuk menjaga diri dari terkena virus influenza ini,\" ujar dia. <br><br>\r\nUntuk diketahui, 1 November 2018 telah disepakati para ahli kesehatan sedunia sebagai World Flu Day (WFD) atau Hari Flu Sedunia. Momentum ini dimanfaatkan para ahli kesehatan untuk mendorong kerja sama global dalam pencegahan dan pengendalian wabah influenza di tahun 2019.', '2019-11-27 10:29:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `id_berita` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komentar`, `nama`, `email`, `komentar`, `id_berita`) VALUES
(24, 'akbar', 'akbar@gmail.com', 'ga ada duit, jadi nyimak aja :\")', 21),
(25, 'tes', 'tes@mail.com', 'tes', 22);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin123', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_totalview`
--

CREATE TABLE `tb_totalview` (
  `id_totalview` int(11) NOT NULL,
  `totalview` text NOT NULL,
  `id_berita` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_totalview`
--

INSERT INTO `tb_totalview` (`id_totalview`, `totalview`, `id_berita`) VALUES
(68, 'total_view', NULL),
(69, 'total_view', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_totalview`
--
ALTER TABLE `tb_totalview`
  ADD PRIMARY KEY (`id_totalview`),
  ADD KEY `id_berita` (`id_berita`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_totalview`
--
ALTER TABLE `tb_totalview`
  MODIFY `id_totalview` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD CONSTRAINT `tb_komentar_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `tb_berita` (`id_berita`);

--
-- Ketidakleluasaan untuk tabel `tb_totalview`
--
ALTER TABLE `tb_totalview`
  ADD CONSTRAINT `tb_totalview_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `tb_berita` (`id_berita`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
