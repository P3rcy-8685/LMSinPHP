-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: library
-- ------------------------------------------------------
-- Server version	8.0.29-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `books` (
  `Sno` int NOT NULL,
  `Book` varchar(40) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'Percy_Jackson',121),(2,'URMOM',123),(4,'URDAD',123),(13,'Harry+Pooter',121),(243,'ok',0);
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `issued`
--

DROP TABLE IF EXISTS `issued`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `issued` (
  `name` varchar(200) DEFAULT NULL,
  `Issued_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `issued`
--

LOCK TABLES `issued` WRITE;
/*!40000 ALTER TABLE `issued` DISABLE KEYS */;
INSERT INTO `issued` VALUES ('Percy_Jackson','21122050');
/*!40000 ALTER TABLE `issued` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requested`
--

DROP TABLE IF EXISTS `requested`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `requested` (
  `name` varchar(200) DEFAULT NULL,
  `Issued_by` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requested`
--

LOCK TABLES `requested` WRITE;
/*!40000 ALTER TABLE `requested` DISABLE KEYS */;
INSERT INTO `requested` VALUES ('URDAD','123','requested'),('URDAD','123','requested'),('Harry+Pooter','123','requested'),('Percy_Jackson','1','requested'),('Harry+Pooter','1','requested'),('Harry+Pooter','1','requested'),('ok','1','requested');
/*!40000 ALTER TABLE `requested` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `enrol` char(8) NOT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `salt` varchar(50) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`enrol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('','6e7295393f39c1d23de1b49c016265be44a45e066b1a9597abb50cae29b56f8c','','EYdwm',0),('123','51b84c814673a5fa02611b1237aabb2127d76cb9a20036a538a3711b4d98b8d7','123','ZYlk8',1),('1234','dd48c92794298855d4633407522395247bf37eaee583a3d66dcd62717919fb5d','1234','Lr8nG',0),('123456','0d4f8ca44c64d21cee621e8caea80275c504290879aaf3ac05dc25ebd95f66a2','Random','K7F1C',-1),('21122050','4d598c49a4f299fd0a1e9412876778fddc309b245772159e17a8822d685ecec4','Vansh Uppal','LzUZi',0),('2511','75828582671f1d528e56c7cd2904e77da67088f425aaa94299a2a81edc3f63de','2511','JXYjA',1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-13 22:25:47
