-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 06:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bkk_smk`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `slug`, `image`, `user_id`, `category_id`, `tag_id`, `is_published`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Laravel: Kerangka Kerja PHP untuk Membangun Aplikasi Web Modern', '<div class=\"markdown markdown-main-panel\" dir=\"ltr\">\r\n<h2 class=\"\" data-sourcepos=\"1:1-1:66\">Laravel: Kerangka Kerja PHP untuk Membangun Aplikasi Web Modern</h2>\r\n<p data-sourcepos=\"3:1-3:83\">Laravel adalah kerangka kerja aplikasi web PHP yang <strong>gratis</strong> dan <strong>open-source</strong>. Dibuat oleh Taylor Otwell, Laravel dirancang untuk membangun aplikasi web yang <strong>kuat</strong> dan <strong>terukur</strong> dengan sintaks yang <strong>ekspresif</strong> dan <strong>elegan</strong>.</p>\r\n<p data-sourcepos=\"5:1-5:30\"><strong>Fitur-fitur utama Laravel:</strong></p>\r\n<ul data-sourcepos=\"7:1-7:82\">\r\n<li data-sourcepos=\"7:1-7:82\"><strong>Routing</strong>: Mesin routing yang <strong>sederhana</strong> dan <strong>cepat</strong> untuk menentukan URL aplikasi.</li>\r\n<li data-sourcepos=\"8:1-8:109\"><strong>Dependency Injection</strong>: Kontainer dependency injection yang <strong>kuat</strong> untuk mengelola dependensi aplikasi.</li>\r\n<li data-sourcepos=\"9:1-9:38\"><strong>Database</strong>: ORM (Object Relational Mapping) yang <strong>ekspresif</strong> dan <strong>intuitif</strong> untuk berinteraksi dengan database.</li>\r\n<li data-sourcepos=\"10:1-10:108\"><strong>Migrasi Skema</strong>: Migrasi skema database yang <strong>agnostik</strong> untuk mengubah struktur database dengan mudah.</li>\r\n<li data-sourcepos=\"11:1-11:147\"><strong>Pemrosesan Pekerjaan Latar Belakang</strong>: Pemrosesan pekerjaan latar belakang yang <strong>kuat</strong> untuk menjalankan tugas-tugas yang lama atau kompleks.</li>\r\n<li data-sourcepos=\"12:1-13:0\"><strong>Penyiaran Peristiwa Real-time</strong>: Penyiaran peristiwa real-time untuk membangun aplikasi web yang reaktif.</li>\r\n</ul>\r\n<p data-sourcepos=\"14:1-14:35\"><strong>Keuntungan menggunakan Laravel:</strong></p>\r\n<ul data-sourcepos=\"16:1-16:110\">\r\n<li data-sourcepos=\"16:1-16:110\"><strong>Mengembangkan aplikasi web lebih cepat</strong>: Laravel menyediakan banyak fitur bawaan yang membantu pengembang membangun aplikasi web dengan lebih cepat.</li>\r\n<li data-sourcepos=\"17:1-17:131\"><strong>Meningkatkan keamanan</strong>: Laravel mengikuti prinsip-prinsip keamanan OWASP untuk membantu melindungi aplikasi web dari serangan.</li>\r\n<li data-sourcepos=\"18:1-18:144\"><strong>Meningkatkan skalabilitas</strong>: Laravel dirancang untuk aplikasi web yang skalabel, sehingga dapat menangani lebih banyak pengguna dan traffic.</li>\r\n<li data-sourcepos=\"19:1-20:0\"><strong>Memudahkan pemeliharaan</strong>: Laravel memiliki dokumentasi yang baik dan komunitas yang besar, sehingga mudah untuk mempelajari dan memelihara aplikasi web.</li>\r\n</ul>\r\n<p data-sourcepos=\"21:1-21:35\"><strong>Kekurangan menggunakan Laravel:</strong></p>\r\n<ul data-sourcepos=\"23:1-25:0\">\r\n<li data-sourcepos=\"23:1-23:116\"><strong>Kurva belajar</strong>: Laravel memiliki kurva belajar yang lebih curam dibandingkan dengan kerangka kerja PHP lainnya.</li>\r\n<li data-sourcepos=\"24:1-25:0\"><strong>Overhead</strong>: Laravel menambahkan overhead ke aplikasi web, yang dapat memperlambat kinerja aplikasi web yang sangat sederhana.</li>\r\n</ul>\r\n<p data-sourcepos=\"26:1-26:15\"><strong>Kesimpulan:</strong></p>\r\n<p data-sourcepos=\"28:1-28:239\">Laravel adalah kerangka kerja PHP yang <strong>kuat</strong> dan <strong>populer</strong> untuk membangun aplikasi web modern. Laravel mudah dipelajari, digunakan, dan dipelihara, dan dapat membantu pengembang membangun aplikasi web yang <strong>aman</strong>, <strong>skalabel</strong>, dan <strong>terpercaya</strong>.</p>\r\n<p data-sourcepos=\"30:1-30:16\"><strong>Sumber Daya:</strong></p>\r\n<ul data-sourcepos=\"32:1-36:0\">\r\n<li data-sourcepos=\"32:1-32:49\"><a class=\"traceable-link\" href=\"https://laravel.com/\" target=\"_blank\" rel=\"noopener noreferrer\">Situs web resmi Laravel</a></li>\r\n<li data-sourcepos=\"33:1-33:49\"><a class=\"traceable-link\" href=\"https://laravel.com/docs\" target=\"_blank\" rel=\"noopener noreferrer\">Dokumentasi Laravel</a></li>\r\n<li data-sourcepos=\"34:1-34:45\"><a class=\"traceable-link\" href=\"https://laracasts.com/\" target=\"_blank\" rel=\"noopener noreferrer\">Komunitas Laravel</a></li>\r\n<li data-sourcepos=\"35:1-36:0\"><a class=\"traceable-link\" href=\"https://leanpub.com/laravel\" target=\"_blank\" rel=\"noopener noreferrer\">Buku Laravel</a></li>\r\n</ul>\r\n<p data-sourcepos=\"37:1-37:45\"><strong>Apakah Anda tertarik mempelajari Laravel?</strong></p>\r\n<p data-sourcepos=\"39:1-39:290\">Jika Anda tertarik untuk mempelajari Laravel, ada banyak sumber daya yang tersedia untuk membantu Anda memulai. Anda dapat memulai dengan membaca dokumentasi resmi Laravel atau mengikuti tutorial online. Ada juga banyak buku dan kursus yang tersedia untuk membantu Anda mempelajari Laravel.</p>\r\n<p data-sourcepos=\"41:1-41:38\"><strong>Saya harap artikel ini bermanfaat!</strong></p>\r\n<p data-sourcepos=\"43:1-43:24\"><strong>Pertanyaan tambahan:</strong></p>\r\n<ul data-sourcepos=\"45:1-47:47\">\r\n<li data-sourcepos=\"45:1-45:59\">Apa yang ingin Anda ketahui lebih lanjut tentang Laravel?</li>\r\n<li data-sourcepos=\"46:1-46:68\">Apakah Anda memiliki pengalaman dengan kerangka kerja PHP lainnya?</li>\r\n<li data-sourcepos=\"47:1-47:47\">Apa tujuan Anda untuk membangun aplikasi web?</li>\r\n</ul>\r\n</div>', 'laravel-kerangka-kerja-php-untuk-membangun-aplikasi-web-modern', 'public/articles/yYCvJLtJ4CXr8ULmPmWbDA4VdkAwuIs4FDyaWSTF.png', 1, 1, 1, 1, NULL, '2024-05-19 22:02:29', '2024-05-19 22:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `biodata_users`
--

CREATE TABLE `biodata_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status_alumni` varchar(255) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `cv_pdf` varchar(255) DEFAULT NULL,
  `ijazah_pdf` varchar(255) DEFAULT NULL,
  `transkrip_nilai_pdf` varchar(255) DEFAULT NULL,
  `ktp_pdf` varchar(255) DEFAULT NULL,
  `kk_pdf` varchar(255) DEFAULT NULL,
  `surat_sehat_pdf` varchar(255) DEFAULT NULL,
  `foto_pdf` varchar(255) DEFAULT NULL,
  `surat_pengalaman_kerja_pdf` varchar(255) DEFAULT NULL,
  `pengalaman_kerja` text DEFAULT NULL,
  `pengalaman_organisasi` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sertifikat_pdf` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodata_users`
--

INSERT INTO `biodata_users` (`id`, `user_id`, `nama_lengkap`, `email`, `nomor_telepon`, `tanggal_lahir`, `alamat`, `status_alumni`, `pendidikan_terakhir`, `cv_pdf`, `ijazah_pdf`, `transkrip_nilai_pdf`, `ktp_pdf`, `kk_pdf`, `surat_sehat_pdf`, `foto_pdf`, `surat_pengalaman_kerja_pdf`, `pengalaman_kerja`, `pengalaman_organisasi`, `image`, `sertifikat_pdf`, `created_at`, `updated_at`) VALUES
(10, 2, 'wahyu dedik', 'wdedyk@gmail.com', '34234234', '2024-05-04', 'mojokerto', 'SMKS RONAS', 'rwrwer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'werwer', 'werwer', 'public/career/wahyu dedik/image/b0kSoxjGAiY9G8HKmfkjjqBN82qxbaMckTkLKq2o.png', NULL, '2024-05-20 10:14:56', '2024-05-20 10:14:56'),
(11, 3, 'dedik', 'user2@gmail.com', '09876543212', '2024-05-01', 'mojokerto', 'SMKS RONAS', 'fsdfds', 'public/career/dedik/cv_pdf/uVfJF25gdlnTPZtbfadovAKRi2p3Rkmn2S944U31.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'werwer', 'werwer', 'public/career/dedik/image/A80gD4Uszgv3d0C4szLL6vScUfU9EBzxxVbXokUa.png', NULL, '2024-05-20 13:30:14', '2024-05-20 13:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `perusahaan_id` bigint(20) UNSIGNED NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `gaji` decimal(15,2) NOT NULL,
  `jenis_karyawan` varchar(255) NOT NULL COMMENT 'Kontrak, Tetap, Internship/Magang',
  `batas_waktu` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `perusahaan_id`, `jabatan`, `description`, `gaji`, `jenis_karyawan`, `batas_waktu`, `created_at`, `updated_at`) VALUES
(1, 1, 'MARKETING', '<div class=\"markdown markdown-main-panel\" dir=\"ltr\">\r\n<p data-sourcepos=\"3:1-3:94\"><strong>Judul:</strong> <strong>Digital Marketing Specialist - Ayo Bergabung dengan Tim Marketing Dinamis Kami!</strong></p>\r\n<p data-sourcepos=\"5:1-5:399\"><strong>Perusahaan:</strong> PT XYZ, perusahaan teknologi terkemuka di Indonesia, sedang mencari individu yang berbakat dan kreatif untuk bergabung dengan tim marketing digital kami yang dinamis. Sebagai Digital Marketing Specialist, Anda akan bertanggung jawab untuk mengembangkan dan menjalankan strategi marketing digital yang inovatif untuk meningkatkan brand awareness, traffic website, dan lead generation.</p>\r\n<p data-sourcepos=\"7:1-7:19\"><strong>Tanggung Jawab:</strong></p>\r\n<ul data-sourcepos=\"9:1-14:0\">\r\n<li data-sourcepos=\"9:1-9:160\">Mengembangkan dan menjalankan strategi marketing digital yang komprehensif, termasuk SEO, SEM, social media marketing, email marketing, dan content marketing.</li>\r\n<li data-sourcepos=\"10:1-10:111\">Melakukan riset pasar dan analisis data untuk mengidentifikasi peluang dan tren baru dalam marketing digital.</li>\r\n<li data-sourcepos=\"11:1-11:98\">Membuat dan mengelola konten marketing yang menarik dan informatif di berbagai platform digital.</li>\r\n<li data-sourcepos=\"12:1-12:87\">Memantau dan mengukur kinerja campaign marketing digital dan membuat laporan berkala.</li>\r\n<li data-sourcepos=\"13:1-14:0\">Bekerja sama dengan tim marketing dan sales untuk mencapai tujuan bisnis perusahaan.</li>\r\n</ul>\r\n<p data-sourcepos=\"15:1-15:16\"><strong>Kualifikasi:</strong></p>\r\n<ul data-sourcepos=\"17:1-24:0\">\r\n<li data-sourcepos=\"17:1-17:83\">Pendidikan minimal S1 di bidang Marketing, Komunikasi, atau jurusan yang relevan.</li>\r\n<li data-sourcepos=\"18:1-18:155\">Memiliki minimal 2 tahun pengalaman dalam marketing digital, dengan fokus pada SEO, SEM, social media marketing, email marketing, atau content marketing.</li>\r\n<li data-sourcepos=\"19:1-19:105\">Memiliki pemahaman yang kuat tentang prinsip-prinsip marketing digital dan tren terbaru dalam industri.</li>\r\n<li data-sourcepos=\"20:1-20:85\">Mampu berpikir kreatif dan inovatif dalam mengembangkan strategi marketing digital.</li>\r\n<li data-sourcepos=\"21:1-21:111\">Memiliki kemampuan analitis yang kuat dan mampu mengukur dan mengevaluasi kinerja campaign marketing digital.</li>\r\n<li data-sourcepos=\"22:1-22:77\">Memiliki kemampuan komunikasi yang baik, baik secara lisan maupun tertulis.</li>\r\n<li data-sourcepos=\"23:1-24:0\">Mampu bekerja secara mandiri dan sebagai bagian dari tim.</li>\r\n</ul>\r\n<p data-sourcepos=\"25:1-25:12\"><strong>Benefit:</strong></p>\r\n<ul data-sourcepos=\"27:1-32:0\">\r\n<li data-sourcepos=\"27:1-27:54\">Gaji yang kompetitif dan paket benefit yang menarik.</li>\r\n<li data-sourcepos=\"28:1-28:77\">Kesempatan untuk bekerja di perusahaan teknologi yang dinamis dan inovatif.</li>\r\n<li data-sourcepos=\"29:1-29:80\">Peluang untuk belajar dan mengembangkan skillset Anda dalam marketing digital.</li>\r\n<li data-sourcepos=\"30:1-30:71\">Bekerja sama dengan tim marketing yang profesional dan berpengalaman.</li>\r\n<li data-sourcepos=\"31:1-32:0\">Lingkungan kerja yang positif dan suportif.</li>\r\n</ul>\r\n<p data-sourcepos=\"33:1-33:15\"><strong>Cara Lamar:</strong></p>\r\n<p data-sourcepos=\"35:1-35:126\">Kirimkan CV dan surat lamaran Anda ke email: [email protected] dengan subject: <strong>Digital Marketing Specialist - [Nama Anda]</strong>.</p>\r\n<p data-sourcepos=\"37:1-37:26\"><strong>Deadline:</strong> 30 Juni 2024</p>\r\n<hr data-sourcepos=\"39:1-39:4\"></div>', 4600000.00, 'Kontrak', '2024-06-30', '2024-05-19 22:11:31', '2024-05-19 22:11:31'),
(2, 1, 'Lowongan Kerja Data Analyst', '<div class=\"markdown markdown-main-panel\" dir=\"ltr\">\r\n<p data-sourcepos=\"5:1-5:22\"><strong>Tentang Perusahaan</strong></p>\r\n<p data-sourcepos=\"7:1-7:196\">PT. [Nama Perusahaan] adalah perusahaan yang bergerak di bidang [Bidang Usaha Perusahaan]. Kami berkomitmen untuk menyediakan [Produk/Layanan Perusahaan] berkualitas tinggi kepada pelanggan kami.</p>\r\n<p data-sourcepos=\"9:1-9:18\"><strong>Tentang Posisi</strong></p>\r\n<p data-sourcepos=\"11:1-11:299\">Kami sedang mencari Data Analyst yang berbakat dan bersemangat untuk bergabung dengan tim kami yang dinamis. Sebagai Data Analyst, Anda akan bertanggung jawab untuk mengumpulkan, membersihkan, menganalisis, dan memvisualisasikan data untuk membantu perusahaan kami membuat keputusan yang lebih baik.</p>\r\n<p data-sourcepos=\"13:1-13:19\"><strong>Tanggung Jawab:</strong></p>\r\n<ul data-sourcepos=\"15:1-15:14\">\r\n<li data-sourcepos=\"15:1-15:14\">Mengumpulkan data dari berbagai sumber internal dan eksternal</li>\r\n<li data-sourcepos=\"16:1-16:48\">Membersihkan dan memformat data untuk analisis</li>\r\n<li data-sourcepos=\"17:1-17:62\">Menganalisis data menggunakan teknik statistik dan pemodelan</li>\r\n<li data-sourcepos=\"18:1-18:53\">Memvisualisasikan data menggunakan grafik dan bagan</li>\r\n<li data-sourcepos=\"19:1-19:52\">Menyajikan temuan data kepada pemangku kepentingan</li>\r\n<li data-sourcepos=\"20:1-20:39\">Mengembangkan dan memelihara database</li>\r\n<li data-sourcepos=\"21:1-22:0\">Menulis laporan dan dokumentasi teknis</li>\r\n</ul>\r\n<p data-sourcepos=\"23:1-23:16\"><strong>Persyaratan:</strong></p>\r\n<ul data-sourcepos=\"25:1-28:49\">\r\n<li data-sourcepos=\"25:1-25:83\">Gelar sarjana di bidang Ilmu Komputer, Statistik, Matematika, atau bidang terkait</li>\r\n<li data-sourcepos=\"26:1-26:49\">Pengalaman minimal 1 tahun sebagai Data Analyst</li>\r\n<li data-sourcepos=\"27:1-27:53\">Memiliki pemahaman yang kuat tentang SQL dan Python</li>\r\n<li data-sourcepos=\"28:1-28:49\">Pengalaman dengan alat visualisasi data seperti Tableau atau Power BI</li>\r\n<li data-sourcepos=\"29:1-29:56\">Memiliki kemampuan komunikasi dan presentasi yang baik</li>\r\n<li data-sourcepos=\"30:1-31:0\">Mampu bekerja secara mandiri dan sebagai bagian dari tim</li>\r\n</ul>\r\n<p data-sourcepos=\"32:1-32:12\"><strong>Benefit:</strong></p>\r\n<ul data-sourcepos=\"34:1-38:0\">\r\n<li data-sourcepos=\"34:1-34:22\">Gaji yang kompetitif</li>\r\n<li data-sourcepos=\"35:1-35:21\">Tunjangan kesehatan</li>\r\n<li data-sourcepos=\"36:1-36:29\">Cuti tahunan dan cuti sakit</li>\r\n<li data-sourcepos=\"37:1-38:0\">Peluang pengembangan profesional</li>\r\n</ul>\r\n<p data-sourcepos=\"39:1-39:17\"><strong>Cara Lamaran:</strong></p>\r\n<p data-sourcepos=\"41:1-41:49\">Kirimkan CV dan lamaran Anda ke [email protected]</p>\r\n<p data-sourcepos=\"43:1-43:11\"><strong>Penutup</strong></p>\r\n<p data-sourcepos=\"45:1-45:48\">Kami menantikan untuk mendengar kabar dari Anda!</p>\r\n<p data-sourcepos=\"54:1-54:22\"><strong>Semoga bermanfaat!</strong></p>\r\n</div>', 1000000.00, 'Kontrak', '2024-05-31', '2024-05-20 09:37:55', '2024-05-20 09:37:55');

-- --------------------------------------------------------

--
-- Table structure for table `careers_links`
--

CREATE TABLE `careers_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `perusahaan_id` bigint(20) UNSIGNED NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `gaji` decimal(15,2) NOT NULL,
  `jenis_karyawan` varchar(255) NOT NULL COMMENT 'Kontrak, Tetap, Internship/Magang',
  `apply_url` varchar(255) NOT NULL,
  `batas_waktu` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers_links`
--

INSERT INTO `careers_links` (`id`, `perusahaan_id`, `jabatan`, `description`, `gaji`, `jenis_karyawan`, `apply_url`, `batas_waktu`, `created_at`, `updated_at`) VALUES
(1, 1, 'PACKING PRODUKSI', '<div class=\"markdown markdown-main-panel\" dir=\"ltr\">\r\n<p data-sourcepos=\"3:1-3:63\"><strong>Dicari Karyawan Packing yang Cekatan dan Teliti!</strong></p>\r\n<p data-sourcepos=\"9:1-9:24\"><strong>Deskripsi Pekerjaan:</strong></p>\r\n<p data-sourcepos=\"11:1-11:83\">Kami sedang mencari karyawan packing yang cekatan dan teliti untuk bergabung dengan tim kami yang dinamis. Sebagai karyawan packing, Anda akan bertanggung jawab untuk:</p>\r\n<ul data-sourcepos=\"13:1-14:1\">\r\n<li data-sourcepos=\"13:1-13:54\">Membungkus dan mengemas produk dengan rapi dan aman.</li>\r\n<li data-sourcepos=\"14:1-14:1\">Memastikan semua produk terhitung dengan benar.</li>\r\n<li data-sourcepos=\"15:1-15:47\">Menjaga kebersihan dan kerapian area packing.</li>\r\n<li data-sourcepos=\"16:1-16:48\">Melakukan tugas-tugas lain yang diberikan oleh atasan.</li>\r\n</ul>\r\n<p data-sourcepos=\"18:1-18:16\"><strong>Persyaratan:</strong></p>\r\n<ul data-sourcepos=\"20:1-26:0\">\r\n<li data-sourcepos=\"20:1-20:28\">Lulusan SMA/SMK sederajat.</li>\r\n<li data-sourcepos=\"21:1-21:74\">Memiliki pengalaman kerja di bidang packing minimal 1 tahun (sebaiknya).</li>\r\n<li data-sourcepos=\"22:1-22:49\">Mampu bekerja dengan cepat, akurat, dan teliti.</li>\r\n<li data-sourcepos=\"23:1-23:42\">Memiliki kemampuan komunikasi yang baik.</li>\r\n<li data-sourcepos=\"24:1-24:42\">Mampu bekerja secara mandiri maupun tim.</li>\r\n<li data-sourcepos=\"25:1-26:0\">Memiliki fisik yang sehat dan kuat.</li>\r\n</ul>\r\n<p data-sourcepos=\"27:1-27:12\"><strong>Benefit:</strong></p>\r\n<ul data-sourcepos=\"29:1-34:0\">\r\n<li data-sourcepos=\"29:1-29:23\">Gaji yang kompetitif.</li>\r\n<li data-sourcepos=\"30:1-30:32\">Tunjangan makan dan transport.</li>\r\n<li data-sourcepos=\"31:1-31:42\">BPJS Kesehatan dan BPJS Ketenagakerjaan.</li>\r\n<li data-sourcepos=\"32:1-32:42\">Kesempatan untuk berkembang dan belajar.</li>\r\n<li data-sourcepos=\"33:1-34:0\">Suasana kerja yang dinamis dan menyenangkan.</li>\r\n</ul>\r\n<p data-sourcepos=\"35:1-35:6\"><strong>Cara Lamaran:</strong></p>\r\n<p data-sourcepos=\"37:1-37:62\">Kirimkan CV dan surat lamaran Anda ke email: [email protected]</p>\r\n<p data-sourcepos=\"39:1-39:52\"><strong>Deadline Lamaran:</strong> 30 MEI 2024</p>\r\n<p data-sourcepos=\"41:1-41:12\"><strong>Catatan:</strong></p>\r\n<ul data-sourcepos=\"43:1-45:0\">\r\n<li data-sourcepos=\"43:1-43:67\">Lamaran yang tidak sesuai dengan kualifikasi tidak akan diproses.</li>\r\n<li data-sourcepos=\"44:1-45:0\">Kami hanya akan menghubungi pelamar yang memenuhi kualifikasi untuk interview.</li>\r\n</ul>\r\n<p data-sourcepos=\"46:1-46:74\"><strong>Ayo bergabung dengan tim kami dan bangun karir Anda di bidang packing!</strong></p>\r\n</div>', 3500000.00, 'Kontrak', 'https://fokusterkini.com/', '2024-05-30', '2024-05-19 22:13:26', '2024-05-19 22:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `careers_proses_recruitment`
--

CREATE TABLE `careers_proses_recruitment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `biodata_user_id` bigint(20) UNSIGNED NOT NULL,
  `career_id` bigint(20) UNSIGNED NOT NULL,
  `hasil_administrasi` varchar(255) NOT NULL DEFAULT 'proses_seleksi',
  `psikotes` varchar(255) NOT NULL DEFAULT 'proses_seleksi',
  `interview_hrd` varchar(255) NOT NULL DEFAULT 'proses_seleksi',
  `interview_user` varchar(255) NOT NULL DEFAULT 'proses_seleksi',
  `tes_kesehatan` varchar(255) NOT NULL DEFAULT 'proses_seleksi',
  `hasil_akhir` varchar(255) NOT NULL DEFAULT 'proses_seleksi',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers_proses_recruitment`
--

INSERT INTO `careers_proses_recruitment` (`id`, `user_id`, `biodata_user_id`, `career_id`, `hasil_administrasi`, `psikotes`, `interview_hrd`, `interview_user`, `tes_kesehatan`, `hasil_akhir`, `created_at`, `updated_at`) VALUES
(10, 2, 10, 1, 'lulus', 'lulus', 'lulus', 'lulus', 'lulus', 'lulus', '2024-05-20 10:14:56', '2024-05-20 13:00:19'),
(11, 3, 11, 1, 'lulus', 'proses_seleksi', 'proses_seleksi', 'proses_seleksi', 'proses_seleksi', 'proses_seleksi', '2024-05-20 13:30:14', '2024-05-20 18:03:30');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `slug`, `user_id`, `deleted_at`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Pendidikan', 'Pendidikan', 'pendidikan', 1, NULL, 0, '2024-05-19 22:00:01', '2024-05-19 22:00:01');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'hidayat', 'hidayat@gmail.com', 'tanya', 'min ada loker khusus smk', '2024-05-20 19:29:23', '2024-05-20 19:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_11_052751_create_personal_access_tokens_table', 1),
(5, '2024_05_13_074726_create_categories_table', 1),
(6, '2024_05_13_074737_create_tags_table', 1),
(7, '2024_05_14_074205_create_articles_table', 1),
(8, '2024_05_15_052239_create_biodata_users_table', 1),
(9, '2024_05_15_053453_create_perusahaan_table', 1),
(10, '2024_05_16_051924_create_careers_table', 1),
(11, '2024_05_16_052010_create_careers_links_table', 1),
(12, '2024_05_17_052416_create_careers_proses_recruitment_table', 1),
(13, '2024_05_19_134354_create_contacts_table', 1),
(14, '2024_05_19_142044_create_newsletters_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'wdedyk@gmail.com', '2024-05-20 19:30:33', '2024-05-20 19:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `gallery` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `nama_perusahaan`, `alamat`, `nomor_telepon`, `email`, `logo`, `gallery`, `created_at`, `updated_at`) VALUES
(1, 'PT NANDO BAKTI', 'MOJOKERTO', '081654932383', 'ptnandobakti@gmail.com', 'public/career/ow6r2baC7vSwZM7U9wIA8rQiVeeJdTG187CdyUxJ.png', 'public/career/vhHLTRFBXQZQ5ViqAsUDGUJ0TrsFPNy4ecOczIsU.png', '2024-05-19 22:09:02', '2024-05-19 22:09:02');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('vS98b0ft5maTaJMvBjAljnVOCVcRA37lvMKx0Xe6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiekZSVlM0UFVHallXYnJRZ2FMeTBOOUtZanhUMFVNd3NwWmpEMDk1WSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly9ia2stc21rLnRlc3QiO319', 1716259002);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `user_id`, `category_id`, `is_published`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 'laravel', 1, 1, 1, NULL, '2024-05-19 22:00:24', '2024-05-19 22:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `phone`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', 'admin@gmail.com', NULL, '$2y$12$Y0mjSym7vgXMXS16MU2kT.7udOL9rvLU6lOMkboq0s03BnGBbxbNu', '08123456789', 'admin', 'active', NULL, NULL, NULL),
(2, 'Wahyuu', 'user1', 'user1@gmail.com', NULL, '$2y$12$BOK.nHSF/pudZ/oWUPFnFefUj8F3EuDga60m4/iJ.iOI33xGfIFCe', '08123456788', 'user', 'active', NULL, NULL, '2024-05-19 22:19:41'),
(3, 'Dedik', 'user2', 'user2@gmail.com', NULL, '$2y$12$L4qE8LS0jrD/cxi0N2R0uOI01uXxwGoLX0u3jrpD5PsewXknyfKTi', '08123456789', 'user', 'active', NULL, NULL, '2024-05-19 21:59:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`),
  ADD KEY `articles_category_id_foreign` (`category_id`),
  ADD KEY `articles_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `biodata_users`
--
ALTER TABLE `biodata_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `biodata_users_email_unique` (`email`),
  ADD KEY `biodata_users_user_id_foreign` (`user_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `careers_perusahaan_id_foreign` (`perusahaan_id`);

--
-- Indexes for table `careers_links`
--
ALTER TABLE `careers_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `careers_links_perusahaan_id_foreign` (`perusahaan_id`);

--
-- Indexes for table `careers_proses_recruitment`
--
ALTER TABLE `careers_proses_recruitment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `careers_proses_recruitment_user_id_foreign` (`user_id`),
  ADD KEY `careers_proses_recruitment_biodata_user_id_foreign` (`biodata_user_id`),
  ADD KEY `careers_proses_recruitment_career_id_foreign` (`career_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `perusahaan_email_unique` (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tags_user_id_foreign` (`user_id`),
  ADD KEY `tags_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `biodata_users`
--
ALTER TABLE `biodata_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `careers_links`
--
ALTER TABLE `careers_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `careers_proses_recruitment`
--
ALTER TABLE `careers_proses_recruitment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `biodata_users`
--
ALTER TABLE `biodata_users`
  ADD CONSTRAINT `biodata_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `careers`
--
ALTER TABLE `careers`
  ADD CONSTRAINT `careers_perusahaan_id_foreign` FOREIGN KEY (`perusahaan_id`) REFERENCES `perusahaan` (`id`);

--
-- Constraints for table `careers_links`
--
ALTER TABLE `careers_links`
  ADD CONSTRAINT `careers_links_perusahaan_id_foreign` FOREIGN KEY (`perusahaan_id`) REFERENCES `perusahaan` (`id`);

--
-- Constraints for table `careers_proses_recruitment`
--
ALTER TABLE `careers_proses_recruitment`
  ADD CONSTRAINT `careers_proses_recruitment_biodata_user_id_foreign` FOREIGN KEY (`biodata_user_id`) REFERENCES `biodata_users` (`id`),
  ADD CONSTRAINT `careers_proses_recruitment_career_id_foreign` FOREIGN KEY (`career_id`) REFERENCES `careers` (`id`),
  ADD CONSTRAINT `careers_proses_recruitment_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `tags_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tags_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
