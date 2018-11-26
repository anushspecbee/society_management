-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: issue
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.16.04.1

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
-- Table structure for table `guest`
--

DROP TABLE IF EXISTS `guest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guest` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `guest_name` varchar(100) NOT NULL,
  `guest_email` varchar(100) NOT NULL,
  `guest_room` varchar(45) NOT NULL,
  `guest_mobile` varchar(100) NOT NULL,
  `booked_day` date NOT NULL,
  `guest_pass` varchar(100) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guest`
--

LOCK TABLES `guest` WRITE;
/*!40000 ALTER TABLE `guest` DISABLE KEYS */;
INSERT INTO `guest` VALUES (1,'sahana','sahana@specbee.com','123','9591318694','2018-11-08',''),(2,'sana','deeksha@specbee.com','134','9591318694','2018-11-07','CGtGe&zC'),(3,'akshay','akshay@specbee.com','123','9591318694','2018-11-01','OL46cT$U'),(4,'akshay','akshay@specbee.com','123','9591318694','2018-11-01','OL46cT$U'),(5,'mithun','sahana.sn90@gmail.com','134','9591318694','2018-11-07','PqoXYWxy'),(6,'guru','akshay@specbee.com','156','9916806095','2018-11-21','@K6P3bMq'),(7,'ahana','sahana@specbee.com','1234','9916806095','2018-11-04','FrZ2WJTL'),(8,'ahana','sahana@specbee.com','1234','9916806095','2018-11-04','FrZ2WJTL'),(9,'Mithun','mithun@specbee.com','100','9481627975','2018-11-23','m3Aswqox');
/*!40000 ALTER TABLE `guest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `labour_table`
--

DROP TABLE IF EXISTS `labour_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `labour_table` (
  `labour_id` int(255) NOT NULL,
  `labour_name` varchar(255) NOT NULL,
  `labour_category` varchar(255) NOT NULL,
  `labour_number` varchar(255) NOT NULL,
  `labour_password` varchar(45) NOT NULL,
  PRIMARY KEY (`labour_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `labour_table`
--

