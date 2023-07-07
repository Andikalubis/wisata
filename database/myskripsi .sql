-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Apr 2023 pada 06.03
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myskripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `administrator`
--

INSERT INTO `administrator` (`id`, `name`, `email`, `password`, `image`, `is_active`, `date_created`) VALUES
(6, 'ikah', 'ikah@gmail.com', '$2y$10$Ytt90qRaPx3LVW/HUegAEOF5BgzkBub9tHXT7NdgzJ.hgCjQ0IL0u', 'default.jpg', 1, '1678775427');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_wisata`
--

CREATE TABLE `admin_wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` text NOT NULL,
  `jam_operasional` text NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `akses_jalan` text NOT NULL,
  `fasilitas` text NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `maps` text NOT NULL,
  `kode_kategori_wisata` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `rekening` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_wisata`
--

INSERT INTO `admin_wisata` (`id_wisata`, `nama_wisata`, `email_admin`, `password`, `deskripsi`, `alamat`, `jam_operasional`, `harga_tiket`, `akses_jalan`, `fasilitas`, `kontak`, `maps`, `kode_kategori_wisata`, `image`, `rekening`, `is_active`, `date_created`) VALUES
(1, 'Cadas Gantung', 'cadas@gmail.com', '$2y$10$fpAYfDWnu2XJ0V80MZZ7QOD5qtWfw0dkj5yh5guUzqkNonD6uuayu', 'Pesona perbukitan yang satu ini memang tidak mudah untuk dijangkau. Kamu harus melewati jalan yang terjal, berlubang, dan curam. Jadi, untuk menuju ke sana, persiapanmu harus matang. Pastikan kamu membawa tas ransel yang kuat dan mudah untuk dibawa. Selain itu, gunakan sepatu yang nyaman dan kuat.\r\n\r\nDi sini, kamu memang tidak akan mendapatkan fasilitas premium seperti layaknya glamping. Hanya saja, keanekaragaman flora di Cadas Gantung sangat menawan. Selain itu, sunrise dan sunset di sana sangat jelas dan indah. Warna matahari yang temaram berpadu dengan indahnya hamparan persawahan. Inilah surga bagi pencinta alam.', 'Desa Mirat, Kecamatan Leuwimunding', 'Setiap Hari 08.00 - 17.00', 10000, 'Akses menuju puncak cukup curam dan terjal', 'Tempat yang nyaman', '0857-2140-2100', 'https://www.google.com/maps/place/Taman+Wisata+Alam+Cadas+Gantung/@-6.7378409,108.3584893,17z/data=!3m1!4b1!4m6!3m5!1s0x2e6f209ec901c961:0xee43b65d8b5cd6ac!8m2!3d-6.7378462!4d108.360678!16s/g/11clvnr4gy', 'PGN', 'cadas_gantung3.png', 'BCA 989765784 (A.N Triadi)', 1, 1681017792),
(2, 'Bukit Mercury', 'mercury@gmail.com', '$2y$10$r7CAJLWE.35eKJ90Ovm5/OuRN290BUoZkTGhwHjKgR6Tn7a1UY4.O', 'Bukit Mercury Sayang Kaak terletak di Argapura. Lokasi wisata yang satu ini menawarkan berbagai hal yang kekinian. Misalnya, seperti spot selfie di puncak tebing, tempat duduk putih ala Eropa, dan gazebo.\r\n\r\nDari ketinggian Bukit Mercury Sayang Kaak, kamu dapat melihat Taman Nasional Gunung Ciremai. Pemandangan yang menawan ini tidak hanya cocok untuk selfie. Ia juga sangat menentramkan hati. Ketika senja tiba, siluet-siluet pepohonan di sana memberikan gambaran yang indah.\r\n\r\nFasilitas lain yang disukai oleh pengunjung di sini adalah ngopi di tebing jurang. Di tempat ini, kamu bisa menikmati hangatnya kopi sembari dimanjakan pemandangan lembah Ceremai. Terdapat pula view kebun bawang yang asri.\r\nBukit Mercury Sayang Kaak berdiri di ketinggian 1600 mdpl. Suhunya pun cukup dingin, yakni sekitar 16 derajat Celsius. Pada saat berada di sana, jangan lupa untuk mengenakan baju tebal, ya.\r\n', 'Blok Cibuluh, Desa Tejamulya, Kecamatan Argapura', 'Setiap Hari 07.00 - 17.00', 15000, 'Jalan menuju Bukit Mercury Sayang Kaak dapat ditem...', 'Shelter, Toilet, Air Bersih, Mushola', '0822-1488-4554', 'https://www.google.com/maps/place/Bukit+Mercury+Sayang+Kaak/@-6.9226755,108.3631452,17z/data=!3m1!4b1!4m6!3m5!1s0x2e6f3ce8e2cc96f9:0xef5624dd8e056abc!8m2!3d-6.9226808!4d108.3653339!16s/g/11hbpkbmgb', 'PBK', 'Screenshot_(801)2.png', 'BNI 98765960 (A.N Mira Rahmawati)', 1, 1681018806),
(3, 'Buper Cipanten', 'cipanten@gmail.com', '$2y$10$ESF3qXhaYoQeXx01Eluvr.A.eBrBXrUXxyG2pBelNaA9kTi3xu1n6', 'Hal yang terkenal dari bumi perkemahan ini adalah jajaran pinusnya. Berkemah di antara jajaran pinus sungguh teduh, sejuk, dan menyenangkan. Tak mengherankan apabila banyak anak muda pencinta camping menobatkan Buper Cipaten sebagai salah satu tempat camping terbaik di Jawa Barat. Ini karena fasilitas dan pemandangan camping ground Cipaten sangat bagus.\r\nLokasi bumi perkemahan ada di tengah-tengah jajaran pinus. Kondisi ini memberikan kesan romantis pada malam hari. Apalagi, jika langit sedang cerah-cerahnya. Kamu akan merasa seperti tengah berada di negeri dongeng.\r\n\r\nPengelola menyediakan fasilitas sewa tenda, hammock, dan alas tidur. Untuk mengetahui berapa harga yang harus kamu bayar, kamu dapat menghubungi pengelola.', 'Desa Argalingga, Kecamatan Argapura', 'Setiap Hari 07.00 - 17.00', 5000, 'Akses jalan mudah dilalui oleh mobil ataupun motor', 'Tempat parkir, Musala, Warung-warung, Toilet, Instalasi listrik untuk charging, Wahana permainan pohon pinus, Spot selfie, Sepeda gantung, Perahu, Becak air, Mata air.', '0817613246', 'https://www.google.com/maps/place/Buper+Cipanten/@-6.9000637,108.35656,17z/data=!4m8!3m7!1s0x2e6f3ccadb6e8b3b:0x44c1c506e578988!8m2!3d-6.900069!4d108.3587487!9m1!1b1!16s/g/11bxc71f52', 'HTP', 'Screenshot_(802)2.png', 'BNI 98765960 (A.N Nadia Omara)', 1, 1681019012),
(4, 'Curug Leles', 'leles@gmail.com', '$2y$10$1oHF1Na9F4dtdcdVDyfFkeawJ0n1vju9eBCIxfX8m1pvaDBvnU80q', 'Pusat perhatian dari camping ground ini adalah air terjun alias curug Leles. Aliran air pada batuan yang bertingkat memberikan view yang melegakan hati. Air itu mengalir dari Sungai Cileles yang alirannya tidak deras.\r\nDi tengah sungai, dibangun jembatan besi tempat wisatawan dapat menikmati suasana. Banyak pula di antara mereka yang berfoto-foto di jembatan.\r\n\r\nCamping ground sendiri terletak di antara pepohonan pinus tinggi, tak jauh dari curug.  Area camping ground juga landai dan rapi, sehingga nyaman untuk pemula. Pada saat-saat tertentu, daun-daun itu gemeresik ditimpa angin. Suara-suara serangga yang bersahutan membuat suasana terasa lebih khidmat.\r\n', 'Desa Padaherang, Kecamatan Sindangwangi', 'Setiap Hari 09.00 - 16.00', 15000, 'Mudah dilalui motor, namun ada beberapa jalan yang kurang bagus', 'musala, toilet, ruang pertemuan, sampai kantin-kantin ', '081324082969', 'https://www.google.com/maps/place/Bumi+Perkemahan+Curug+Leles/@-6.8019867,108.3891398,17z/data=!3m1!4b1!4m6!3m5!1s0x2e6f219a16c7466b:0x2bb5e9ad40060c49!8m2!3d-6.801992!4d108.3913285!16s/g/11c2nr08q7', 'HTP', 'Screenshot_(804)1.png', 'BCA 989765784 (A.N Marika Tia)', 1, 1681019212),
(5, 'Talaga Pancar', 'pancar@gmail.com', '$2y$10$qk4gnvHMx4QtJXIxU4O9TuXSYaHb.sp.LOveY1rw4QbanMN0xhl1G', 'Telaga Pancar difungsikan sebagai wana wisata. Sehingga, pepohonan dan tumbuhan lain senantiasa terlindungi. Kondisi ini membuat Telaga Pancar terasa asri dan nyaman digunakan untuk berkemah.\r\nJika kamu ingin menggunakan tenda peleton, kamu bisa mendapatkan gratis dari pengelola. Namun, untuk jenis tenda lain, kamu bisa menyewanya dengan harga tertentu.\r\n\r\nBerkemah di antara bukit pinus dan di dekat telaga menciptakan ketenangan. Ini merupakan tempat wisata yang layak kamu pilih jika ingin menepi dari riuhnya perkotaan.\r\n', 'Desa Lengkong Kulon, Sindangwangi', 'Setiap Hari 08.00 - 17.00', 10000, 'Mudah dilalui motor, namun ada beberapa jalan yang kurang bagus', 'Tempat yang nyaman, toilet', '0898989000', 'https://www.google.com/maps/place/Buper+Talaga+Pancar/@-6.7902632,108.3863121,17z/data=!4m16!1m9!3m8!1s0x2e6f21a478fbdc0d:0x1a06ee254ee4f2db!2sBuper+Talaga+Pancar!8m2!3d-6.7902685!4d108.3885008!9m1!1b1!16s/g/11c5zy080j!3m5!1s0x2e6f21a478fbdc0d:0x1a06ee254ee4f2db!8m2!3d-6.7902685!4d108.3885008!16s/g/11c5zy080j', 'HTP', 'Screenshot_(805)1.png', 'BRI 989765784 (A.N Teguh Satya)', 1, 1681019418),
(6, 'Cidewata', 'cidewata@gmail.com', '$2y$10$OWmRMjY63OThkKkWi4UWAO0ZEQkJcJ7KtyC8hIA7VqwMejbPsvlNG', 'Bumi perkemahan ini terletak di wilayah konservasi Hutan Ciremai. Sehingga, nuansanya asri, alamnya subur, dan udaranya begitu sejuk. Ia diapit oleh dua hulu sungai dan berada pada ketinggian 1.078 mdpl. Pada siang hari saja, suhunya di bawah 25 derajat celcius. Jadi, jika kamu pergi ke sana, jangan lupa untuk membawa baju tebal.\r\n\r\nCidewata juga terkenal akan kekayaan fauna. Hewan-hewan yang dapat kamu temui di sana antara lain babi hutan, menjangan, dan jalak kebo. Kekayaan fauna ini juga dibarengi dengan flora yang variatif. Di sana, terdapat tanaman pinus, puspa, harendong, sampai dengan pinus.\r\nLansekap di Cidewata begitu menawan. Camping ground ini dikelilingi oleh perbukitan. Pada subuh dan senja, kamu dapat melihat indahnya sunrise dan sunset. Pemandangan matahari terbit terlihat jelas dari bukit Liang Angin. Sementara itu, matahari terbenam terlihat jelas dari balik Gunung Tampomas.\r\n', 'Desa Payung, Kecamatan Rajagaluh', 'Setiap Hari 08.00 - 17.00', 10000, 'Mudah dilalui motor, namun ada beberapa jalan yang kurang bagus', 'Toilet, Musala, Warung-warung, Ayunan, Sepeda gantung dan Outbound.', '0857214320989', 'https://www.google.com/maps/place/Cidewata/@-6.8476892,108.3816799,17z/data=!3m1!4b1!4m6!3m5!1s0x2e6f2256ffffffff:0x4da774323ffee52d!8m2!3d-6.8476945!4d108.3838686!16s/g/11c55smm30', 'PGN', 'Screenshot_(806)1.png', 'BCA 989765784 (A.N Misbahudin)', 1, 1681019627),
(7, 'Kanaga Hill', 'kanaga@gmail.com', '$2y$10$gvbaoBGRmd42oE2zuVqBX.lOzlHmpQp4qIJREkQcZVtBobsgPzzx6', 'Bukit Kanaga adalah tempat wisata favorit baru di Majalengka. Seperti beberapa campground lain, ia juga terletak di kaki Gunung Ciremai. Sehingga, udaranya pun terasa sejuk. Lokasinya juga diapit oleh dua sungai. Kedua sungai itu adalah Sungai Cilutung dan Sungai Ciputri. Keberadaan dua sungai itu memberikan kesan subur dan mempercantik pemandangan. Ditambah lagi, terdapat deretan pinus-pinus. Tumbuhan dengan aroma yang menyenangkan ini adalah vegetasi alami dari Gunung Ciremai.\r\n\r\nSejauh mata memandang, yang kamu lihat di Bukit Kanaga adalah terasering dan kebun-kebun warga desa. Pemandangan ini begitu menyejukkan mata. Terlebih, terkadang kabut tipis menyelimuti pemandangan tersebut. Tidak mengherankan banyak fotografer yang datang ke sana.\r\nBukan hanya berfoto, pengunjung juga bisa berkemah di sana. Luas dari camping ground Bukit Kanaga sendiri adalah tiga hektar. Cukup luas untuk memuat banyak pengunjung. Area perkemahan dinaungi oleh pohon-pohon pinus, membuatnya teduh.\r\n', 'Ciinjuk, Desa Cipulus, Kecamatan Cikijing', 'Setiap Hari 08.00 - 17.00', 20000, 'Jalan utama menuju Bukit Kanaga sedikit berlubang dan berbatu, tetapi ia dapat dijangkau dengan kendaraan roda empat. Selain itu, jaraknya pun hanya sekitar 29 km dari alun-alun Majalengka.', 'Tempat yang nyaman, toilet', '0817613246', 'https://www.google.com/maps/place/Bukit+Kanaga/@-6.9540101,108.3814787,17z/data=!3m1!4b1!4m6!3m5!1s0x2e6f3d7e0428d417:0xc8bbbebe6f311e49!8m2!3d-6.9540154!4d108.3836674!16s/g/11hzm2jl3s', 'HTP', 'Screenshot_(807)1.png', 'BCA 989765784 (A.N Sintya Rida)', 1, 1681019983),
(8, 'Bukit Pamoroan', 'pamoroan@gmail.com', '$2y$10$y44gIN1bjO0a15Nj0/yyiOjYPWRgpvB3BVkhazbG9kz0RMETHlg4O', 'Bukit Pamoroan adalah salah satu tempat favorit untuk trekking. Medannya cukup ramah dan tidak terlalu terjal. Pemandangan di bagian atas bukit sangat indah dan juga menawan. Dari atas bukit, kamu bisa menikmati pemandangan desa dan persawahan.\r\nWalaupun tidak berada di puncak gunung, Bukit Pamoroan menawarkan pemandangan lautan awan. Lautan awan itu menyelimuti Gunung Ciremai yang tampak begitu jelas. Pemandangan itu bahkan bisa kamu lihat di camping ground. Duduk-duduk di depan tenda sembari menyeruput kopi dan melihat keindahan ini adalah salah satu ide liburan terbaik.\r\n\r\nAnak-anak muda suka berfoto di berbatuan tinggi dengan view gunung. Ini membuat mereka seolah “duduk di atas awan”. Jika kamu berkesempatan camping di sana, kamu pun bisa mencobanya. Latar terbaik untuk selfie adalah pada pagi atau siang hari. Lautan awan itu terlihat dengan jelas.\r\n\r\nPada akhir minggu, ada banyak anak muda yang camping di sana. Kami menyarankan kamu untuk datang pagi-pagi. Sehingga, kamu bisa mendapatkan spot camping dan menikmati trekking dengan udara yang segar.\r\n', 'Desa Sedareja, Kecamatan Cingambul', 'Setiap Hari 24 Jam', 15000, 'Mudah dilalui motor, namun ada beberapa jalan yang kurang bagus', 'Tempat yang nyaman, toilet', '0857214320989', 'https://www.google.com/maps/place/Bukit+Pamoroan/@-7.0437798,108.2972564,17z/data=!3m1!4b1!4m6!3m5!1s0x2e6f39005b6ffe41:0x59dd0066d0a6302f!8m2!3d-7.0437851!4d108.2994451!16s/g/11jdh87bf9', 'PGN', 'Screenshot_(809)1.png', 'BCA 989765784 (A.N Khaerul Diga)', 1, 1681020144),
(9, 'Batu Gurat', 'gurat@gmail.com', '$2y$10$oiGMPplla/GUfv8.ioJcL.BB/hgr4o9HdU55PL4FWK/3vXiBZqS2q', 'Area Camp yang unik dan memiliki pemandangan yang sangat indah, cantik. Area camp ini terdapat di desa balagedog, kecamatan Sindangwangi, Majalengka. Area camp yang ditengah perbukitan yang memajakan penglihatan kita, dari mulai sunrise yang sangat cantik dan sunset yang luar biasa indah bisa kita dapatkan disini.!', 'Desa Balagedog, Kecamatan Sindangwangi', 'Setiap Hari 24 Jam', 10000, 'Mudah dilalui motor, namun ada beberapa jalan yang kurang bagus', 'Tempat yang nyaman', '0857214320989', 'https://www.google.com/maps/place/Batu+Gurat+Riverside+Camping/@-6.7596758,108.3726852,17z/data=!4m6!3m5!1s0x2e6f2145953eb399:0xb8df100b9955e366!8m2!3d-6.7596758!4d108.3726852!16s/g/11j9d18j46', 'PGN', 'Screenshot_(810).png', 'BCA 989765784 (A.N Anandika)', 1, 1681044317),
(10, 'Bukit Jomblo', 'jomblo@gmail.com', '$2y$10$OkSDavtLYdIEOp9U9UCyF.1lULEX2OYDY6yNy6TUWhzfrMZ7YiYiW', 'Tempat bersantai. Tempat ini menyuguhkan pemandangan yang begitu indah nan mempesona. Apalagi sunsetnya, sangat indah sekali disertai dengan senja yang mewarnai melengkapi keindahannya.  Tempat sini lokasinya tidak jauh dari buper kanaga hill. Sebelum ke kanaga hill anda akan melewati tempat Ini dulu. Disini banyak aneka jajanan dan Perkopian juga.', 'Desa Cipulus, Kecamatan Cikijing', 'Setiap Hari 24 Jam', 10000, 'Mudah dilalui motor, namun ada beberapa jalan yang kurang bagus', 'Tersedia penyewaan tenda dan matras.', '0857214320989', 'https://www.google.com/maps/place/Camping+Ground+Bukit+Jomblo/@-6.9606719,108.3769446,17z/data=!3m1!4b1!4m6!3m5!1s0x2e6f3c3544f2c439:0xc0ba3b7840b3670a!8m2!3d-6.9606772!4d108.3791333!16s/g/11g68z2gqr', 'PBK', 'Screenshot_(811).png', 'BRI 989765784 (A.N Dandi)', 1, 1681044687),
(11, 'Situ Cikuda', 'cikuda@gmail.com', '$2y$10$Fu7f7YbaaiwVHaJ7MmTbPeX8uLQ3IXI6SimJBzJ8995AZvut5.VLC', 'Situ Cikuda adalah sebuah telaga atau danau yang yang terbentuk secara alami dari sumber mata air yang berasal dari Gunung Ceremei. Dinamakan sebagai “Cikuda” ialah karena dikisahkan bahwa setiap kuda yang sakit lalu dimandikan di telaga ini maka seketika akan langsung sembuh.\r\n\r\nKonon katanya, Situ Cikuda menjadi salah satu tempat yang dijadikan lokasi perjalanan spiritual Prabu Siliwangi sebelum menjadi raja. Dulunya, tempat ini memiliki 7 sumber mata air yang mengalir ke telaga yang menjadikan ilmu Prabu Siliwangi sempurna. ', 'Desa Padaherang, kecamatan Sindangwangi', 'Setiap Hari 08.00 - 17.00', 5000, 'Mudah dilalui motor, namun ada beberapa jalan yang kurang bagus', 'Mushola, toliet, homestay, camping site dan pemancingan', '0857-2140-2100', 'https://www.google.com/maps/place/Situ+Cikuda/@-6.8134589,108.390239,17z/data=!4m15!1m8!3m7!1s0x2e6f21887c324d49:0xc2a0ffc0dd09170d!2sSitu+Cikuda!8m2!3d-6.8134589!4d108.3924277!10e5!16s/g/11bz_00g7c!3m5!1s0x2e6f21887c324d49:0xc2a0ffc0dd09170d!8m2!3d-6.8134589!4d108.3924277!16s/g/11bz_00g7c', 'PBK', 'Screenshot_(812).png', 'BCA 989765784 (A.N Nadia)', 1, 1681045226),
(12, 'Gunung Ciwaru', 'ciwaru@gmail.com', '$2y$10$2jz8T21PqXkUIeFpfGjRw.4nx2hJHnQZfcPaigabH90tHJyKGORXm', 'Menawarkan daya tarik yang hampir mirip dengan Tebing Keraton di Bandung. Wisatawan dapat menikmati panorama gunung, hutan, perbukitan, hingga dataran rendah dari ketinggian. Suasananya adem dan sejuk, sangat pas untuk refreshing di akhir pekan.', 'Desa Payung, Pajajar, Kecamatan Rajagaluh', 'Setiap Hari 08.00 - 16.00', 10000, 'Mudah dilalui motor, namun ada beberapa jalan yang kurang bagus', 'Shelter, Toilet, Air Bersih, Mushola', '0898989000', 'https://www.google.com/maps/@-6.818991,108.3714503,3a,75y,90t/data=!3m7!1e2!3m5!1sAF1QipOFkt-6LvDPxCTWWLBISgtgQD-I-7z5S1hLp43A!2e10!6shttps://lh5.googleusercontent.com/p/AF1QipOFkt-6LvDPxCTWWLBISgtgQD-I-7z5S1hLp43A=w150-h150-k-no-p!7i2246!8i3998', 'PGN', 'Screenshot_(813).png', 'BCA 989765784', 1, 1681045600),
(13, 'Sangyang Dora', 'sanghyang@gmail.com', '$2y$10$4R3nkqhjaZ61.t1b7MXrIORM4d9RWJAQuYxH2X8xS6mWWtwahir96', 'Bukit Sanghyang Dora berada di ketinggian sekitar 385 mdpl, dengan menyajikan pemandangan alam berupa jajaran bukit-bukit, pemukiman warga sekitar, serta Gunung Ciremai.\r\n\r\nView tersebut dapat terlihat secara jelas apabila cuaca sedang cerah, dan di malam hari pemandangan tentu saja akan berbeda dan semakin syahdu dengan hadirnya kerlap kerlip lampu kota.\r\nBukit Sanghyang Dora sering dimanfaatkan untuk mereka yang ingin nge-camp, dan bermalam bersama alam yang indah dengan hanya ditemani nyanyian alam yang syahdu.\r\n\r\nPaling asyik camping bersama kawan, menghabiskan waktu dengan bersama sambil menciptakan momen yang tak terlupakan.', 'Desa Leuwikujang, Kecamatan Majlengka', 'Setiap Hari 24 Jam', 10000, 'Mudah dilalui motor, namun ada beberapa jalan yang kurang bagus', 'Warung makanan dan minuman, Area parkir, Toilet, Mushola, Camping ground,', '0895-1764-9352', 'https://www.google.com/maps/place/Bukit+Sanghyangdora+(Situ+Cibaringkeng)/@-6.7434734,108.3508201,17z/data=!3m1!4b1!4m6!3m5!1s0x2e6f219187713c27:0x9561e22b24e802f!8m2!3d-6.7434787!4d108.3530088!16s/g/11j0w7zfn1', 'PBK', 'IMG_20220715_170810_resize_49.jpg', 'BCA 989765784 (A.N Delia)', 1, 1681053155),
(14, 'Ciremai', 'ciremai@gmail.com', '$2y$10$Zw5q2iFpdkLMXgXkEbMF8.3tIPLNfe4sIKxbttAf4SDPvTT4lgos6', 'Bagus', 'Gunung ciremai', 'Setiap Hari 08.00 - 17.00', 15000, 'Mudah dilalui motor, namun ada beberapa jalan yang kurang bagus', 'Tempat yang nyaman', '0898989000', 'https://www.google.com/maps/place/Taman+Wisata+Alam+Cadas+Gantung/@-6.7378409,108.3584893,17z/data=!3m1!4b1!4m6!3m5!1s0x2e6f209ec901c961:0xee43b65d8b5cd6ac!8m2!3d-6.7378462!4d108.360678!16s/g/11clvnr4gy', 'PBK', 'OIP_(7).jpg', 'BCA 989765784', 1, 1681095446),
(15, 'bukit kenangan', 'coba@gmail.com', '$2y$10$pnhssgn4TDt9VgbQI.nbHePWN/vvf/8mu/62xnT5pxx9oOjYf7/XG', 'k', 'k', '24', 200, 'aspal', 'h', '0', 'k', 'PGN', 'wisata.jpg', 'BNI 98765960 (A.N Mira Rahmawati)', 1, 1681228972);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_outdoor`
--

CREATE TABLE `kategori_outdoor` (
  `id_kategori` int(11) NOT NULL,
  `kode_kategori` varchar(50) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_outdoor`
