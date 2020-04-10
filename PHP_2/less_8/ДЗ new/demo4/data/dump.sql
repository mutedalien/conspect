-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: catalog
-- ------------------------------------------------------
-- Server version	8.0.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `basket`
--

DROP TABLE IF EXISTS `basket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `basket` (
  `id` int(10) NOT NULL,
  `nameShort` varchar(30) NOT NULL,
  `nameFull` varchar(100) NOT NULL,
  `price` int(15) NOT NULL,
  `param` text NOT NULL,
  `weight` varchar(10) NOT NULL,
  `bigPhoto` varchar(50) NOT NULL,
  `miniPhoto` varchar(50) NOT NULL,
  `count` int(10) NOT NULL,
  `discount` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `basket`
--

LOCK TABLES `basket` WRITE;
/*!40000 ALTER TABLE `basket` DISABLE KEYS */;
/*!40000 ALTER TABLE `basket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `status` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `parent_id` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Category 1','1','0'),(2,'Category 2','1','1'),(3,'Category 3','1','1'),(4,'Category 4','1','0'),(5,'Category 5','1','2'),(6,'Category 6','1','5');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientinfo`
--

DROP TABLE IF EXISTS `clientinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `clientinfo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `timeOrder` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `discountCard` varchar(50) NOT NULL,
  `persons` varchar(50) NOT NULL,
  `pay` int(1) NOT NULL,
  `money` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `comment` text NOT NULL,
  `delivery` int(1) DEFAULT NULL,
  `desiredTime` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientinfo`
--

LOCK TABLES `clientinfo` WRITE;
/*!40000 ALTER TABLE `clientinfo` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `comment` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `fio` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (2,'admin','admin@mail.ru','adminadminadminadminadminv'),(3,'max','max@mail.ru','привет');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goods`
--

