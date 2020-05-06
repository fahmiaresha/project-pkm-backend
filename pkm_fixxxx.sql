-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 12:07 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `NAMA_ADMIN` varchar(30) NOT NULL,
  `ALAMAT_ADMIN` varchar(50) NOT NULL,
  `NO_TELP_ADMIN` char(15) NOT NULL,
  `EMAIL_ADMIN` char(30) NOT NULL,
  `USERNAME_ADMIN` varchar(20) NOT NULL,
  `PASSWORD_ADMIN` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `NAMA_ADMIN`, `ALAMAT_ADMIN`, `NO_TELP_ADMIN`, `EMAIL_ADMIN`, `USERNAME_ADMIN`, `PASSWORD_ADMIN`) VALUES
(1, 'Ghany Khusuma Wardhani', 'Jalan Jojoran 1 54D Kel. Mojo Kec. Gubeng Surabaya', '081330306336', 'ghanykhusuma@gmail.com', 'bem_ghany', '12345678'),
(2, 'Jasmine Khairunisa', 'Kedungturi Permai 1 K/29, RT 39 RW XI, Taman, SDA', '082124186975', 'ilpresvokasi@gmail.com', 'bem_jasmine', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE `bidang` (
  `ID_BIDANG` int(11) NOT NULL,
  `NAMA_BIDANG` varchar(15) NOT NULL,
  `PENJELASAN` text NOT NULL,
  `TEMPLATE` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang`
--

INSERT INTO `bidang` (`ID_BIDANG`, `NAMA_BIDANG`, `PENJELASAN`, `TEMPLATE`) VALUES
(1, 'PKM - P ', 'Mengemukakan gagasan baru tentang IPTEK atau sosial yang dilandasi dengan teori yang kuat yang didapat melalui penelitian. Terbagi dua macam yaitu PE (Penelitian Eksakta) dan PSH (Penelitian Sosial Humaniora)\r\n', 'https://bit.ly/2JUVP62\r\n'),
(2, 'PKM - K', 'Mengusulkan wirausaha baik berupa produk jadi, maupun jasa yang bersifat unik\r\n', 'https://bit.ly/2UXAWNN\r\n'),
(3, 'PKM - M', 'Penerapan iptek sebagai solusi permasalahan di masyarakat yang bersifat non profit\r\n', 'https://bit.ly/2JVStj6\r\n'),
(4, 'PKM - T', 'Penerapan teknologi sebagai solusi permasalahan mitra (suatu organisasi)\r\n', 'https://bit.ly/34x8lSH\r\n'),
(5, 'PKM - KC', 'Karya berupa hasil konstruksi karsa yang fungsional\r\n', 'https://bit.ly/39XmObQ\r\n'),
(6, 'PKM - AI', 'Artikel ilmiah hasil kegiatan akademik mahasiswa\r\n', 'https://bit.ly/2JTXaKf\r\n'),
(7, 'PKM - GT', 'Karya tulis memuat inde berupa konsep perubahan di masa depan\r\n', 'https://bit.ly/2RtudZP\r\n'),
(8, 'PKM - GFK', 'Isu SDGs dan isu Nasional\r\n', 'https://bit.ly/2JRlyfL\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `contact_person`
--

CREATE TABLE `contact_person` (
  `ID_CP` int(11) NOT NULL,
  `ORGANISASI` varchar(50) NOT NULL,
  `NOMER_TLP_1` char(15) NOT NULL,
  `NOMER_TLP_2` char(15) DEFAULT NULL,
  `LINE` char(10) DEFAULT NULL,
  `EMAIL_CP` char(30) DEFAULT NULL,
  `INSTAGRAM` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_person`
--

INSERT INTO `contact_person` (`ID_CP`, `ORGANISASI`, `NOMER_TLP_1`, `NOMER_TLP_2`, `LINE`, `EMAIL_CP`, `INSTAGRAM`) VALUES
(1, 'Pengobatan Tradisional', '081233988385', NULL, NULL, NULL, NULL),
(2, 'Fisioterapi', '081233775253', NULL, NULL, NULL, NULL),
(3, 'Radiologi', '085798175557', NULL, NULL, NULL, NULL),
(4, 'Paramedik Veteriner', '082233831090', NULL, NULL, NULL, NULL),
(5, 'Teknik Gigi', '081554695926', NULL, NULL, NULL, NULL),
(6, 'Teknik Laboraturium Medis', '081332265010', NULL, NULL, NULL, NULL),
(7, 'Kesehatan dan Keselamatan Kerja', '085854031601', NULL, NULL, NULL, NULL),
(8, 'Manajemen Perbankan', '081351959399', NULL, NULL, NULL, NULL),
(9, 'Manajemen Perhotelan', '082244700302', NULL, NULL, NULL, NULL),
(10, 'Manajemen Pemasaran', '089505715867', NULL, NULL, NULL, NULL),
(11, 'Administrasi Perkantoran', '087850829894', NULL, NULL, NULL, NULL),
(12, 'Akuntansi', '081234530412', NULL, NULL, NULL, NULL),
(13, 'Bahasa Inggris', '089697098531', NULL, NULL, NULL, NULL),
(14, 'Perpajakan', '089676876321', NULL, NULL, NULL, NULL),
(15, 'Otomasi Sistem Intrumentasi', '083144791515', NULL, NULL, NULL, NULL),
(16, 'Sistem Informasi', '082234440078', NULL, NULL, NULL, NULL),
(17, 'Perpustakaan', '085334924235', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detil_kriteria`
--

CREATE TABLE `detil_kriteria` (
  `ID_JENIS_KRITERIA` int(11) NOT NULL,
  `ID_BIDANG` int(11) NOT NULL,
  `URAIAN_KRITERIA` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detil_kriteria`
--

INSERT INTO `detil_kriteria` (`ID_JENIS_KRITERIA`, `ID_BIDANG`, `URAIAN_KRITERIA`) VALUES
(1, 1, 'Pengamatan mendalam \r\nberbasis iptek untuk mengungkap informasi baru. \r\n'),
(1, 2, 'Produk iptek sebagai komoditas usaha mahasiswa '),
(1, 3, 'Solusi iptek (teknologi/manaje men) bagi mitra non profit '),
(1, 4, 'Solusi iptek (teknologi/manaje men) bagi mitra profit '),
(1, 5, 'Karya berupa hasil konstruksi karsa yang fungsional '),
(1, 6, 'Artikel ilmiah hasil kegiatan akademik mahasiswa. '),
(1, 7, 'Karya tulis memuat ide berupa konsep perubahan di masa depan '),
(1, 8, 'Isu SDGs dan isu Nasional '),
(2, 1, 'Sesuai bidang ilmu, lintas bidang di anjurkan '),
(2, 2, 'Tidak terikat bidang ilmu '),
(2, 3, 'Tidak terikat bidang ilmu '),
(2, 4, 'Sesuai bidang ilmu, lintas bidang di anjurkan '),
(2, 5, 'Sesuai bidang ilmu, lintas bidang di anjurkan '),
(2, 6, 'Sesuai bidang ilmu, lintas bidang di anjurkan '),
(2, 7, 'Tidak terikat bidang ilmu '),
(2, 8, 'Diperkenankan berbeda bidang ilmu, lintas bidang ilmu di anjurkan '),
(3, 1, 'Diploma, S1 '),
(3, 2, 'Diploma, S1 '),
(3, 3, 'Diploma, S1 '),
(3, 4, 'Diploma, S1 '),
(3, 5, 'Diploma, S1 '),
(3, 6, 'Diploma, S1 '),
(3, 7, 'Diploma, S1'),
(3, 8, 'Diploma, S1 '),
(4, 1, '3 Orang'),
(4, 2, '3-5 orang '),
(4, 3, '4-6 orang '),
(4, 4, '4-6 orang '),
(4, 5, '3 orang '),
(4, 6, '3 orang '),
(4, 7, '3 Orang'),
(4, 8, '3 orang '),
(5, 1, 'Rp 5 s.d 12,5 juta '),
(5, 2, 'Rp 5 s.d 12,5 juta '),
(5, 3, 'Rp 5 s.d 12,5 juta '),
(5, 4, 'Rp 5 s.d 12,5 juta '),
(5, 5, 'Rp 5 s.d 12,5 juta '),
(5, 6, 'Insentif Rp 3 juta '),
(5, 7, 'Insentif Rp 3 juta '),
(5, 8, 'Insentif Rp. 4 juta '),
(6, 1, 'Lap Kemajuan, \r\nLap Akhir, Artikel \r\nIlmiah,  dan/atau \r\nProduk Program \r\n'),
(6, 2, 'Lap Kemajuan, \r\nLap Akhir, Artikel \r\nIlmiah, Produk \r\nUsaha \r\n'),
(6, 3, 'Lap Kemajuan, \r\nLap Akhir, Artikel \r\nIlmiah dan/atau \r\nProduk Program \r\n'),
(6, 4, 'Lap Kemajuan, \r\nLap Akhir, Artikel \r\nIlmiah dan/atau \r\nProduk Program \r\n'),
(6, 5, 'Lap Kemajuan, \r\nLap Akhir, Artikel \r\nIlmiah dan \r\nPrototip atau \r\nProduk Fungsional \r\n'),
(6, 6, 'Artikel Ilmiah '),
(6, 7, 'Artikel Ilmiah memuat konsep perubahan atau pengembangan '),
(6, 8, 'Video yang diunggah ke YOUTUBE, dan \r\nLaporan GFK \r\n'),
(7, 1, 'Tidak Ada'),
(7, 2, 'Tidak Ada'),
(7, 3, 'Ada'),
(7, 4, 'Ada'),
(7, 5, 'Tidak Ada'),
(7, 6, 'Tidak Ada'),
(7, 7, 'Tidak ada'),
(7, 8, 'Tidak Ada');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kriteria`
--

CREATE TABLE `jenis_kriteria` (
  `ID_JENIS_KRITERIA` int(11) NOT NULL,
  `NAMA_JENIS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kriteria`
--

INSERT INTO `jenis_kriteria` (`ID_JENIS_KRITERIA`, `NAMA_JENIS`) VALUES
(1, 'Inti Kegiatan '),
(2, 'Kriteria keilmuan '),
(3, 'Tingkat Pendidikan'),
(4, 'Jumlah Anggota'),
(5, 'Pendanaan'),
(6, 'Luaran'),
(7, 'Mitra');

-- --------------------------------------------------------

--
-- Table structure for table `tata_cara`
--

CREATE TABLE `tata_cara` (
  `ID_TATACARA` int(11) NOT NULL,
  `NAMA_TATA_CARA` varchar(50) NOT NULL,
  `TATA_CARA` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tata_cara`
--

INSERT INTO `tata_cara` (`ID_TATACARA`, `NAMA_TATA_CARA`, `TATA_CARA`) VALUES
(1, 'Latar Belakang', '1. Paragraf pertama atau paragraf permualaan : menuliskan terkait gambaran umum ke khusus atau khusus ke umum. Dengan menjelaskan gambaran tersebut akan memudahkan pembaca dalam mengetahui isu dan permasalahan apa yang akan dan sedang kita angkat didalam penelitian karya tulis ilmiah, makalah ataupun sebagainya.\r\n2. Pada parangraf kedua atau sisi pertengahan : Menjelaskan terkait dengan fakta dan juga data yang didapatkan dari sumber yang benar. Serta memberikan ulasan dari penelitian yang terkait dengan isu yang diangkat. Dapat juga dengan memberikan bagaimana pendapat ahli yang mengangkat isu yang sama dengan permasalahan yang kita angkat.\r\n3. Pada sisi akhir atau paragraf penutup : Menjelaskan kepada para pembaca terkait pemberian solusi dan penyelesaian masalah yang akan menjadi judul makalah ataupun karya tulis ilmiah.\r\n'),
(2, 'Rumusan Masalah', '1. Masalah dirumuskan dalam bentuk pertanyaan.\r\n2. Rumusan masalah yang dirumuskan hendaknya jelas dan padat.\r\n3. Rumusan masalah berisi implikasi adanya data untuk mencari sebuah solusi dalam suatu permasalahan.\r\n4. Masalah harus menjadi dasar bagi judul dalam sebuah proses penelitian.\r\n'),
(3, 'TujuanProgram', '1. suatu hal yang ingin dicapai saat melakukan pengerjaan terhadap pkm \r\n2. pada prinsipnya tujuan program merupakan jawaban dari rumusan rumusan masalah yang telah dibuat\r\n'),
(4, 'Luaran Program', 'Menjelaskan luaran dari pkm yang dibuat dalam garis besarnya seperti laporan kemajuan, laporan akhir, artikel ilmiah  dan/atau produk program,dll. (catatan: setiap bidang PKM memiliki penjelasan luaran program yang berbeda beda).'),
(5, 'Manfaat Program', 'Suatu hal yang ingin dicapai setelah pengerjaan terhadap PKM selesai dilakukan'),
(6, 'Gambaran Umum', '1. PKM-T \r\nI. Kondisi umum mitra produktif didukung data kuantitatif\r\nii.  Keadaan mitra produktif dan lingkungan yang memiliki masalah\r\niii. Literatur yang mendukung mechanism of action dalam memecahkan masalah mitra (problem solving).\r\niv. Jangan lupa referensi/sitasi mutakhir dan valid\r\n\r\n2. PKM-M\r\nPenjelasan mengenai kondisi masyarakat sasaran berdasarkan fakta yang ada.\r\n\r\n3. PKM-K\r\nI. Deskripsi Produk\r\n1. Paragraf 1 : Uraikan produk mulai dari nama produk/jasa, desain produk/jasa, bahan produk, cara penggunaannya, fungsi produk/jasa, dan seterusnya. Intinya deskripsi produk. Silahkan kembangkan sendiri. \r\n2. Paragraf 2 : Proses Kerja produk/jasa\r\n3. Paragraf 3 : Kemasan produk/jasa\r\nii. Keunggulan Produk\r\nKeunggulan dari segi kemasan, bahan, harga, pemasaran, atau keunggulan lainnya. Keunggulan produk/jasa mu harus ditonjolkan. Sehingga produk/jasa punya nilai lebih jika dibandingkan dengan produk sejenis yang telah beredar di pasaran\r\niii. Peluang Pasar\r\nJelaskan salah satu/lebih teori ekonomi yang berhubungan dengan produk/jasa kalian. Ex : Analisis SWOT\r\niv. Analisis Ekonomi Usaha\r\nPerhitungan HPP, BEP, Perkiraan keuntungan. Boleh ditambah perhitungan-perhitungan lainnya.\r\n'),
(7, 'Tinjauan Pustaka', '1. mempelajari/memahami topik pembahasan dari program yang dibuat.\r\n2. mencari literatur/mengumpulkan data yang berkaitan dengan program yang dibuat\r\n3. melakukan dan mengembangkan argument \r\n4. untuk cara penulisan: tentukan tema tema yang telah diidentifikasi kemudian bagi ke dalam bagian bagian (headings) dan sub-sub bagian (subheadings) dan susun secara logis\r\n'),
(8, 'Metode Pelaksanaan / Penelitian', '1. Penulisan waktu dan tempat dilakukan secara jelas dan mendetail\r\n2. Waktu penelitan yang digunakan antara 3 – 5 bulan\r\n3. Tempat penelitian dijelaskan secara mendetail dimanakah penelitian tersebut dilakukan\r\n4. Alat dan bahan diuraikan secara jelas bahan dan alat apasaja yang diperlukan untuk penelitian tersebut beserta spesifikasinya\r\n5. Variable penelitian dituliskan dengan jelas (variable bebas, variable terikat, variable control)\r\n6. Perhitungan jumlah sampel disesuaikan dengan jenis penelitian dan metode yang digunakan dalam penelitian\r\n7. Teknik pengumpulan data diuraikan secara Teknis bagaimanakah proses pengambilan data tersebut\r\n8. Analisis data merupakan hasil statistic dari pengolahan data\r\n9. Rancangan penelitian dibuat dengan membuat alur dari kegiatan penelitian yang dimaksudkan dengan seksama dan jelas\r\n'),
(9, 'Biaya dan Jadwal Kegiatan', '1.	Biaya : untuk masalah biaya, tuliskan sesuai kebutuhan PKM, biaya maksimal setiap PKM adalah Rp.12.000.000 dan usahakan biaya PKM anda bisa mencapai Rp.12.000.000 dan jangan kurang dari Rp.9.000.000\r\n2. Biaya yang boleh dianggarkan adalah biaya yang digunakan untuk menunjang PKM seperti pembelian alat, penjilidan laporan, pembelian materai, biaya perjalanan untuk survei PKM, atau misalnya memperbaiki alat penunjang pembuatan PKM. Dalam menganggarkan PKM harus diperhatikan kebutuhan dan rasionya\r\n3. Biaya yang tidak perlu dianggarkan adalah biaya yang tidak menunjang untuk PKM misalnya biaya makan dan lain-lain\r\n4.Jadwal kegiatan : blok tabel dan gunakan warna hitam untuk jadwal kegiatan anda\r\n'),
(10, 'Gagasan', '1. Prediksi keberhasilan gagasan yang diajukan terhadap masalah yang ada. Nilai pembeda solusi yang kita tawarkan dengan solusi yang pernah ada.\r\nI. Analisa situasi yang berisi tentang kondisi saat ini yang mendorong munculnya gagasan yang diperoleh dari bahan bacaan, wawancara, observasi, imajinasi yang relevan. (harus dilengkapi dengan sumber pustaka/referensi)\r\nii. Solusi yang pernah dilakukan untuk mengatasi masalah pada sasaran baik dari pemerintah maupun swasta. Solusi yang dianalisa merupakan solusi yang berhasil maupun yang tidak berhasil. (harus dilengkapi dengan sumber pustaka/referensi)\r\n\r\n2. Pihak-pihak yang dilibatkan adalah perusahaan, badan, lembaga, organisasi yang akan membantu implementasi gagasan. Lembaga pemerintahan terkadang diperlukan dalam hal regulasi. (dijelaskan peran masing-masing pihak )\r\n\r\n3. Langkah-langkah yang disusun secara sitematis mulai awal implementasi ide hingga keberlanjutan ide serta mencantumkan jangka waktu dan pihak yang terlibat (ilustrasikan dalam satuan waktu) Diharapkan gagasan dapat digambarkan secara detail, rinci, atau visualisasi gambar.\r\n'),
(11, 'Kesimpulan (PKM-GT)', 'Secara umum kesimpulan merupakan rangkuman yang mengungkap gagasan yang diajukan, teknik implementasi yang akan dilakukan, dan manfaat serta dampak gagasan. Kesimpulan sebaiknya dapat memberikan kalimat yang meyakinkan keberhasilan program.'),
(12, 'Lampiran', '1.	Lampiran pertama berisi biodata ketua tim, anggota tim, dan biodata dosen pembimbing diusahakan untuk dosen pembimbing diisi secara lengkap dan datanya sesuai\r\n\r\n2.	Lampiran kedua berisi rancangan anggaran yang sesuai dengan kebutuhan PKM, biaya maksimal setiap PKM adalah Rp.12.000.000 dan usahakan biaya PKM anda bisa mencapai Rp.12.000.000 dan jangan kurang dari Rp.9.000.000\r\n\r\n3.	Lampiran ketiga berisi tugas tiap anggota dan lama waktu pengerjaan PKM. \r\n\r\n4.	Lampiran keempat adalah surat pernyataan ketua tim yang berisi biodata ketua tim\r\n\r\n5.	Lampiran-lampiran tambahan pada setiap PKM:\r\n1.	PKM T =  berisi surat pernyataan kesediaan dari mitra untuk melakukan kerja sama, prototype atau desain sederhana dari program, lokasi mitra\r\n2.	PKM M = berisi surat pernyataan kesediaan dari mitra untuk melakukan kerja sama, lokasi mitra\r\n3.	PKM KC = prototype atau desain sederhana dari program\r\n4.	PKM AI =  pada lampiran ketiga PKM AI berisi surat pernyataan sumber tulisan PKM AI program kegiatan berisi KKN atau Praktik Lapangan atau Tugas kelompok atau Magang atau PKM yang sudah dilaksanakan, dan lain-lain. Sesuaikan dengan jenis program kegiatan yang telah dilakukan.\r\n5.	PKM GFK = pada lampiran keempat PKM GFK akan menyertakan link youtube dan synopsis yang berupa deskripsi singkat mengenai isi gagasan futuristic ( maksimum 500 kata )\r\n'),
(13, 'Daftar Pustaka', '1. Daftar Pustaka ditulis dengan “Harvard style” (penulisan Harvard style lebih lanjut bisa dilihat di google) (https://bit.ly/harvardstylepustaka)\r\n2. Penulisan daftar pustakan diurutkan berdasarkan abjad nama\r\n3. Hanya Pustaka yang dikutip yang dicantumkan kedalam daftar Pustaka\r\n4. Cek konsistensi isi proposal dengan jumlah sitasi\r\n'),
(14, 'Halaman Sampul', '1. Logo UNAIR, hitam putih\r\n2. Semua proposal ukuran kertas A4;\r\n3. Margin Left 4, Top 3, Right 3, Bottom 3\r\n4. Nama ketua kelompok ditulis paling atas\r\n5. Judul pkm terdiri dari 12 kata\r\n6. Cover menggunakan nomor romawi\r\n'),
(15, 'Halaman Lembar Pengesahan', '1. Penomoran menggunakan romawi\r\n2. Berisi tanda tangan dari ketua kelompok, dosen pembimbing, wakil dekan 1 fakultas dan direktur kemahasiswaan\r\n3. Berisi biodata ketua pelaksana dan dosen pembimbing\r\n4. Untuk sumber dana diisi di bagian kemenristekdikti dan jumlah dana disesuaikan dengan anggaran dana yang telah dirancang,\r\n'),
(16, 'Daftar Isi', '1. Daftar isi ditulis dengan jelas menggunakan font Times New Roman font size 12 line spacing 1,15\r\n2. Penulisan kalimat “daftar isi” menggunakan font dan font size yang sama dan juga di bold dan penulisan “daftar isi” menggunakan huruf kapital semua\r\n3. Daftar isi memuat mulai dari halaman sampul sampai lampiran terakhir\r\n4. Halaman untuk pendahuluan – daftar Pustaka maksimal 10 halaman\r\n5. Nomor halaman sampul, daftar isi (I,ii,iii) pada sudut kanan atas\r\n6. Nomor halaman pendahuluan sampai lampiran (1,2,3) pada sudut kanan bawah\r\n'),
(17, 'Penulisan Umum / Keseluruhan', '1. Logo UNAIR berwarna hitam putih (bit.ly/logounairpkm)\r\n2. Kertas berukuran A4 dengan margin left 3 CM, top 3 CM , right 3 CM , bottom 3 CM\r\n3. Lembar pengesahan sampai daftar isi menggunakan penomoran romawi (i,ii,iii,dst) di pojok kanan bawah\r\n4. Halaman pendahuluan sampai dengan daftar Pustaka masksimal 10 halaman dengan penomoran numeral 1- 10 di pojok kanan atas\r\n5. Lampiran menggunakan peraturan pernomoran yang melanjutkan isi . Misalnya bernomor 11- 24 di pojok kanan atas\r\n6. Font yang digunakan adalah Times New Roman dengan font size 12 dan spasi 1,15\r\n7. Fakultas yang ditulis pada halaman pengesahan sesuai dengan fakultas ketua pelaksana, gelar dan nama WaDek1, Dosen Pendamping, Direktur Kemahasiswaan harap ditulis dengan jelas dan lengkap.\r\n8. NIDN dosen pendamping ditulis dengan jelas dan tidak keliru dibawah nama dosen pendamping, PASTIKAN NIDN BUKAN NIP\r\n9. Untuk tanda tangan Wakil Dekan 1 ,jika Wakil Dekan 1 tidak ada ditempat boleh meminta tanda tangan Wakil Dekan 2\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`ID_BIDANG`);

--
-- Indexes for table `contact_person`
--
ALTER TABLE `contact_person`
  ADD PRIMARY KEY (`ID_CP`);

--
-- Indexes for table `detil_kriteria`
--
ALTER TABLE `detil_kriteria`
  ADD PRIMARY KEY (`ID_JENIS_KRITERIA`,`ID_BIDANG`),
  ADD KEY `FK_RELATIONSHIP_3` (`ID_BIDANG`);

--
-- Indexes for table `jenis_kriteria`
--
ALTER TABLE `jenis_kriteria`
  ADD PRIMARY KEY (`ID_JENIS_KRITERIA`);

--
-- Indexes for table `tata_cara`
--
ALTER TABLE `tata_cara`
  ADD PRIMARY KEY (`ID_TATACARA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `ID_BIDANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_person`
--
ALTER TABLE `contact_person`
  MODIFY `ID_CP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `jenis_kriteria`
--
ALTER TABLE `jenis_kriteria`
  MODIFY `ID_JENIS_KRITERIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tata_cara`
--
ALTER TABLE `tata_cara`
  MODIFY `ID_TATACARA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detil_kriteria`
--
ALTER TABLE `detil_kriteria`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_JENIS_KRITERIA`) REFERENCES `jenis_kriteria` (`ID_JENIS_KRITERIA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_BIDANG`) REFERENCES `bidang` (`ID_BIDANG`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
