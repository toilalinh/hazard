-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2016 at 11:42 AM
-- Server version: 5.5.50-cll
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nghac58c_hazard`
--

-- --------------------------------------------------------

--
-- Table structure for table `casestudy`
--

CREATE TABLE IF NOT EXISTS `casestudy` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video_url` text COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `date_change` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `casestudy`
--

INSERT INTO `casestudy` (`id`, `title`, `video_url`, `summary`, `content`, `date_change`) VALUES
(5, 'This is case study title 1', 'https://www.youtube.com/watch?v=6PJXqSGLVv8', 'Vá»¥ viá»‡c hy há»¯u xáº£y ra vÃ o khoáº£ng 12h15 ngÃ y 5/9, trÃªn quá»‘c lá»™ 5 Ä‘oáº¡n qua cáº§u vÆ°á»£t Báº¡ch Sam                                        ', '<p style="text-rendering: geometricPrecision; margin-top: 18px; margin-bottom: 18px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; color: rgb(34, 34, 34); font-family: &quot;Noto Serif&quot;, serif; line-height: 26px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Äáº¿n gáº§n cáº§u vÆ°á»£t, ngÆ°á»i nÃ y Ä‘á»™t ngá»™t chuyá»ƒn lÃ n sang trÃ¡i Ä‘á»ƒ qua Ä‘Æ°á»ng khiáº¿n xe Ä‘áº§u kÃ©o phÃ­a sau phanh gáº¥p vÃ  Ä‘Ã¡nh lÃ¡i Ä‘á»ƒ trÃ¡nh. CÃº phanh lÃ m Ä‘áº§u xe kÃ©o quay ngang, Ä‘uÃ´i xe chá»¯ng láº¡i.</p><p style="text-rendering: geometricPrecision; margin-top: 18px; margin-bottom: 18px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; color: rgb(34, 34, 34); font-family: &quot;Noto Serif&quot;, serif; line-height: 26px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">LÃºc nÃ y, xe táº£i lÆ°u thÃ´ng cÃ¹ng chiá»u phÃ­a sau Ä‘Ã¢m máº¡nh vÃ o Ä‘uÃ´i chiáº¿c Ä‘áº§u kÃ©o. Theo nhÃ¢n chá»©ng, Ä‘áº§u xe táº£i mÃ©o mÃ³. TÃ i xáº¿ cháº¥n thÆ°Æ¡ng náº·ng, chÃ¢n anh ta bá»‹ káº¹p nÃ¡t.</p>                                        ', '2016-09-05'),
(6, 'This is case study title 2', 'https://www.youtube.com/watch?v=Am9tbjfQOfQ', 'Khi cÃ´ng an xÃ£ Báº¡ch Sam cÃ³ máº·t, lá»±c lÆ°á»£ng nÃ y tiáº¿p cáº­n vÃ  giáº­t hung khÃ­ trÃªn tay ngÆ°á»i Ä‘Ã n Ã´ng. Sau Ä‘Ã³, há» Ä‘Æ°a ngÆ°á»i nÃ y Ä‘i cáº¥p cá»©u.                                        ', '<p style="text-rendering: geometricPrecision; margin-top: 18px; margin-bottom: 18px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; color: rgb(34, 34, 34); font-family: &quot;Noto Serif&quot;, serif; line-height: 26px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">NhÃ¢n chá»©ng cho hay, ná»n cÄƒn nhÃ  xáº£y ra vá»¥ viá»‡c mÃ¡u cháº£y lÃªnh lÃ¡ng. CÃ´ng an xÃ£ cÃ¹ng nhiá»u ngÆ°á»i dÃ¢n pháº£i ráº¥t váº¥t váº£ má»›i giá»¯ Ä‘Æ°á»£c ngÆ°á»i Ä‘Ã n Ã´ng khÃ´ng tiáº¿p tá»¥c gÃ¢y thÆ°Æ¡ng tÃ­ch cho báº£n thÃ¢n.</p><p style="text-rendering: geometricPrecision; margin-top: 18px; margin-bottom: 18px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; color: rgb(34, 34, 34); font-family: &quot;Noto Serif&quot;, serif; line-height: 26px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Anh Trung chia sáº», Ä‘iá»ƒm giao cáº¯t gáº§n cáº§u vÆ°á»£t Báº¡ch Sam do ngÆ°á»i qua Ä‘Æ°á»ng tá»± phÃ¡ dáº£i phÃ¢n cÃ¡ch Ä‘á»ƒ sang Ä‘Æ°á»ng. Pháº§n lan can bá»‹ phÃ¡ háº¹p, máº¥p mÃ´ nÃªn khÃ´ng Ã­t láº§n xáº£y ra tai náº¡n.</p><p style="text-rendering: geometricPrecision; margin-top: 18px; margin-bottom: 18px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; color: rgb(34, 34, 34); font-family: &quot;Noto Serif&quot;, serif; line-height: 26px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">LÃ£nh Ä‘áº¡o cÃ´ng an xÃ£ Báº¡ch Sam xÃ¡c nháº­n vá»¥ viá»‡c vá»›i<em style="text-rendering: geometricPrecision; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">&nbsp;Zing.vn&nbsp;</em>vÃ  cho biáº¿t, ngÆ°á»i Ä‘Ã n Ã´ng Ä‘i xe mÃ¡y sang Ä‘Æ°á»ng áº©u, gÃ¢y tai náº¡n liÃªn hoÃ n cho 2 Ã´tÃ´ sau Ä‘Ã³ cÃ³ biá»ƒu hiá»‡n hoáº£ng loáº¡n, anh nÃ y bá» láº¡i xe vÃ  lao vÃ o Ã´tÃ´ trÃªn Ä‘Æ°á»ng Ä‘Ã²i tá»± tá»­ nhÆ°ng Ä‘Æ°á»£c ngÆ°á»i dÃ¢n can ngÄƒn.</p>                                        ', '2016-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `huongdan`
--

CREATE TABLE IF NOT EXISTS `huongdan` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `huongdan`
--

INSERT INTO `huongdan` (`id`, `title`, `content`) VALUES
(1, 'Young Vietnamese win 25 prizes at US piano contests', '                                                                                                        <h2 class="lead_post_detail row" style="margin: 0px 0px 20px; padding: 0px; line-height: 26px; width: 679.797px; float: left; font-weight: 700; color: rgb(34, 34, 34); font-size: 18px; font-family: Georgia, " times="" new="" roman",="" times,="" serif;"="">Tinkling on the ivories earns students global recognition.</h2><h2 class="lead_post_detail row" style="margin: 0px 0px 20px; padding: 0px; line-height: 26px; width: 679.797px; float: left; font-weight: 700; color: rgb(34, 34, 34); font-size: 18px; font-family: Georgia, " times="" new="" roman",="" times,="" serif;"=""><span style="line-height: 1.5; color: rgb(0, 0, 0); font-size: 14px;">Seven students from Vietnam''s National Academy of Music aged 9-18 won a total of 25 prizes at</span><span style="color: rgb(0, 0, 0); font-size: 14px; line-height: 1.5; font-family: inherit;">two piano contests recently held in the United States, Sai Gon Giai Phong (Saigon Liberation newspaper) reported on Thursday.</span></h2><p class="Normal" style="margin-bottom: 20px; padding: 0px; line-height: 1.5; font-family: Georgia, " times="" new="" roman",="" times,="" serif;="" font-size:="" 18px;"="">&nbsp;</p><p class="Normal" style="margin-bottom: 20px; padding: 0px; line-height: 1.5; font-family: Georgia, " times="" new="" roman",="" times,="" serif;="" font-size:="" 18px;"=""><b><u><br></u></b></p><p class="Normal" style="margin-bottom: 20px; padding: 0px; line-height: 1.5; font-family: Georgia, " times="" new="" roman",="" times,="" serif;="" font-size:="" 18px;"=""><br></p><p class="Normal" style="margin-bottom: 20px; padding: 0px; line-height: 1.5; font-family: Georgia, " times="" new="" roman",="" times,="" serif;="" font-size:="" 18px;"=""><br></p><p class="Normal" style="margin-bottom: 20px; padding: 0px; line-height: 1.5; font-family: Georgia, " times="" new="" roman",="" times,="" serif;="" font-size:="" 18px;"=""><b><u>At the fifth annual Los Angeles Young Musicians International Competition</u></b> that took place from August 3-5 in California, Phan Thien Bach Anh, 13, won a third prize while two other Vietnamese students received honorable mentions.</p><p class="Normal" style="margin-bottom: 20px; padding: 0px; line-height: 1.5; font-family: Georgia, " times="" new="" roman",="" times,="" serif;="" font-size:="" 18px;"=""></p><p class="Normal" style="margin-bottom: 20px; padding: 0px; line-height: 1.5; font-family: Georgia, " times="" new="" roman",="" times,="" serif;="" font-size:="" 18px;"="">Earlier this year,&nbsp;<a href="http://e.vnexpress.net/video/video/meet-evan-le-the-five-year-old-piano-prodigy-3424139.html" style="margin: 0px; padding: 0px; color: rgb(11, 124, 193); outline: none; background-color: rgb(255, 255, 255);">Evan Le</a>, a five-year old Vietnamese American boy, surprised people by winning the top prize at a piano competition, also in California.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `lythuyet`
--

CREATE TABLE IF NOT EXISTS `lythuyet` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `date_change` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `lythuyet`
--

INSERT INTO `lythuyet` (`id`, `title`, `img_thumbnail`, `summary`, `content`, `date_change`) VALUES
(13, 'XXX this is title 3xxx', 'Complete-Motorcycle-Theory-Hazard-Tests-2013-1.jpg', 'XXXTáº­p bÃ¡n káº¿t chÆ°Æ¡ng trÃ¬nh The Face Vietnam â€“ GÆ°Æ¡ng máº·t thÆ°Æ¡ng hiá»‡u phÃ¡t sÃ³ng lÃºc 20h, ngÃ y 27/8 cÃ´ng bá»‘ top 3 bÆ°á»›c vÃ o Ä‘Ãªm chung káº¿t diá»…n ra vÃ o ngÃ y 3/9.', '                                                                                                                                    <p><span style="color: rgb(34, 34, 34); font-family: " noto="" serif",="" serif;="" font-size:="" 16px;="" line-height:="" 26px;"="">á»ž pháº§n thi quyáº¿t Ä‘á»‹nh loáº¡i ngÆ°á»i chÆ¡i, ChÃºng Huyá»n Thanh, PhÃ­ PhÆ°Æ¡ng Anh, KhÃ¡nh NgÃ¢n thá»ƒ hiá»‡n khÃ¡ hoÃ n thiá»‡n clip quáº£ng cÃ¡o sáº£n pháº©m Ä‘iá»‡n thoáº¡i.<b> LÃª HÃ  cÃ³ pháº§n lÃ©p vÃ© hÆ¡n vÃ¬ diá»…n xuáº¥t nháº¡t nhÃ²a. </b>Pháº§n thi Ä‘Ã¡p á»©ng yÃªu cáº§u cá»§a nhÃ£n hÃ ng cá»§a Huyá»n Thanh vÃ  PhÆ°Æ¡ng Anh Ä‘Ã£ giÃºp team Há»“ Ngá»c HÃ  giÃ nh chiáº¿n tháº¯ng, Ä‘á»“ng nghÄ©a vá»›i viá»‡c lá»™ diá»‡n top 3 lÃ  ChÃºng Huyá»n Thanh, PhÃ­ PhÆ°Æ¡ng Anh vÃ  LÃª HÃ .</span></p><p><img src="http://hazard.demo/resource/images/XrsYtz20t_Znhhghg_8-afdngyh2d6aaa7-0m1.jpeg" data-filename="9.jpg" style="width: 660px;"><span style="color: rgb(34, 34, 34); font-family: " noto="" serif",="" serif;="" font-size:="" 16px;="" line-height:="" 26px;"=""><br></span></p><p><span style="color: rgb(34, 34, 34); font-family: " noto="" serif",="" serif;="" font-size:="" 16px;="" line-height:="" 26px;"="">Tuy nhiÃªn, Há»“ Ngá»c HÃ  gÃ¢y báº¥t ngá» khi Ä‘Æ°a ra quyáº¿t Ä‘á»‹nh loáº¡i chiáº¿n binh cá»§a Ä‘á»™i mÃ¬nh lÃ  LÃª HÃ  á»Ÿ phÃºt cuá»‘i chÆ°Æ¡ng trÃ¬nh Ä‘á»ƒ trao cÆ¡ há»™i bÆ°á»›c vÃ o chung káº¿t cho KhÃ¡nh NgÃ¢n. Quyáº¿t Ä‘á»‹nh cá»§a ná»¯ huáº¥n luyá»‡n viÃªn khiáº¿n cÃ¡c há»c trÃ² cá»§a cÃ´ tháº¥t vá»ng.â€œCÃ´ trÃ²â€ Pháº¡m HÆ°Æ¡ng vÃ´ cÃ¹ng cáº£m kÃ­ch hÃ nh Ä‘á»™ng â€œchÆ¡i Ä‘áº¹pâ€ cá»§a ná»¯ ca sÄ©.</span></p><p><img src="http://hazard.demo/resource/images/tXgghan_a80Z-a76dh-t1_0yzs2mYrgf2hdnha.jpeg" data-filename="bi-quyet-gin-giu-tinh-yeu-cua-kieu-nu-ten-ha-1678243.jpeg" style="width: 434px;"><span style="color: rgb(34, 34, 34); font-family: " noto="" serif",="" serif;="" font-size:="" 16px;="" line-height:="" 26px;"=""><br></span><span style="color: rgb(34, 34, 34); font-family: " noto="" serif",="" serif;="" font-size:="" 16px;="" line-height:="" 26px;"=""><br></span>                                        </p>                                                                                                                        ', '2016-08-29'),
(15, 'NhÃ  Tráº¯ng Ä‘Ã£ khiáº¿n cÃ¡c tá»•ng thá»‘ng Má»¹ thay Ä‘á»•i tháº¿ nÃ o?', 'HPT_Cover.jpg', 'LÃ m "chá»§ nhÃ¢n NhÃ  Tráº¯ng" chÆ°a bao giá» lÃ  Ä‘iá»u dá»… dÃ ng. Nhá»¯ng thÃ¡ch thá»©c tá»« khi báº¯t Ä‘áº§u chiáº¿n dá»‹ch tranh cá»­ cho Ä‘áº¿n khi Ä‘Ã£ yÃªn vá»‹ khiáº¿n cÃ¡c tá»•ng thá»‘ng Má»¹ "giÃ  Ä‘i trÃ´ng tháº¥y".', '                                            <p><strong style="text-rendering: geometricPrecision; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Tá»•ng thá»‘ng Ä‘Æ°Æ¡ng nhiá»‡m Barack Obama (2009 - 2016)</strong><span style="color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif;">.</span></p><p><span style="color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif;"> Ã”ng lÃ  ngÆ°á»i da mÃ u Ä‘áº§u tiÃªn Ä‘Æ°á»£c báº§u vÃ o vá»‹ trÃ­ chá»§ nhÃ¢n NhÃ  Tráº¯ng. Äáº¯c cá»­ tá»•ng thá»‘ng trong giai Ä‘oáº¡n nÆ°á»›c Má»¹ pháº£i Ä‘á»‘i phÃ³ vá»›i cuá»™c khá»§ng hoáº£ng kinh táº¿ toÃ n cáº§u, Obama Ä‘Ã£ kiÃªn trÃ¬ thÃºc Ä‘áº©y nhiá»u chÃ­nh sÃ¡ch vá» kinh táº¿, tÃ i chÃ­nh, y táº¿, mÃ´i trÆ°á»ng... dÃ¹ váº¥p pháº£i nhiá»u rÃ o cáº£n. Vá» Ä‘á»‘i ngoáº¡i, Obama cho quÃ¢n tÃ¡i can thiá»‡p táº¡i Iraq&nbsp;nháº±m Ä‘á»‘i phÃ³ vá»›i tá»• chá»©c NhÃ  nÆ°á»›c Há»“i giÃ¡o IS sau khi rÃºt quÃ¢n nÄƒm 2011, cháº¥m dá»©t viá»‡c Ä‘Ã³ng quÃ¢n táº¡i Afghanistan, can thiá»‡p quÃ¢n sá»± táº¡i Libya vÃ  Syria, Ä‘Ã m phÃ¡n kÃ½ káº¿t thá»a thuáº­n háº¡t nhÃ¢n vá»›i Iran vÃ  bÃ¬nh thÆ°á»ng hÃ³a quan há»‡ vá»›i Cuba. DÃ¹ gÃ¢y nhiá»u tranh cÃ£i khi Ä‘Æ°á»£c Ä‘Æ°á»£c trao giáº£i Nobel HÃ²a bÃ¬nh, Barack Obama váº«n Ä‘Æ°á»£c xem lÃ  nhÃ  lÃ£nh Ä‘áº¡o tháº¿ giá»›i Ä‘Æ°á»£c nhiá»u ngÆ°á»i yÃªu thÃ­ch nháº¥t.</span></p><p><span style="color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif;"><br></span>                                        </p>                                        ', '2016-08-29'),
(16, 'BÃ  Hillary cÃ´ng kÃ­ch Ã´ng Trump dá»¯ dá»™i nháº¥t tá»« trÆ°á»›c Ä‘áº¿n nay', 'SHEEP-IN-ROAD.jpg', 'NgÃ y 26/8, bÃ  Hillary khi phÃ¡t biá»ƒu táº¡i Nevada Ä‘Ã£ chá»‰ trÃ­ch chÃ­nh sÃ¡ch cá»§a tá»· phÃº Trump máº¡nh máº½ nháº¥t tá»« trÆ°á»›c Ä‘áº¿n nay, cÃ¡o buá»™c Ã´ng xÃ¢y dá»±ng chiáº¿n dá»‹ch tá»« Ä‘á»‹nh kiáº¿n vÃ  áº£o tÆ°á»Ÿng.', '<p style="text-rendering: geometricPrecision; margin-bottom: 18px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; float: none; width: 560px; color: rgb(34, 34, 34); line-height: 26px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;"><font face="Arial">Ngay tá»« Ä‘áº§u, Donald Trump Ä‘Ã£ xÃ¢y dá»±ng chiáº¿n dá»‹ch cá»§a Ã´ng dá»±a trÃªn Ä‘á»‹nh kiáº¿n vÃ  sá»± áº£o tÆ°á»Ÿng. Ã”ng áº¥y Ä‘Æ°a nhá»¯ng nhÃ³m thÃ¹ háº­n vÃ o má»™t vá»‹ trÃ­ chÃ­nh thá»‘ng vÃ  giÃºp má»™t nhÃ³m cá»±c Ä‘oan tá»« chá»— Ä‘á»©ng bÃªn rÃ¬a Ä‘Ã£ chiáº¿m Ä‘Æ°á»£c Ä‘áº£ng Cá»™ng hoÃ . Viá»‡c Ã´ng áº¥y coi thÆ°á»ng nhá»¯ng giÃ¡ trá»‹ khiáº¿n Ä‘áº¥t nÆ°á»›c chÃºng ta vÄ© Ä‘áº¡i lÃ  hÃ nh Ä‘á»™ng vÃ´ cÃ¹ng nguy hiá»ƒmâ€, bÃ  Clinton nÃ³i.</font></p><p style="text-rendering: geometricPrecision; margin-top: 18px; margin-bottom: 18px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; color: rgb(34, 34, 34); line-height: 26px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;"><font face="Arial">Theo&nbsp;<em style="text-rendering: geometricPrecision; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-color: transparent; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">CNN</em>, ná»¯ á»©ng viÃªn Ä‘áº£ng DÃ¢n chá»§ gá»i tá»· phÃº Trump lÃ  ngÆ°á»i â€œtá»« ráº¥t lÃ¢u Ä‘Ã£ lÃ  ngÆ°á»i phÃ¢n biá»‡t chá»§ng tá»™c, tung ra nhá»¯ng thuyáº¿t Ã¢m mÆ°u Ä‘en tá»‘i mÃ  thÃ´ng tin láº¥y tá»« cÃ¡c tá» bÃ¡o lÃ¡ cáº£i hoáº·c nhá»¯ng thÃ´ng tin xáº¥u xa láº©n khuáº¥t trÃªn máº¡ng</font></p>                                        ', '2016-08-28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