LOCK TABLES `labour_table` WRITE;
/*!40000 ALTER TABLE `labour_table` DISABLE KEYS */;
INSERT INTO `labour_table` VALUES (1,'harry','ELECTRICITY','7829487050','harry'),(2,'bob','WATER','9845471591','bob'),(3,'mary','PARKING','9591318694','mary'),(4,'sham','CLEANLINESS','9916806095','sham'),(5,'rosy','SECURITY','7829487050','rosy');
/*!40000 ALTER TABLE `labour_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `problem`
--

DROP TABLE IF EXISTS `problem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `problem` (
  `issue_id` int(255) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `issue` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'open',
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `labour_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`issue_id`),
  UNIQUE KEY `otp` (`otp`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `problem`
--

LOCK TABLES `problem` WRITE;
/*!40000 ALTER TABLE `problem` DISABLE KEYS */;
INSERT INTO `problem` VALUES (1,'ELECTRICITY','','power inccorect','power inccorect in area due to rain','mp6qH','close','2018-11-20','2018-11-09','harry'),(2,'WATER','','water inccorect','water insufficent for drinking','Hmpq6','close','2018-11-20','2018-11-13','bob'),(3,'PARKING','','parking inccorect','no proper parking','H6qmp','open','2018-11-20','0000-00-00',''),(4,'ELECTRICITY','','power inccorect','jkklhghdlk','qmpH6','close','2018-11-20','2018-11-16','bob'),(5,'CLEANLINESS','','unclean roadside','unclean roadside due to improper disposal','pqH6m','open','2018-11-20','0000-00-00',''),(6,'SECURITY','',' inccorect security',' inccorect security during night','mHq6p','open','2018-11-20','0000-00-00',''),(7,'WATER','','water inccorect','drinking water problem','qp6Hm','open','2018-11-20','0000-00-00','harry'),(8,'SECURITY',NULL,'parking problem','gsdgshhhh','6Hpqm','close','2018-11-21','2018-11-11','mary'),(9,'PARKING',NULL,'parking problem','parking issue in area','q6mHp','close','2018-11-21','2018-11-07','sham'),(10,'CLEANLINESS','Akshay','about cleaning','parking area is not cleaned properly','6mqHp','close','2018-11-22','2018-11-07','sham'),(11,'SECURITY','Akshay','security problem','at night security is not good','qpm6H','close','2018-11-22','2018-11-21','mary'),(12,'WATER','Akshay','water issue','water is not coming properly','qpH6m','close','2018-11-22','2018-11-23','mary'),(13,'','Akshay','','','','open','2018-11-22',NULL,NULL),(14,'ELECTRICITY','Akshay','gzfxbvh','agsh','Qnrz85','open','2018-11-22',NULL,NULL),(15,'ELECTRICITY','megha','cable damage','wires damaged due to rain','5nr8zQ','open','2018-11-23',NULL,'mary'),(16,'PARKING','megha','parking problem','parking area is blocked','8rnQz5','open','2018-11-23',NULL,NULL),(17,'WATER','megha','water issue','water is not clean','zrQ85n','open','2018-11-23',NULL,'sham'),(18,'CLEANLINESS','megha','cleaning issue','jdhlshfklhkh;ksdhfhslfhajlfhjlhfjafgjlgfjlagfl','Q8r5nz','open','2018-11-23',NULL,NULL),(19,'SECURITY','megha','security problem','watchman is on leave','zQrn85','open','2018-11-23',NULL,NULL),(20,'PARKING','megha','parking problem','parking is not good','nQ8rz5','close','2018-11-23','2018-11-23','sham'),(22,'WATER','Deeksha Prabhu','water issue','Supply issue','n85rQz','close','2018-11-23','2018-11-23','bob'),(23,'CLEANLINESS','Deeksha Prabhu','cleaning issue','Area has become dirty','8nQrz5','close','2018-11-23','2018-11-23','sham'),(24,'WATER','neslee','water issue','water issue help.','5zr8Qn','close','2018-11-25','2018-11-25','sham');
/*!40000 ALTER TABLE `problem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `adhar` varchar(45) DEFAULT NULL,
  `age` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `status` varchar(45) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `adhar_UNIQUE` (`adhar`),
  UNIQUE KEY `mobile_UNIQUE` (`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` VALUES (1,'Mithun Sullya','mithun@specbee.com','1234567890','Bengaluru',NULL,'9481627975','5d41402abc4b2a76b9719d911017c592',''),(3,'Akshay','akshay@specbee.com','1233444455','Bengaluru',NULL,'9916806092','5d41402abc4b2a76b9719d911017c592',''),(6,'megha','megha@specbee.com','2323232345','manglore',NULL,'9988770077','9a5752b006e90ff71ca2cc7f7eab5c31',NULL),(7,'Deeksha Prabhu','deeksha@specbee.com','9876655432','Bengaluru',NULL,'9988001122','5d41402abc4b2a76b9719d911017c592',NULL),(8,'Maithri','maithri@specbee.com','9900887766','Bangalore',NULL,'9591311694','5d41402abc4b2a76b9719d911017c592','1'),(10,'Sahana','sahana@specbee.com','1234467890','22','Bangalore','9591313394','ec0ed515fae03d90171d1b15001ec2a6','1'),(12,'neslee','neslee@specbee.com','1234123460','25','bangalore','9845471591','0f12d0dcfe6d6ed24bf53afc11ffd6c2','1');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_request`
--

DROP TABLE IF EXISTS `user_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_request` (
  `name` varchar(45) NOT NULL,
  `adhar` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `contact` varchar(45) DEFAULT NULL,
  `status` varchar(10) DEFAULT '0',
  PRIMARY KEY (`email`),
  UNIQUE KEY `adhar_UNIQUE` (`adhar`),
  UNIQUE KEY `contact_UNIQUE` (`contact`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_request`
--

LOCK TABLES `user_request` WRITE;
/*!40000 ALTER TABLE `user_request` DISABLE KEYS */;
INSERT INTO `user_request` VALUES ('Akshay','1233444455','akshay@specbee.com','9916806092','1'),('Deeksha Prabhu','9876655432','deeksha@specbee.com','9988001122','1'),('Maithri','9900887766','maithri@specbee.com','9591311694','1'),('megha','2323232345','megha@specbee.com','9988770077','1'),('Mithun Sullya','1234567890','mithun@specbee.com','9481627975','1'),('neslee','1234123460','neslee@specbee.com','9845471591','1'),('Sahana','1234467890','sahana@specbee.com','9591313394','1');
/*!40000 ALTER TABLE `user_request` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-25 19:59:53
