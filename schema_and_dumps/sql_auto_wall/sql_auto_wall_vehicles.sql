CREATE DATABASE  IF NOT EXISTS `sql_auto_wall` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `sql_auto_wall`;
-- MariaDB dump 10.19  Distrib 10.4.20-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: sql_auto_wall
-- ------------------------------------------------------
-- Server version	10.4.20-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `vehicles`
--

DROP TABLE IF EXISTS `vehicles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehicles` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `manufacturer` varchar(32) DEFAULT NULL,
  `condition` varchar(16) DEFAULT NULL,
  `retail_price` varchar(32) DEFAULT NULL,
  `savings_up_to` varchar(32) DEFAULT NULL,
  `sales_price` varchar(32) DEFAULT NULL,
  `stock_number` int(32) DEFAULT NULL,
  `mileage` int(2) DEFAULT NULL,
  `image_path` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicles`
--

LOCK TABLES `vehicles` WRITE;
/*!40000 ALTER TABLE `vehicles` DISABLE KEYS */;
INSERT INTO `vehicles` VALUES (1,'\'2022 Chevrolet Traverse High Country\'','\'Chevrolet\'','\'New\'','\'$55,115.00\'','\'$1,000.00\'','\'$54,115.00\'',168836,3,'\'2022_Chevrolet_Traverse_High_Country.jpg\''),(2,'\'2022 GMC Sierra SLE\'','\'GMC\'','\'New\'','\'$69,545.00\'',NULL,'\'$69,545.00\'',302830,4,'\'2022_GMC_Sierra_SLE.jpg\''),(3,'\'2022 Chevrolet Colorado 4WD Z71\'','\'Chevrolet\'','\'New\'','\'$41,345.00\'','\'$750.00\'','\'$40,595.00\'',203896,3,'\'2022_Chevrolet_Colorado_4WD_Z71.jpg\''),(4,'\'2022 Chevrolet Colorado 2WD LT\'','\'Chevrolet\'','\'New\'','\'$37,120.00\'','\'$750.00\'','\'$36,370.00\'',208592,3,'\'2022_Chevrolet_Colorado_2WD_LT.jpg\''),(5,'\'2022 GMC Sierra Denali\'','\'GMC\'','\'New\'','\'$85,420.00\'',NULL,'\'$85,420.00\'',309462,3,'\'2022_GMC_Sierra_Denali.jpg\''),(6,'\'2022 GMC Sierra SLE\'','\'GMC\'','\'New\'','\'$70,895.00\'',NULL,'\'$70,895.00\'',309725,3,'\'2022_GMC_Sierra_Denali.jpg\''),(7,'\'2022 Chevrolet Camaro 1SS\'','\'Chevrolet\'','\'New\'','\'$48,275.00\'',NULL,'\'$48,275.00\'',129854,3,'\'2022_GMC_Sierra_Denali.jpg\''),(8,'\'2022 Chevrolet Colorado 2WD LT\'','\'Chevrolet\'','\'New\'','\'$34,940.00\'','\'$750.00\'','\'$34,190.00\'',222822,3,'\'2022_GMC_Sierra_Denali.jpg\''),(9,'\'2022 Chevrolet Tahoe LS\'','\'Chevrolet\'','\'New\'','\'$57,330.00\'',NULL,'\'$57,330.00\'',317510,4,'\'2022_Chevrolet_Tahoe_LS.jpg\''),(10,'\'2022 GMC Yukon SLE\'','\'GMC\'','\'New\'','\'$59,190.00\'',NULL,'\'59,190.00\'',320325,4,'\'2022_GMC_Yukon_SLE.jpg\''),(11,'\'2022 Chevrolet Tahoe LT\'','\'Chevrolet\'','\'New\'','\'$63,790.00\'',NULL,'\'$63,790.00\'',330421,3,'\'2022_Chevrolet_Tahoe_LT.jpg\''),(12,'\'2022 Buick Enclave Premium\'','\'Buick\'','\'New\'','\'$55,010.00\'',NULL,'\'$55,010.00\'',186230,4,'\'2022_Buick_Enclave_Premium.jpg\''),(13,'\'2022 Chevrolet Suburban LT\'','\'Chevrolet\'','\'New\'','\'$68,590.00\'',NULL,'\'$68,590.00\'',338073,3,'\'2022_Chevrolet_Suburban_LT.jpg\''),(14,'\'2022 Chevrolet Equinox LT\'','\'Chevrolet\'','\'New\'','\'$30,340.00\'','\'$1,250.00\'','\'$29,090.00\'',246532,3,'\'2022_Chevrolet_Equinox_LT.jpg\''),(15,'\'2022 Chevrolet Suburban LT\'','\'Chevrolet\'','\'New\'','\'$66,490.00\'',NULL,'\'$66,490.00\'',346325,3,'\'2022_Chevrolet_Suburban_LT.jpg\''),(16,'\'2022 Chevrolet Silverado High Country\'','\'Chevrolet\'','\'New\'','\'$81,835.00\'','\'$500.00\'','\'$81,335.00\'',307800,3,'\'2022_Chevrolet_Silverado_High_Country.jpg\''),(17,'\'2022 Chevrolet Silverado LT\'','\'Chevrolet\'','\'New\'','\'$55,380.00\'',NULL,'\'$55,380.00\'',528725,5,'\'2022_Chevrolet_Silverado_LT.jpg\''),(18,'\'2022 GMC Sierra Denali\'','\'GMC\'','\'New\'','\'$76,830.00\'',NULL,'\'$76,830.00\'',518687,3,'\'2022_GMC_Sierra_Denali.jpg\''),(19,'\'2022 Chevrolet Silverado LT\'','\'Chevrolet\'','\'New\'','\'$70,915.00\'','\'$500.00\'','\'$70,415.00\'',324931,3,'\'2022_Chevrolet_Silverado_LT.jpg\''),(20,'\'2022 Chevrolet Silverado RST\'','\'Chevrolet\'','\'New\'','\'$57,190.00\'',NULL,'\'$57,190.00\'',503969,3,'\'2022_Chevrolet_Silverado_RST.jpg\''),(21,'\'2022 GMC Sierra Elevation\'','\'GMC\'','\'New\'','\'$61,415.00\'',NULL,'\'$61,415.00\'',571957,3,'\'2022_GMC_Sierra_Elevation.jpg\'');
/*!40000 ALTER TABLE `vehicles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-15 17:39:46
