-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: galery
-- ------------------------------------------------------
-- Server version	5.7.25

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cart_idx` (`user_id`),
  KEY `fk_products_idx` (`product_id`),
  CONSTRAINT `fk_products` FOREIGN KEY (`product_id`) REFERENCES `images` (`img_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES (15,3,1,1),(56,2,9,31),(57,2,1,1);
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compr_img_link`
--

DROP TABLE IF EXISTS `compr_img_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `compr_img_link` (
  `link_id` int(11) NOT NULL AUTO_INCREMENT,
  `folder` varchar(45) NOT NULL,
  `path` varchar(45) NOT NULL,
  PRIMARY KEY (`link_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compr_img_link`
--

LOCK TABLES `compr_img_link` WRITE;
/*!40000 ALTER TABLE `compr_img_link` DISABLE KEYS */;
INSERT INTO `compr_img_link` VALUES (1,'img/compressed/','product1.png'),(2,'img/compressed/','product2.png'),(3,'img/compressed/','product3.png'),(4,'img/compressed/','product4.png'),(5,'img/compressed/','product5.png'),(6,'img/compressed/','product6.png');
/*!40000 ALTER TABLE `compr_img_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discount`
--

DROP TABLE IF EXISTS `discount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `discount` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discount`
--

LOCK TABLES `discount` WRITE;
/*!40000 ALTER TABLE `discount` DISABLE KEYS */;
INSERT INTO `discount` VALUES (1,10),(2,15),(3,20);
/*!40000 ALTER TABLE `discount` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) NOT NULL,
  `user_email` varchar(45) DEFAULT NULL,
  `user_text` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (1,'Alex','maas@mail.comrad','hello');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `link_id` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `view_count` int(11) NOT NULL,
  `compr_link_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `good_name` varchar(45) NOT NULL,
  `discount_id` int(11) NOT NULL,
  PRIMARY KEY (`img_id`),
  KEY `fk_link_idx` (`link_id`),
  KEY `fk_copmr_link_idx` (`compr_link_id`),
  KEY `fk_discount_idx` (`discount_id`),
  CONSTRAINT `fk_compressed_link` FOREIGN KEY (`compr_link_id`) REFERENCES `compr_img_link` (`link_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_discount` FOREIGN KEY (`discount_id`) REFERENCES `discount` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_link` FOREIGN KEY (`link_id`) REFERENCES `img_link` (`link_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'Product1',1,310,464,31,1,1000,'ElVi Charger',1),(2,'Product2',2,460,689,23,2,2000,'Business Line Charger',1),(3,'Product3',3,609,727,4,3,3000,'Public Line Charger',2),(4,'Product4',4,558,717,43,4,4000,'DC50 Charger',1),(5,'Product5',5,498,800,2,5,5000,'Home Line Charger',3),(6,'Product6',6,370,659,2,6,6000,'DC100 Charging module',3),(7,'Product7',6,370,659,0,6,6000,'DC100-1',3),(8,'Product8',6,370,659,0,6,6000,'DC100-2',3),(9,'Product9',6,370,659,0,6,6000,'DC100-3',3),(10,'Product10',6,370,659,0,6,6000,'DC100-4',3),(11,'Product11',6,370,659,0,6,6000,'DC100-5',3),(12,'Product12',6,370,659,0,6,6000,'DC100-6',3),(13,'Product13',6,370,659,0,6,6000,'DC100-7',3),(14,'Product14',6,370,659,0,6,6000,'DC100-8',3),(15,'Product15',6,370,659,0,6,6000,'DC100-9',3);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `img_link`
--

DROP TABLE IF EXISTS `img_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `img_link` (
  `link_id` int(11) NOT NULL AUTO_INCREMENT,
  `folder` varchar(45) NOT NULL,
  `path` varchar(45) NOT NULL,
  PRIMARY KEY (`link_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `img_link`
--

LOCK TABLES `img_link` WRITE;
/*!40000 ALTER TABLE `img_link` DISABLE KEYS */;
INSERT INTO `img_link` VALUES (1,'img/','product1.png'),(2,'img/','product2.png'),(3,'img/','product3.png'),(4,'img/','product4.png'),(5,'img/','product5.png'),(6,'img/','product6.png');
/*!40000 ALTER TABLE `img_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,31,1,2),(2,31,2,1),(3,31,1,1);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) NOT NULL,
  `user_login` varchar(45) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Alexey','MmM','$2y$12$PiScAFj1dCI77WMG0wHFjeFp1Koylz/YsqpZkFJMcnd5e8BfCwE.C'),(2,'Odmen','admin','$2y$10$fD8tukWQxAdq.D2PzLF9w.5IzL.gSjd8k.T7ubXpN08fOUtjTVmr6'),(3,'George','george','$2y$10$cx1nXl0aCRx./kjw3Rv/6uNQDt27uaUTqE7UpDh.AISdZDerC3FRy'),(4,'MAD','mad','$2y$10$pT5K.gLN01RP9nnv.1rdkO3GiXnLurQ5xHdgqExU1qSYGopdRLYEO'),(5,'Really New','newUser','$2y$10$oQP0biLI46mABn8wGatbqebt..jDOk.4.5U4zF1jeuk9FCGL.98aa'),(6,'Alex1','Alex1','$2y$10$Zhq45xc0ekdMTbm9uJkoM.Od5rtpZ1I3HjlwE40Q4YoWFEr9ZCPze'),(7,'Alex1','Alex1','$2y$10$c7inVPFyq7R1GVMSYP9iguPW7XdSPeeM9CE0IO.TepxOB6uz97uwC'),(8,'Alex1','Alex1','$2y$10$H7iHAzvCq8A2RQCmtNUWyuuInhB8kBiIt3jcUGPQ1/7OzGVAlt48e'),(9,'123Mm','123Mm','$2y$10$CnQJ.81hAHyaRZ9BrPviK.c/v82aPFgLVLRDNsyPDl3cxA2Lq0Q0i'),(10,'Гость','',''),(31,'Гость','',''),(32,'Гость','',''),(33,'Гость','',''),(34,'Гость','',''),(35,'Гость','',''),(36,'Гость','',''),(37,'Гость','',''),(38,'Гость','',''),(39,'Гость','',''),(40,'Гость','',''),(41,'Гость','',''),(42,'Гость','',''),(43,'Гость','',''),(44,'Гость','',''),(45,'Гость','',''),(46,'Гость','',''),(47,'Гость','',''),(48,'Гость','',''),(49,'Гость','',''),(50,'Гость','',''),(51,'Гость','',''),(52,'Гость','',''),(53,'Гость','',''),(54,'Гость','','');
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

-- Dump completed on 2019-12-12  1:04:58