--

INSERT INTO `kategori_outdoor` (`id_kategori`, `kode_kategori`, `nama_kategori`) VALUES
(1, 'JKT', 'Jaket'),
(2, 'RNS', 'Ransel'),
(3, 'TND', 'Tenda'),
(6, 'SPT', 'Sepatu'),
(7, 'DLL', 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_wisata`
--

CREATE TABLE `kategori_wisata` (
  `id_kategori_wisata` int(11) NOT NULL,
  `kode_kategori_wisata` varchar(50) NOT NULL,
  `nama_kategori_wisata` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_wisata`
--

INSERT INTO `kategori_wisata` (`id_kategori_wisata`, `kode_kategori_wisata`, `nama_kategori_wisata`) VALUES
(1, 'PGN', 'PEGUNUNGAN'),
(2, 'PBK', 'PERBUKITAN'),
(3, 'TRS', 'TERASERING'),
(9, 'HTP', 'HUTAN PINUS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `outdoor`
--

CREATE TABLE `outdoor` (
  `id_produk` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `email_admin` varchar(225) NOT NULL,
  `kode_kategori` varchar(120) NOT NULL,
  `nama_produk` varchar(120) NOT NULL,
  `deskripsi_produk` varchar(255) NOT NULL,
  `harga_sewa` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `rekening` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `outdoor`
--

INSERT INTO `outdoor` (`id_produk`, `id_wisata`, `email_admin`, `kode_kategori`, `nama_produk`, `deskripsi_produk`, `harga_sewa`, `status`, `gambar`, `rekening`) VALUES
(1, 1, 'cadas@gmail.com', 'TND', 'Tenda Kap 4 Orang', 'Masih bagus', 40000, '1', '270725663_b2383f80-878b-4458-823a-324fdf4667eb_1728_17281.jpg', 'BCA 989765784 (A.N Triadi)'),
(2, 1, 'cadas@gmail.com', 'TND', 'Tenda Kap 2 Orang', 'Masih bagus', 30000, '1', 'OIP1.jpg', 'BCA 989765784 (A.N Triadi)'),
(3, 1, 'cadas@gmail.com', 'JKT', 'Jaket Gunung', 'Masih bagus', 15000, '0', 'Jaket_Gunung___Outdoor_Consina_Whistler.jpg', 'BCA 989765784 (A.N Triadi)'),
(4, 1, 'cadas@gmail.com', 'SPT', 'Sepatu Gunung', 'Merk Eiger', 20000, '0', 'sepatu_eiger__W181__s_vibram_cypress___eiger_sepatu___sepatu.jpg', 'BCA 989765784 (A.N Triadi)'),
(5, 1, 'cadas@gmail.com', 'TND', 'Rain Coat', 'Sedikit Kotor', 15000, '1', 'a71e49390155a092139a9990706cc20f_tn.jpg', 'BCA 989765784 (A.N Triadi)'),
(6, 2, 'mercury@gmail.com', 'DLL', 'Trekking Pole', 'Masih bagus', 15000, '1', '6362849_leki_corklite_4.jpg', 'BNI 98765960 (A.N Mira Rahmawati)'),
(7, 2, 'mercury@gmail.com', 'RNS', 'Daypack 30-45 liter', 'Belum termasuk coverbag', 15000, '1', 'thule_3202036_paramount_daypack_29_liters_1246465.jpg', 'BNI 98765960 (A.N Mira Rahmawati)'),
(8, 2, 'mercury@gmail.com', 'TND', 'Tenda Kap 2 Orang', 'Masih bagus', 40000, '1', 'OIP_(1).jpg', 'BNI 98765960 (A.N Mira Rahmawati)'),
(9, 2, 'mercury@gmail.com', 'SPT', 'Sepatu Gunung', 'Merk Eiger', 15000, '0', 'OIP_(2).jpg', 'BNI 98765960 (A.N Mira Rahmawati)'),
(10, 3, 'cipanten@gmail.com', 'JKT', 'Jaket Gunung', 'Merk Consina', 15000, '1', 'R_(1).jpg', 'BNI 98765960 (A.N Nadia Omara)'),
(11, 3, 'cipanten@gmail.com', 'RNS', 'Carier 60-75 liter', 'Belum termasuk coverbag', 20000, '0', 'TAS_GUNUNG_CARRIER_TAS_PUNGGUNG_CONSINA_ALPINE_55_LITER_TERM.jpg', 'BNI 98765960 (A.N Nadia Omara)'),
(12, 3, 'cipanten@gmail.com', 'DLL', 'Trekking Pole', 'Masih bagus', 15000, '1', 'OIP_(6).jpg', 'BNI 98765960 (A.N Nadia Omara)'),
(13, 4, 'leles@gmail.com', 'DLL', 'Hammock', 'Merk Consina', 10000, '1', 'OIP_(8).jpg', 'BCA 989765784 (A.N Marika Tia)'),
(14, 4, 'leles@gmail.com', 'DLL', 'Cooking Set Lengkap', 'Barang sesuai foto', 15000, '1', 'OIP_(9).jpg', 'BCA 989765784 (A.N Marika Tia)'),
(15, 4, 'leles@gmail.com', 'RNS', 'Carier 60-75 liter', 'Belum termasuk coverbag', 20000, '0', 'OIP_(3).jpg', 'BCA 989765784 (A.N Marika Tia)'),
(16, 5, 'pancar@gmail.com', 'JKT', 'Jaket Gunung', 'Merk Consina', 15000, '0', 'OIP_(5).jpg', 'BRI 989765784 (A.N Teguh Satya)'),
(17, 5, 'pancar@gmail.com', 'TND', 'Tenda Kap 2 Orang', 'Masih bagus', 40000, '1', 'OIP_(1)1.jpg', 'BRI 989765784 (A.N Teguh Satya)'),
(18, 6, 'cidewata@gmail.com', 'SPT', 'Sepatu Gunung', 'Merk Eiger', 20000, '1', 'sepatu_eiger__W181__s_vibram_cypress___eiger_sepatu___sepatu1.jpg', 'BCA 989765784 (A.N Misbahudin)'),
(19, 6, 'cidewata@gmail.com', 'RNS', 'Daypack 30-45 liter', 'Masih bagus', 20000, '1', 'R.jpg', 'BCA 989765784 (A.N Misbahudin)'),
(20, 6, 'cidewata@gmail.com', 'DLL', 'Hammock', 'Merk Consina', 15000, '1', 'OIP_(7).jpg', 'BCA 989765784 (A.N Misbahudin)'),
(21, 6, 'cidewata@gmail.com', 'TND', 'Tenda Kap 4 Orang', 'Merk Consina', 40000, '0', '270725663_b2383f80-878b-4458-823a-324fdf4667eb_1728_17282.jpg', 'BCA 989765784 (A.N Misbahudin)'),
(22, 7, 'kanaga@gmail.com', 'JKT', 'Jaket Gunung', 'Merk Consina', 10000, '1', 'R_(2).jpg', 'BCA 989765784 (A.N Sintya Rida)'),
(23, 7, 'kanaga@gmail.com', 'RNS', 'Daypack 30-45 liter', 'Masih bagus', 20000, '0', 'R1.jpg', 'BCA 989765784 (A.N Sintya Rida)'),
(24, 7, 'kanaga@gmail.com', 'DLL', 'Tenda Kap 2 Orang', 'Merk Consina', 40000, '1', '0dca4d05746278b93596fbb601025138.jpg', 'BCA 989765784 (A.N Sintya Rida)'),
(25, 7, 'kanaga@gmail.com', 'DLL', 'Hammock', 'Merk Consina', 20000, '1', 'OIP_(8)1.jpg', 'BCA 989765784 (A.N Sintya Rida)'),
(26, 8, 'pamoroan@gmail.com', 'JKT', 'Jaket Gunung', 'Merk Consina', 20000, '1', 'R_(1)1.jpg', 'BCA 989765784 (A.N Khaerul Diga)'),
(27, 8, 'pamoroan@gmail.com', 'RNS', 'Carier 60-75 liter', 'Belum termasuk coverbag', 40000, '0', 'Tas_Carrier_Consina_Bering_60_Liter.jpg', 'BCA 989765784 (A.N Khaerul Diga)'),
(28, 9, 'gurat@gmail.com', 'JKT', 'Jaket Gunung', 'Masih bagus', 15000, '1', 'R_(1)2.jpg', 'BCA 989765784 (A.N Anandika)'),
(29, 10, 'jomblo@gmail.com', 'RNS', 'Daypack 30-45 liter', 'Merk Consina', 15000, '1', 'thule_3202036_paramount_daypack_29_liters_12464651.jpg', 'BRI 989765784 (A.N Dandi)'),
(30, 11, 'cikuda@gmail.com', 'TND', 'Tenda Kap 2 Orang', 'Merk Consina', 40000, '1', 'OIP_(1)2.jpg', 'BCA 989765784 (A.N Nadia)'),
(31, 12, 'ciwaru@gmail.com', 'RNS', 'Carier 60-75 liter', 'Merk Consina', 20000, '1', 'TAS_GUNUNG_CARRIER_TAS_PUNGGUNG_CONSINA_ALPINE_55_LITER_TERM1.jpg', 'BCA 989765784'),
(32, 13, 'sanghyang@gmail.com', 'JKT', 'Jaket Gunung', 'Merk Consina', 15000, '1', 'R_(1)3.jpg', 'BCA 989765784 (A.N Delia)'),
(33, 13, 'sanghyang@gmail.com', 'DLL', 'Rain Coat', 'Masih bagus', 15000, '1', 'a71e49390155a092139a9990706cc20f_tn1.jpg', 'BCA 989765784 (A.N Delia)'),
(34, 14, 'ciremai@gmail.com', 'RNS', 'Daypack 30-45 liter', 'Merk Consina', 20000, '1', 'OIP_(4).jpg', 'BCA 989765784');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_outdoor`
--

CREATE TABLE `transaksi_outdoor` (
  `id_sewa` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `id` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(225) NOT NULL,
  `deskripsi_produk` varchar(255) NOT NULL,
  `harga_sewa` int(20) NOT NULL,
  `tgl_order_sewa` date NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `no_tlp` varchar(255) NOT NULL,
  `alamat_sewa` varchar(255) NOT NULL,
  `rekening` varchar(255) NOT NULL,
  `bukti_sewa` varchar(255) NOT NULL,
  `status_bayar` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_outdoor`
--

INSERT INTO `transaksi_outdoor` (`id_sewa`, `id_wisata`, `email_admin`, `id`, `email`, `id_produk`, `nama_produk`, `deskripsi_produk`, `harga_sewa`, `tgl_order_sewa`, `tgl_sewa`, `tgl_kembali`, `no_tlp`, `alamat_sewa`, `rekening`, `bukti_sewa`, `status_bayar`) VALUES
(1, 13, 'sanghyang@gmail.com', 1, 'ikahsubaikah18@gmail.com', 33, 'Rain Coat', 'Masih bagus', 15000, '2023-04-09', '2023-04-10', '2023-04-11', '0819237471', 'Desa Sedareja, Kecamatan Cingambul', 'BCA 989765784 (A.N Delia)', '', 0),
(2, 14, 'ciremai@gmail.com', 3, 'aprilikah@gmail.com', 34, 'Daypack 30-45 liter', 'Merk Consina', 20000, '0000-00-00', '0000-00-00', '0000-00-00', '', '', 'BCA 989765784', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_tiket`
--

CREATE TABLE `transaksi_tiket` (
  `id_tiket` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `email_admin` varchar(22) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `tgl_order` date NOT NULL,
  `tgl_booking` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `waktu` time NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat_wisatawan` varchar(255) NOT NULL,
  `rekening` varchar(255) NOT NULL,
  `bukti_transfer` varchar(50) NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_tiket`
--

INSERT INTO `transaksi_tiket` (`id_tiket`, `id`, `email`, `id_wisata`, `email_admin`, `nama_wisata`, `tgl_order`, `tgl_booking`, `tgl_selesai`, `waktu`, `harga_tiket`, `jumlah_tiket`, `no_hp`, `alamat_wisatawan`, `rekening`, `bukti_transfer`, `status_pembayaran`) VALUES
(1, 1, 'ikahsubaikah18@gmail.com', 1, 'cadas@gmail.com', 'Cadas Gantung', '2023-04-09', '2023-04-11', '2023-04-12', '16:25:07', 10000, 1, '+6285771887905', 'Hulubanteng kidul kec.pabuaran kab.cirebon', 'BCA 989765784 (A.N Triadi)', 'n-registrasi_wisata_drawio.png', 0),
(2, 3, 'aprilikah@gmail.com', 1, 'cadas@gmail.com', 'Cadas Gantung', '2023-04-10', '2023-03-11', '2023-03-12', '11:55:39', 10000, 1, '081298310941', 'Hulubanteng kidul kec.pabuaran kab.cirebon', 'BCA 989765784 (A.N Triadi)', 'OIP_(9)1.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `is_active`, `date_created`) VALUES
(1, 'Ikah Subaikah', 'ikahsubaikah18@gmail.com', 'WhatsApp_Image_2023-02-16_at_22_40_2512.jpeg', '$2y$10$Kc/.VSXtMz9cxgAG/AsYx.iN5U7rjUsBRA3neLIs3UmzyIvRm3Z76', 1, 1673233558),
(2, 'Andika Lubis', 'anandika217@gmail.com', 'OIP_(2).jpeg', '$2y$10$qpojT0IH0JW6TxtOVuPbWOJ3Bv03sd6d7VDhma8Q25UuTNP2zGR/G', 1, 1674482424),
(3, 'Aprilikah', 'aprilikah@gmail.com', 'default.jpg', '$2y$10$rujPKSXGb6r9/LVW32l5f.QNA3Z22OkJz9przJymfCoLwaFFwNaya', 1, 1681095038);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indeks untuk tabel `admin_wisata`
--
ALTER TABLE `admin_wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD UNIQUE KEY `email_admin` (`email_admin`);

--
-- Indeks untuk tabel `kategori_outdoor`
--
ALTER TABLE `kategori_outdoor`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `kategori_wisata`
--
ALTER TABLE `kategori_wisata`
  ADD PRIMARY KEY (`id_kategori_wisata`);

--
-- Indeks untuk tabel `outdoor`
--
ALTER TABLE `outdoor`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `transaksi_outdoor`
--
ALTER TABLE `transaksi_outdoor`
  ADD PRIMARY KEY (`id_sewa`);

--
-- Indeks untuk tabel `transaksi_tiket`
--
ALTER TABLE `transaksi_tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `admin_wisata`
--
ALTER TABLE `admin_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `kategori_outdoor`
--
ALTER TABLE `kategori_outdoor`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kategori_wisata`
--
ALTER TABLE `kategori_wisata`
  MODIFY `id_kategori_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `outdoor`
--
ALTER TABLE `outdoor`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `transaksi_outdoor`
--
ALTER TABLE `transaksi_outdoor`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi_tiket`
--
ALTER TABLE `transaksi_tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
