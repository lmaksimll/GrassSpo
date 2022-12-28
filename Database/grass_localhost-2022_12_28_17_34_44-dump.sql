-- MariaDB dump 10.19  Distrib 10.4.27-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: grass
-- ------------------------------------------------------
-- Server version	10.4.27-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `buyer`
--

DROP TABLE IF EXISTS `buyer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buyer` (
  `id_buyer` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_buyer`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buyer`
--

LOCK TABLES `buyer` WRITE;
/*!40000 ALTER TABLE `buyer` DISABLE KEYS */;
INSERT INTO `buyer` VALUES (1,'Serega'),(2,'Maks'),(3,'Ilia'),(4,'Vitalia'),(5,'Evelina'),(6,'Daria'),(7,'Vitia'),(8,'Roma'),(9,'Mark'),(10,'Vlodimir');
/*!40000 ALTER TABLE `buyer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `composition` varchar(255) NOT NULL,
  `mass` int(11) NOT NULL,
  PRIMARY KEY (`id_product`),
  KEY `product_buyer_null_fk` (`buyer_id`),
  CONSTRAINT `product_buyer_null_fk` FOREIGN KEY (`buyer_id`) REFERENCES `buyer` (`id_buyer`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'templates/images/check1.jpeg','1',2,'gel',45),(2,'templates/images/check2.jpeg','2',1,'2 gel',90),(12,'templates/images/check3.jpeg','3',4,'ball',23),(13,'templates/images/check4.jpeg','4',4,'doll',54),(14,'templates/images/check5.jpeg','5',3,'car',64),(15,'templates/images/check6.jpeg','6',7,'train',754),(16,'templates/images/check7.jpeg','7',7,'blocks',33),(17,'templates/images/check8.jpeg','8',9,'chair',252),(18,'templates/images/check9.jpeg','9',10,'table',8),(19,'templates/images/check10.jpeg','10',2,'2 bed',22),(20,'templates/images/check11.jpeg','11',6,'armchair',567),(21,'templates/images/check12.jpeg','12',8,'dress',789),(22,'templates/images/check13.jpeg','13',3,'shirt',134),(23,'templates/images/check14.jpeg','14',5,'3 pen',55),(24,'templates/images/check15.jpeg','15',7,'pencil',99),(25,'templates/images/check16.jpeg','16',1,'cat',24),(26,'templates/images/check17.jpeg','17',4,'spoon',522),(27,'templates/images/check18.jpeg','18',5,'fork',666),(28,'templates/images/check19.jpeg','19',1,'fish',26),(29,'templates/images/check20.jpeg','10',7,'milk',777);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-28 17:34:44
