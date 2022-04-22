-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: Films
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

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
-- Table structure for table `Actors`
--

DROP TABLE IF EXISTS `Actors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Actors` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Surname` varchar(15) DEFAULT NULL,
  `Name` varchar(15) DEFAULT NULL,
  `Age` int DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Actors`
--

LOCK TABLES `Actors` WRITE;
/*!40000 ALTER TABLE `Actors` DISABLE KEYS */;
INSERT INTO `Actors` VALUES (1,'Каріо','Чеки',69),(2,'Жиллен','Марі',47),(3,'Ельмосніно','Ерік',58),(4,'Лейн','Дайан',57),(5,'Болдуин','Алек',64),(6,'Бинке','Ханна',23),(7,'Фробёсс','Корнелия',79),(8,'Прюкнер','Тило',82),(9,'Ді_Капріо','Леонардо',48),(10,'Вінслет','Кейт',47),(11,'Пекстон','Білл',67);
/*!40000 ALTER TABLE `Actors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Directors`
--

DROP TABLE IF EXISTS `Directors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Directors` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Surname` varchar(15) DEFAULT NULL,
  `Name` varchar(15) DEFAULT NULL,
  `Age` int DEFAULT NULL,
  `Is_famous` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Directors`
--

LOCK TABLES `Directors` WRITE;
/*!40000 ALTER TABLE `Directors` DISABLE KEYS */;
INSERT INTO `Directors` VALUES (1,'Гарнье','Катя фон',55,0),(2,'Коппола','Элинор',85,0),(3,'Імберт','Деніс',50,0),(4,'Кемерон','Джеймс',67,1);
/*!40000 ALTER TABLE `Directors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Films`
--

DROP TABLE IF EXISTS `Films`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Films` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Title_of` varchar(20) DEFAULT NULL,
  `Releas_date` year DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Films`
--

LOCK TABLES `Films` WRITE;
/*!40000 ALTER TABLE `Films` DISABLE KEYS */;
INSERT INTO `Films` VALUES (1,'Тітанік',1997),(2,'Оствінд',2013),(3,'Париж_почекає',2017),(4,'Мій_Вовк',2022);
/*!40000 ALTER TABLE `Films` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-22 16:09:04
