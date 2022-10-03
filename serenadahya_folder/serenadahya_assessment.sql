-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: serenadahya_assessment
-- ------------------------------------------------------
-- Server version 	8.0.30-0ubuntu0.20.04.2
-- Date: Mon, 03 Oct 2022 01:39:17 +0000

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40101 SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `drink`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `drink` (
  `drink_id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `drink` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `cost` float(4,2) NOT NULL,
  `calories` smallint unsigned NOT NULL,
  PRIMARY KEY (`drink_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drink`
--

LOCK TABLES `drink` WRITE;
/*!40000 ALTER TABLE `drink` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `drink` VALUES (1,'Pump Water',3.50,0),(2,'Ice Tea',4.00,77),(3,'E2',2.80,42),(4,'Keri Juice',3.30,51),(5,'Powerade (sugar-free)',4.30,25),(6,'Hot Chocolate (small)',3.80,77),(7,'Hot Chocolate (regular)',4.00,77),(8,'Hot Chocolate (large)',4.50,77),(9,'Espresso Coffee (small)',3.80,9),(10,'Espresso Coffee (regular)',4.00,9),(11,'Espresso Coffee (large)',4.50,9),(12,'Long Black ',3.50,6),(13,'Short Black',3.50,11),(14,'Herbal Tea',3.00,37),(15,'English Breakfast Tea with Milk',3.50,10);
/*!40000 ALTER TABLE `drink` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `drink` with 15 row(s)
--

--
-- Table structure for table `food`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `food` (
  `food_id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `food` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cost` float(4,2) NOT NULL,
  `calories` smallint unsigned NOT NULL,
  `vegetarian` varchar(3) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `sweet_savoury` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`food_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `food`
--

LOCK TABLES `food` WRITE;
/*!40000 ALTER TABLE `food` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `food` VALUES (1,'Beef Nacho',5.50,352,'No','Savoury'),(2,'Bean Nacho',5.50,228,'Yes','Savoury'),(3,'Vegetarian Sausage Roll',3.00,123,'Yes','Savoury'),(4,'Bacon and Egg Slice',5.00,117,'No','Savoury'),(5,'Sandwich',4.50,304,'No','Savoury'),(6,'Teriyaki Chicken on Rice',6.00,104,'No','Savoury'),(7,'Filled Croissant',5.00,292,'Yes','Savoury'),(8,'Muffin',3.50,379,'Yes','Sweet'),(9,'Slice',3.50,470,'Yes','Sweet'),(10,'Lolly Cake',1.80,464,'Yes','Sweet'),(11,'Chocolate Chip Cookies',2.00,488,'Yes','Sweet'),(12,'Afghan',3.00,478,'Yes','Sweet'),(13,'Jelly',1.80,62,'No','Sweet'),(14,'Salad',4.50,27,'Yes','Savoury'),(15,'Ham and Cheese Panini',5.00,251,'No','Savoury'),(16,'Chicken, Cranberry and Brie Panini',5.00,283,'No','Savoury'),(17,'Ham and Cheese Toasted Sandwich',3.00,241,'No','Savoury'),(18,'Cheese Toasted Sandwich',2.50,350,'Yes','Savoury'),(19,'Berry Muesli',4.00,200,'Yes','Savoury'),(20,'Gourmet Sandwich',5.50,286,'No','Savoury'),(21,'Sushi (4 Pack)',5.00,149,'Yes','Savoury'),(22,'Scones',3.50,353,'Yes','Savoury'),(23,'Brownie',3.50,466,'Yes','Sweet'),(24,'Cake',4.00,371,'Yes','Sweet'),(25,'Waffle',3.00,291,'Yes','Sweet'),(26,'Eclairs',4.00,262,'Yes','Sweet'),(27,'Fruit Salad',4.50,50,'Yes','Savoury');
/*!40000 ALTER TABLE `food` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `food` with 27 row(s)
--

--
-- Table structure for table `sort`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sort` (
  `sort_id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `sort` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`sort_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sort`
--

LOCK TABLES `sort` WRITE;
/*!40000 ALTER TABLE `sort` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `sort` VALUES (1,'Name: A to Z'),(2,'Name: Z to A'),(3,'Cost: High to Low'),(4,'Cost: Low to High'),(5,'Calories: High to Low'),(6,'Calories: Low to High');
/*!40000 ALTER TABLE `sort` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `sort` with 6 row(s)
--

--
-- Table structure for table `special`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `special` (
  `special_id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `food_id` tinyint unsigned NOT NULL,
  `drink_id` tinyint unsigned NOT NULL,
  `calories` smallint unsigned NOT NULL,
  `cost` float(4,2) NOT NULL,
  `day` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`special_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `special`
--

LOCK TABLES `special` WRITE;
/*!40000 ALTER TABLE `special` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `special` VALUES (1,20,4,337,6.80,'Monday'),(2,4,7,194,7.00,'Tuesday'),(3,7,5,347,7.30,'Wedneday'),(4,2,3,270,6.30,'Thursday'),(5,21,2,226,7.00,'Friday');
/*!40000 ALTER TABLE `special` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `special` with 5 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET AUTOCOMMIT=@OLD_AUTOCOMMIT */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Mon, 03 Oct 2022 01:39:17 +0000
