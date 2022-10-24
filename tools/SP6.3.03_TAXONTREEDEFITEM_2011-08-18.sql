-- MySQL dump 10.13  Distrib 5.1.50, for Win32 (ia32)
--
-- Host: localhost    Database: sp6_taxontreetesting
-- ------------------------------------------------------
-- Server version	5.1.50-community

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
-- Table structure for table `taxontreedefitem`
--

DROP TABLE IF EXISTS `taxontreedefitem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `taxontreedefitem` (
  `TaxonTreeDefItemID` int(11) NOT NULL AUTO_INCREMENT,
  `TimestampCreated` datetime NOT NULL,
  `TimestampModified` datetime DEFAULT NULL,
  `Version` int(11) DEFAULT NULL,
  `FormatToken` varchar(32) DEFAULT NULL,
  `FullNameSeparator` varchar(32) DEFAULT NULL,
  `IsEnforced` bit(1) DEFAULT NULL,
  `IsInFullName` bit(1) DEFAULT NULL,
  `Name` varchar(64) NOT NULL,
  `RankID` int(11) NOT NULL,
  `Remarks` text,
  `TextAfter` varchar(64) DEFAULT NULL,
  `TextBefore` varchar(64) DEFAULT NULL,
  `ModifiedByAgentID` int(11) DEFAULT NULL,
  `ParentItemID` int(11) DEFAULT NULL,
  `TaxonTreeDefID` int(11) NOT NULL,
  `CreatedByAgentID` int(11) DEFAULT NULL,
  `Title` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`TaxonTreeDefItemID`),
  KEY `FKF29A82307699B003` (`CreatedByAgentID`),
  KEY `FKF29A82306A76BE4B` (`ParentItemID`),
  KEY `FKF29A8230EFA9D5F8` (`TaxonTreeDefID`),
  KEY `FKF29A82305327F942` (`ModifiedByAgentID`),
  CONSTRAINT `FKF29A82305327F942` FOREIGN KEY (`ModifiedByAgentID`) REFERENCES `agent` (`AgentID`),
  CONSTRAINT `FKF29A82306A76BE4B` FOREIGN KEY (`ParentItemID`) REFERENCES `taxontreedefitem` (`TaxonTreeDefItemID`),
  CONSTRAINT `FKF29A82307699B003` FOREIGN KEY (`CreatedByAgentID`) REFERENCES `agent` (`AgentID`),
  CONSTRAINT `FKF29A8230EFA9D5F8` FOREIGN KEY (`TaxonTreeDefID`) REFERENCES `taxontreedef` (`TaxonTreeDefID`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taxontreedefitem`
--

LOCK TABLES `taxontreedefitem` WRITE;
/*!40000 ALTER TABLE `taxontreedefitem` DISABLE KEYS */;
INSERT INTO `taxontreedefitem` VALUES (1,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ','',NULL,'Life',0,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL),(2,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ','',NULL,'Kingdom',10,NULL,NULL,NULL,NULL,1,1,NULL,NULL),(3,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ',NULL,NULL,'Subkingdom',20,NULL,NULL,NULL,NULL,2,1,NULL,NULL),(4,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ','',NULL,'Division',30,NULL,NULL,NULL,NULL,3,1,NULL,NULL),(5,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ',NULL,NULL,'Subdivision',40,NULL,NULL,NULL,NULL,4,1,NULL,NULL),(6,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ','',NULL,'Class',60,NULL,NULL,NULL,NULL,5,1,NULL,NULL),(7,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ',NULL,NULL,'Subclass',70,NULL,NULL,NULL,NULL,6,1,NULL,NULL),(8,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ','',NULL,'Order',100,NULL,NULL,NULL,NULL,7,1,NULL,NULL),(9,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ',NULL,NULL,'Suborder',110,NULL,NULL,NULL,NULL,8,1,NULL,NULL),(10,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ','',NULL,'Family',140,NULL,NULL,NULL,NULL,9,1,NULL,NULL),(11,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ',NULL,NULL,'Subfamily',150,NULL,NULL,NULL,NULL,10,1,NULL,NULL),(12,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ',NULL,NULL,'Tribe',160,NULL,NULL,NULL,NULL,11,1,NULL,NULL),(13,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ',NULL,NULL,'Subtribe',170,NULL,NULL,NULL,NULL,12,1,NULL,NULL),(14,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ','','','Genus',180,NULL,NULL,NULL,NULL,13,1,NULL,NULL),(15,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ',NULL,NULL,'Subgenus',190,NULL,NULL,NULL,NULL,14,1,NULL,NULL),(16,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ',NULL,NULL,'Section',200,NULL,NULL,NULL,NULL,15,1,NULL,NULL),(17,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ',NULL,NULL,'Subsection',210,NULL,NULL,NULL,NULL,16,1,NULL,NULL),(18,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ','','','Species',220,NULL,NULL,NULL,NULL,17,1,NULL,NULL),(19,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ',NULL,'','Subspecies',230,NULL,NULL,'ssp. ',NULL,18,1,NULL,NULL),(20,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ',NULL,'','Variety',240,NULL,NULL,'var. ',NULL,19,1,NULL,NULL),(21,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ',NULL,'','Subvariety',250,NULL,NULL,'subvar. ',NULL,20,1,NULL,NULL),(22,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ',NULL,'','Forma',260,NULL,NULL,'f. ',NULL,21,1,NULL,NULL),(23,'2010-01-14 15:59:20','2010-01-14 15:59:20',1,NULL,' ',NULL,'','Subforma',270,NULL,NULL,'subf. ',NULL,22,1,NULL,NULL);
/*!40000 ALTER TABLE `taxontreedefitem` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-08-19 10:18:18
