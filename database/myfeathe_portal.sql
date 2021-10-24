-- MySQL dump 10.13  Distrib 5.7.23-23, for Linux (x86_64)
--
-- Host: localhost    Database: myfeathe_portal
-- ------------------------------------------------------
-- Server version	5.7.23-23

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
/*!50717 SELECT COUNT(*) INTO @rocksdb_has_p_s_session_variables FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'performance_schema' AND TABLE_NAME = 'session_variables' */;
/*!50717 SET @rocksdb_get_is_supported = IF (@rocksdb_has_p_s_session_variables, 'SELECT COUNT(*) INTO @rocksdb_is_supported FROM performance_schema.session_variables WHERE VARIABLE_NAME=\'rocksdb_bulk_load\'', 'SELECT 0') */;
/*!50717 PREPARE s FROM @rocksdb_get_is_supported */;
/*!50717 EXECUTE s */;
/*!50717 DEALLOCATE PREPARE s */;
/*!50717 SET @rocksdb_enable_bulk_load = IF (@rocksdb_is_supported, 'SET SESSION rocksdb_bulk_load = 1', 'SET @rocksdb_dummy_bulk_load = 0') */;
/*!50717 PREPARE s FROM @rocksdb_enable_bulk_load */;
/*!50717 EXECUTE s */;
/*!50717 DEALLOCATE PREPARE s */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `Id` int(25) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `passcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(25) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5010 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`Id`, `username`, `passcode`, `role`) VALUES (1,'admin','admin1234',1),(2,'manager','manager1234',2),(5001,'tanvir.rafee405@gmail.com','01871752332 ',3),(5002,'01620326546s@gmail.com','rifat@123',3),(5003,'debashis@myfeatherland.com','Feather@123 ',3),(5004,'zaeemhasan007@gmail.com','1041 ',3),(5005,'zaeemhasan007007@gmail.com','12345 ',3),(5006,'deba@gmail.com','123 ',3),(5007,'debashis@gmail.com','123 ',3),(5008,'tahir.ewu@gmail.com','56242526',3),(5009,'tanvir.rafee405@gmail.com','01749202339 ',3);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendance` (
  `Id` int(255) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `month` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`,`date`,`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendance`
--

LOCK TABLES `attendance` WRITE;
/*!40000 ALTER TABLE `attendance` DISABLE KEYS */;
INSERT INTO `attendance` (`Id`, `name`, `phone`, `year`, `month`, `date`, `status`) VALUES (5001,'tanvir.rafee405@gmail.com','01871752332 ','2021','10','1','Annual_Leave'),(5001,'tanvir.rafee405@gmail.com','01871752332 ','2021','10','1','Sick_Leave'),(5001,'tanvir.rafee405@gmail.com','01871752332 ','2021','10','3','Sick_Leave'),(5007,'debashis@gmail.com','123 ','2021','10','1','Annual_Leave'),(5007,'debashis@gmail.com','123 ','2021','10','13','Sick_Leave'),(5007,'debashis@gmail.com','123 ','2021','10','14','Sick_Leave'),(5007,'debashis@gmail.com','123 ','2021','10','15','Sick_Leave'),(5007,'debashis@gmail.com','123 ','2021','10','2','Compoff'),(5007,'debashis@gmail.com','123 ','2021','10','4','Sick_Leave'),(5007,'debashis@gmail.com','123 ','2021','10','5','Sick_Leave'),(5008,'tahir.ewu@gmail.com','12345 ','2021','10','1','Sick_Leave');
/*!40000 ALTER TABLE `attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_list`
--

DROP TABLE IF EXISTS `employee_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee_list` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_list`
--

LOCK TABLES `employee_list` WRITE;
/*!40000 ALTER TABLE `employee_list` DISABLE KEYS */;
INSERT INTO `employee_list` (`Id`, `name`, `phone`, `email`) VALUES (1,'Debashis','123 ','deba@gmail.com'),(2,'debashis','123 ','debashis@gmail.com'),(3,'tahir','099878799 ','tahir.ewu@gmail.com'),(4,'Tanvir Ahmed','01871752332 ','tanvir.rafee405@gmail.com');
/*!40000 ALTER TABLE `employee_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leave_balance_of_employess`
--

DROP TABLE IF EXISTS `leave_balance_of_employess`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leave_balance_of_employess` (
  `Id` int(255) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `month` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `annual_leave_balance` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `sick_leave_balance` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '5',
  `annual_leave_counter` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `sick_leave_counter` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE,
  CONSTRAINT `Id` FOREIGN KEY (`Id`) REFERENCES `attendance` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leave_balance_of_employess`
--

LOCK TABLES `leave_balance_of_employess` WRITE;
/*!40000 ALTER TABLE `leave_balance_of_employess` DISABLE KEYS */;
INSERT INTO `leave_balance_of_employess` (`Id`, `name`, `phone`, `year`, `month`, `date`, `annual_leave_balance`, `sick_leave_balance`, `annual_leave_counter`, `sick_leave_counter`) VALUES (5001,'tanvir.rafee405@gmail.com','01871752332 ','2021','10','1','0','3','',''),(5007,'debashis@gmail.com','123 ','2021','10','1','0','0','',''),(5008,'tahir.ewu@gmail.com','12345 ','2021','10','1','1','4','','');
/*!40000 ALTER TABLE `leave_balance_of_employess` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'myfeathe_portal'
--

--
-- Dumping routines for database 'myfeathe_portal'
--
/*!50112 SET @disable_bulk_load = IF (@is_rocksdb_supported, 'SET SESSION rocksdb_bulk_load = @old_rocksdb_bulk_load', 'SET @dummy_rocksdb_bulk_load = 0') */;
/*!50112 PREPARE s FROM @disable_bulk_load */;
/*!50112 EXECUTE s */;
/*!50112 DEALLOCATE PREPARE s */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-24  9:32:25