DROP TABLE IF EXISTS `goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `goods` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nameShort` varchar(30) NOT NULL,
  `nameFull` varchar(100) NOT NULL,
  `price` int(15) NOT NULL,
  `param` text NOT NULL,
  `bigPhoto` varchar(50) NOT NULL,
  `miniPhoto` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `discount` int(3) NOT NULL,
  `stickerFit` int(3) NOT NULL,
  `stickerHit` int(3) NOT NULL,
  `views` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods`
--

LOCK TABLES `goods` WRITE;
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` VALUES (13,'zapechennyj','Запеченный',270,'Тигровые креветки, хрустящий лук, острый сырный соус с чесноком.','img/batakon.jpeg','imgMini/batakon.jpeg','230',7,0,0,0),(14,'zapechennyj_s_lososem','Запеченный с лососем',260,'Лосось, хрустящий лук, острый сырный соус с чесноком.','img/zapechennyj_s_lososem.jpeg','imgMini/zapechennyj_s_lososem.jpeg','230',5,0,0,0),(15,'zapechennyj_so_snezhnym_krabom','Запеченный со снежным крабом',250,'Снежный краб, хрустящий лук, острый сырный соус с чесноком.','img/zapechennyj_so_snezhnym_krabom.jpeg','imgMini/zapechennyj_so_snezhnym_krabom.jpeg','230',3,0,0,0),(16,'zelenyj_roll','Зеленый ролл',200,'Огурец, томат, перец болгарский, укроп, салат, сыр','img/zelenyj_roll.jpeg','imgMini/zelenyj_roll.jpeg','240',0,0,0,0),(17,'joko','Йоко',325,'креветка, сыр, зеленый лук, томаго, икра лосося','img/joko.jpeg','imgMini/joko.jpeg','250',6,0,0,0),(18,'kaliforniya_s_krevetkoj','Калифорния с креветкой',325,'Креветки, авокадо, тобико,майонез','img/kaliforniya_s_krevetkoj.jpeg','imgMini/kaliforniya_s_krevetkoj.jpeg','250',0,0,0,0),(19,'kaliforniya_s_lososem','Калифорния с лососем',295,'Лосось, снежный краб, огурец, майонез, тобико','img/kaliforniya_s_lososem.jpeg','imgMini/kaliforniya_s_lososem.jpeg','260',3,0,0,0),(20,'kaliforniya','Калифорния',295,'Снежный краб, авокадо, тобико, майонез','img/kaliforniya.jpeg','imgMini/kaliforniya.jpeg','260',0,0,0,0),(21,'kanada','Канада',275,'лосось, снежный краб, зеленый лук, сыр, тобико','img/kanada.jpeg','imgMini/kanada.jpeg','260',5,0,0,0),(22,'kimono','Кимоно',265,'Тунец, тобико, такуан, сыр','img/kimono.jpeg','imgMini/kimono.jpeg','255',0,0,0,0),(23,'kiota','Киота',340,'Угорь, лосось, огурец, сыр, кунжут','img/kiota.jpeg','imgMini/kiota.jpeg','260',0,0,0,0),(24,'krab-krevetka','Краб-креветка',295,'Креветки, снежный краб, сыр, кунжут','img/krab-krevetka.jpeg','imgMini/krab-krevetka.jpeg','260',0,0,0,0),(25,'kunsej','Кунсей',275,'Семга, лосось х.к., тобико, сырный чипс, сыр','img/kunsej.jpeg','imgMini/kunsej.jpeg','245',1,0,0,0),(26,'kurasiku_s_lososem','Курасику с лососем',275,'Рисовая бумага, тобико, сыр, снежный краб, зеленый лук, лосось.','img/kurasiku_s_lososem.jpeg','imgMini/kurasiku_s_lososem.jpeg','260',0,0,0,0),(27,'kurasiku_s_tuncom','Курасику с тунцом',275,'Рисовая бумага, тунец, тобико, снежный краб','img/kurasiku_s_tuncom.jpeg','imgMini/kurasiku_s_tuncom.jpeg','250',0,0,0,0),(28,'lava_unagi','Лава унаги',275,'угорь, огурец, сыр, соус Лава','img/lava_unagi.jpeg','imgMini/lava_unagi.jpeg','250',0,0,0,0),(29,'lava_ehbi','Лава эби',295,'креветка, огурец, сыр, соус Лава','img/lava_ehbi.jpeg','imgMini/lava_ehbi.jpeg','275',2,0,0,0),(30,'lava','Лава',275,'Семга, огурец, сыр, соус лава','img/lava.jpeg','imgMini/lava.jpeg','280',0,0,0,0),(31,'maguro','Магуро',295,'Тунец, снежный краб, авокадо, сыр','img/maguro.jpeg','imgMini/maguro.jpeg','260',0,0,0,0),(32,'mehiko','Мехико',295,'угорь, лосось, сыр, тобико','img/mehiko.jpeg','imgMini/mehiko.jpeg','260',0,0,0,0),(33,'nagano','Нагано',335,'Угорь, снежный краб, икра лосося, сыр, кунжут','img/nagano.jpeg','imgMini/nagano.jpeg','260',0,0,0,0),(34,'nidzi','Нидзи',305,'Лосось, икра лосося, огурец, сыр','img/nidzi.jpeg','imgMini/nidzi.jpeg','270',0,0,0,0),(35,'raduga','Радуга',330,'Семга, тунец, снежный краб, икра лосося, салат, сыр','img/raduga.jpeg','imgMini/raduga.jpeg','260',5,0,0,0),(36,'roll_s_syrom_parmezan','Ролл с сыром пармезан',275,'Семга, огурец, сыр, соус пармезан','img/roll_s_syrom_parmezan.jpeg','imgMini/roll_s_syrom_parmezan.jpeg','270',0,0,0,0),(37,'roll-bekon','Ролл-бекон',280,'Тунец, снежный краб, бекон, салат, сыр','img/roll-bekon.jpeg','imgMini/roll-bekon.jpeg','265',0,0,0,0),(38,'samuraj','Самурай',275,'Угорь, такуан, сыр','img/samuraj.jpeg','imgMini/samuraj.jpeg','250',0,0,0,0),(39,'sensej','Сенсей',295,'Снежный краб, тобико, авокадо, сыр','img/sensej.jpeg','imgMini/sensej.jpeg','260',0,0,0,0),(40,'spring_roll_s_krevetkoj','Спринг ролл с креветкой',205,'рисовая бумага, креветка, сыр пармезан, болгарский перец, салат, снежный краб, соус спайси.','img/spring_roll_s_krevetkoj.jpeg','imgMini/spring_roll_s_krevetkoj.jpeg','100',5,0,0,0),(41,'spring_roll_s_lososem','Спринг ролл с лососем',195,'рисовая бумага, снежный краб, пармезан, болгарский перец, салат, лосось, соус спайси.','img/spring_roll_s_lososem.jpeg','imgMini/spring_roll_s_lososem.jpeg','100',0,0,0,0),(42,'tajfun','Тайфун',315,'Креветки, тобико, огурец, сыр','img/tajfun.jpeg','imgMini/tajfun.jpeg','250',0,0,0,0),(43,'tempura','Темпура',265,'Тигровые креветки в темпуре, тобико, острый соус','img/tempura.jpeg','imgMini/tempura.jpeg','200',3,0,0,1),(44,'tokio','Токио',325,'Лосось, угорь, тобико, огурец, сыр','img/tokio.jpeg','imgMini/tokio.jpeg','270',0,0,0,0),(45,'tomago_kani','Томаго кани',250,'Яичный блин, сливочный сыр, снежный краб, острый соус','img/tomago_kani.jpeg','imgMini/tomago_kani.jpeg','250',0,0,0,0),(46,'tomago_syaki','Томаго сяки',270,'Яичный блин, сыр, лосось','img/tomago_syaki.jpeg','imgMini/tomago_syaki.jpeg','250',4,0,0,0),(47,'tomago_unagi','Томаго унаги',275,'Яичный блин, угорь, сыр','img/tomago_unagi.jpeg','imgMini/tomago_unagi.jpeg','250',0,0,0,0),(48,'tomago_chiken','Томаго чикен',265,'Яичный блин, курица жаренная, салат, перец болгарский, соус фета.','img/tomago_chiken.jpeg','imgMini/tomago_chiken.jpeg','250',0,0,0,0),(49,'tomago_ehbi','Томаго эби',285,'Яичный блин, сыр, тигровые креветки','img/tomago_ehbi.jpeg','imgMini/tomago_ehbi.jpeg','260',0,0,0,0),(50,'tono','Тоно',325,'Лосось гриль, сыр, зеленый лук, тигровые креветки','img/tono.jpeg','imgMini/tono.jpeg','270',0,0,0,0),(51,'tortilya_ovoschnaya','Тортилья овощная',205,'Сырная лепешка, лист салата, перец болгарский, огурец,томат, такуан, сливочный сыр','img/tortilya_ovoschnaya.jpeg','imgMini/tortilya_ovoschnaya.jpeg','210',5,0,0,0),(52,'tortilya_s_kuricej','Тортилья с курицей',265,'Сырная лепешка, курица, салат, бекон, перец болгарский, огурец, соус фета.','img/tortilya_s_kuricej.jpeg','imgMini/tortilya_s_kuricej.jpeg','200',0,0,0,1),(53,'tortilya_s_lososem','Тортилья с лососем',265,'Лосось х.к., огурец, салат, сыр, сырная лепешка','img/tortilya_s_lososem.jpeg','imgMini/tortilya_s_lososem.jpeg','180',0,0,0,0),(54,'unagi_filadelfiya','Унаги филадельфия',285,'угорь, сыр, сыр, кунжут','img/unagi_filadelfiya.jpeg','imgMini/unagi_filadelfiya.jpeg','265',0,0,0,0),(55,'filadelfiya_lyuks','Филадельфия люкс',320,'Лосось, снежный краб, икра лосося, сыр','img/filadelfiya_lyuks.jpeg','imgMini/filadelfiya_lyuks.jpeg','275',5,0,0,0),(56,'filadelfiya_s_zapechennym_perc','Филадельфия с запеченным перцем',295,'Лосось,перец болгарский запеченый, водоросли чукка, сливочный сыр.','img/filadelfiya_s_zapechennym_percem.jpeg','imgMini/filadelfiya_s_zapechennym_percem.jpeg','280',6,0,0,3),(57,'filadelfiya_s_lososem','Филадельфия с лососем',285,'Лосось, огурец, сыр','img/filadelfiya_s_lososem.jpeg','imgMini/filadelfiya_s_lososem.jpeg','270',0,0,0,1),(58,'filadelfiya_s_tuncom','Филадельфия с тунцом',285,'Тунец, огурец, сыр','img/filadelfiya_s_tuncom.jpeg','imgMini/filadelfiya_s_tuncom.jpeg','270',0,0,0,0),(59,'fukusima','Фукусима',280,'Семга, огурец, перец обжаренный в сухарях, сливочный сыр, хрустящий лук','img/fukusima.jpeg','imgMini/fukusima.jpeg','285',0,0,0,0),(60,'hirosima','Хиросима',275,'семга х.к., зеленый лук, сыр,огурец, тобико','img/hirosima.jpeg','imgMini/hirosima.jpeg','260',5,0,1,16),(61,'cezar','Цезарь',265,'Курица жар., сыр сливочный, сыр пармезан перец болгарский, салат, кунжут.','img/cezar.jpeg','imgMini/cezar.jpeg','250',0,0,1,5),(62,'shahmaty','Шахматы',275,'Лосось, огурец, тобико, сыр','img/shahmaty.jpeg','imgMini/shahmaty.jpeg','260',5,1,1,72);
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idClient` int(11) NOT NULL,
  `idGood` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (42,59,19,1,'2019-10-20 21:08:35'),(43,5,14,1,'2019-10-20 21:15:15'),(44,5,15,1,'2019-10-20 21:15:15'),(45,5,16,1,'2019-10-20 21:15:15'),(46,7,14,1,'2019-10-20 21:15:28'),(47,7,15,1,'2019-10-20 21:15:28'),(48,7,16,1,'2019-10-20 21:15:28'),(49,61,14,1,'2019-10-20 21:16:28'),(50,61,15,1,'2019-10-20 21:16:28'),(51,61,16,1,'2019-10-20 21:16:28'),(52,5,15,1,'2019-10-20 22:14:56'),(53,5,62,1,'2019-10-20 22:14:56');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordertomanager`
