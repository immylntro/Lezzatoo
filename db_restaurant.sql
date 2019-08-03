-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 03, 2019 at 12:05 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) UNSIGNED NOT NULL,
  `id_news` int(11) UNSIGNED NOT NULL,
  `author` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `status` enum('Approve','Unapprove') NOT NULL DEFAULT 'Approve'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `id_news`, `author`, `content`, `date`, `status`) VALUES
(4, 5, 'immylntro@gmail.com', 'enak nasik jinggo', '2017-12-12 01:23:36', 'Approve'),
(5, 5, 'user@gmail.com', 'fvfgvdf', '2017-12-12 01:39:19', 'Approve'),
(6, 5, 'immylntro@gmail.com', 'gbgbgbg', '2017-12-12 01:39:28', 'Approve'),
(7, 5, 'admin@gmail.com', 'bgbgb', '2017-12-12 01:39:36', 'Approve'),
(8, 5, 'admin@gmail.com', 'bgbgbg', '2017-12-12 01:39:47', 'Approve'),
(9, 5, 'admin@gmail.com', 'gbgbgbgb', '2017-12-12 01:39:55', 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id_food` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `price` int(10) NOT NULL,
  `last_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id_food`, `name`, `content`, `price`, `last_update`) VALUES
(1, 'Sate Lilit', '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/lezzatoo/vendor/source/sate-lilit.jpg\" width=\"300\" height=\"169\" /></p>\r\n<p>makanan khas bali sate lilit adalah..</p>', 50000, '2017-12-03 23:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  `last_update` datetime NOT NULL,
  `status` enum('Unpublish','Publish') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `username`, `title`, `content`, `created`, `last_update`, `status`) VALUES
(1, 'admin', 'Resep Ayam Betutu Asli Bali Pedas Dan Rahasia Cara Membuatnya', '<p style=\"text-align: justify;\"><strong>Cara Membuat Resep Ayam Betutu Bumbu Khas Gilimanuk Bali Beserta Tips Cara Membuatnya</strong>. Apakah teman-teman pernah mendengar mengenai betutu, resep masakan ayam khas Bali tersebut? Mungkin tidak semua orang pernah mencicipi kelezatan resep masakan ayam betutu kuah atau kering khas Bali ini. Tetapi kalau sudah pernah merasakannya, citarasa khas spesial dari bumbu rempah-rempah tradisional khas pulau Dewata pasti membuat semua orang ketagihan. Kalau melihat dari tampilannya, resep masakan Indonesia ini mirip sekali dengan ayam Taliwang yang sudah pernah kita bagi di resepnya sebelumnya. Memang kalau dilihat dari bumbu ayam betutu yang digunakan memang mirip dengan saudaranya dari Taliwang tersebut. Tetapi tetap ada perbedaan yang membuat resep ayam betutu Bali ini mempunyai citarasa yang khas sehingga banyak dicari orang. Buat teman-teman yang penasaran tidak perlu khawatir, cara membuat ayam betutu bumbu khas Bali ini ternyata tidak sesulit yang kita bayangkan kok. Ada banyak variasi yang bisa dengan mudah kita buat, seperti ayam betutu basah, betutu kuah ataupun yang dioven khas Gilimanuk.</p>\r\n<div style=\"float: none; margin: 8px 0px; text-align: justify;\">&nbsp;</div>\r\n<p style=\"text-align: justify;\">Walaupun resep awalnya merupakan warisan khas Bali, ternyata saat ini dengan mudah bisa kita temukan banyak penjual resep masakan ayam pedas ini disekitar kita. Tidak hanya di warung-warung, resep enak warisan tradisional ini bahkan disajikan sebagai menu andalan restauran-restuaran besar. Salah satunya yang cukup terkenal ada di Betutu Gilimanuk dan Ayam Betutu Tebet Ibu Putu. Tidak hanya dengan ayam, bumbu ayam betutu ini juga bisa kita kombinasikan dengan resep bebek betutu lho. Tetapi kali ini kita membuat resep ayam betutu saja ya. Soalnya menurut saya pribadi, cara membuat ayam betutu ini lebih praktis dan mudah. Selain itu waktu yang dibutuhkannya juga tidak selama memasak bebek.</p>\r\n<div style=\"float: none; margin: 10px 0px; text-align: justify;\">&nbsp;</div>\r\n<p style=\"text-align: justify;\">Di daerah asalnya, ada dua macam resep masakan ayam betutu yang bisa kita buat. Resep pertama sedikit lebih ribet dikarenakan ayam atau bebek betutunya dibungkus dengan daun pisang bersama dengan resep bumbu betutu nya. Versi resep ayam betutu ini cukup kering dan lebih pedas karena tidak banyak mengandung air. Nah versi kedua adalah resep ayam betutu kuah basah. Dari namanya sudah kelihatan bukan kalau versi ini pas sekali buat teman-teman yang hobi masakan pedas berkuah. Nah yang model ini tidak perlu dibungkus dengan daun pisang. Cukup daging ayam atau bebek nya dimasak dan direbus bersama dengan bumbu khas Balinya. Untuk yang suka, bisa juga dipresto dengan panci tekanan tinggi sehingga daging ayam atau bebek betutu nya nanti benar-benar empuk dan lembut.</p>\r\n<figure id=\"attachment_2191\" class=\"wp-caption alignnone\" style=\"max-width: 632px; text-align: justify;\"><a href=\"http://resepcaramemasak.info/resep-ayam-betutu-asli-bali-pedas-dan-rahasia-cara-membuatnya/resep-ayam-betutu/\" rel=\"attachment wp-att-2191\"><img class=\"size-full wp-image-2191 tie-appear\" src=\"http://resepcaramemasak.info/wp-content/uploads/2016/10/resep-ayam-betutu.jpg\" sizes=\"(max-width: 632px) 100vw, 632px\" srcset=\"http://resepcaramemasak.info/wp-content/uploads/2016/10/resep-ayam-betutu.jpg 632w, http://resepcaramemasak.info/wp-content/uploads/2016/10/resep-ayam-betutu-300x169.jpg 300w\" alt=\"Resep ayam betutu pedas\" width=\"632\" height=\"357\" /></a>\r\n<figcaption class=\"wp-caption-text\">Resep ayam betutu pedas khas Bali</figcaption>\r\n</figure>\r\n<p style=\"text-align: justify;\">Seperti juga resep masakan ayam tradisional dari daerah lainnya, resep khas pulau Dewata ini juga banyak menggunakan buah cabai sebagai ciri khasnya. Sama seperti resep masakan ayam taliwang, aroma rempah-rempah dan rasa pedas mejadi daya tarik utama dari masakan ini. Penggunaan batang serai, kunyit, kemiri, daun jeruk dan yang lainnya. Tentu saja, walaupun kelihatannya bumbu ayam betutu Bali ini sama dengan resep lainnya, tetapi komposisi bahan dan jumlahnya berbeda sehingga citarasa yang dihasilkannya pun khas Bali. Selain itu cara membuat ayam betutu khas Bali juga berbeda dengan ayam taliwang, ayam balado, ayam bumbu rujak dan yang lainnya. Untuk yang sudah tidak sabar, dibawah kita berikan versi resep masakan ayam betutu kukus dengan daun pisang dan dioven yang merupakan versi aslinya.</p>', '2017-12-04 11:29:43', '2017-12-06 02:33:24', 'Publish'),
(2, 'admin', 'JENIS RUJAK KHAS PULAU BALI INI SANGGUP BIKIN ANDA KETAGIHAN', '<p style=\"text-align: justify;\">Pulau Bali sejak dulu terkenal sebagai tempat <a href=\"http://bisfren.com/wisata-pantai-sumur-tiga.html\">objek wisata yang menarik untuk dikunjungi</a>, dimana Bali dikenal akan wisata kulinernya yang beragam. Anda bisa menjumpai menu &ndash; menu sajian masakan yang mampu memberikan warna tersendiri akan makanan khas daerah Bali. Jadi sebelum anda benar &ndash; benar memutuskan untuk berlibur ke pulau Bali, sebaiknya terlebih dahulu anda harus mengenal atau mengetahui salah satu jenis makanan khas daerah ini yang terkenal sangat pedas di lidah. Bali terkenal akan objek pariwisatanya yang indah dan mampu menarik banyak pengunjung baik itu para wisatawan dalam dan luar negeri. Hal ini disebabkan karena rata &ndash; rata tempat wisatanya sangat indah buat dipandang, juga didukung oleh kuliner tradisional yang dijamin mampu menggugah selera makan calon penikmatnya. Sambil menikmati pesona wisata alam yang membius mata anda, wisata kuliner sekalian bisa dicoba buat memanjakan lidah anda dengan ragam masakan yang tersaji dari warung &ndash; warung makan tradisional hingga resto mewah dalam hotel &ndash; hotel besar dibeberapa <a href=\"http://bisfren.com/mengunjungi-pura-pulaki-singaraja-bali.html\">tempat wisata terkenal di Bali</a>.<br /> <br /> Berikut beberapa makanan khas Bali dan bisa juga dinikmati oleh turis Muslim yang kebetulan jalan &ndash; jalan ke Bali buat liburan, seperti apakah masakan kuliner di Bali ini, silahkan membaca ulasannya di bawah ini :</p>\r\n<h3 style=\"text-align: justify;\">Salad Khas Pulau Dewata Bernama Rujak</h3>\r\n<p style=\"text-align: justify;\"><br /> Apabila anda sedang jalan &ndash; jalan ke Kuta, dan anda merasa lelah di siang hari yang cukup panas serta ingin menikmati makanan ringan yang mampu menghilangkan rasa lelah tersebut ? Cobalah mencicipi salad khas orang Bali yang diberi nama rujak, salah satu warung tradisional yang menjajakan sajian ringan khas orang Bali ini yang cukup populer dan banyak memiliki penggemar adalah yang berlokasi di jalan Blambangan, Kuta. Rujak yang disajikan sangat istimewa ditemani oleh makanan khas Bali lainnya seperti ketupat sayur kacang ( dalam bahasa Bali dikenal dengan nama tipat cantok ), sayur bulung segar bumbu pedas ( dari bahan utama berupa rumput laut yang ditaburi kacang kedele goreng dan kelapa parut bakar, dengan kuah cabenya yang berasa segar ), es sirup gula pasir dengan perasan jeruk nipis, kopi pahit dan jajanan basah khas orang Bali. <br /> <br /> Sangat mudah mencapai jalan Blambangan, bisa diakses dari jalan raya pantai Kuta, setelah lewat pasar tradisional Kuta dan bemo corner, anda mesti lewat BCA Kuta yang memiliki gedung besar dan megah, langsung belok kanan menuju ke arah puskesmas Kuta, nah anda akan bertemu dengan jalan Blambangan. Kira - kira 100 m sebelah kiri jalan, anda bisa melihat spanduk ABC Kopi &ndash; Warung Bu Putu. Itulah foto pemilik warung yang telah populer diambil oleh sebuah pabrik kopi di Bali yang sering mensponsori warung - warung tradisional Bali.<br /> <br /> Sajian andalan warung ini adalah rujak Bali atau salad segar khas orang Bali, dimana anda mungkin sudah terbiasa mendengar atau mengenal nama yang satu ini, rujak ! Salad khas Bali ini merupakan makanan yang terbuat dari campuran berbagai macam buah - buahan segar yang diberi racikan saus pedas manis bumbu Bali. Umumnya saus yang dipakai adalah berbahan dasar dari gula aren, kacang tanah, garam, cabai, terasi, penyedap rasa dan terkadang diberi tambahan petis ala orang Jawa tapi ini jarang dijual. Namun di Bali, &nbsp;khususnya daerah Bali bagian selatan ( seperti Denpasar, Badung, Kuta, dan sekitarnya ), rujak kuah pindang merupakan salah satu jenis rujak yang paling populer digemari oleh para pelajar di Bali, selain jenis rujak cuka yang terkenal di Bali utara, berasa segar dan ramai. Peminatnya beragam tapi semua jenis rujak di Bali cenderung disukai oleh kaum hawa saja termasuk turis domestik.</p>\r\n<h3 style=\"text-align: justify;\">Mengenal Dan Mengetahui Tentang Rujak Kuah Pindang</h3>\r\n<div class=\"separator\" style=\"clear: both; text-align: justify;\"><a href=\"https://4.bp.blogspot.com/-RfV0yGVYHhk/WDlgc7pjtXI/AAAAAAAADxw/Hpy4CwsIWaI7IuwRMKen4QiJ3E3sGp5oACLcB/s1600/rujak-kuah-pindang-bali.jpg\"><img title=\"\" src=\"https://4.bp.blogspot.com/-RfV0yGVYHhk/WDlgc7pjtXI/AAAAAAAADxw/Hpy4CwsIWaI7IuwRMKen4QiJ3E3sGp5oACLcB/s320/rujak-kuah-pindang-bali.jpg\" alt=\"Rujak kuah pindang\" width=\"320\" height=\"242\" border=\"0\" /></a></div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<p style=\"text-align: justify;\"><br /> Bagi pedagang rujak di Bali pada warung &ndash; warung tradisional, rujak kuah pindang adalah menu yang mempunyai peringkat teratas memiliki banyak penggemar jika dibandingkan dengan menu camilan lainnya dari Bali. Jika anda pertama kali ingin berwisata ke Bali, maka sempatkanlah mencicipi salah satu makanan khas daerah pulau Dewata tersebut. Karena di daerah lain, rujak kuah pindang jarang dan sangat sulit untuk ditemukan. Rujak kuah pindang sama seperti rujak &ndash; rujak lainnya yaitu diisi dengan buah - buahan seperti mangga mengkal, jambu, nanas, ketimun, dan kadang &ndash; kadang &nbsp;diisi &nbsp;irisan &nbsp;sayur &nbsp;wortel. &nbsp;Kemudian &nbsp;disiram &nbsp;dengan &nbsp;kuah &nbsp;pindang (merupakan kuah kaldu dari ikan laut ) yang membuat rujak ini berasa sangat lezat.<br /> <br /> Sesuai namanya, rujak kuah pindang memang menggunakan saus yang berasal dari kaldu ikan pindang. Ikan yang dipindang beragam, mulai dari jenis tuna hingga lemuru (sarden). Uniknya, ikan lemuru atau yang lebih dikenal dengan ikan sarden (dan lebih dikenal lagi di Bali dengan sebutan ikan \"kucing\") akan memberikan aroma dan rasa kaldu pindang yang cenderung lebih kuat, akan tetapi cenderung lebih keruh. Buah-buahan yang digunakan dalam rujak kuah pindang tidak berbeda jauh dengan rujak kebanyakan, seperti mangga, jambu, mentimun, bengkoang, kedondong, belimbing, pepaya mengkal (agak masak tapi dagingnya masih cukup keras), dsb. Berikut saya akan paparkan resep rujak kuah pindang yang secara turun-menurun saya warisi sebagai orang Bali selatan yang cenderung dekat dengan budaya pantainya ini :<br /> <br /> <u>Bahan - bahan membuat rujak kuah pindang :</u></p>\r\n<ul style=\"text-align: justify;\">\r\n<li>300 - 500 gram ikan \"kucing\" segar</li>\r\n<li>Garam dan penyedap rasa secukupnya</li>\r\n<li>Daun salam secukupnya</li>\r\n<li>3 batang serai</li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><br /> <br /> <u>Cara membuat kaldu / kuah pindang :</u></p>\r\n<ul style=\"text-align: justify;\">\r\n<li>Bersihkan ikan, buang jeroannya, lalu lumuri dengan garam secukupnya.</li>\r\n<li>Panaskan air, lalu masukkan ikan, daun salam, garam / penyedap rasa dan serai.</li>\r\n<li>Rebus sekitar 15 - 30 menit hingga ikan matang dan kuah kaldu cukup keruh. Cicipi untuk merasakan tingkat keasinan. Silahkan tambahkan garam jika anda merasa kurang asin.</li>\r\n<li>Angkat, diamkan sejenak, lalu saring air kaldu ikan tersebut dan simpan dalam wadah bersih yang tertutup rapat.</li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><br /> <br /> <u>Membuat rujak kuah pindang :</u></p>\r\n<ul style=\"text-align: justify;\">\r\n<li>Bersihkan buah - buahan yang anda suka, potong cantik dengan pisau rujak atau anda iris tipis - tipis.</li>\r\n<li>Panggang terasi secukupnya sebentar, lalu ulek dalam ulekan kayu atau cobek batu khas Bali yang sudah dibersihkan.</li>\r\n<li>Tambahkan gula ( pasir atau gula aren ), cabai dan petis secukupnya ke dalam cobek lalu ulek kembali.</li>\r\n<li>Tambahkan / siram dengan kuah pindang ke dalam cobek, dan anda aduk rata.</li>\r\n<li>Masukkan buah - buahan yang sudah dipotong atau diris tipis tadi, lalu aduk rata kembali.</li>\r\n<li>Rujak kuah pindang sudah siap diangkat dan dihidangkan.</li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><br /> <br /> Variasi dari rujak kuah pindang tersebut di atas adalah rujak kuah pindang yang menurut turis asing diberi nama \" plain, sour, and salty \", yakni saos rujak tidak menggunakan gula aren tapi hanya sedikit gula pasir saja, terasi, serta hanya menggunakan buah - buahan asam saja seperti buah mangga muda. Selamat mencoba !</p>', '2017-12-04 13:23:06', '2017-12-06 02:33:34', 'Publish'),
(3, 'admin', 'Rujak', '<p style=\"text-align: justify;\">Pulau Bali sejak dulu terkenal sebagai tempat <a href=\"http://bisfren.com/wisata-pantai-sumur-tiga.html\">objek wisata yang menarik untuk dikunjungi</a>, dimana Bali dikenal akan wisata kulinernya yang beragam. Anda bisa menjumpai menu &ndash; menu sajian masakan yang mampu memberikan warna tersendiri akan makanan khas daerah Bali. Jadi sebelum anda benar &ndash; benar memutuskan untuk berlibur ke pulau Bali, sebaiknya terlebih dahulu anda harus mengenal atau mengetahui salah satu jenis makanan khas daerah ini yang terkenal sangat pedas di lidah. Bali terkenal akan objek pariwisatanya yang indah dan mampu menarik banyak pengunjung baik itu para wisatawan dalam dan luar negeri. Hal ini disebabkan karena rata &ndash; rata tempat wisatanya sangat indah buat dipandang, juga didukung oleh kuliner tradisional yang dijamin mampu menggugah selera makan calon penikmatnya. Sambil menikmati pesona wisata alam yang membius mata anda, wisata kuliner sekalian bisa dicoba buat memanjakan lidah anda dengan ragam masakan yang tersaji dari warung &ndash; warung makan tradisional hingga resto mewah dalam hotel &ndash; hotel besar dibeberapa <a href=\"http://bisfren.com/mengunjungi-pura-pulaki-singaraja-bali.html\">tempat wisata terkenal di Bali</a>.<br /> <br /> Berikut beberapa makanan khas Bali dan bisa juga dinikmati oleh turis Muslim yang kebetulan jalan &ndash; jalan ke Bali buat liburan, seperti apakah masakan kuliner di Bali ini, silahkan membaca ulasannya di bawah ini :</p>\r\n<h3 style=\"text-align: justify;\">Salad Khas Pulau Dewata Bernama Rujak</h3>\r\n<p style=\"text-align: justify;\"><br /> Apabila anda sedang jalan &ndash; jalan ke Kuta, dan anda merasa lelah di siang hari yang cukup panas serta ingin menikmati makanan ringan yang mampu menghilangkan rasa lelah tersebut ? Cobalah mencicipi salad khas orang Bali yang diberi nama rujak, salah satu warung tradisional yang menjajakan sajian ringan khas orang Bali ini yang cukup populer dan banyak memiliki penggemar adalah yang berlokasi di jalan Blambangan, Kuta. Rujak yang disajikan sangat istimewa ditemani oleh makanan khas Bali lainnya seperti ketupat sayur kacang ( dalam bahasa Bali dikenal dengan nama tipat cantok ), sayur bulung segar bumbu pedas ( dari bahan utama berupa rumput laut yang ditaburi kacang kedele goreng dan kelapa parut bakar, dengan kuah cabenya yang berasa segar ), es sirup gula pasir dengan perasan jeruk nipis, kopi pahit dan jajanan basah khas orang Bali. <br /> <br /> Sangat mudah mencapai jalan Blambangan, bisa diakses dari jalan raya pantai Kuta, setelah lewat pasar tradisional Kuta dan bemo corner, anda mesti lewat BCA Kuta yang memiliki gedung besar dan megah, langsung belok kanan menuju ke arah puskesmas Kuta, nah anda akan bertemu dengan jalan Blambangan. Kira - kira 100 m sebelah kiri jalan, anda bisa melihat spanduk ABC Kopi &ndash; Warung Bu Putu. Itulah foto pemilik warung yang telah populer diambil oleh sebuah pabrik kopi di Bali yang sering mensponsori warung - warung tradisional Bali.<br /> <br /> Sajian andalan warung ini adalah rujak Bali atau salad segar khas orang Bali, dimana anda mungkin sudah terbiasa mendengar atau mengenal nama yang satu ini, rujak ! Salad khas Bali ini merupakan makanan yang terbuat dari campuran berbagai macam buah - buahan segar yang diberi racikan saus pedas manis bumbu Bali. Umumnya saus yang dipakai adalah berbahan dasar dari gula aren, kacang tanah, garam, cabai, terasi, penyedap rasa dan terkadang diberi tambahan petis ala orang Jawa tapi ini jarang dijual. Namun di Bali, &nbsp;khususnya daerah Bali bagian selatan ( seperti Denpasar, Badung, Kuta, dan sekitarnya ), rujak kuah pindang merupakan salah satu jenis rujak yang paling populer digemari oleh para pelajar di Bali, selain jenis rujak cuka yang terkenal di Bali utara, berasa segar dan ramai. Peminatnya beragam tapi semua jenis rujak di Bali cenderung disukai oleh kaum hawa saja termasuk turis domestik.</p>\r\n<h3 style=\"text-align: justify;\">Mengenal Dan Mengetahui Tentang Rujak Kuah Pindang</h3>\r\n<div class=\"separator\" style=\"clear: both; text-align: justify;\"><a href=\"https://4.bp.blogspot.com/-RfV0yGVYHhk/WDlgc7pjtXI/AAAAAAAADxw/Hpy4CwsIWaI7IuwRMKen4QiJ3E3sGp5oACLcB/s1600/rujak-kuah-pindang-bali.jpg\"><img title=\"\" src=\"https://4.bp.blogspot.com/-RfV0yGVYHhk/WDlgc7pjtXI/AAAAAAAADxw/Hpy4CwsIWaI7IuwRMKen4QiJ3E3sGp5oACLcB/s320/rujak-kuah-pindang-bali.jpg\" alt=\"Rujak kuah pindang\" width=\"320\" height=\"242\" border=\"0\" /></a></div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<p style=\"text-align: justify;\"><br /> Bagi pedagang rujak di Bali pada warung &ndash; warung tradisional, rujak kuah pindang adalah menu yang mempunyai peringkat teratas memiliki banyak penggemar jika dibandingkan dengan menu camilan lainnya dari Bali. Jika anda pertama kali ingin berwisata ke Bali, maka sempatkanlah mencicipi salah satu makanan khas daerah pulau Dewata tersebut. Karena di daerah lain, rujak kuah pindang jarang dan sangat sulit untuk ditemukan. Rujak kuah pindang sama seperti rujak &ndash; rujak lainnya yaitu diisi dengan buah - buahan seperti mangga mengkal, jambu, nanas, ketimun, dan kadang &ndash; kadang &nbsp;diisi &nbsp;irisan &nbsp;sayur &nbsp;wortel. &nbsp;Kemudian &nbsp;disiram &nbsp;dengan &nbsp;kuah &nbsp;pindang (merupakan kuah kaldu dari ikan laut ) yang membuat rujak ini berasa sangat lezat.<br /> <br /> Sesuai namanya, rujak kuah pindang memang menggunakan saus yang berasal dari kaldu ikan pindang. Ikan yang dipindang beragam, mulai dari jenis tuna hingga lemuru (sarden). Uniknya, ikan lemuru atau yang lebih dikenal dengan ikan sarden (dan lebih dikenal lagi di Bali dengan sebutan ikan \"kucing\") akan memberikan aroma dan rasa kaldu pindang yang cenderung lebih kuat, akan tetapi cenderung lebih keruh. Buah-buahan yang digunakan dalam rujak kuah pindang tidak berbeda jauh dengan rujak kebanyakan, seperti mangga, jambu, mentimun, bengkoang, kedondong, belimbing, pepaya mengkal (agak masak tapi dagingnya masih cukup keras), dsb. Berikut saya akan paparkan resep rujak kuah pindang yang secara turun-menurun saya warisi sebagai orang Bali selatan yang cenderung dekat dengan budaya pantainya ini :<br /> <br /> <u>Bahan - bahan membuat rujak kuah pindang :</u></p>\r\n<ul style=\"text-align: justify;\">\r\n<li>300 - 500 gram ikan \"kucing\" segar</li>\r\n<li>Garam dan penyedap rasa secukupnya</li>\r\n<li>Daun salam secukupnya</li>\r\n<li>3 batang serai</li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><br /> <br /> <u>Cara membuat kaldu / kuah pindang :</u></p>\r\n<ul style=\"text-align: justify;\">\r\n<li>Bersihkan ikan, buang jeroannya, lalu lumuri dengan garam secukupnya.</li>\r\n<li>Panaskan air, lalu masukkan ikan, daun salam, garam / penyedap rasa dan serai.</li>\r\n<li>Rebus sekitar 15 - 30 menit hingga ikan matang dan kuah kaldu cukup keruh. Cicipi untuk merasakan tingkat keasinan. Silahkan tambahkan garam jika anda merasa kurang asin.</li>\r\n<li>Angkat, diamkan sejenak, lalu saring air kaldu ikan tersebut dan simpan dalam wadah bersih yang tertutup rapat.</li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><br /> <br /> <u>Membuat rujak kuah pindang :</u></p>\r\n<ul style=\"text-align: justify;\">\r\n<li>Bersihkan buah - buahan yang anda suka, potong cantik dengan pisau rujak atau anda iris tipis - tipis.</li>\r\n<li>Panggang terasi secukupnya sebentar, lalu ulek dalam ulekan kayu atau cobek batu khas Bali yang sudah dibersihkan.</li>\r\n<li>Tambahkan gula ( pasir atau gula aren ), cabai dan petis secukupnya ke dalam cobek lalu ulek kembali.</li>\r\n<li>Tambahkan / siram dengan kuah pindang ke dalam cobek, dan anda aduk rata.</li>\r\n<li>Masukkan buah - buahan yang sudah dipotong atau diris tipis tadi, lalu aduk rata kembali.</li>\r\n<li>Rujak kuah pindang sudah siap diangkat dan dihidangkan.</li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><br /> <br /> Variasi dari rujak kuah pindang tersebut di atas adalah rujak kuah pindang yang menurut turis asing diberi nama \" plain, sour, and salty \", yakni saos rujak tidak menggunakan gula aren tapi hanya sedikit gula pasir saja, terasi, serta hanya menggunakan buah - buahan asam saja seperti buah mangga muda. Selamat mencoba !</p>', '2017-12-05 20:39:40', '2017-12-06 02:33:45', 'Publish'),
(4, 'admin', 'Rujak Bali', '<p style=\"text-align: justify;\">Pulau Bali sejak dulu terkenal sebagai tempat <a href=\"http://bisfren.com/wisata-pantai-sumur-tiga.html\">objek wisata yang menarik untuk dikunjungi</a>, dimana Bali dikenal akan wisata kulinernya yang beragam. Anda bisa menjumpai menu &ndash; menu sajian masakan yang mampu memberikan warna tersendiri akan makanan khas daerah Bali. Jadi sebelum anda benar &ndash; benar memutuskan untuk berlibur ke pulau Bali, sebaiknya terlebih dahulu anda harus mengenal atau mengetahui salah satu jenis makanan khas daerah ini yang terkenal sangat pedas di lidah. Bali terkenal akan objek pariwisatanya yang indah dan mampu menarik banyak pengunjung baik itu para wisatawan dalam dan luar negeri. Hal ini disebabkan karena rata &ndash; rata tempat wisatanya sangat indah buat dipandang, juga didukung oleh kuliner tradisional yang dijamin mampu menggugah selera makan calon penikmatnya. Sambil menikmati pesona wisata alam yang membius mata anda, wisata kuliner sekalian bisa dicoba buat memanjakan lidah anda dengan ragam masakan yang tersaji dari warung &ndash; warung makan tradisional hingga resto mewah dalam hotel &ndash; hotel besar dibeberapa <a href=\"http://bisfren.com/mengunjungi-pura-pulaki-singaraja-bali.html\">tempat wisata terkenal di Bali</a>.<br /> <br /> Berikut beberapa makanan khas Bali dan bisa juga dinikmati oleh turis Muslim yang kebetulan jalan &ndash; jalan ke Bali buat liburan, seperti apakah masakan kuliner di Bali ini, silahkan membaca ulasannya di bawah ini :</p>\r\n<h3 style=\"text-align: justify;\">Salad Khas Pulau Dewata Bernama Rujak</h3>\r\n<p style=\"text-align: justify;\"><br /> Apabila anda sedang jalan &ndash; jalan ke Kuta, dan anda merasa lelah di siang hari yang cukup panas serta ingin menikmati makanan ringan yang mampu menghilangkan rasa lelah tersebut ? Cobalah mencicipi salad khas orang Bali yang diberi nama rujak, salah satu warung tradisional yang menjajakan sajian ringan khas orang Bali ini yang cukup populer dan banyak memiliki penggemar adalah yang berlokasi di jalan Blambangan, Kuta. Rujak yang disajikan sangat istimewa ditemani oleh makanan khas Bali lainnya seperti ketupat sayur kacang ( dalam bahasa Bali dikenal dengan nama tipat cantok ), sayur bulung segar bumbu pedas ( dari bahan utama berupa rumput laut yang ditaburi kacang kedele goreng dan kelapa parut bakar, dengan kuah cabenya yang berasa segar ), es sirup gula pasir dengan perasan jeruk nipis, kopi pahit dan jajanan basah khas orang Bali. <br /> <br /> Sangat mudah mencapai jalan Blambangan, bisa diakses dari jalan raya pantai Kuta, setelah lewat pasar tradisional Kuta dan bemo corner, anda mesti lewat BCA Kuta yang memiliki gedung besar dan megah, langsung belok kanan menuju ke arah puskesmas Kuta, nah anda akan bertemu dengan jalan Blambangan. Kira - kira 100 m sebelah kiri jalan, anda bisa melihat spanduk ABC Kopi &ndash; Warung Bu Putu. Itulah foto pemilik warung yang telah populer diambil oleh sebuah pabrik kopi di Bali yang sering mensponsori warung - warung tradisional Bali.<br /> <br /> Sajian andalan warung ini adalah rujak Bali atau salad segar khas orang Bali, dimana anda mungkin sudah terbiasa mendengar atau mengenal nama yang satu ini, rujak ! Salad khas Bali ini merupakan makanan yang terbuat dari campuran berbagai macam buah - buahan segar yang diberi racikan saus pedas manis bumbu Bali. Umumnya saus yang dipakai adalah berbahan dasar dari gula aren, kacang tanah, garam, cabai, terasi, penyedap rasa dan terkadang diberi tambahan petis ala orang Jawa tapi ini jarang dijual. Namun di Bali, &nbsp;khususnya daerah Bali bagian selatan ( seperti Denpasar, Badung, Kuta, dan sekitarnya ), rujak kuah pindang merupakan salah satu jenis rujak yang paling populer digemari oleh para pelajar di Bali, selain jenis rujak cuka yang terkenal di Bali utara, berasa segar dan ramai. Peminatnya beragam tapi semua jenis rujak di Bali cenderung disukai oleh kaum hawa saja termasuk turis domestik.</p>\r\n<h3 style=\"text-align: justify;\">Mengenal Dan Mengetahui Tentang Rujak Kuah Pindang</h3>\r\n<div class=\"separator\" style=\"clear: both; text-align: justify;\"><a href=\"https://4.bp.blogspot.com/-RfV0yGVYHhk/WDlgc7pjtXI/AAAAAAAADxw/Hpy4CwsIWaI7IuwRMKen4QiJ3E3sGp5oACLcB/s1600/rujak-kuah-pindang-bali.jpg\"><img title=\"\" src=\"https://4.bp.blogspot.com/-RfV0yGVYHhk/WDlgc7pjtXI/AAAAAAAADxw/Hpy4CwsIWaI7IuwRMKen4QiJ3E3sGp5oACLcB/s320/rujak-kuah-pindang-bali.jpg\" alt=\"Rujak kuah pindang\" width=\"320\" height=\"242\" border=\"0\" /></a></div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<p style=\"text-align: justify;\"><br /> Bagi pedagang rujak di Bali pada warung &ndash; warung tradisional, rujak kuah pindang adalah menu yang mempunyai peringkat teratas memiliki banyak penggemar jika dibandingkan dengan menu camilan lainnya dari Bali. Jika anda pertama kali ingin berwisata ke Bali, maka sempatkanlah mencicipi salah satu makanan khas daerah pulau Dewata tersebut. Karena di daerah lain, rujak kuah pindang jarang dan sangat sulit untuk ditemukan. Rujak kuah pindang sama seperti rujak &ndash; rujak lainnya yaitu diisi dengan buah - buahan seperti mangga mengkal, jambu, nanas, ketimun, dan kadang &ndash; kadang &nbsp;diisi &nbsp;irisan &nbsp;sayur &nbsp;wortel. &nbsp;Kemudian &nbsp;disiram &nbsp;dengan &nbsp;kuah &nbsp;pindang (merupakan kuah kaldu dari ikan laut ) yang membuat rujak ini berasa sangat lezat.<br /> <br /> Sesuai namanya, rujak kuah pindang memang menggunakan saus yang berasal dari kaldu ikan pindang. Ikan yang dipindang beragam, mulai dari jenis tuna hingga lemuru (sarden). Uniknya, ikan lemuru atau yang lebih dikenal dengan ikan sarden (dan lebih dikenal lagi di Bali dengan sebutan ikan \"kucing\") akan memberikan aroma dan rasa kaldu pindang yang cenderung lebih kuat, akan tetapi cenderung lebih keruh. Buah-buahan yang digunakan dalam rujak kuah pindang tidak berbeda jauh dengan rujak kebanyakan, seperti mangga, jambu, mentimun, bengkoang, kedondong, belimbing, pepaya mengkal (agak masak tapi dagingnya masih cukup keras), dsb. Berikut saya akan paparkan resep rujak kuah pindang yang secara turun-menurun saya warisi sebagai orang Bali selatan yang cenderung dekat dengan budaya pantainya ini :<br /> <br /> <u>Bahan - bahan membuat rujak kuah pindang :</u></p>\r\n<ul style=\"text-align: justify;\">\r\n<li>300 - 500 gram ikan \"kucing\" segar</li>\r\n<li>Garam dan penyedap rasa secukupnya</li>\r\n<li>Daun salam secukupnya</li>\r\n<li>3 batang serai</li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><br /> <br /> <u>Cara membuat kaldu / kuah pindang :</u></p>\r\n<ul style=\"text-align: justify;\">\r\n<li>Bersihkan ikan, buang jeroannya, lalu lumuri dengan garam secukupnya.</li>\r\n<li>Panaskan air, lalu masukkan ikan, daun salam, garam / penyedap rasa dan serai.</li>\r\n<li>Rebus sekitar 15 - 30 menit hingga ikan matang dan kuah kaldu cukup keruh. Cicipi untuk merasakan tingkat keasinan. Silahkan tambahkan garam jika anda merasa kurang asin.</li>\r\n<li>Angkat, diamkan sejenak, lalu saring air kaldu ikan tersebut dan simpan dalam wadah bersih yang tertutup rapat.</li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><br /> <br /> <u>Membuat rujak kuah pindang :</u></p>\r\n<ul style=\"text-align: justify;\">\r\n<li>Bersihkan buah - buahan yang anda suka, potong cantik dengan pisau rujak atau anda iris tipis - tipis.</li>\r\n<li>Panggang terasi secukupnya sebentar, lalu ulek dalam ulekan kayu atau cobek batu khas Bali yang sudah dibersihkan.</li>\r\n<li>Tambahkan gula ( pasir atau gula aren ), cabai dan petis secukupnya ke dalam cobek lalu ulek kembali.</li>\r\n<li>Tambahkan / siram dengan kuah pindang ke dalam cobek, dan anda aduk rata.</li>\r\n<li>Masukkan buah - buahan yang sudah dipotong atau diris tipis tadi, lalu aduk rata kembali.</li>\r\n<li>Rujak kuah pindang sudah siap diangkat dan dihidangkan.</li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><br /> <br /> Variasi dari rujak kuah pindang tersebut di atas adalah rujak kuah pindang yang menurut turis asing diberi nama \" plain, sour, and salty \", yakni saos rujak tidak menggunakan gula aren tapi hanya sedikit gula pasir saja, terasi, serta hanya menggunakan buah - buahan asam saja seperti buah mangga muda. Selamat mencoba !</p>', '2017-12-05 20:40:00', '2017-12-06 02:33:56', 'Publish'),
(5, 'admin', '5 Nasi Jinggo yang Enak dan Halal di Bali', '<p style=\"text-align: justify;\">Rasanya memang ada yang kurang kalau berkunjung ke suatu daerah, tapi belum mencoba kulinernya yang paling khas. Kalau Yogyakarta, pastikan untuk mencicipi nasi kucing, kudapan sederhana favorit para backpaker mania. Bali ternyata juga tak mau kalah, ada nasi jinggo yang siap memanjakan lidahmu tanpa harus bikin bangkrut. Ini dia penjual Nasi Jinggo enak dan halal di Pulau Dewata. tesss</p>', '2017-12-09 11:19:33', '2017-12-09 11:24:45', 'Publish');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id_page` int(11) UNSIGNED NOT NULL,
  `title` varchar(25) NOT NULL,
  `content` text NOT NULL,
  `last_update` datetime NOT NULL,
  `link` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id_page`, `title`, `content`, `last_update`, `link`) VALUES
(1, 'Alamat Perusahaan', '<p>Alamat :Jalan Sudirman no. xx</p>\r\n<p>Telp : 08123456789</p>\r\n<p>Jam buka :</p>\r\n<p style=\"padding-left: 30px;\">09.00 - 23.00 Wita</p>', '2019-08-03 12:01:05', 'Contact'),
(2, 'Tentang Perusahaan kami', '<p>selamat datang di website lezzatoo restaurant. ini adalah website dinamis pertama kami.</p>', '2017-12-03 22:56:07', 'About'),
(3, 'Lezzatoo Restaurant', '<p><img src=\"/lezzatoo/vendor/source/sate-lilit.jpg\" alt=\"\" width=\"100%\" height=\"720\" /></p>', '2017-12-06 00:26:28', 'Home'),
(4, 'Khas Bali', '<p><img src=\"/lezzatoo/vendor/source/Makanan-khas-Bali-1.jpg\" alt=\"\" width=\"1443\" height=\"850\" /></p>', '2017-12-06 00:33:05', 'Home');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `name` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `type` enum('Administrator','Operator') NOT NULL,
  `status_user` enum('Aktif','Non-Aktif') NOT NULL DEFAULT 'Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `name`, `password`, `type`, `status_user`) VALUES
('admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Aktif'),
('user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Operator', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `fk_id_comment` (`id_news`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id_food`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id_page`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id_food` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id_page` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_id_comment` FOREIGN KEY (`id_news`) REFERENCES `news` (`id_news`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_id_news` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
