/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `fotos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `gallery_id` bigint unsigned NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `galleries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint unsigned NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `pegawais` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmpt_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_category_id_foreign` (`category_id`),
  CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `profiles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `video` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1732283733);
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1732283733;', 1732283733);
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1732280306);
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1732280306;', 1732280306);



INSERT INTO `categories` (`id`, `judul`, `created_at`, `updated_at`) VALUES
(1, 'Rapat', '2024-11-22 13:15:40', '2024-11-22 13:15:40');
INSERT INTO `categories` (`id`, `judul`, `created_at`, `updated_at`) VALUES
(2, 'Kegiatan Olahraga', '2024-11-22 13:15:51', '2024-11-22 13:15:51');












INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '0001_01_01_000001_create_cache_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '0001_01_01_000002_create_jobs_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2024_11_03_000448_create_categories_table', 1),
(5, '2024_11_03_000637_create_posts_table', 1),
(6, '2024_11_03_000952_create_profiles_table', 1),
(7, '2024_11_03_001100_create_galleries_table', 1),
(8, '2024_11_03_001242_create_fotos_table', 1),
(9, '2024_11_09_015900_create_pegawais_table', 1),
(10, '2024_11_16_231648_create_video_table', 1);



INSERT INTO `pegawais` (`id`, `nama_lengkap`, `jenis_kelamin`, `tgl_lahir`, `tmpt_lahir`, `no_telp`, `email`, `jabatan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Rahmat Hidayat, S.Sos, MM', 'Laki Laki', '1983-02-16', 'Bogor Kota', '0876372673', 'Rahmat @gmail.com', 'Kepala Dinas Komunikasi dan Informatika Kota Bogor', 'uploads/12228.jpg', '2024-11-22 13:03:58', '2024-11-22 13:03:58');
INSERT INTO `pegawais` (`id`, `nama_lengkap`, `jenis_kelamin`, `tgl_lahir`, `tmpt_lahir`, `no_telp`, `email`, `jabatan`, `foto`, `created_at`, `updated_at`) VALUES
(2, 'Oki Tri Fasiasta Nurmala Alam, S.Stp', 'Laki Laki', '1969-06-13', 'Bogor Kota', '0876372673', 'Oki @gmail.com', 'Sekretaris Dinas Komunikasi dan Informatika Kota Bogor', 'uploads/3765(1).jpg', '2024-11-22 13:05:47', '2024-11-22 13:05:47');
INSERT INTO `pegawais` (`id`, `nama_lengkap`, `jenis_kelamin`, `tgl_lahir`, `tmpt_lahir`, `no_telp`, `email`, `jabatan`, `foto`, `created_at`, `updated_at`) VALUES
(3, 'Asystasia Aromatica, S.E., M.A', 'Perempuan', '1986-11-13', 'Bogor Kota', '0876372673', 'Asystasia @gmail.com', 'Perencana Ahli Muda', 'uploads/fotobuasis.jpg', '2024-11-22 13:06:45', '2024-11-22 13:06:45');
INSERT INTO `pegawais` (`id`, `nama_lengkap`, `jenis_kelamin`, `tgl_lahir`, `tmpt_lahir`, `no_telp`, `email`, `jabatan`, `foto`, `created_at`, `updated_at`) VALUES
(4, 'Pandapotan Nasution, S.E ', 'Laki Laki', '1981-01-01', 'Bogor Kota', '0876372673', 'Pandapotan @gmail.com', '	 Analis Keuangan Pusat Dan Daerah Ahli Muda', 'uploads/pandapotan.jpg', '2024-11-22 13:07:48', '2024-11-22 13:07:48'),
(5, 'Susilawaty Syariefah, S.Sos. Ma', 'Perempuan', '1981-08-13', 'Bogor Kota', '0897536363', 'adSusilawaty min@gmail.com', '	 Kasubag Umum Dan Kepegawaian Pada Dinas Komunikasi Dan Informatika Kota Bogor', 'uploads/2908.jpg', '2024-11-22 13:08:54', '2024-11-22 13:08:54'),
(6, 'Dian Intannia Lesmana, S.Sos., M.E', 'Perempuan', '1988-03-08', 'Bogor Kota', '0876372673', 'Dian @gmail.com', 'Kepala Bidang Informasi Dan Komunikasi Publik Pada Dinas Komunikasi Dan Informatika Kota Bogor', 'uploads/foto_bu_dian.jpg', '2024-11-22 13:10:12', '2024-11-22 13:10:12'),
(7, 'Liah Lestari, S.Stat', 'Perempuan', '1960-06-10', 'Bogor Kota', '0876372673', 'Liah @gmail.com', 'Pranata Hubungan Masyarakat Ahli Muda', 'uploads/fotoliah.jpg', '2024-11-22 13:11:06', '2024-11-22 13:11:06');

INSERT INTO `posts` (`id`, `judul`, `category_id`, `konten`, `file`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Evaluasi Program Smart City Tahap I di Kota Bogor', 1, 'Bogor, 24 Juni 2024 - Pemerintah Kota Bogor melakukan Evaluasi Implementasi Program Kota Cerdas (Smart City) Tahap I pada hari Senin, 24 Juni 2024 di Paseban Surawisesa Balaikota Bogor. Acara yang dimulai pukul 14.20 WIB ini dihadiri oleh Pj Wali Kota Bogor, Hery Antasari, Kepala Diskominfo, Rahmat Hidayat, Kepala Baperida Kota Bogor, Rudy Mashudi, dan seluruh pemangku kepentingan lainnya.\n\n \n\nAsesor Riri membuka acara dengan menyampaikan dua sesi evaluasi yaitu presentasi oleh Pj Wali Kota dan sesi tanya jawab. Dalam presentasinya, Hery Antasari mengungkapkan bahwa Kota Bogor telah membentuk Dewan Smart City dan Tim Pelaksana Smart City untuk merancang strategi dan rencana aksi jangka panjang, mengkoordinasikan pembangunan, mengevaluasi teknologi baru, serta mengambil keputusan strategis terkait investasi dan infrastruktur.\n\n \n\nKota Bogor menghadapi beberapa kendala dalam implementasi Smart City, termasuk keterbatasan sumber daya, teknologi, koordinasi, data, dan kesadaran masyarakat. Untuk mengatasi hal ini, diperlukan penguatan sumber daya manusia, peningkatan infrastruktur teknologi, kerjasama antarlembaga, peningkatan ketersediaan data, dan kampanye kesadaran masyarakat.\n\n \n\nKota Bogor meninjau tiga aspek utama dalam pengembangan infrastruktur Smart City yaitu:\n\n1. Infrastruktur Fisik seperti peningkatan transportasi publik, pengelolaan energi berkelanjutan, dan sistem pengelolaan air dan limbah.\n\n2. Infrastruktur TIK seperti Peningkatan akses internet, sistem pemantauan dengan 106 titik CCTV, dan pusat data yang menggunakan teknologi virtualisasi server.\n\n3. Infrastruktur Sosial seperti pembangunan infrastruktur pendidikan dan kesehatan, ruang publik seperti Alun-Alun Kota Bogor, dan partisipasi masyarakat melalui media sosial dan aplikasi pengaduan.\n\n \n\nSelain itu, Hery Antasari juga membahas 6 dimensi Smart City, yaitu Smart Governance, Smart Branding, Smart Economy, Smart Living, Smart Society, Smart Environment.\n\n \n\nKota Bogor juga menghadapi tantangan dan kebutuhan lainnya dalam pelaksanaan pembangunan Smart City berdasarkan Masterplan yang telah disusun. Seperti ketidakseimbangan pembangunan, keterbatasan anggaran dan sumber daya, perubahan kebijakan dan regulasi, serta keamanan data dan privasi.\n\n \n\nDengan adanya evaluasi tersebut, diharapkan peningkatan efektivitas program Smart City, optimalisasi penggunaan sumber daya, serta perbaikan berkelanjutan dalam infrastruktur dan layanan publik di Kota Bogor dapat tercapai.', '\"uploads\\/diskominfo.jpg\"', 1, '2024-11-22 13:19:59', '2024-11-22 13:19:59');
INSERT INTO `posts` (`id`, `judul`, `category_id`, `konten`, `file`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Rapat SPBE', 1, 'Bogor, 14 Oktober 2024 –  Pelaksanaan Penilaian Interviu Evaluasi SPBE akan dilaksanakan besok Selasa 15 Oktober 2024, sebagai persiapan Diskominfo Kota Bogor menggelar rapat persiapan evaluasi di Paseban Narayana secara Hybrid (daring dan luring). Rapat Persiapan ini dibuka Oleh Asisten Administrasi Umum, Rakhmawati dan dipimpin oleh Sekretaris Diskominfo Kota Bogor, Oki Tri Fasiasta serta dihadiri oleh seluruh PIC SPBE perangkat daerah di lingkungan Pemerintah Kota Bogor.\n\nPersiapan ini juga dihadiri oleh konsultan SPBE Diskominfo Kota Bogor dari Digitama, Radit dan Dita. Konsultan ini diperlukan untuk memberikan masukan atas penilaian sementara yang dikeluarkan oleh tim evaluator.\n\n“Mudah-mudahan dengan persiapan ini nanti kita semua pada hari ini memiliki kesiapan dan pemahaman serta pandangan terkait bagaimana tingkat kematangan pada SPBE yang akan dievaluasi”, harap Oki.\n\nTingkat kematangan SPBE Kota Bogor pada beberapa indikator mengalami kenaikan akan tetapi banyak juga indikator yang mengalami penurunan pada penilaian sementara.Metode evaluasi  seperti sebelumnya dilaksanakan secara  daring. Dengan keterbatasan yang ada konsultan diharapkan dapat memberikan gambaran bagaimana proses penilaian nantinya, apakah difase audit nanti ada sanggah dan waktu untuk memberikan data dukung kepada evaluator. Karena pada evaluasi sebelumnya tidak membuka support kondisi yang realitas seperti waktu yang dibatasi dan evaluator yang diganti sehingga ini menjadi tantangan bagi pemerintah daerah yang diaudit.\n\nDalam penilaian kematangan SPBE , tiap evaluator menangani 5 lokus di Pemerintah Daerah, dengan begitu banyaknya indikator dan data dukung yang panjang menjadi tantangan tersendiri bagi tim evaluator maupun pemerintah daerah yang dinilai. Tantangan lain dalam penilaian SPBE, tim evaluator memiliki perspektif yang lebih ketat dan kendala dalam penginputan atau pengisian indikator seperti salah upload sehingga ini dapat menurunkan nilai kematangan SPBE.\n\nPeniliain SPBE dilaksanakan dua tahun sekali dimulai tahun 2021 kemudian 2023. Akan tetapi dikarenakan RPJMN akan berakhir maka penilaian SPBE Nasional harus sudah tersedia dan bersifat insidental.\n\n“Pada tahun ini Januari 2024 Pemkot Bogor mendapatkan nilai SPBE sebesar 3.72 dan Bulan mei 2024 sudah dievaluasi kembali”, Jelas Radit.\n\nPenilaian sementara ini dapat dimaksimalkan oleh Pemerintah Daerah untuk bisa mempersiapkan dna meluruskan hal-hal yang kurang pada setiap indikator.\n\nRapat persiapan menyediakan sesi tanya jawab. Sehingga hal-hal yang dirasa belum sesuai bisa diperbaiki dan disesuaikan dengan kondisi ril.', '\"uploads\\/balaikota.jpeg\"', 1, '2024-11-22 13:20:49', '2024-11-22 13:20:49');
INSERT INTO `posts` (`id`, `judul`, `category_id`, `konten`, `file`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'Forum Smart City: Capaian Indikator Smart City Tahun 2023-2024', 1, 'Bogor, 19 Juni 2024 – Dinas Komunikasi dan Informatika Kota Bogor menggelar Forum Smart City bertema \"Capaian Indikator Smart City Tahun 2023-2024\" pada hari Rabu, 19 Juni 2024, di Paseban Sribima. Acara dimulai pukul 13.00 WIB dan dihadiri oleh perwakilan perangkat daerah di lingkungan Pemerintah Kota Bogor, akademisi, serta tenaga konsultan teknologi informasi. Kegiatan ini dibuka oleh Sekretaris Diskominfo Kota Bogor, Oki Tri Fasiasta Nurmala Alam. Narasumber pada giat Forum Smart City yaitu Ketua Umum Ikatan Konsultan Teknologi Informasi Indonesia, Teddy Sukardi dan Kepala Bidang Pemerintahan dan Pembangunan Manusia, Ara Wiraswara.\n\n \n\nDalam sambutannya, Oki Tri Fasiasta Nurmala Alam menyampaikan pentingnya kegiatan ini dalam menambah pengetahuan penyelenggaraan smart city dan dampak positifnya bagi masyarakat. Kegiatan Smart City ini bukan hanya dilaksanakan oleh Kota Bogor saja tetapi juga  oleh 125 kota lain di Indonesia. Kota Bogor secara terstruktur mengampu beberapa program yang terdapat dalam masterplan Smart Province Jawa Barat, yaitu Smart Government, Smart Economy, dan Smart Living.\n\n \n\nTeddy Sukardi, dalam pemaparannya menekankan pentingnya terobosan, percepatan, dan inovasi yang efektif dalam menyikapi harapan publik yang terus meningkat. Ia juga menyebutkan bahwa definisi perkotaan cerdas adalah wilayah perkotaan yang mengatasi permasalahan dan memenuhi kebutuhannya melalui inovasi yang berkelanjutan dengan memperhatikan keseimbangan ekonomi, sosial, dan lingkungan. \n\n \n\nTeddy Sukardi menekankan pentingnya manajemen inovasi dalam penerapan smart city. \"Manajemen inovasi membutuhkan keterlibatan dan komitmen dari semua pihak dalam organisasi, mulai dari pimpinan puncak, para manajer hingga petugas lapangan,\" tegasnya. Ia menutup penyampaiannya dengan menyoroti bahwa teknologi adalah komponen pendukung yang melengkapi budaya inovasi dan manajemen inovasi yang baik.\n\n \n\nAra Wiraswara memberikan pandangannya mengenai Smart City. Ia menjelaskan bahwa Smart City adalah strategi untuk memajukan potensi pelaksanaan pembangunan serta kualitas pelayanan kepada masyarakat suatu daerah pemerintahan dengan pendayagunaan data dan teknologi informasi, penyusunan kebijakan yang optimal, dan dukungan SDM di lingkungan pemerintah daerah.\n\n \n\n\"Manfaat smart city yaitu harus memberikan kemudahan bagi warga untuk mengakses layanan kependudukan, kesehatan, dan lain-lain,\" jelas Ara Wiraswara. Ia juga menyebutkan bahwa Kota Bogor sebagai hinterland city menghadapi banyak tantangan dalam mencapai Smart City.\n\n \n\nDengan adanya forum ini, diharapkan Kota Bogor dapat terus melakukan inovasi dan terobosan dalam mewujudkan Smart City yang memberikan manfaat maksimal bagi masyarakat dan meningkatkan kualitas pelayanan publik.\n\n \n\nPenulis: Nala Alviana Nidawati', '\"uploads\\/Dedie-Rachim.jpg\"', 1, '2024-11-22 13:54:35', '2024-11-22 13:54:35');



INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('U8D7tzNPopT9RDSCdGhshN5ruxNVUgZbkcrE9LcX', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZ1Z2c0N5TFJyTm9SWEExczNxYjUyaXBFUWV4ckxDTXJBbzNkY3gxRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wb3N0LzEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkMjRObUouOHV5VHRlY1FzVHBjVTdrdWd4bC9jWlBtQ3Q5d3ZTYUQ1WjZmWExLZE1QNS41R3UiO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1732283972);


INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'RAZKAA', 'udangdarat@gmail.com', NULL, '$2y$12$24NmJ.8uyTtecQsTpcU7kugxl/cZPmCt9wvSaD5Z6fXLKdMP5.5Gu', NULL, '2024-11-22 12:57:04', '2024-11-22 12:57:04');





/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;