--

DROP TABLE IF EXISTS `ordertomanager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `ordertomanager` (
  `idClient` int(10) NOT NULL DEFAULT '0',
  `idGood` int(10) NOT NULL DEFAULT '0',
  `count` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordertomanager`
--

LOCK TABLES `ordertomanager` WRITE;
/*!40000 ALTER TABLE `ordertomanager` DISABLE KEYS */;
INSERT INTO `ordertomanager` VALUES (7,14,3),(7,15,2),(7,16,2);
/*!40000 ALTER TABLE `ordertomanager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Главная'),(2,'О Магазине'),(3,'Каталог');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` varchar(45) DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (4,'admin','admin@mail.ru','admin','21232f297a57a5a743894a0e4a801fc3','user'),(5,'admin1',NULL,'admin1','$2y$10$os.RpWumXf4rN5sd6uC79.VuuaO0lHKm/kWJjrd/Mr8AElSP6.Wtm','admin'),(7,'admin2','denoms@bk.ru','admin2','$2y$10$wwBUbfJfiMcotZDjD5jobu0dxdpBN97TS/eWklWwjB2FSd8211m6O','user'),(40,'admin24',NULL,'admin24','$2y$10$Q3Tosz7lKWCrMErZuwPQqu8dghXIE3hecrW8UhdOvKxawnnhCoJ5y','user'),(41,'NotRegister',NULL,'NotRegister','$2y$10$5woPIoT4fCgvd10uhgcSieo5l0CjDaKpHE1c2MiaGSo/Pgqne7yWm','user'),(42,'NoReguser',NULL,'NoReguser','$2y$10$O9PGSHVg8FdFa0caLwjjA.EHg4c3BigliL31ZxlWvbR5SbFyHKQA.','user'),(60,'',NULL,'','$2y$10$eF0U9fq6ergVRptrm7iBp.n/MlOePcLNViNtEG7ZlKkHEBa/j69Ny','user'),(61,'asd',NULL,'asd','$2y$10$M0mYCnR6LIO7j5Mz1xpL9e2L//GhyuvVClGDO8342r2Dhwae3QX.2','user');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-20 22:27:52
