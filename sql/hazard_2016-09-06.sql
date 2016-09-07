# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: hazard
# Generation Time: 2016-09-06 09:34:31 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table casestudy
# ------------------------------------------------------------

DROP TABLE IF EXISTS `casestudy`;

CREATE TABLE `casestudy` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video_url` text COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `date_change` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `casestudy` WRITE;
/*!40000 ALTER TABLE `casestudy` DISABLE KEYS */;

INSERT INTO `casestudy` (`id`, `title`, `video_url`, `summary`, `content`, `date_change`)
VALUES
	(7,'Title 1 am volutpat lorem lorem','https://www.youtube.com/watch?v=LSgWtdEySFA','Nulla vitae velit ac nunc imperdiet venenatis. Curabitur tincidunt turpis nisl, vitae luctus risus ornare at.                                        ','<p style=\"margin-bottom: 15px; text-align: justify;\"><font face=\"Tahoma\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare fermentum massa in commodo. Aenean lectus felis, luctus id blandit ac, mollis nec ex. Nulla vitae velit ac nunc imperdiet venenatis. Curabitur tincidunt turpis nisl, vitae luctus risus ornare at. Donec ut finibus mi. Nulla facilisi. Nullam laoreet dignissim erat a pretium. Ut a fringilla nisi.</font></p><p style=\"margin-bottom: 15px; text-align: justify;\"><font face=\"Tahoma\"><span style=\"background-color: rgb(255, 255, 0);\">Maecenas commodo, arcu ac accumsan volutpat, arcu felis molestie nisl</span>, a vestibulum ante justo non odio. Aliquam iaculis malesuada mi. Duis nec nulla lacinia, fermentum eros sed, accumsan urna. Mauris lorem tellus, rhoncus sit amet nibh vitae, auctor tincidunt magna. Aliquam vitae laoreet leo. Fusce aliquam nulla ac risus congue, ac porttitor sapien ornare. Sed vel tortor enim. Fusce elementum felis vitae magna congue, malesuada tincidunt lectus mattis. In imperdiet dignissim augue quis tincidunt. Sed sodales varius convallis. Ut ullamcorper et nunc vitae aliquet. In mollis nisi neque, et ullamcorper ex volutpat in. Aliquam id est sapien.</font></p><p style=\"margin-bottom: 15px; text-align: justify;\"><font face=\"Tahoma\">Aenean facilisis posuere nibh non sollicitudin. Maecenas in vulputate nibh. Morbi libero lectus, feugiat a dui nec, euismod pharetra massa. Donec vitae dui ac dolor venenatis tempor. Donec mi dolor, efficitur id elit quis, posuere lacinia tellus. Nunc et facilisis est. Nullam efficitur, ligula quis placerat consectetur, eros leo vestibulum neque, vitae malesuada mauris leo vitae justo. Nulla volutpat lacus cursus, aliquam arcu in, laoreet orci. Sed id dui vitae ex blandit facilisis non sed elit. Morbi consectetur libero eu mi tempor dignissim. Cras nibh dolor, accumsan eu nunc quis, ullamcorper elementum magna. Pellentesque ipsum erat, ultrices sit amet posuere sed, blandit id erat. Duis et orci tincidunt justo facilisis rhoncus pellentesque non diam. Pellentesque facilisis id felis sit amet blandit.</font></p><p style=\"margin-bottom: 15px; text-align: justify;\"><font face=\"Tahoma\">Maecenas in fermentum ipsum. Aenean fringilla, mi ac dapibus vehicula, nunc dolor iaculis ex, et blandit leo mauris sit amet justo. Vivamus posuere auctor tellus. Sed blandit felis ac tincidunt lobortis. Integer dapibus nibh id elit congue accumsan. Aliquam sit amet odio mauris. In ex tellus, vehicula a odio sed, dignissim blandit quam. Duis in erat dolor. Aliquam suscipit commodo imperdiet. Quisque neque ex, tempus eget mattis sed, porttitor id odio.</font></p><p style=\"margin-bottom: 15px; text-align: justify;\"><font face=\"Tahoma\">Integer arcu odio, viverra quis molestie consequat, egestas eu quam. Vestibulum non purus vulputate, dictum purus nec, bibendum ex. Mauris porta nisi in elit molestie, a euismod nulla fringilla. Sed consectetur scelerisque sapien nec lacinia. Donec maximus ante at mollis interdum. Cras eu dui suscipit, accumsan eros sed, posuere massa. Maecenas purus mi, porttitor id feugiat eu, mollis et lectus. Donec eget viverra quam, vel dignissim risus. Morbi auctor tempus augue sit amet vestibulum. Sed molestie venenatis sapien, ac pharetra augue scelerisque et. Donec semper tempor vestibulum. Pellentesque hendrerit, nunc et consequat vehicula, risus erat luctus diam, non tristique nisl nulla sit amet enim.</font></p>                                        ','2016-09-06'),
	(8,'Title 2 Lorem ipsum dolor sit amet','https://www.youtube.com/watch?v=sJSv--NUaJY','Maecenas in fermentum ipsum. Aenean fringilla, mi ac dapibus vehicula, nunc dolor iaculis ex, et blandit leo mauris sit amet justo.                                         ','<p style=\"margin-bottom: 15px; text-align: justify;\"><font face=\"Tahoma\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare fermentum massa in commodo. Aenean lectus felis, luctus id blandit ac, mollis nec ex. Nulla vitae velit ac nunc imperdiet venenatis. Curabitur tincidunt turpis nisl, vitae luctus risus ornare at. Donec ut finibus mi. Nulla facilisi. Nullam laoreet dignissim erat a pretium. Ut a fringilla nisi.</font></p><p style=\"margin-bottom: 15px; text-align: justify;\"><font face=\"Tahoma\"><b>Maecenas commodo, arcu ac accumsan volutpat, arcu felis molestie nisl, a vestibulum ante justo non odio. Aliquam iaculis malesuada mi.</b> Duis nec nulla lacinia, fermentum eros sed, accumsan urna. Mauris lorem tellus, rhoncus sit amet nibh vitae, auctor tincidunt magna. Aliquam vitae laoreet leo. Fusce aliquam nulla ac risus congue, ac porttitor sapien ornare. Sed vel tortor enim. Fusce elementum felis vitae magna congue, malesuada tincidunt lectus mattis. In imperdiet dignissim augue quis tincidunt. Sed sodales varius convallis. Ut ullamcorper et nunc vitae aliquet. In mollis nisi neque, et ullamcorper ex volutpat in. Aliquam id est sapien.</font></p><p style=\"margin-bottom: 15px; text-align: justify;\"><font face=\"Tahoma\"><u>Aenean facilisis posuere nibh non sollicitudin. Maecenas in vulputate nibh. Morbi libero lectus, feugiat a dui nec, euismod pharetra massa. Donec vitae dui ac dolor venenatis tempor. Donec mi dolor, efficitur id elit quis, posuere lacinia tellus. Nunc et facilisis est. Nullam efficitur, ligula quis placerat consectetur, eros leo vestibulum neque, vitae malesuada mauris leo vitae justo. Nulla volutpat lacus cursus, aliquam arcu in, laoreet orci. Sed id dui vitae ex blandit facilisis non sed elit. Morbi consectetur libero eu mi tempor dignissim. Cras nibh dolor, accumsan eu nunc quis, ullamcorper elementum magna. Pellentesque ipsum erat, ultrices sit amet posuere sed, blandit id erat. Duis et orci tincidunt justo facilisis rhoncus pellentesque non diam. Pellentesque facilisis id felis sit amet blandit.</u></font></p><p style=\"margin-bottom: 15px; text-align: justify;\"><font face=\"Tahoma\" style=\"background-color: rgb(255, 255, 0);\">Maecenas in fermentum ipsum. Aenean fringilla, mi ac dapibus vehicula, nunc dolor iaculis ex, et blandit leo mauris sit amet justo. Vivamus posuere auctor tellus. Sed blandit felis ac tincidunt lobortis. Integer dapibus nibh id elit congue accumsan. Aliquam sit amet odio mauris. In ex tellus, vehicula a odio sed, dignissim blandit quam. Duis in erat dolor. Aliquam suscipit commodo imperdiet. Quisque neque ex, tempus eget mattis sed, porttitor id odio.</font></p><p style=\"margin-bottom: 15px; text-align: justify;\"><font face=\"Tahoma\">Integer arcu odio, viverra quis molestie consequat, egestas eu quam. Vestibulum non purus vulputate, dictum purus nec, bibendum ex. Mauris porta nisi in elit molestie, a euismod nulla fringilla. Sed consectetur scelerisque sapien nec lacinia. Donec maximus ante at mollis interdum. Cras eu dui suscipit, accumsan eros sed, posuere massa. Maecenas purus mi, porttitor id feugiat eu, mollis et lectus. Donec eget viverra quam, vel dignissim risus. Morbi auctor tempus augue sit amet vestibulum. Sed molestie venenatis sapien, ac pharetra augue scelerisque et. Donec semper tempor vestibulum. Pellentesque hendrerit, nunc et consequat vehicula, risus erat luctus diam, non tristique nisl nulla sit amet enim.</font></p>                                        ','2016-09-06'),
	(9,'Title 3 am volutpat lorem lorem','https://www.youtube.com/watch?v=lBTQVA-E9O4','Etiam scelerisque semper massa, sed pellentesque dui. In tellus lorem, maximus nec venenatis vitae, luctus quis nunc. Nunc semper imperdiet tortor, eu rhoncus urna tincidunt quis. Quisque scelerisque ultricies neque, vitae commodo tortor pulvinar vel. Donec varius dapibus ipsum ac congue. Vivamus malesuada ipsum libero. Morbi ac purus sed libero elementum iaculis eget eget lorem. Phasellus ut tincidunt neque, id volutpat velit.                                        ','<p style=\"margin-bottom: 15px; text-align: justify;\"><font face=\"Tahoma\">Suspendisse nec ligula at mauris blandit euismod ut vel nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quam leo, suscipit tempor porttitor sed, tincidunt non nisi. Donec congue at purus at consectetur. Duis non eleifend mauris, sit amet pellentesque ante. Nunc egestas lobortis consectetur. Etiam pellentesque dolor quis nisl aliquam, ultricies dignissim dolor ornare. Nullam ultrices neque nec turpis laoreet, ac maximus tortor dignissim. Sed tincidunt enim a bibendum pulvinar. Ut finibus massa suscipit elit sagittis, at placerat justo ultricies. Praesent at finibus enim. Fusce gravida porta lorem at viverra. Maecenas bibendum elit eget feugiat gravida.</font></p><p style=\"margin-bottom: 15px; text-align: justify;\"><font face=\"Tahoma\"><b>Aenean eget sagittis arcu, eget aliquam augue. Nulla venenatis interdum lorem, non imperdiet magna ornare vel. Aenean at sapien et sem mollis tincidunt eget nec purus. Duis tristique nisi ac metus pellentesque, suscipit posuere eros venenatis. Nulla vel mattis mi. </b>Cras vulputate, lacus sit amet dapibus dictum, augue quam facilisis lectus, in auctor sapien libero sit amet mi. Praesent sed odio in velit rhoncus placerat. Praesent convallis arcu in mi pharetra, in euismod diam pulvinar. Duis sed enim id purus volutpat gravida nec quis purus. Maecenas nulla risus, congue id accumsan nec, gravida nec odio. Sed convallis ornare quam ac porta. Pellentesque egestas ornare ligula, eu condimentum magna venenatis at. Etiam facilisis nunc ullamcorper, pulvinar metus sit amet, feugiat elit. Integer in purus vel ipsum porttitor vulputate. Suspendisse dolor augue, consequat ut arcu ut, fermentum viverra orci.</font></p>                                        ','2016-09-06');

/*!40000 ALTER TABLE `casestudy` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table huongdan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `huongdan`;

CREATE TABLE `huongdan` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `huongdan` WRITE;
/*!40000 ALTER TABLE `huongdan` DISABLE KEYS */;

INSERT INTO `huongdan` (`id`, `title`, `content`)
VALUES
	(1,'Young Vietnamese win 25 prizes at US piano contests','                                                                                                        <h2 class=\"lead_post_detail row\" style=\"margin: 0px 0px 20px; padding: 0px; line-height: 26px; width: 679.797px; float: left; font-weight: 700; color: rgb(34, 34, 34); font-size: 18px; font-family: Georgia, \" times=\"\" new=\"\" roman\",=\"\" times,=\"\" serif;\"=\"\">Tinkling on the ivories earns students global recognition.</h2><h2 class=\"lead_post_detail row\" style=\"margin: 0px 0px 20px; padding: 0px; line-height: 26px; width: 679.797px; float: left; font-weight: 700; color: rgb(34, 34, 34); font-size: 18px; font-family: Georgia, \" times=\"\" new=\"\" roman\",=\"\" times,=\"\" serif;\"=\"\"><span style=\"line-height: 1.5; color: rgb(0, 0, 0); font-size: 14px;\">Seven students from Vietnam\'s National Academy of Music aged 9-18 won a total of 25 prizes at</span><span style=\"color: rgb(0, 0, 0); font-size: 14px; line-height: 1.5; font-family: inherit;\">two piano contests recently held in the United States, Sai Gon Giai Phong (Saigon Liberation newspaper) reported on Thursday.</span></h2><p class=\"Normal\" style=\"margin-bottom: 20px; padding: 0px; line-height: 1.5; font-family: Georgia, \" times=\"\" new=\"\" roman\",=\"\" times,=\"\" serif;=\"\" font-size:=\"\" 18px;\"=\"\">&nbsp;</p><p class=\"Normal\" style=\"margin-bottom: 20px; padding: 0px; line-height: 1.5; font-family: Georgia, \" times=\"\" new=\"\" roman\",=\"\" times,=\"\" serif;=\"\" font-size:=\"\" 18px;\"=\"\"><b><u><br></u></b></p><p class=\"Normal\" style=\"margin-bottom: 20px; padding: 0px; line-height: 1.5; font-family: Georgia, \" times=\"\" new=\"\" roman\",=\"\" times,=\"\" serif;=\"\" font-size:=\"\" 18px;\"=\"\"><br></p><p class=\"Normal\" style=\"margin-bottom: 20px; padding: 0px; line-height: 1.5; font-family: Georgia, \" times=\"\" new=\"\" roman\",=\"\" times,=\"\" serif;=\"\" font-size:=\"\" 18px;\"=\"\"><br></p><p class=\"Normal\" style=\"margin-bottom: 20px; padding: 0px; line-height: 1.5; font-family: Georgia, \" times=\"\" new=\"\" roman\",=\"\" times,=\"\" serif;=\"\" font-size:=\"\" 18px;\"=\"\"><b><u>At the fifth annual Los Angeles Young Musicians International Competition</u></b> that took place from August 3-5 in California, Phan Thien Bach Anh, 13, won a third prize while two other Vietnamese students received honorable mentions.</p><p class=\"Normal\" style=\"margin-bottom: 20px; padding: 0px; line-height: 1.5; font-family: Georgia, \" times=\"\" new=\"\" roman\",=\"\" times,=\"\" serif;=\"\" font-size:=\"\" 18px;\"=\"\"></p><p class=\"Normal\" style=\"margin-bottom: 20px; padding: 0px; line-height: 1.5; font-family: Georgia, \" times=\"\" new=\"\" roman\",=\"\" times,=\"\" serif;=\"\" font-size:=\"\" 18px;\"=\"\">Earlier this year,&nbsp;<a href=\"http://e.vnexpress.net/video/video/meet-evan-le-the-five-year-old-piano-prodigy-3424139.html\" style=\"margin: 0px; padding: 0px; color: rgb(11, 124, 193); outline: none; background-color: rgb(255, 255, 255);\">Evan Le</a>, a five-year old Vietnamese American boy, surprised people by winning the top prize at a piano competition, also in California.</p>');

/*!40000 ALTER TABLE `huongdan` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table lythuyet
# ------------------------------------------------------------

DROP TABLE IF EXISTS `lythuyet`;

CREATE TABLE `lythuyet` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `date_change` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `lythuyet` WRITE;
/*!40000 ALTER TABLE `lythuyet` DISABLE KEYS */;

INSERT INTO `lythuyet` (`id`, `title`, `img_thumbnail`, `summary`, `content`, `date_change`)
VALUES
	(18,'Title 1 am volutpat lorem lorem','sthZnar-zhyaa_d081_ggng62a0dtY0-fXhhm2.jpeg','Aliquam iaculis tempor felis, eget molestie justo viverra sed. Suspendisse nec faucibus orci. Fusce placerat, enim vitae tincidunt pulvinar, arcu augue convallis velit.','                                            <p style=\"margin-bottom: 15px; text-align: justify;\"><font face=\"Tahoma\">Vestibulum tempor vehicula euismod. Vivamus arcu dolor, gravida id mi pellentesque, posuere vulputate mi. Sed at imperdiet nunc. Integer sodales venenatis sem, vel euismod odio pharetra a. Proin quis ultricies lacus, vitae gravida arcu. Aenean accumsan lacus iaculis, ultrices eros non, porttitor est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tellus arcu, tristique eget viverra a, imperdiet ac odio. Nulla facilisi. Morbi semper orci nec tortor gravida tempus blandit quis nisl. Mauris augue orci, gravida vehicula auctor at, commodo a massa. Donec sagittis finibus massa sed ultricies. Nam volutpat lorem lorem, convallis pulvinar augue eleifend a. Nullam cursus elit eget odio faucibus varius. Proin sed magna auctor, ullamcorper sapien sit amet, ullamcorper elit. Donec nunc nisl, varius nec auctor et, rhoncus quis nibh.</font></p><p style=\"margin-bottom: 15px; text-align: justify;\"><font face=\"Tahoma\">Aliquam iaculis tempor felis, eget molestie justo viverra sed. Suspendisse nec faucibus orci. Fusce placerat, enim vitae tincidunt pulvinar, arcu augue convallis velit, vel pulvinar magna mi nec lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque pretium consectetur magna, vitae feugiat eros mattis nec. Integer ac erat eget massa finibus porttitor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas quis convallis nunc, id tincidunt est. Integer molestie nulla ac sollicitudin euismod. Suspendisse facilisis est vitae neque sollicitudin lacinia. Phasellus sem arcu, dictum vitae augue ut, sodales accumsan risus. Fusce varius facilisis orci, ut porttitor quam blandit sed. Donec pretium fermentum velit non congue. Sed nulla ligula, pharetra a cursus ut, ullamcorper et odio. In dictum leo vel dui lacinia vehicula.</font></p><p style=\"margin-bottom: 15px; text-align: justify;\"><font face=\"Tahoma\">Suspendisse dictum sed justo sed rhoncus. Fusce eleifend enim nibh, ut vestibulum risus dictum at. Cras rhoncus orci et porttitor luctus. Sed placerat tortor nec interdum rhoncus. Duis at dictum mi. Aliquam erat volutpat. Nullam odio odio, commodo ut dignissim vitae, dignissim egestas lorem. Ut maximus, neque at bibendum varius, ipsum lectus egestas tellus, a blandit orci ipsum eget massa. Suspendisse tempus pulvinar purus, sit amet consequat nunc. Aliquam at odio eget purus pulvinar efficitur. Proin sed lacinia tortor. Maecenas mollis dapibus fringilla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque fringilla, sapien at egestas ultricies, urna quam lacinia sapien, vel pellentesque ex urna a urna. Suspendisse rhoncus ipsum eu enim mollis aliquet.</font></p>                                                                                ','2016-09-06'),
	(19,'Title 2 Lorem ipsum dolor sit amet','1n6gnXh89dZhad-00_aa-2fgt1Ytayhzrshmg_.jpeg','Quisque non nunc eleifend, tristique elit quis, fringilla odio. In vel lacus sed velit viverra mollis. Aenean vitae ipsum ac urna vulputate vulputate. Phasellus a velit sed elit vehicula iaculis. ','                                            <p style=\"margin-bottom: 15px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et efficitur tortor, ut imperdiet mi. In ultrices arcu feugiat, hendrerit magna quis, consequat sapien. Morbi eu est sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse at placerat ante. Nullam efficitur erat vitae metus condimentum tempus. Sed sollicitudin purus dolor, in ultrices nulla elementum eu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nisl turpis, porta at mauris et, consequat aliquet justo. Etiam euismod quam dignissim accumsan aliquet. Vivamus sed massa ultricies nisi vehicula tempor ac quis risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam id vehicula neque, vel dapibus urna. Nulla in diam id justo fringilla convallis.</p><p style=\"margin-bottom: 15px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Quisque non nunc eleifend, tristique elit quis, fringilla odio. In vel lacus sed velit viverra mollis. Aenean vitae ipsum ac urna vulputate vulputate. Phasellus a velit sed elit vehicula iaculis. Nullam at ipsum eu magna pulvinar tempus nec nec libero. Pellentesque aliquam odio justo, id rutrum ex hendrerit sit amet. Nullam consequat et erat ac porta. In hac habitasse platea dictumst. In ornare, nunc blandit blandit congue, lacus dolor ornare est, sit amet ullamcorper justo justo et purus. Sed maximus at urna quis malesuada. Pellentesque vestibulum nunc at tincidunt tempus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fermentum nisl eget arcu elementum, at vehicula ligula congue. Maecenas eget convallis nisi, a vulputate tortor. Donec venenatis blandit semper. Sed aliquam iaculis ullamcorper.</p><p style=\"margin-bottom: 15px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Vestibulum tempor vehicula euismod. Vivamus arcu dolor, gravida id mi pellentesque, posuere vulputate mi. Sed at imperdiet nunc. Integer sodales venenatis sem, vel euismod odio pharetra a. Proin quis ultricies lacus, vitae gravida arcu. Aenean accumsan lacus iaculis, ultrices eros non, porttitor est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tellus arcu, tristique eget viverra a, imperdiet ac odio. Nulla facilisi. Morbi semper orci nec tortor gravida tempus blandit quis nisl. Mauris augue orci, gravida vehicula auctor at, commodo a massa. Donec sagittis finibus massa sed ultricies. Nam volutpat lorem lorem, convallis pulvinar augue eleifend a. Nullam cursus elit eget odio faucibus varius. Proin sed magna auctor, ullamcorper sapien sit amet, ullamcorper elit. Donec nunc nisl, varius nec auctor et, rhoncus quis nibh.</p><p style=\"margin-bottom: 15px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Aliquam iaculis tempor felis, eget molestie justo viverra sed. Suspendisse nec faucibus orci. Fusce placerat, enim vitae tincidunt pulvinar, arcu augue convallis velit, vel pulvinar magna mi nec lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque pretium consectetur magna, vitae feugiat eros mattis nec. Integer ac erat eget massa finibus porttitor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas quis convallis nunc, id tincidunt est. Integer molestie nulla ac sollicitudin euismod. Suspendisse facilisis est vitae neque sollicitudin lacinia. Phasellus sem arcu, dictum vitae augue ut, sodales accumsan risus. Fusce varius facilisis orci, ut porttitor quam blandit sed. Donec pretium fermentum velit non congue. Sed nulla ligula, pharetra a cursus ut, ullamcorper et odio. In dictum leo vel dui lacinia vehicula.</p>                                                                                ','2016-09-06');

/*!40000 ALTER TABLE `lythuyet` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
