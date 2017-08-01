/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50714
 Source Host           : localhost:3306
 Source Schema         : proje

 Target Server Type    : MySQL
 Target Server Version : 50714
 File Encoding         : 65001

 Date: 01/08/2017 11:28:35
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for header_yazi
-- ----------------------------
DROP TABLE IF EXISTS `header_yazi`;
CREATE TABLE `header_yazi`  (
  `Baslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `Slogan` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of header_yazi
-- ----------------------------
INSERT INTO `header_yazi` VALUES ('ATAUNİ STAJ BLOGUM', 'HTML , CSS , JAVASCRIPT , PHP');

-- ----------------------------
-- Table structure for kategoriler
-- ----------------------------
DROP TABLE IF EXISTS `kategoriler`;
CREATE TABLE `kategoriler`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Kategori_Adi` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kategoriler
-- ----------------------------
INSERT INTO `kategoriler` VALUES (1, 'PHP');
INSERT INTO `kategoriler` VALUES (2, 'HTML');
INSERT INTO `kategoriler` VALUES (3, 'CSS');
INSERT INTO `kategoriler` VALUES (4, 'JAVA Script');

-- ----------------------------
-- Table structure for kullanicilar
-- ----------------------------
DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE `kullanicilar`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Kullanici_Adi` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `Sifre` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `AdiSoyadi` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `tipi` tinyint(255) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kullanicilar
-- ----------------------------
INSERT INTO `kullanicilar` VALUES (1, 'ibrahimkurt', '123', 'ibrahim kurt', 'ibrahim@gmail.com', 1);
INSERT INTO `kullanicilar` VALUES (2, 'cagrisev', '321', 'cagri sevimli', 'cagri@gmail.com', 0);
INSERT INTO `kullanicilar` VALUES (4, 'veladcan', '123', 'velad can', 'veladdogru@gmail.com', 0);
INSERT INTO `kullanicilar` VALUES (5, 'isocan', '123', 'ismail kara', 'ismail@gmail.com', 0);
INSERT INTO `kullanicilar` VALUES (7, 'binali', '123', 'Binali Kurt', 'binali@gmail.com', 0);
INSERT INTO `kullanicilar` VALUES (8, 'artvinli08', '234', 'Mustafa Bıkmaz', 'musto@gmail.com', 0);
INSERT INTO `kullanicilar` VALUES (10, 'aycan', '112233', 'Aycan Bülbül', 'a@a.com', 0);

-- ----------------------------
-- Table structure for main
-- ----------------------------
DROP TABLE IF EXISTS `main`;
CREATE TABLE `main`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yazi_baslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yazar` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yazi_tarih` timestamp(0) DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  `yazi_kategori` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yazi_icerigi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `gosterim` tinyint(255) DEFAULT 1,
  `kategori_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 42 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of main
-- ----------------------------
INSERT INTO `main` VALUES (3, 'CSS desing', 'cagri sevimli ', '2017-07-31 11:49:34', 'CSS', '<p><strong>CSS ile d&uuml;zenleyebildiğimiz bazı g&ouml;r&uuml;n&uuml;m d&uuml;zenlemelerini CSS kullanmadan yalnızca HTML kullanarak da sağlayabiliriz. &Ouml;rneğin, yazı font b&uuml;y&uuml;kl&uuml;ğ&uuml;n&uuml; değiştirme, yazı rengini değiştirme, resim boyutunu d&uuml;zenleyebilme gibi&hellip; Ancak yapılmak istenen işler karmaşıklaştık&ccedil;a (buton g&ouml;lgelendirme, resim saydamlığını d&uuml;zenleme, link &uuml;zerine geldiğimizde rengin değişmesi vb.) CSS kullanmaya y&ouml;neliyoruz.</strong></p>\r\n', 1, 3);
INSERT INTO `main` VALUES (27, 'Php Veritabanı bağlantısı ve cesitleri ', 'ibrahim kurt', '2017-07-29 20:42:56', 'PHP', 'MYSQL bir çok programlama dilinde kullanılan ve en popüler veritabanı yazılımıdır. Uygulamalarımızda bize gönderilen verileri kalıcı bir şekilde saklayıp istediğimiz zaman istediğim şekilde tekrar geri okuyup düzenlememizi sağlar.\r\n\r\nMYSQL aslında kendi başına bir veritabanı programlama diline sahip. Ben şuan bu konuda sadece biraz giriş yapacağım ve ilerleyen konularda MYSQL ve PHP ile ilişkisini iyice dallandıracağız.', 1, 1);
INSERT INTO `main` VALUES (28, 'Php hayatımızdaki Yeri ', 'ibrahim kurt', '2017-07-29 19:14:17', 'PHP', 'PHP\'nin yetenekleri yalnızca HTML çıktı üretmekle sınırlı değildir. PHP\'nin yetenekleri arasında resim çıktısı üretebilme, PDF oluşturabilme ve hatta Flash filmleri oluşturabilme (libswf ve Ming kullanarak) bulunmaktadır. Aynı şekilde XHTML ya da XML gibi her tür metin tabanlı dosyayı oluşturabilmeniz mümkündür. PHP bu dosyaları özdevinimli olarak oluşturabilir ve ekrana yazdırmanın yanında sizin için dosya sisteminde saklayabilir, böylece devingen içeriğiniz için sunucu-taraflı bir depo sistemini kullanımınıza sunabilir.', 1, 1);
INSERT INTO `main` VALUES (29, 'Html önemi', 'ibrahim kurt', '2017-07-29 19:14:59', 'HTML', 'HTML (Hyper Text Markup Language) internet üzerinde web sayfası oluşturmak için kullanılan bir betik dilidir. HTML dosyalarının aktarımı için HTTP (Hyper Text Transfer Protocol) kullanılır. HTML dosyaları sunucu bilgisayarın sabit diskinde .html ya da .htm uzantısı ile saklanır. Yazdığımız html dosyaları düz yazı dosyalarından başka bir şey değildir. Yani yazdığımız html dosyalarını bir C ya da Pascal programında olduğu gibi bir derleyici ile derlememize gerek yoktur.', 1, 2);
INSERT INTO `main` VALUES (7, 'HTML5  ', 'ibrahim kurt', '2017-07-30 02:29:23', 'HTML', 'HTML5 sayfalarının dinamik yani gelen taleplere anında cevap verebilmesi ve etkileşimli (interactive) olabilmesi için bir betik diline ihtiyacı vardır. Bu dil, günümüz uygulamalarına baktığımızda en yaygın dil olan JavaScript dilidir. JavaScript, HTML5 içine gömüldükten (embedded) sonra çalışır.', 1, 2);
INSERT INTO `main` VALUES (24, 'PHP\'ye dair Herşey', 'Binali Kurt', '2017-06-01 13:10:33', 'JAVA Script', 'PHP, HTML içine gömülebilen bir betik dilidir. Sözdiziminin çoğunu C, Java ve Perl\'den almış ve bunun üzerine PHP\'ye özgü bir sürü eşsiz özellik eklenmiştir. Dilin amacı site geliştirenlere devingen olarak hızla üretilen sayfalar yazabilme imkanı vermektir.', 1, 4);

-- ----------------------------
-- Table structure for menuler
-- ----------------------------
DROP TABLE IF EXISTS `menuler`;
CREATE TABLE `menuler`  (
  `Menu1` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `Menu3` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `Menu4` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `Menu5` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menuler
-- ----------------------------
INSERT INTO `menuler` VALUES ('Anasayfa', 'Arsivler', 'Blog', 'Iletisim');

-- ----------------------------
-- Table structure for sosyalmedya
-- ----------------------------
DROP TABLE IF EXISTS `sosyalmedya`;
CREATE TABLE `sosyalmedya`  (
  `facebook` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `googleplus` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `github` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sosyalmedya
-- ----------------------------
INSERT INTO `sosyalmedya` VALUES ('ibrahim.kurt.007', 'ibrahimkrtt', '116735792387119179405', 'ibrhmkrt', 'ibrhmkrttt');

-- ----------------------------
-- Table structure for yorumlar
-- ----------------------------
DROP TABLE IF EXISTS `yorumlar`;
CREATE TABLE `yorumlar`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yapilan_yorum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `yorum_tarihi` timestamp(0) DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  `kullanici_id` int(11) DEFAULT NULL,
  `icerik_id` int(11) DEFAULT NULL,
  `yayinla` tinyint(255) DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 33 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of yorumlar
-- ----------------------------
INSERT INTO `yorumlar` VALUES (1, 'deneme', '2017-07-29 19:22:45', 4, 7, 1);
INSERT INTO `yorumlar` VALUES (9, 'Teşekkürler Çağrı çok güzel açıklamışsın', '2017-07-29 19:49:58', 8, 3, 1);
INSERT INTO `yorumlar` VALUES (15, 'Harika bir yazı', '2017-07-29 19:22:50', 7, 24, 1);
INSERT INTO `yorumlar` VALUES (19, 'çok doğru', '2017-07-29 19:53:19', 10, 28, 1);
INSERT INTO `yorumlar` VALUES (18, 'muhteşemsin', '2017-07-29 19:46:50', 10, 29, 1);
INSERT INTO `yorumlar` VALUES (17, 'Tebrikler çok değerli öğrencim', '2017-07-29 19:53:53', 5, 27, 1);
INSERT INTO `yorumlar` VALUES (21, 'teşekkürler', '2017-07-29 19:54:46', 1, 27, 1);
INSERT INTO `yorumlar` VALUES (23, 'harika', '2017-07-30 02:15:19', 10, 3, 1);

SET FOREIGN_KEY_CHECKS = 1;
